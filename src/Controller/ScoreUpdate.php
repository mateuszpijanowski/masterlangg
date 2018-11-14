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
        $update_cache=$entityManager->getRepository(UserCache::class)->findOneBy([
            'idUser' => $id_user,
        ]);

        if(!$update_cache)
        {
            return new JsonResponse("Score error!");
            exit();
        }

        $update_cache->setScore($score);
        $entityManager->flush();

        return new JsonResponse("OK");
    }
}
