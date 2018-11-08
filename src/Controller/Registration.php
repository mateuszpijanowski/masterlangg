<?php

namespace App\Controller;

use App\Entity\UserCache;
use App\Entity\UserData;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class Registration extends AbstractController
{

    public function registration($login_reg, $pass_reg, $email_reg)
    {
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
            $entityManager=$this->getDoctrine()->getManager();

            $reg_data=new UserData();
            $reg_data->setNick($login_reg);
            $reg_data->setPass($pass_reg);
            $reg_data->setEmail($email_reg);

            $entityManager->flush();

            $reg_cache=new UserCache();
            $reg_cache->setScore(0);
            $reg_cache->setDifficulty('EASY');
            $reg_cache->setTime(180);

            $entityManager->flush();

            return new JsonResponse("OK");
        }
    }
}
