<?php

/* base.html.twig */
class __TwigTemplate_295e440349952fe148c35fffa57140bad91e0f0a1b9944bff936a182934bfa61 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"pl\">
<head>
\t<meta charset=\"utf-8\" />
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
\t<title>MasterLangg</title>
\t<meta name=\"description\" content=\"MasterLangg\" />
\t<meta name=\"keywords\" content=\"MasterLangg\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
\t<link rel=\"stylesheet\" href=\"/assets/Img/style.css\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css\" type=\"text/css\" />
\t<link href=\"https://fonts.googleapis.com/css?family=Pangolin\" rel=\"stylesheet\">

\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
\t<script src=\"/assets/js/jquery.scrollTo.min.js\"></script>
\t<script src=\"/assets/js/animation.js\"></script>



</head>
<body>
<div class=\"dimness\" ></div>
<div id=\"loginPanel\">

\t<div class=\"login-page\">
\t\t<div class=\"form\">
\t\t\t<input type=\"text\" id=\"login\" placeholder=\"username\"/>
\t\t\t<input type=\"password\" id=\"password\" placeholder=\"password\"/>
\t\t\t<button class=\"start\" >login</button>
\t\t\t<p class=\"message\">Not registered? <a href=\"#\" id=\"registerAnimation\">Create an account</a></p>
\t\t\t<p class=\"copy\" >&copy; by Mateusz Pijanowski and Michał Kubiak</p>
\t\t</div>
\t</div>
</div>
<div class=\"register-page\">
\t<div class=\"form\">
\t\t<p class=\"stringRegister\" >REGISTRATION</p>
\t\t<input type=\"text\" placeholder=\"name\" id=\"loginRegister\"/>
\t\t<input type=\"password\" placeholder=\"password\" id=\"password1\"/>
\t\t<input type=\"password\" placeholder=\"password\" id=\"password2\"/>
\t\t<input type=\"text\" placeholder=\"email address\" id=\"emailRegister\"/>
\t\t<button id=\"startRegister\">create</button>
\t\t<p class=\"message\">Already registered? <a href=\"#\" id=\"loginAnimation\">Sign In</a></p>
\t</div>
</div>
<div class=\"account-page\">
\t<div class=\"account-page-content container-fluid\">
\t\t<div class=\"account-pageMenu row\">
\t\t\t<div class=\"account-pageMenu0 col-sm-4\"><a href=\"#\" class=\"registerAnimationMenu0\">EDIT ACCOUNT</a></div>
\t\t\t<div class=\"account-pageMenu1 col-sm-4\"><a href=\"#\" class=\"registerAnimationMenu1\" style=\"font-size: 25px;\">USER ACCOUNT</a></div>
\t\t\t<div class=\"account-pageMenu2 col-sm-4\"><a href=\"#\" class=\"registerAnimationMenu2\">RANKING</a></div>
\t\t</div>

