<?php

namespace App\Controller;

use App\Entity\UserCache;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class Reset extends AbstractController
{

    public function reset($id_user)
    {
        $repository=$this->getDoctrine()->getRepository(UserCache::class);
        $user=$repository->findOneby([
            'idUser' => $id_user,
        ]);

        if(!$user)
        {
            return new JsonResponse("ERROR");
            exit;
        }

        $score=$user->getScore();
        $difficulty=$user->getDifficulty();
        $time=$user->getTime();

        $response=array(
            "score"=>$score,
            "difficulty"=>$difficulty,
            "time"=>$time,
        );

        return new JsonResponse($response);
    }
}
