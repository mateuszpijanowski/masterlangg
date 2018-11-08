<?php

namespace App\Controller;

use Doctrine\DBAL\Driver\Connection;
use phpDocumentor\Reflection\Types\Array_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Ranking extends AbstractController
{
    /**
     * @Route("/test")
     */
    public function ranking(Connection $connection)
    {
        $users = $connection->prepare('
        SELECT id_user, nick, score, FIND_IN_SET( score, (
        SELECT GROUP_CONCAT( score
        ORDER BY score DESC ) 
        FROM `user_ranking` )
        ) AS rank
        FROM `user_ranking`ORDER BY score DESC
        ');

        //$response=json_encode($users->fetchAll());

        /*if($login=="test")
        {
            return new JsonResponse($response);
        }*/

        //return $users->fetchAll();

        return var_dump($users->fetchAll());
    }
}