\t\t<div class=\"account-pageContent1\">
\t\t\t<div class=\"account\" id=\"nick\">NICK: zdzisia</div>
\t\t\t<div class=\"account accountButton rankingPosition\">RANKING POSITION: 1564</div>
\t\t\t<div class=\"account\" id=\"score\">SCORE: 534jp3</div>
\t\t\t<input class=\"accountButtonLogOut account\"type=\"submit\" value=\"LOGOUT\"/>
\t\t</div>
\t\t<div class=\"account-pageContent0\">
\t\t\t<div class=\"account infoAccount\"><p>NICK: root</p>
\t\t\t\tE-MAIL: root@wp.pl
\t\t\t</div>
\t\t\t<input class=\"accountButton account CHANGELOGIN\"type=\"submit\" value=\"Change LOGIN\"/>
\t\t\t<input class=\"accountButton account CHANGEPASSWORD\"type=\"submit\" value=\"CHANGE PASSWORD\"/>
\t\t\t<input class=\"accountButton account CHANGEE-MAIL\"type=\"submit\" value=\"CHANGE E-MAIL\"/>
\t\t</div>
\t\t<div class=\"account-pageContent2\">
\t\t\ttu se jest ranking
\t\t</div>
\t</div>
\t<div class=\"CHANGELOGIN-page\">
\t\t<input class=\"Back account\"type=\"submit\" value=\"Back\"/>
\t\t<div class=\"form formChange\">
\t\t\t<form class=\"formCHANGELOGIN\">
\t\t\t\t<input type=\"text\" class=\"ChangeLOGIN\"  placeholder=\"New Login\"/>
\t\t\t\t<button id=\"ChangeLOGIN\" >Change</button>
\t\t\t</form>
\t\t</div>
\t</div>
\t<div class=\"CHANGEPASSWORD-page\">
\t\t<input class=\"Back account\"type=\"submit\" value=\"Back\"/>
\t\t<div class=\"form formChange\">
\t\t\t<form class=\"formCHANGEPASSWORD\">
\t\t\t\t<input type=\"password\" class=\"ChangePASSWORD1\" placeholder=\"New Password\"/>
\t\t\t\t<input type=\"password\" class=\"ChangePASSWORD2\" placeholder=\"Repeat New Password\"/>
\t\t\t\t<button id=\"ChangePASSWORD\" >Change</button>
\t\t\t</form>
\t\t</div>
\t</div>
\t<div class=\"CHANGEE-MAIL-page\">
\t\t<input class=\"Back account\"type=\"submit\" value=\"Back\"/>
\t\t<div class=\"form formChange\">
\t\t\t<form class=\"formCHANGEE-MAIL\">
\t\t\t\t<input type=\"text\" class=\"ChangeMAIL\"  placeholder=\"New E-Mail\"/>
\t\t\t\t<button id=\"ChangeMAIL\" >Change</button>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
<div class=\"options-page\">
\t<input class=\"levelOfDifficulty\" id=\"EASY\" type=\"submit\" value=\"EASY\"/>
\t<input class=\"levelOfDifficulty\" id=\"NORMAL\" type=\"submit\" value=\"NORMAL\"/>
\t<input class=\"levelOfDifficulty\" id=\"HARD\" type=\"submit\" value=\"HARD\"/>
</div>

<div id=\"gamePanel\">
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">

\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<div class=\"topDiv\" >
\t\t\t\t\t<a href='#' id='account'> YOUR ACCOUNT</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"topDiv\">
\t\t\t\t\t<p class=\"score\">SCORE</p>
\t\t\t\t\t<p id=\"score2\">9608</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<div class=\"topDiv\">
\t\t\t\t\t<a href=\"#\"id=\"options\" >DIFFICULTY</a><p class=\"difficultyDisplays\">Hard</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"offset-xl-2 col-xl-1 offset-md-2 col-md-2\">
\t\t\t\t<div class=\"window\" id=\"DETECTLANG\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xl-5 col-md-3\">

\t\t\t\t<input type=\"text\" class=\"window\" id=\"quotation\" placeholder=\"Give a text\"/>
\t\t\t</div>
\t\t\t<div class=\"col-md-1\">
\t\t\t\t<button id=\"startGame\" class=\"startGame\">Start</button>

\t\t\t</div>
\t\t\t<div class=\"col-xl-1 col-md-2\">
\t\t\t\t<div class=\"window\">12
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xl-12\">
\t\t\t\t<img src=\"/assets/Img/arrow.png\">
\t\t\t</div>

\t\t\t<div class=\"offset-xl-2 col-xl-1 offset-md-2 col-md-2\">
\t\t\t\t<div class=\"window\" id=\"langClick\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xl-6 col-md-4\">
\t\t\t\t<div class=\"window\" id=\"TRANSTEXT\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xl-1  col-md-2 \">
\t\t\t\t<button class=\"startGame\" id=\"ok\">OK</button>
\t\t\t</div>
\t\t\t<div class=\"offset-md-2 col-md-8 offsset-md-2\">
\t\t\t\t<div class=\"window langList\">
\t\t\t\t\t<button id=\"az\" class=\"langButton\">Azerbaijan</button>
\t\t\t\t\t<button id=\"sq\" class=\"langButton\">Albanian</button>
\t\t\t\t\t<button id=\"am\" class=\"langButton\">Amharic</button>
\t\t\t\t\t<button id=\"en\" class=\"langButton\">English</button>
\t\t\t\t\t<button id=\"ar\" class=\"langButton\">Arabic</button>

