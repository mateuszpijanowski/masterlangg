<?php

namespace App\Controller;

use App\Entity\UserCache;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class ScoreUpdate extends AbstractController
{

    public function score_update($score, $id_user)
    {
        $entityManager=$this->getDoctrine()->getManager();
        $update=$entityManager->getRepository(UserCache::class)->findOneBy([
            'idUser' => $id_user,
        ]);

        if(!$update)
        {
            return new JsonResponse("Error!");
            exit();
        }

        $update->setScore($score);
        $entityManager->flush();

        return new JsonResponse("OK");
    }
}
