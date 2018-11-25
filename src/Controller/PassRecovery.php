<?php

namespace App\Controller;

use App\Entity\UserData;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class PassRecovery extends AbstractController
{

    public function recovery(Request $request, $email)
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

        $entityManager=$this->getDoctrine()->getManager();
        $repository=$this->getDoctrine()->getRepository(UserData::class);
        $user=$repository->findOneby([
            'email' => $email,
        ]);

        if(!$user)
        {
            return new JsonResponse("E-mail was not found!");
        }

        elseif ($user->getActive()==0)
        {
            return new JsonResponse("This account isn't active!");
        }

        else {
            $random_code=generateRandomString(32);

            $user->setAccessCode($random_code);
            $entityManager->flush();

            $url=$request->getUri();
            $topic="Remind password";
            $nick=$user->getNick();
            $id=$user->getIdUser();
            $url='href="'.$url.'?status=2&code='.$random_code.'"';

            $arr_search=array('$nick','$id','href="test.com"');
            $arr_replace=array($nick,$id,$url);
            $message= str_replace($arr_search, $arr_replace, file_get_contents('../public/assets/remind_password.html'));

            $response=$this->forward('App\Controller\Mail::email_send', array(
                'recipient' => $email,
                'topic' => $topic,
                'message' => $message,
            ));

            $response=$response->getContent();
            json_decode($response);

            if ($response==true)
            {
                return new JsonResponse("E-mail was sent");
            }

            else {
                return new JsonResponse("E-mail sent error!");
            }
        }
    }

    public function chenge_pass($code)
    {
        $repository=$this->getDoctrine()->getRepository(UserData::class);
        $user=$repository->findOneby([
            'accessCode' => $code,
        ]);

        if(!$user)
        {
            return new JsonResponse("Access code was not found!");
        }

        elseif ($user->getActive()==0)
        {
            return new JsonResponse("This account isn't active!");
        }

        else {
            $id=$user->getIdUser();
            $nick=$user->getNick();

            $response = array(
                "id" => $id,
                "nick" => $nick,
            );

            return new JsonResponse($response);
        }
    }
}
