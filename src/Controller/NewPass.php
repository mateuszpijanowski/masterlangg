<?php

namespace App\Controller;

use App\Entity\UserData;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class NewPass extends AbstractController
{

    public function newpass($newpass, $id_user)
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

        $update->setPass($newpass);
        $entityManager->flush();

        return new JsonResponse("Password has been chenged");
    }
}
