<?php

namespace App\Controller;

use App\Entity\UserData;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Tests\Compiler\J;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class PassRecovery extends AbstractController
{

    public function recovery($email)
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
            $subject = 'Password Recovery';

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

        $entityManager=$this->getDoctrine()->getManager();
        $repository=$this->getDoctrine()->getRepository(UserData::class);
        $user=$repository->findOneby([
            'email' => $email,
        ]);

        if(!$user)
        {
            return new JsonResponse("E-mail was not found!");
        }

        elseif ($user->getActive()==0)
        {
            return new JsonResponse("This account isn't active!");
        }

        else {
            $random_code=generateRandomString(32);

            $user->setAccessCode($random_code);
            $entityManager->flush();

            if(sendEmail($email, $random_code))
            {
                return new JsonResponse("Verfy code has been sent to your E-mail");
            }

            else {
                return new JsonResponse("E-mail send error!");
            }
        }
    }

    public function chenge_pass($code)
    {
        $repository=$this->getDoctrine()->getRepository(UserData::class);
        $user=$repository->findOneby([
            'accessCode' => $code,
        ]);

        if(!$user)
        {
            return new JsonResponse("Access code was not found!");
            exit;
        }

        $id=$user->getIdUser();
        $nick=$user->getNick();

        $response = array(
            "id" => $id,
            "nick" => $nick,
        );

        return new JsonResponse($response);
    }
}
