<?php

namespace App\Controller;

use App\Entity\UserCache;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class Difficulty extends AbstractController
{

    public function difficulty($id_user, $difficulty)
    {
        $entityManager=$this->getDoctrine()->getManager();
        $update=$entityManager->getRepository(UserCache::class)->findOneBy([
            'idUser' => $id_user,
        ]);

        if(!$update)
        {
            return new JsonResponse("DB Error!");
            exit;
        }

        $update->setDifficulty($difficulty);

        if($difficulty=="EASY")
        {
            $time=60;
        }

        if($difficulty=="NORMAL")
        {
            $time=30;
        }

        if($difficulty=="HARD")
        {
            $time=15;
        }

        $update->setTime($time);

        $entityManager->flush();

        return new JsonResponse($time);
    }
}
