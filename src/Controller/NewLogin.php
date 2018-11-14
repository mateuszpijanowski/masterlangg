<?php

namespace App\Controller;

use App\Entity\UserData;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class NewLogin extends AbstractController
{

    public function newlogin($newlogin, $id_user)
    {
        $entityManager=$this->getDoctrine()->getManager();
        $update=$entityManager->getRepository(UserData::class)->findOneBy([
            'idUser' => $id_user,
        ]);

        if(!$update)
        {
            return new JsonResponse("Error!");
            exit;
        }

        $update->setNick($newlogin);
        $entityManager->flush();

        return new JsonResponse("Nick has been chenged");
    }
}
