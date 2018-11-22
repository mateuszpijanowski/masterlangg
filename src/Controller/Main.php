<?php

/*
 * by Mateusz Pijanowski [Symfony 4.1] Main.php
 * Powered by WebStrong.pl
 *
 * // SEARCH SYSTEM //
 *
 * [#01] - SESSION RESPONSE
 * [#02] - LOG IN
 * [#03] - REGISTRATION
 * [#04] - RANKING & POSITION
 *      [&04.1] - RANKING
 *      [&04.2] - POSITION
 * [#05] - EDIT ACCOUNT
 *      [&05.1] - CHANGE LOG IN
 *      [&05.2] - CHANGE PASSWORD
 *          [@05.2.1] - WITH POST ID
 *          [@05.2.2] - WITH SESSION ID
 *      [&05.3] - CHANGE E-MAIL
 * [#06] - DIFFICULTY
 * [#07] - TRANSLATION TEXT
 * [#08] - TRANSLATION TEST
 * [#09] - RESTART
 * [#10] - PASSWORD RECOVERY
 * [#11] - GET
 *      [&11.1] - ACTIVE ACCOUNT
 *      [&11.2] - CHENGE PASSWORD
 * [#12] - LOG OUT
 * [#99] - HTML RENDER
 */

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

    public function main(SessionInterface $session) // IMPORT SESSION
    {

        // GLOBAL PHP VARIABLES //
        $id_recovery="";
        $nick_recovery="";
        $status_error="";

        // SESSION START //
        $session=new Session();

        /// AJAX RESPONSE ///

        // SESSION RESPONSE // [#01]

        /*
         * RETURN
         * +ALL SESSION VARIABLES
         */
        if(isset($_POST['session']))
        {
            return new JsonResponse($session->all());
        }

        // LOG IN // [#02]

        /*
         * RETURN:
         * +ID_USER
         * +LOGIN
         * +EMAIL
         * +SCORE
         * +DIFFICULTY
         * +TIME
         * OR
         * +LOGIN HAVE INCORRECT SIGN /
         * +PASS HAVE INCORRECT SIGN /
         * +BAD LOGIN /
         * +BAD PASSWORD /
         * +THIS ACCOUNT ISN'T ACTIVE
         */
        if(isset($_POST['login']) && isset($_POST['password']))
        {
            $login=$_POST['login'];
            $pass=$_POST['password'];

            // VALIDATION //
            htmlentities($login); // REMOVE HTML SIGN
            $login=str_replace(" ","", $login); // REMOVE SPACE
            $pass=str_replace(" ","", $pass); // REMOVE SPACE
            if (preg_match("/[ĄĆĘŁŃÓŚŻŹąćęłńóśźż]/", $login)) // DETECT INCORRECT SIGN
            {
                return new JsonResponse("Login have incorrect sign");
                exit;
            }

            if (preg_match("/[ĄĆĘŁŃÓŚŻŹąćęłńóśźż]/", $pass)) // DETECT INCORRECT SIGN
            {
                return new JsonResponse("Pass have incorrect sign");
                exit;
            }

            $response=$this->forward('App\Controller\LoginTest::login', array(
                'login' => $login,
                'pass' => $pass,
            ));

            $response=$response->getContent();
            $response=json_decode($response, true);

            if(isset($response['id_user']))
            {
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

            else {
                return new JsonResponse($response);
                exit;
            }
        }

        // REGISTRATION // [#03]

        /*
         * RETURN:
         * +ACCOUNT HAS BEEN CREATED
         * OR
         * +BAD NICK /
         * +BAD EMAIL /
         * +EMAIL HAVE INCORRECT SIGN /
         * +BAD PASSWORD /
         * +EMAIL MUST HAVE '@' /
         * +E-MAIL SEND ERROR /
         * +PASSWORD MUST HAVE MIN 8 SIGN /
         * +LOGIN MUST HAVE MIN 5 SIGN
         */
        if(isset($_POST['loginRegister']) && isset($_POST['password1']) && isset($_POST['password2']) && isset($_POST['emailRegister'])) {
            $login_reg = $_POST['loginRegister'];
            $pass_reg1 = $_POST['password1'];
            $pass_reg2 = $_POST['password2'];
            $email_reg = $_POST['emailRegister'];

            // VALIDATION //
            htmlentities($login_reg); // REMOVE HTML SIGN
            htmlentities($email_reg); // REMOVE HTML SIGN
            $login_reg=str_replace(" ","", $login_reg); // REMOVE SPACE
            $pass_reg1=str_replace(" ","", $pass_reg1); // REMOVE SPACE
            $pass_reg2=str_replace(" ","", $pass_reg2); // REMOVE SPACE
            $email_reg=str_replace(" ","", $email_reg); // REMOVE SPACE
            if (strlen($pass_reg1)<8) // MIN 8 SIGN IN PASSWORD
            {
                return new JsonResponse("Password must have min 8 sign!");
                exit;
            }
            if (strlen($login_reg)<5) // MIN 5 SIGN IN Nick
            {
                return new JsonResponse("Login must have min 5 sign!");
                exit;
            }
            if (preg_match("/[ĄĆĘŁŃÓŚŻŹąćęłńóśźż]/", $login_reg)) // DETECT INCORRECT SIGN
            {
                return new JsonResponse("Login have incorrect sign");
                exit;
            }

            if (preg_match("/[ĄĆĘŁŃÓŚŻŹąćęłńóśźż]/", $pass_reg1)) // DETECT INCORRECT SIGN
            {
                return new JsonResponse("Pass have incorrect sign");
                exit;
            }

            if (preg_match("/[ĄĆĘŁŃÓŚŻŹąćęłńóśźż]/", $email_reg)) // DETECT INCORRECT SIGN
            {
                return new JsonResponse("Email have incorrect sign");
                exit;
            }

            if (preg_match("/[@]/", $email_reg)) // EMAIL MUST HAVE '@'
            {
                if ($pass_reg1 == $pass_reg2) {
                    $response = $this->forward('App\Controller\Registration::registration', array(
                        'login_reg' => $login_reg,
                        'pass_reg' => $pass_reg1,
                        'email_reg' => $email_reg,
                    ));

                    return new JsonResponse($response->getContent());

                } else {
                    return new JsonResponse("Bad password");
                }
            }

            else {
                return new JsonResponse("Email must have '@'");
            }
        }

        // RANKING & POSITION // [#04]

        /*
         * RETURN:
         * +RANKING [ARRAY]
         * OR
         * +POSITION
         * OR
         * +BAD RANKING REQUIRE
         */
        if(isset($_POST['ranking']))
        {
            $ranking=$_POST['ranking'];

            // [&04.1]
            if($ranking=="ranking")
            {
                $response=$this->forward('App\Controller\Ranking::ranking');
                $ranking=$response->getContent();
                $ranking=json_decode($ranking, true);

                return new JsonResponse($ranking); // RANKING ARRAY RESPONSE
            }

            // [&04.2]
            elseif ($ranking=="position")
            {
                $response=$this->forward('App\Controller\Ranking::ranking');
                $ranking=$response->getContent();

                $nick=$session->get('login');

                $ranking=json_decode($ranking, true);

                $i=-1;
                foreach ($ranking as $item)
                {
                    $i++;
                }

                for($a=0; $i>=$a; $a++)
                {
                    if($ranking[$a]['Nick']==$nick)
                    {
                        $position=$a+1;
                        break;
                    }
                }

                return new JsonResponse($position); // POSITION RESPONSE
            }

            else {
                return new JsonResponse("Bad ranking require");
            }
        }

        // EDIT ACCOUNT // [#05]

        /*
         * RETURN: [&05.1]
         * +NICK HAS BEEN CHENGED
         * OR
         * +ERROR /
         * +NEW LOGIN HAVE INCORRECT SIGN /
         * +LOGIN MUST HAVE MIN 5 SIGN!
         */
        if(isset($_POST['ChangeLOGIN']))
        {
            $new_login=$_POST['ChangeLOGIN'];

            // VALIDATION //
            htmlentities($new_login); // REMOVE HTML SIGN
            $new_login=str_replace(" ","", $new_login); // REMOVE SPACE
            if (strlen($new_login)<5) // MIN 5 SIGN IN Nick
            {
                return new JsonResponse("Login must have min 5 sign!");
                exit;
            }
            if (preg_match("/[ĄĆĘŁŃÓŚŻŹąćęłńóśźż]/", $new_login)) // DETECT INCORRECT SIGN
            {
                return new JsonResponse("New login have incorrect sign");
                exit;
            }

            $response=$this->forward('App\Controller\NewLogin::newlogin', array(
                'newlogin' => $new_login,
                'id_user' => $session->get('id_user'),
            ));

            $response=$response->getContent();
            $response=json_decode($response);

            if($response=="Nick has been chenged")
            {
                $session->set('login', $new_login);
            }

            return new JsonResponse($response);
        }

        /*
         * RETURN: [&05.2]
         * +PASSWORD HAS BEEN CHENGED
         * OR
         * +ERROR /
         * +BAD PASSWORD /
         * +NEW PASS HAVE INCORRECT SIGN /
         * +PASSWORD MUST HAVE MIN 8 SIGN
         */
        if(isset($_POST['ChangePASSWORD1']) && isset($_POST['ChangePASSWORD2']))
        {
            $new_pass1=$_POST['ChangePASSWORD1'];
            $new_pass2=$_POST['ChangePASSWORD2'];

            // VALIDATION //
            $new_pass1=str_replace(" ","", $new_pass1); // REMOVE SPACE
            $new_pass2=str_replace(" ","", $new_pass2); // REMOVE SPACE
            if (strlen($new_pass1)<8) // MIN 8 SIGN IN PASSWORD
            {
                return new JsonResponse("Password must have min 8 sign!");
                exit;
            }
            if (preg_match("/[ĄĆĘŁŃÓŚŻŹąćęłńóśźż]/", $new_pass1)) // DETECT INCORRECT SIGN
            {
                return new JsonResponse("New pass have incorrect sign");
                exit;
            }

            if($new_pass1==$new_pass2)
            {
                // [@05.2.1]
                if(isset($_POST['id_user']))
                {
                    $id_user=$_POST['id_user'];

                    $response=$this->forward('App\Controller\NewPass::newpass', array(
                        'newpass' => $new_pass1,
                        'id_user' => $id_user,
                    ));

                    return new JsonResponse($response->getContent());
                }

                // [@05.2.2]
                else {
                    $response=$this->forward('App\Controller\NewPass::newpass', array(
                        'newpass' => $new_pass1,
                        'id_user' => $session->get('id_user'),
                    ));

                    return new JsonResponse($response->getContent());
                }
            }

            else {
                return new JsonResponse("Bad password");
            }
        }

        /*
         * RETURN: [&05.3]
         * +E-MAIL HAS BEEN CHENGED
         * OR
         * +ERROR /
         * +NEW EMAIL HAVE INCORRECT SIGN /
         * +EMAIL MUST HAVE @
         */
        if(isset($_POST['ChangeMAIL']))
        {
            $new_email = $_POST['ChangeMAIL'];

            // VALIDATION //
            htmlentities($new_email); // REMOVE HTML SIGN
            $new_email=str_replace(" ","", $new_email); // REMOVE SPACE
            if (preg_match("/[ĄĆĘŁŃÓŚŻŹąćęłńóśźż]/", $new_email)) // DETECT INCORRECT SIGN
            {
                return new JsonResponse("New email have incorrect sign");
                exit;
            }

            if (preg_match("/[@]/", $new_email)) // EMAIL MUST HAVE '@'
            {
                $response=$this->forward('App\Controller\NewEmail::newemail', array(
                    'newemail' => $new_email,
                    'id_user' => $session->get('id_user'),
                ));

                $response=$response->getContent();
                $response=json_decode($response);

                if($response=="E-mail has been chenged")
                {
                    $session->set('email', $new_email);
                }

                return new JsonResponse($response);
            }

            else {
                return new JsonResponse("E-mail must have '@'");
            }
        }

        // DIFFICULTY // [#06]

        /*
         * RETURN:
         * +TIME
         * OR
         * +DB ERROR
         */
        if(isset($_POST['difficulty_update']))
        {
            $difficulty=$_POST['difficulty_update'];

            $response=$this->forward('App\Controller\Difficulty::difficulty', array(
                'difficulty' => $difficulty,
                'id_user' => $session->get('id_user'),
            ));

            $response=$response->getContent();

            if($response=="DB Error!")
            {
                return new JsonResponse($response);
            }

            else {
                $session->set('difficulty', $difficulty);
                $session->set('time', $response);
                return new JsonResponse($response);
            }
        }

        // TRANSLATION TEXT // [#07]

        /*
         * RETURN:
         * +DETECTLANG
         * +RANDOMLANG
         * +TRANSTEXT
         * OR
         * +YOUR TEXT HAVE INCCORECT SIGN /
         * +TOUR TEXT IS TOO LONG /
         * +TOUR TEXT IS TOO SHORT /
         * +DIFFICULTY ERROR
         */
        if(isset($_POST['user_text']))
        {
            $user_text=$_POST['user_text'];
            $difficulty=$session->get('difficulty');

            // VALIDATION //
            if (preg_match('/[\'^0-9£$%&*()}{@#~?><>,|=_+¬-]/', $user_text)) // DETECT SPECIAL SIGN
            {
                return new JsonResponse("Your text have incorrect sign!");
                exit;
            }

            if (strlen($user_text)>50) // MAX 50 LETTERS
            {
                return new JsonResponse("Your text is too long (max 50 lettesrs!)");
                exit;
            }

            if (strlen($user_text)<3) // MIN 3 LETTERS
            {
                return new JsonResponse("Your text is too short (must have min 3 lettesrs!)");
                exit;
            }

            $response=$this->forward('App\Controller\Translation::translation', array(
                'text' => $user_text,
                'difficulty' => $difficulty,
            ));

            $response=$response->getContent();

            if ($response=="Difficulty Error!")
            {
                return new JsonResponse($response);
                exit;
            }

            else {
                $response=json_decode($response, true);
                $randomlang=$response['randomlang'];
                $user_lang=$response['detectlang'];
                $transtext=$response['transtext'];

                $session->set('random_lang', $randomlang);
                $session->set('user_lang', $user_lang);
                $session->set('user_text', $user_text);
                $session->set('transtext', $transtext);

                return new JsonResponse($response);
            }
        }

        // TRANSLATION TEST // [#08]

        /*
         * RETURN:
         * +STATUS [TRUE/FLASE]
         * +SCORE
         * OR
         * +DIFFICULTY ERROR /
         * +SCORE ERROR
         */
        if(isset($_POST['sel_lang']) && isset($_POST['time']) && isset($_POST['difficulty']))
        {
            $sel_lang=$_POST['sel_lang'];
            $time=$_POST['time'];
            $difficulty=$_POST['difficulty'];
            $score=$session->get('score');
            $random_lang=$session->get('random_lang');
            $id_user=$session->get('id_user');

            $response=$this->forward('App\Controller\Translation::trans_test', array(
                'sel_lang' => $sel_lang,
                'random_lang' => $random_lang,
                'difficulty' => $difficulty,
                'time' => $time,
                'score' => $score,
            ));

            $response=$response->getContent();
            $response=json_decode($response, true);

            if($response=="Difficulty ERROR!")
            {
                return new JsonResponse($response);
                exit;
            }

            $score=$response['score'];
            $session->set('score', $score);

            $score_update=$this->forward('App\Controller\ScoreUpdate::score_update', array(
                'id_user' => $id_user,
                'score' => $score,
            ));

            $score_update=$score_update->getContent();
            $score_update=json_decode($score_update);

            if($score_update=="OK")
            {
                return new JsonResponse($response);
            }

            else {
                return new JsonResponse($score_update);
            }
        }

        // RESTART // [#09]

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

        // PASSWORD RECOVERY // [#10]

        /*
         * RETURN:
         * +VERFY CODE HAS BEEN SENT TO YOUR E-MAIL
         * OR
         * +EMAIL MUST HAVE '@' /
         * +E-MAIL WAS NOT FOUND /
         * +EMAIL SEND ERROR
         */
        if(isset($_POST['emailMemorablePassword']))
        {
            $email=$_POST['emailMemorablePassword'];

            if (preg_match("/[@]/", $email)) // EMAIL MUST HAVE '@'
            {
                $response=$this->forward('App\Controller\PassRecovery::recovery', array(
                    'email' => $email,
                ));

                return new JsonResponse($response->getContent());
            }

            else {
                return new JsonResponse("Email must have '@'");
            }
        }

        // GET REQUEST // [#11]
        if(isset($_GET['status']) && isset($_GET['code']))
        {
            $status=$_GET['status'];
            $code=$_GET['code'];

            // [&11.1]
            if ($status=="1") // ACTIVE ACCOUNT
            {
                $access=$this->forward('App\Controller\AccessAcount::access', array(
                    'code' => $code,
                ));

                $access=$access->getContent();
                $access=json_decode($access);

                return $this->render('base.html.twig', [
                    'id' => $id_recovery,
                    'nick' => $nick_recovery,
                    'status' => $access,
                ]);
            }

            // [&11.2]
            elseif ($status=="2") // CHENGE PASSWORD
            {
                $response=$this->forward('App\Controller\PassRecovery::chenge_pass', array(
                    'code' => $code,
                ));

                $response=$response->getContent();
                $response=json_decode($response, true);

                if(isset($response['id']))
                {
                    $id=$response['id'];
                    $nick=$response['nick'];

                    return $this->render('base.html.twig', [
                        'id' => $id,
                        'nick' => $nick,
                        'status' => $status_error,
                    ]);
                }

                else {
                    return $this->render('base.html.twig', [
                        'id' => $id_recovery,
                        'nick' => $nick_recovery,
                        'status' => $response,
                    ]);
                }
            }

            else {
                return new JsonResponse("Bad status");
            }
        }

        // LOG OUT // [#12]
        if(isset($_POST['logout']))
        {
            $session->clear(); // CLEAR ALL SESSIONS

            return new JsonResponse(true);
        }

        // HTML RENDER // [#99]
        return $this->render('base.html.twig', [
            'id' => $id_recovery,
            'nick' => $nick_recovery,
            'status' => $status_error,
        ]); // NO TOUCH THIS!
    }
}