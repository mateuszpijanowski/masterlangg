<?php

namespace App\Controller;

use App\Entity\UserData;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class AccessAcount extends AbstractController
{

    public function access($code)
    {
        $entityManager=$this->getDoctrine()->getManager();
        $update=$entityManager->getRepository(UserData::class)->findOneBy([
            'accessCode' => $code,
        ]);

        if($update)
        {
            if ($update->getActive()=='0')
            {
                if($update->setActive('1'))
                {
                    if($update->setAccessCode(''))
                    {
                        $entityManager->flush();
                        return new JsonResponse("Account has been activated");
                    }
                    else {
                        return new JsonResponse("Remove access code ERROR");
                    }
                }
                else {
                    return new JsonResponse("Active account error");
                }
            }
            else {
                return new JsonResponse("This account is active");
            }
        }
        else {
            return new JsonResponse("Access code error");
        }
    }
}