\t\t\t\t\t<button id=\"hy\" class=\"langButton\">Armenian</button>
\t\t\t\t\t<button id=\"af\" class=\"langButton\">Afrikaans</button>
\t\t\t\t\t<button id=\"eu\" class=\"langButton\">Basque</button>
\t\t\t\t\t<button id=\"ba\" class=\"langButton\">Bashkir</button>
\t\t\t\t\t<button id=\"be\" class=\"langButton\">Belarusian</button>

\t\t\t\t\t<button id=\"bn\" class=\"langButton\">Bengali</button>
\t\t\t\t\t<button id=\"my\" class=\"langButton\">Burmese</button>
\t\t\t\t\t<button id=\"bg\" class=\"langButton\">Bulgarian</button>
\t\t\t\t\t<button id=\"bs\" class=\"langButton\">Bosnian</button>
\t\t\t\t\t<button id=\"cy\" class=\"langButton\">Welsh</button>

\t\t\t\t\t<button id=\"hu\" class=\"langButton\">Hungarian</button>
\t\t\t\t\t<button id=\"vi\" class=\"langButton\">Vietnamese</button>
\t\t\t\t\t<button id=\"ht\" class=\"langButton\">Haitian (Creole)</button>
\t\t\t\t\t<button id=\"gl\" class=\"langButton\">Galician</button>
\t\t\t\t\t<button id=\"nl\" class=\"langButton\">Dutch</button>

\t\t\t\t\t<button id=\"mrj\" class=\"langButton\">Hill Mari</button>
\t\t\t\t\t<button id=\"el\" class=\"langButton\">Greek</button>
\t\t\t\t\t<button id=\"ka\" class=\"langButton\">Georgian</button>
\t\t\t\t\t<button id=\"gu\" class=\"langButton\">Gujarati</button>
\t\t\t\t\t<button id=\"da\" class=\"langButton\">Danish</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<p class=\"copy\" >&copy; by Mateusz Pijanowski and Michał Kubiak</p>
\t</div>
</div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html lang=\"pl\">
<head>
\t<meta charset=\"utf-8\" />
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
\t<title>MasterLangg</title>
\t<meta name=\"description\" content=\"MasterLangg\" />
\t<meta name=\"keywords\" content=\"MasterLangg\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
\t<link rel=\"stylesheet\" href=\"/assets/Img/style.css\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css\" type=\"text/css\" />
\t<link href=\"https://fonts.googleapis.com/css?family=Pangolin\" rel=\"stylesheet\">

\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
\t<script src=\"/assets/js/jquery.scrollTo.min.js\"></script>
\t<script src=\"/assets/js/animation.js\"></script>



</head>
<body>
<div class=\"dimness\" ></div>
<div id=\"loginPanel\">

\t<div class=\"login-page\">
\t\t<div class=\"form\">
\t\t\t<input type=\"text\" id=\"login\" placeholder=\"username\"/>
\t\t\t<input type=\"password\" id=\"password\" placeholder=\"password\"/>
\t\t\t<button class=\"start\" >login</button>
\t\t\t<p class=\"message\">Not registered? <a href=\"#\" id=\"registerAnimation\">Create an account</a></p>
\t\t\t<p class=\"copy\" >&copy; by Mateusz Pijanowski and Michał Kubiak</p>
\t\t</div>
\t</div>
</div>
<div class=\"register-page\">
\t<div class=\"form\">
\t\t<p class=\"stringRegister\" >REGISTRATION</p>
\t\t<input type=\"text\" placeholder=\"name\" id=\"loginRegister\"/>
\t\t<input type=\"password\" placeholder=\"password\" id=\"password1\"/>
\t\t<input type=\"password\" placeholder=\"password\" id=\"password2\"/>
\t\t<input type=\"text\" placeholder=\"email address\" id=\"emailRegister\"/>
\t\t<button id=\"startRegister\">create</button>
\t\t<p class=\"message\">Already registered? <a href=\"#\" id=\"loginAnimation\">Sign In</a></p>
\t</div>
</div>
<div class=\"account-page\">
\t<div class=\"account-page-content container-fluid\">
\t\t<div class=\"account-pageMenu row\">
\t\t\t<div class=\"account-pageMenu0 col-sm-4\"><a href=\"#\" class=\"registerAnimationMenu0\">EDIT ACCOUNT</a></div>
\t\t\t<div class=\"account-pageMenu1 col-sm-4\"><a href=\"#\" class=\"registerAnimationMenu1\" style=\"font-size: 25px;\">USER ACCOUNT</a></div>
\t\t\t<div class=\"account-pageMenu2 col-sm-4\"><a href=\"#\" class=\"registerAnimationMenu2\">RANKING</a></div>
\t\t</div>

