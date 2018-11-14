<?php

namespace App\Controller;

use App\Entity\LangList;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class Translation extends AbstractController
{

    public function translation($text)
    {
        $text=str_replace(" ","%20", $text);
        $responseDetect = file_get_contents('https://translate.yandex.net/api/v1.5/tr.json/detect?key=trnsl.1.1.20181024T152959Z.102541e69e4b1ef4.7e3297d1e21110feb6f7ffe1672fcb702bc30b57&text='.$text);
        $responseDetect = json_decode($responseDetect);
        $responseDetect = $responseDetect->lang;

        $rand_trans=rand(1,93);

        $repository=$this->getDoctrine()->getRepository(LangList::class);
        $lang=$repository->findOneby([
            'idLang' => $rand_trans,
        ]);

        $lang=$lang->getLangName();

        $responseTrans = file_get_contents('https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20181024T152959Z.102541e69e4b1ef4.7e3297d1e21110feb6f7ffe1672fcb702bc30b57&text='.$text.'&lang='.$responseDetect.'-'.$lang);
        $responseTrans = json_decode($responseTrans);
        $responseTrans = $responseTrans->text;

        $response=array(
            "detectlang"=>$responseDetect,
            "randomlang"=>$lang,
            "transtext"=>$responseTrans,
        );

        return new JsonResponse($response);
    }

    public function trans_test($sel_lang, $random_lang, $difficulty, $time, $score)
    {
        $time=(int)$time;

        if($difficulty=="EASY")
        {
            $difficulty_add=100;
        }

        elseif($difficulty=="NORMAL")
        {
            $difficulty_add=250;
        }

        elseif($difficulty=="HARD")
        {
            $difficulty_add=500;
        }

        else {
            return new JsonResponse("Difficulty ERROR!");
            exit();
        }

        if($time==0) {
            $status=false;

            $score=(int)$score-(int)$difficulty_add;

            if($score<0)
            {
                $score=0;
            }
        }

        else {
            $points=$difficulty_add*$time;

            if($sel_lang==$random_lang)
            {
                $status=true;

                $score=$score+$points;
            }

            else {
                $status=false;

                $score=$score-$points;

                if($score<0)
                {
                    $score=0;
                }
            }
        }

        $response=array(
            "status"=>$status,
            "score"=>$score,
        );

        return new JsonResponse($response);
    }

}
