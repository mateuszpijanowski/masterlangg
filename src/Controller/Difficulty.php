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
            return new JsonResponse("Error!");
            exit;
        }

        $update->setDifficulty($difficulty);
        $entityManager->flush();

        return new JsonResponse("OK");
    }
}