\t\t<div class=\"account-pageContent1\">
\t\t\t<div class=\"account\" id=\"nick\">NICK: zdzisia</div>
\t\t\t<div class=\"account accountButton rankingPosition\">RANKING POSITION: 1564</div>
\t\t\t<div class=\"account\" id=\"score\">SCORE: 534jp3</div>
\t\t\t<input class=\"accountButtonLogOut account\"type=\"submit\" value=\"LOGOUT\"/>
\t\t</div>
\t\t<div class=\"account-pageContent0\">
\t\t\t<div class=\"account infoAccount\"><p>NICK: root</p>
\t\t\t\tE-MAIL: root@wp.pl
\t\t\t</div>
\t\t\t<input class=\"accountButton account CHANGELOGIN\"type=\"submit\" value=\"Change LOGIN\"/>
\t\t\t<input class=\"accountButton account CHANGEPASSWORD\"type=\"submit\" value=\"CHANGE PASSWORD\"/>
\t\t\t<input class=\"accountButton account CHANGEE-MAIL\"type=\"submit\" value=\"CHANGE E-MAIL\"/>
\t\t</div>
\t\t<div class=\"account-pageContent2\">
\t\t\ttu se jest ranking
\t\t</div>
\t</div>
\t<div class=\"CHANGELOGIN-page\">
\t\t<input class=\"Back account\"type=\"submit\" value=\"Back\"/>
\t\t<div class=\"form formChange\">
\t\t\t<form class=\"formCHANGELOGIN\">
\t\t\t\t<input type=\"text\" class=\"ChangeLOGIN\"  placeholder=\"New Login\"/>
\t\t\t\t<button id=\"ChangeLOGIN\" >Change</button>
\t\t\t</form>
\t\t</div>
\t</div>
\t<div class=\"CHANGEPASSWORD-page\">
\t\t<input class=\"Back account\"type=\"submit\" value=\"Back\"/>
\t\t<div class=\"form formChange\">
\t\t\t<form class=\"formCHANGEPASSWORD\">
\t\t\t\t<input type=\"password\" class=\"ChangePASSWORD1\" placeholder=\"New Password\"/>
\t\t\t\t<input type=\"password\" class=\"ChangePASSWORD2\" placeholder=\"Repeat New Password\"/>
\t\t\t\t<button id=\"ChangePASSWORD\" >Change</button>
\t\t\t</form>
\t\t</div>
\t</div>
\t<div class=\"CHANGEE-MAIL-page\">
\t\t<input class=\"Back account\"type=\"submit\" value=\"Back\"/>
\t\t<div class=\"form formChange\">
\t\t\t<form class=\"formCHANGEE-MAIL\">
\t\t\t\t<input type=\"text\" class=\"ChangeMAIL\"  placeholder=\"New E-Mail\"/>
\t\t\t\t<button id=\"ChangeMAIL\" >Change</button>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
<div class=\"options-page\">
\t<input class=\"levelOfDifficulty\" id=\"EASY\" type=\"submit\" value=\"EASY\"/>
\t<input class=\"levelOfDifficulty\" id=\"NORMAL\" type=\"submit\" value=\"NORMAL\"/>
\t<input class=\"levelOfDifficulty\" id=\"HARD\" type=\"submit\" value=\"HARD\"/>
</div>

<div id=\"gamePanel\">
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">

