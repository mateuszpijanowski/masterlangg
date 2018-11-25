<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use PHPMailer\PHPMailer\PHPMailer;
use Symfony\Component\HttpFoundation\JsonResponse;

class Mail extends AbstractController
{

    public function email_send($recipient,$topic,$message) {

        $SMTP_MAIL_FROM="StrongBot";
        $SMTP_MAIL_USER="strongbot@mprojectt.com";
        $SMTP_MAIL_PASS="";
        $SMTP_MAIL_HOST="";

        $mail = new PHPMailer;

        //Enable SMTP debugging.
        $mail->SMTPDebug = 0;
        //Set PHPMailer to use SMTP.
        $mail->isSMTP();
        //Set SMTP host name
        $mail->Host = $SMTP_MAIL_HOST;
        //Set this to true if SMTP host requires authentication to send email
        $mail->SMTPAuth = true;
        //Provide username and password
        $mail->Username = $SMTP_MAIL_USER;
        $mail->Password = $SMTP_MAIL_PASS;
        //Set TCP port to connect to
        $mail->Port = 587;
        $mail->SMTPSecure = "tls";

        $mail->From = $SMTP_MAIL_USER;
        $mail->FromName = $SMTP_MAIL_FROM;

        $mail->addAddress($recipient);

        $mail->isHTML(true);

        $mail->Subject = $topic;
        $mail->Body = $message;

        if(!$mail->send())
        {
            return new JsonResponse(false);
        }
        else
        {
            return new JsonResponse(true);
        }
    }
}
