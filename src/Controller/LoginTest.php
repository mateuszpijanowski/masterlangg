<?php

namespace App\Controller;

use App\Entity\UserCache;
use App\Entity\UserData;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class LoginTest extends AbstractController
{

    public function login($login, $pass)
    {
        $repository=$this->getDoctrine()->getRepository(UserData::class);
        $user=$repository->findOneby([
            'nick' => $login,
        ]);

        if ($user)
        {
            if(password_verify($pass, $user->getPass()))
            {
                if($user->getActive()=="1")
                {
                    $id_user = $user->getIdUser();
                    $email = $user->getEmail();
                    $repositoryCache = $this->getDoctrine()->getRepository(UserCache::class);
                    $userCache = $repositoryCache->findOneby([
                        'idUser' => $id_user,
                    ]);

                    $score = $userCache->getScore();
                    $difficulty = $userCache->getDifficulty();
                    $time = $userCache->getTime();

                    $response = array(
                        "id_user" => $id_user,
                        "login" => $login,
                        "email" => $email,
                        "score" => $score,
                        "difficulty" => $difficulty,
                        "time" => $time,
                    );

                    return new JsonResponse($response);
                }
                else {
                    return new JsonResponse("This account isn't active!");
                }
            }

            else {
                return new JsonResponse("Bad password!");
            }

        }
        else {
            return new JsonResponse("Bad login!");
        }
    }
}
