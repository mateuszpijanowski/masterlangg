<?php

namespace App\Controller;

use App\Entity\UserCache;
use App\Entity\UserData;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class Registration extends AbstractController
{

    public function registration($login_reg, $pass_reg, $email_reg)
    {
        function generateRandomString($length) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        function sendEmail($email, $code)
        {
            $to  = $email;
            $subject = 'Verfy your E-mail';

            $message =
                '
                <html>
                <head>
                  <title>Birthday Reminders for August</title>
                </head>
                <body>
                  <p>Here are the birthdays upcoming in August!</p>
                  <table>
                    <tr>
                      <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
                    </tr>
                    <tr>
                      <td>Joe</td><td>3rd</td><td>August</td><td>1970</td>
                    </tr>
                    <tr>
                      <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
                    </tr>
                  </table>
                </body>
                </html>
                ';

            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-2' . "\r\n";
            $headers .= 'From: MasterLangg <StrongBot@webstrong.com>' . "\r\n";

            //return mail($to, $subject, $message, $headers);
            return true;
        }

        $repository=$this->getDoctrine()->getRepository(UserData::class);
        $nick_test=$repository->findOneby([
            'nick' => $login_reg,
        ]);

        $repository=$this->getDoctrine()->getRepository(UserData::class);
        $email_test=$repository->findOneby([
            'email' => $email_reg,
        ]);


        if($nick_test)
        {
            return new JsonResponse("Bad nick");
            exit;
        }

        elseif($email_test)
        {
            return new JsonResponse("Bad email");
            exit;
        }

        else {
            $random_code=generateRandomString(32);

            if(sendEmail($email_reg,$random_code))
            {
                $entityManager=$this->getDoctrine()->getManager();

                $pass_reg_hash=password_hash($pass_reg, PASSWORD_DEFAULT);

                $reg_data=new UserData();
                $reg_data->setNick($login_reg);
                $reg_data->setPass($pass_reg_hash);
                $reg_data->setEmail($email_reg);
                $reg_data->setAccessCode($random_code);
                $reg_data->setActive(0);

                $entityManager->persist($reg_data);
                $entityManager->flush();

                $repository=$this->getDoctrine()->getRepository(UserData::class);
                $nick=$repository->findOneby([
                    'nick' => $login_reg,
                ]);

                $id_user=$nick->getIdUser();

                $reg_cache=new UserCache();
                $reg_cache->setIdUser($id_user);
                $reg_cache->setScore(0);
                $reg_cache->setDifficulty('EASY');
                $reg_cache->setTime(60);

                $entityManager->persist($reg_cache);
                $entityManager->flush();

                return new JsonResponse("Account has been created");
            }

            else {
                return new JsonResponse("E-mail send error!");
            }
        }
    }
}
