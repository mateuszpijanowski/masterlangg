<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class Main extends AbstractController
{
    /**
     * @Route("/")
     */

    public function main(SessionInterface $session)
    {

        // SESSION START
        $session=new Session();

        /// AJAX RESPONSE ///

        // SESSION RESPONSE

        /*
         * RETURN
         * +ALL SESSION VARIABLES
         */
        if(isset($_POST['session']))
        {
            return new JsonResponse($session->all());
        }

        // LOG IN

        /*
         * RETURN:
         * +ID_USER
         * +LOGIN
         * +EMAIL
         * +SCORE
         * +DIFFICULTY
         * +TIME
         * OR
         * +BAD LOGIN OR PASSWORD
         */
        if(isset($_POST['login']) && isset($_POST['password']))
        {
            $login=$_POST['login'];
            $pass=$_POST['password'];

            $response=$this->forward('App\Controller\LoginTest::login', array(
                'login' => $login,
                'pass' => $pass,
            ));

            $response=$response->getContent();
            $response=json_decode($response, true);

            $id_user=$response['id_user'];
            $login=$response['login'];
            $email=$response['email'];
            $score=$response['score'];
            $difficulty=$response['difficulty'];
            $time=$response['time'];

            // MAIN SESSION CREATE
            $session->set('id_user', $id_user);
            $session->set('login', $login);
            $session->set('email', $email);
            $session->set('score', $score);
            $session->set('difficulty', $difficulty);
            $session->set('time', $time);

            return new JsonResponse($response);
        }

        // REGISTRATION

        /*
         * RETURN:
         * +OK/BAD NICK/BAD EMAIL
         */
        if(isset($_POST['loginRegister']) && isset($_POST['password1']) && isset($_POST['password2']) && isset($_POST['emailRegister']))
        {
            $login_reg=$_POST['loginRegister'];
            $pass_reg1=$_POST['password1'];
            $pass_reg2=$_POST['password2'];
            $email_reg=$_POST['emailRegister'];

            if ($pass_reg1==$pass_reg2)
            {
                $response=$this->forward('App\Controller\Registration::registration', array(
                    'login_reg' => $login_reg,
                    'pass_reg1' => $pass_reg1,
                    'email_reg' => $email_reg,
                ));

                return new JsonResponse($response->getContent());
            }

            else {
                return new JsonResponse("Bad password");
            }
        }

      /*
      if(isset($_POST['#login']))
        {
            $login=$_POST['#login'];

            $response=$this->forward('App\Controller\Ranking::ranking', array(
                'login' => $login,
            ));

            $response=$response->getContent();
            $response=json_decode($response, true);

            return new JsonResponse($response);
        }
      */

        // EDIT ACCOUNT

        /*
         * RETURN:
         * +OK/ERROR
         */
        if(isset($_POST['ChangeLOGIN']))
        {
            $new_login=$_POST['ChangeLOGIN'];

            $response=$this->forward('App\Controller\NewLogin::newlogin', array(
                'newlogin' => $new_login,
                'id_user' => $session->get('id_user'),
            ));

            $response=$response->getContent();
            $response=json_decode($response);

            if($response=="OK")
            {
                $session->set('login', $new_login);
            }

            return new JsonResponse($response);
        }

        /*
         * RETURN:
         * +OK/ERROR/BAD PASSWORD
         */
        if(isset($_POST['ChangePASSWORD1']) && isset($_POST['ChangePASSWORD2']))
        {
            $new_pass1=$_POST['ChangePASSWORD1'];
            $new_pass2=$_POST['ChangePASSWORD2'];

            if($new_pass1==$new_pass2)
            {
                $response=$this->forward('App\Controller\NewPass::newpass', array(
                    'newpass' => $new_pass1,
                    'id_user' => $session->get('id_user'),
                ));

                return new JsonResponse($response->getContent());
            }

            return new JsonResponse("Bad password");
        }

        /*
         * RETURN:
         * +OK/ERROR
         */
        if(isset($_POST['ChangeMAIL']))
        {
            $new_email = $_POST['ChangeMAIL'];

            $response=$this->forward('App\Controller\NewEmail::newemail', array(
                'newemail' => $new_email,
                'id_user' => $session->get('id_user'),
            ));

            $response=$response->getContent();
            $response=json_decode($response);

            if($response=="OK")
            {
                $session->set('login', $new_email);
            }

            return new JsonResponse($response);
        }

        // DIFFICULTY

        /*
         * RETURN:
         * +OK/ERROR
         */
        if(isset($_POST['difficulty']))
        {
            $difficulty=$_POST['difficulty'];

            $response=$this->forward('App\Controller\Difficulty::difficulty', array(
                'difficulty' => $difficulty,
                'id_user' => $session->get('id_user'),
            ));

            return new JsonResponse($response->getContent());
        }

        // TRANSLATION

        /*
         * RETURN:
         * +DETECTLANG
         * +RANDOMLANG
         * +TRANSTEXT
         */
        if(isset($_POST['user_text']))
        {
            $user_text=$_POST['user_text'];

            $response=$this->forward('App\Controller\Translation::translation', array(
                'text' => $user_text,
            ));

            $response=$response->getContent();
            $response=json_decode($response, true);
            $randomlang=$response['randomlang'];
            $user_lang=$response['detectlang'];

            $session->set('random_lang', $randomlang);
            $session->set('user_lang', $user_lang);
            $session->set('user_text', $user_text);

            return new JsonResponse($response);
        }

        // TRANSLATION TEST

        /*
         * RETURN:
         * +STATUS [TRUE/FLASE]
         * +SCORE
         * OR
         * +DIFFICULTY ERROR
         * OR
         * +ERROR!
         */
        if(isset($_POST['sel_lang']) && isset($_POST['time']) && isset($_POST['difficulty']))
        {
            $sel_lang=$_POST['sel_lang'];
            $time=$_POST['time'];
            $score=$session->get('session');
            $random_lang=$session->get('random_lang');
            $id_user=$session->get('id_user');

            $response=$this->forward('App\Controller\Translation::trans_test', array(
                'sel_lang' => $sel_lang,
                'random_lang' => $random_lang,
                'difficulty' => $score,
                'time' => $time,
                'score' => $score,
            ));

            $response=$response->getContent();
            $response=json_decode($response, true);
            $score=$response['score'];

            $session->set('score', $score);

            $score_update=$this->forward('App\Controller\ScoreUpdate::score_update', array(
                'id_user' => $id_user,
                'score' => $score,
            ));

            $score_update=$score_update->getContent();

            if($score_update=="OK")
            {
                return new JsonResponse($response);
            }

            else {
                return new JsonResponse($score_update);
            }

        }

        // RESTART

        /*
         * RETURN:
         * +SCORE
         * +DIFFICULTY
         * +TIME
         * OR
         * +ERROR
         */
        if(isset($_POST['reset']))
        {
            $id_user=$session->get('id_user');

            $response=$this->forward('App\Controller\Reset::reset', array(
                'id_user' => $id_user,
            ));

            return new JsonResponse($response->getContent());
        }

        // LOG OUT
        if(isset($_POST['logout']))
        {
            $session->clear();
        }

        // HTML RENDER
        return $this->render('base.html.twig'); // NO TOUCH THIS!
    }
}