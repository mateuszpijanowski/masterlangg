<?php

namespace App\Controller;

use App\Entity\UserCache;
use App\Entity\UserData;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class Registration extends AbstractController
{

    public function registration(Request $request, $login_reg, $pass_reg, $email_reg)
    {
        function generateRandomString($length) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        $repository=$this->getDoctrine()->getRepository(UserData::class);
        $nick_test=$repository->findOneby([
            'nick' => $login_reg,
        ]);

        $repository=$this->getDoctrine()->getRepository(UserData::class);
        $email_test=$repository->findOneby([
            'email' => $email_reg,
        ]);


        if($nick_test)
        {
            return new JsonResponse("Bad nick");
            exit;
        }

        elseif($email_test)
        {
            return new JsonResponse("Bad email");
            exit;
        }

        else {
            $random_code=generateRandomString(32);

            $entityManager=$this->getDoctrine()->getManager();

            $pass_reg_hash=password_hash($pass_reg, PASSWORD_DEFAULT);

            $reg_data=new UserData();
            $reg_data->setNick($login_reg);
            $reg_data->setPass($pass_reg_hash);
            $reg_data->setEmail($email_reg);
            $reg_data->setAccessCode($random_code);
            $reg_data->setActive(0);

            $entityManager->persist($reg_data);
            $entityManager->flush();

            $repository=$this->getDoctrine()->getRepository(UserData::class);
            $nick=$repository->findOneby([
                'nick' => $login_reg,
            ]);

            $id_user=$nick->getIdUser();

            $reg_cache=new UserCache();
            $reg_cache->setIdUser($id_user);
            $reg_cache->setScore(0);
            $reg_cache->setDifficulty('EASY');
            $reg_cache->setTime(60);

            $entityManager->persist($reg_cache);
            $entityManager->flush();

            // EMAIL SEND
            $url=$request->getUri();
            $topic="Verfy account";
            $url='href="'.$url.'?status=1&code='.$random_code.'"';

            $arr_search=array('$nick','$id','href="test.com"');
            $arr_replace=array($login_reg,$id_user,$url);
            $message= str_replace($arr_search, $arr_replace, file_get_contents('../public/assets/verfy_account.html'));

            $response=$this->forward('App\Controller\Mail::email_send', array(
                'recipient' => $email_reg,
                'topic' => $topic,
                'message' => $message,
            ));

            $response=$response->getContent();
            json_decode($response);

            if($response==true)
            {
                return new JsonResponse("Account has been created and verfy e-mail was sent");
            }

            else {
                return new JsonResponse("E-mail sent error! Contact with the administration - admin@mprojectt.com [Your ID: ".$id_user."]");
            }
        }
    }
}
