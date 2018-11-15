<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class Ranking extends AbstractController
{
    public function ranking(Request $request)
    {
        $db = $this->getDoctrine()->getManager();

        $set_position='SET @a:=0;';
        $ranking_query='
            SELECT @a:=@a+1 AS Position,Nick,Score FROM (
            SELECT user_data.nick, user_cache.score
            from user_data
            inner join user_cache on user_data.id_user=user_cache.id_user ORDER BY score DESC
            ) AS sub;
        ';

        $position = $db->getConnection()->prepare($set_position);
        $ranking = $db->getConnection()->prepare($ranking_query);
        $position->execute();
        $ranking->execute();

        $result = $ranking->fetchAll();

        return new JsonResponse($result);
    }
}