\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<div class=\"topDiv\" >
\t\t\t\t\t<a href='#' id='account'> YOUR ACCOUNT</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"topDiv\">
\t\t\t\t\t<p class=\"score\">SCORE</p>
\t\t\t\t\t<p id=\"score2\">9608</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<div class=\"topDiv\">
\t\t\t\t\t<a href=\"#\"id=\"options\" >DIFFICULTY</a><p class=\"difficultyDisplays\">Hard</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"offset-xl-2 col-xl-1 offset-md-2 col-md-2\">
\t\t\t\t<div class=\"window\" id=\"DETECTLANG\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xl-5 col-md-3\">

\t\t\t\t<input type=\"text\" class=\"window\" id=\"quotation\" placeholder=\"Give a text\"/>
\t\t\t</div>
\t\t\t<div class=\"col-md-1\">
\t\t\t\t<button id=\"startGame\" class=\"startGame\">Start</button>

\t\t\t</div>
\t\t\t<div class=\"col-xl-1 col-md-2\">
\t\t\t\t<div class=\"window\">12
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xl-12\">
\t\t\t\t<img src=\"/assets/Img/arrow.png\">
\t\t\t</div>

\t\t\t<div class=\"offset-xl-2 col-xl-1 offset-md-2 col-md-2\">
\t\t\t\t<div class=\"window\" id=\"langClick\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xl-6 col-md-4\">
\t\t\t\t<div class=\"window\" id=\"TRANSTEXT\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xl-1  col-md-2 \">
\t\t\t\t<button class=\"startGame\" id=\"ok\">OK</button>
\t\t\t</div>
\t\t\t<div class=\"offset-md-2 col-md-8 offsset-md-2\">
\t\t\t\t<div class=\"window langList\">
\t\t\t\t\t<button id=\"az\" class=\"langButton\">Azerbaijan</button>
\t\t\t\t\t<button id=\"sq\" class=\"langButton\">Albanian</button>
\t\t\t\t\t<button id=\"am\" class=\"langButton\">Amharic</button>
\t\t\t\t\t<button id=\"en\" class=\"langButton\">English</button>
\t\t\t\t\t<button id=\"ar\" class=\"langButton\">Arabic</button>

\t\t\t\t\t<button id=\"hy\" class=\"langButton\">Armenian</button>
\t\t\t\t\t<button id=\"af\" class=\"langButton\">Afrikaans</button>
\t\t\t\t\t<button id=\"eu\" class=\"langButton\">Basque</button>
\t\t\t\t\t<button id=\"ba\" class=\"langButton\">Bashkir</button>
\t\t\t\t\t<button id=\"be\" class=\"langButton\">Belarusian</button>

\t\t\t\t\t<button id=\"bn\" class=\"langButton\">Bengali</button>
\t\t\t\t\t<button id=\"my\" class=\"langButton\">Burmese</button>
\t\t\t\t\t<button id=\"bg\" class=\"langButton\">Bulgarian</button>
\t\t\t\t\t<button id=\"bs\" class=\"langButton\">Bosnian</button>
\t\t\t\t\t<button id=\"cy\" class=\"langButton\">Welsh</button>

\t\t\t\t\t<button id=\"hu\" class=\"langButton\">Hungarian</button>
\t\t\t\t\t<button id=\"vi\" class=\"langButton\">Vietnamese</button>
\t\t\t\t\t<button id=\"ht\" class=\"langButton\">Haitian (Creole)</button>
\t\t\t\t\t<button id=\"gl\" class=\"langButton\">Galician</button>
\t\t\t\t\t<button id=\"nl\" class=\"langButton\">Dutch</button>

\t\t\t\t\t<button id=\"mrj\" class=\"langButton\">Hill Mari</button>
\t\t\t\t\t<button id=\"el\" class=\"langButton\">Greek</button>
\t\t\t\t\t<button id=\"ka\" class=\"langButton\">Georgian</button>
\t\t\t\t\t<button id=\"gu\" class=\"langButton\">Gujarati</button>
\t\t\t\t\t<button id=\"da\" class=\"langButton\">Danish</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<p class=\"copy\" >&copy; by Mateusz Pijanowski and Michał Kubiak</p>
\t</div>
</div>
</body>
</html>
", "base.html.twig", "/var/www/html/masterlangg/templates/base.html.twig");
    }
}
