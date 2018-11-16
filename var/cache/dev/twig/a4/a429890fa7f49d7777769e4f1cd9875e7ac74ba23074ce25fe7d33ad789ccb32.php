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
\t\t\t<p class=\"error\" id=\"errorLogin\"><p>
\t\t\t<p class=\"message\">Not registered? <a href=\"#\" id=\"registerAnimation\">Create an account.</a>
\t\t\t\t\t\tHave you forgotten your password? <a href=\"#\" id=\"memorablePasswordAnimation\">Remind Password.</a></p>
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
\t\t<p class=\"error\" id=\"errorRegister\"><p>
\t\t<p class=\"message\">Already registered? <a href=\"#\" class=\"loginAnimation\">Sign In</a></p>
\t</div>
</div>
<div class=\"memorablePassword-page\">
\t<div class=\"form\">
\t\t<p class=\"stringRegister\" >Remind Password</p>
\t\t<input type=\"text\" placeholder=\"email address\" id=\"emailMemorablePassword\"/>
\t\t<button id=\"startMemorablePassword\">SEND</button>
\t\t<p class=\"error\" id=\"errorMemorablePassword\"><p>
\t\t<p class=\"message\">Already registered? <a href=\"#\" class=\"loginAnimation\">Sign In</a></p>
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
\t\t\t<div class=\"account\" id=\"nick\">NICK: </div>
\t\t\t<div class=\"account accountButton rankingPosition\">Ranking position: </div>
\t\t\t<div class=\"account\" id=\"score\">Score: </div>
\t\t\t<div class=\"account accountButton about\">About MasterLangg</div>
\t\t\t<input class=\"accountButtonLogOut account\"type=\"submit\" value=\"LOGOUT\"/>
\t\t</div>
\t\t<div class=\"account-pageContent0\">
\t\t\t<div class=\"account infoAccount\"><p class=\"nick\">Nick: </p>
\t\t\t\t\t\t\t <p class=\"email\">E-mail: </p>
\t\t\t</div>
\t\t\t<input class=\"accountButton account CHANGELOGIN\"type=\"submit\" value=\"Change LOGIN\"/>
\t\t\t<input class=\"accountButton account CHANGEPASSWORD\"type=\"submit\" value=\"Change PASSWORD\"/>
\t\t\t<input class=\"accountButton account CHANGEE-MAIL\"type=\"submit\" value=\"Change E-MAIL\"/>
\t\t</div>
\t\t<div class=\"account-pageContent2\">
\t\t\t<table id=\"rankingg\">
\t\t\t</table>
\t\t</div>
\t</div>
\t<div class=\"about-page\">
\t\t<input class=\"Back account\"type=\"submit\" value=\"Back\"/>
\t\t<div class=\"form formChange\">
\t\t\t<form class=\"formCHANGEE-MAIL\">
Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV \t\t\t</form>
\t\t</div>
\t</div>
\t<div class=\"CHANGELOGIN-page\">
\t\t<input class=\"Back account\"type=\"submit\" value=\"Back\"/>
\t\t<div class=\"form formChange\">
\t\t\t<form class=\"formCHANGELOGIN\">
\t\t\t\t<input type=\"text\" class=\"ChangeLOGIN\"  placeholder=\"New Login\"/>
\t\t\t\t<p class=\"error\" id=\"error0\"><p>
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
\t\t\t\t<p class=\"error\" id=\"error1\"><p>
\t\t\t\t<button id=\"ChangePASSWORD\" >Change</button>
\t\t\t</form>
\t\t</div>
\t</div>
\t<div class=\"CHANGEE-MAIL-page\">
\t\t<input class=\"Back account\"type=\"submit\" value=\"Back\"/>
\t\t<div class=\"form formChange\">
\t\t\t<form class=\"formCHANGEE-MAIL\">
\t\t\t\t<input type=\"text\" class=\"ChangeMAIL\"  placeholder=\"New E-Mail\"/>
\t\t\t\t<p class=\"error\" id=\"error2\"><p>
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
\t\t\t\t<div class=\"window\" id=\"timer\">
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

\t\t\t\t\t// EASY
\t\t\t\t\t1<button id=\"zh\" class=\"langButton\">Chinese</button>
\t\t\t\t\t2<button id=\"es\" class=\"langButton\">Spanish</button>
\t\t\t\t\t3<button id=\"en\" class=\"langButton\">English</button>
\t\t\t\t\t4<button id=\"hi\" class=\"langButton\">Hindi</button>
\t\t\t\t\t5<button id=\"ar\" class=\"langButton\">Arabic</button>
\t\t\t\t\t6<button id=\"pt\" class=\"langButton\">Portuguese</button>
\t\t\t\t\t7<button id=\"bn\" class=\"langButton\">Bengali</button>
\t\t\t\t\t8<button id=\"ru\" class=\"langButton\">Russian</button>
\t\t\t\t\t9<button id=\"ja\" class=\"langButton\">Japanese </button>
\t\t\t\t\t10<button id=\"pa\" class=\"langButton\">Punjabi</button>
\t\t\t\t\t11<button id=\"de\" class=\"langButton\">German</button>
\t\t\t\t\t12<button id=\"jv\" class=\"langButton\">Javanese</button>
\t\t\t\t\t13<button id=\"ms\" class=\"langButton\">Malay</button>
\t\t\t\t\t14<button id=\"te\" class=\"langButton\">Telugu</button>
\t\t\t\t\t15<button id=\"vi\" class=\"langButton\">Vietnamese</button>
\t\t\t\t\t16<button id=\"ko\" class=\"langButton\">Korean</button>
\t\t\t\t\t17<button id=\"fr\" class=\"langButton\">French</button>
\t\t\t\t\t18<button id=\"mr\" class=\"langButton\">Marathi</button>
\t\t\t\t\t19<button id=\"ta\" class=\"langButton\">Tamil</button>
\t\t\t\t\t20<button id=\"ur\" class=\"langButton\">Urdu</button>


\t\t\t\t\t// NORMAL
\t\t\t\t\t1<button id=\"zh\" class=\"langButton\">Chinese</button>
\t\t\t\t\t2<button id=\"es\" class=\"langButton\">Spanish</button>
\t\t\t\t\t3<button id=\"en\" class=\"langButton\">English</button>
\t\t\t\t\t4<button id=\"hi\" class=\"langButton\">Hindi</button>
\t\t\t\t\t5<button id=\"ar\" class=\"langButton\">Arabic</button>
\t\t\t\t\t6<button id=\"pt\" class=\"langButton\">Portuguese</button>
\t\t\t\t\t7<button id=\"bn\" class=\"langButton\">Bengali</button>
\t\t\t\t\t8<button id=\"ru\" class=\"langButton\">Russian</button>
\t\t\t\t\t9<button id=\"ja\" class=\"langButton\">Japanese </button>
\t\t\t\t\t10<button id=\"pa\" class=\"langButton\">Punjabi</button>
\t\t\t\t\t11<button id=\"de\" class=\"langButton\">German</button>
\t\t\t\t\t12<button id=\"jv\" class=\"langButton\">Javanese</button>
\t\t\t\t\t13<button id=\"ms\" class=\"langButton\">Malay</button>
\t\t\t\t\t14<button id=\"te\" class=\"langButton\">Telugu</button>
\t\t\t\t\t15<button id=\"vi\" class=\"langButton\">Vietnamese</button>
\t\t\t\t\t16<button id=\"ko\" class=\"langButton\">Korean</button>
\t\t\t\t\t17<button id=\"fr\" class=\"langButton\">French</button>
\t\t\t\t\t18<button id=\"mr\" class=\"langButton\">Marathi</button>
\t\t\t\t\t19<button id=\"ta\" class=\"langButton\">Tamil</button>
\t\t\t\t\t20<button id=\"ur\" class=\"langButton\">Urdu</button>
\t\t\t\t\t21<button id=\"tr\" class=\"langButton\">Turkish</button>
\t\t\t\t\t22<button id=\"it\" class=\"langButton\">Italian</button>
\t\t\t\t\t23<button id=\"th\" class=\"langButton\">Thai</button>
\t\t\t\t\t24<button id=\"gu\" class=\"langButton\">Gujarati</button>
\t\t\t\t\t25<button id=\"fa\" class=\"langButton\">Persian</button>
\t\t\t\t\t26<button id=\"pl\" class=\"langButton\">Polish</button>
\t\t\t\t\t27<button id=\"kn\" class=\"langButton\">Kannada</button>
\t\t\t\t\t28<button id=\"ml\" class=\"langButton\">Malayalam</button>
\t\t\t\t\t29<button id=\"su\" class=\"langButton\">Sundanese</button>
\t\t\t\t\t30<button id=\"my\" class=\"langButton\">Burmese</button>
\t\t\t\t\t31<button id=\"uk\" class=\"langButton\">Ukrainian</button>
\t\t\t\t\t32<button id=\"tl\" class=\"langButton\">Tagalog</button>
\t\t\t\t\t33<button id=\"la\" class=\"langButton\">Latin</button>
\t\t\t\t\t34<button id=\"uz\" class=\"langButton\">Uzbek</button>
\t\t\t\t\t35<button id=\"si\" class=\"langButton\">Sinhala</button>
\t\t\t\t\t36<button id=\"am\" class=\"langButton\">Amharic</button>
\t\t\t\t\t37<button id=\"ro\" class=\"langButton\">Romanian</button>
\t\t\t\t\t38<button id=\"az\" class=\"langButton\">Azerbaijan</button>
\t\t\t\t\t39<button id=\"ceb\" class=\"langButton\">Cebuano</button>
\t\t\t\t\t40<button id=\"nl\" class=\"langButton\">Dutch</button>
\t\t\t\t\t41<button id=\"sr\" class=\"langButton\">Serbian</button>
\t\t\t\t\t42<button id=\"mg\" class=\"langButton\">Malagasy</button>
\t\t\t\t\t43<button id=\"ne\" class=\"langButton\">Nepali</button>
\t\t\t\t\t44<button id=\"km\" class=\"langButton\">Khmer</button>
\t\t\t\t\t45<button id=\"el\" class=\"langButton\">Greek</button>


\t\t\t\t\t//HARD
\t\t\t\t\t1<button id=\"zh\" class=\"langButton\">Chinese</button>
\t\t\t\t\t2<button id=\"es\" class=\"langButton\">Spanish</button>
\t\t\t\t\t3<button id=\"en\" class=\"langButton\">English</button>
\t\t\t\t\t4<button id=\"hi\" class=\"langButton\">Hindi</button>
\t\t\t\t\t5<button id=\"ar\" class=\"langButton\">Arabic</button>
\t\t\t\t\t6<button id=\"pt\" class=\"langButton\">Portuguese</button>
\t\t\t\t\t7<button id=\"bn\" class=\"langButton\">Bengali</button>
\t\t\t\t\t8<button id=\"ru\" class=\"langButton\">Russian</button>
\t\t\t\t\t9<button id=\"ja\" class=\"langButton\">Japanese</button>
\t\t\t\t\t10<button id=\"pa\" class=\"langButton\">Punjabi</button>
\t\t\t\t\t11<button id=\"de\" class=\"langButton\">German</button>
\t\t\t\t\t12<button id=\"jv\" class=\"langButton\">Javanese</button>
\t\t\t\t\t13<button id=\"ms\" class=\"langButton\">Malay</button>
\t\t\t\t\t14<button id=\"te\" class=\"langButton\">Telugu</button>
\t\t\t\t\t15<button id=\"vi\" class=\"langButton\">Vietnamese</button>
\t\t\t\t\t16<button id=\"ko\" class=\"langButton\">Korean</button>
\t\t\t\t\t17<button id=\"fr\" class=\"langButton\">French</button>
\t\t\t\t\t18<button id=\"mr\" class=\"langButton\">Marathi</button>
\t\t\t\t\t19<button id=\"ta\" class=\"langButton\">Tamil</button>
\t\t\t\t\t20<button id=\"ur\" class=\"langButton\">Urdu</button>
\t\t\t\t\t21<button id=\"tr\" class=\"langButton\">Turkish</button>
\t\t\t\t\t22<button id=\"it\" class=\"langButton\">Italian</button>
\t\t\t\t\t23<button id=\"th\" class=\"langButton\">Thai</button>
\t\t\t\t\t24<button id=\"gu\" class=\"langButton\">Gujarati</button>
\t\t\t\t\t25<button id=\"fa\" class=\"langButton\">Persian</button>
\t\t\t\t\t26<button id=\"pl\" class=\"langButton\">Polish</button>
\t\t\t\t\t27<button id=\"kn\" class=\"langButton\">Kannada</button>
\t\t\t\t\t28<button id=\"ml\" class=\"langButton\">Malayalam</button>
\t\t\t\t\t29<button id=\"su\" class=\"langButton\">Sundanese</button>
\t\t\t\t\t30<button id=\"my\" class=\"langButton\">Burmese</button>
\t\t\t\t\t31<button id=\"uk\" class=\"langButton\">Ukrainian</button>
\t\t\t\t\t32<button id=\"tl\" class=\"langButton\">Tagalog</button>
\t\t\t\t\t33<button id=\"la\" class=\"langButton\">Latin</button>
\t\t\t\t\t34<button id=\"uz\" class=\"langButton\">Uzbek</button>
\t\t\t\t\t35<button id=\"si\" class=\"langButton\">Sinhala</button>
\t\t\t\t\t36<button id=\"am\" class=\"langButton\">Amharic</button>
\t\t\t\t\t37<button id=\"ro\" class=\"langButton\">Romanian</button>
\t\t\t\t\t38<button id=\"az\" class=\"langButton\">Azerbaijan</button>
\t\t\t\t\t39<button id=\"ceb\" class=\"langButton\">Cebuano</button>
\t\t\t\t\t40<button id=\"nl\" class=\"langButton\">Dutch</button>
\t\t\t\t\t41<button id=\"sr\" class=\"langButton\">Serbian</button>
\t\t\t\t\t42<button id=\"mg\" class=\"langButton\">Malagasy</button>
\t\t\t\t\t43<button id=\"ne\" class=\"langButton\">Nepali</button>
\t\t\t\t\t44<button id=\"km\" class=\"langButton\">Khmer</button>
\t\t\t\t\t45<button id=\"el\" class=\"langButton\">Greek</button>
\t\t\t\t\t46<button id=\"sq\" class=\"langButton\">Albanian</button>
\t\t\t\t\t47<button id=\"hy\" class=\"langButton\">Armenian</button>
\t\t\t\t\t48<button id=\"af\" class=\"langButton\">Afrikaans</button>
\t\t\t\t\t49<button id=\"eu\" class=\"langButton\">Basque</button>
\t\t\t\t\t50<button id=\"ba\" class=\"langButton\">Bashkir</button>
\t\t\t\t\t51<button id=\"be\" class=\"langButton\">Belarusian</button>
\t\t\t\t\t52<button id=\"bg\" class=\"langButton\">Bulgarian</button>
\t\t\t\t\t53<button id=\"bs\" class=\"langButton\">Bosnian</button>
\t\t\t\t\t54<button id=\"cy\" class=\"langButton\">Welsh</button>
\t\t\t\t\t55<button id=\"hu\" class=\"langButton\">Hungarian</button>
\t\t\t\t\t56<button id=\"ht\" class=\"langButton\">Haitian (Creole)</button>
\t\t\t\t\t57<button id=\"gl\" class=\"langButton\">Galician</button>
\t\t\t\t\t58<button id=\"mrj\" class=\"langButton\">Hill Mari</button>
\t\t\t\t\t59<button id=\"ka\" class=\"langButton\">Georgian</button>
\t\t\t\t\t60<button id=\"da\" class=\"langButton\">Danish</button>
\t\t\t\t\t61<button id=\"he\" class=\"langButton\">Hebrew</button>
\t\t\t\t\t62<button id=\"yi\" class=\"langButton\">Yiddish</button>
\t\t\t\t\t63<button id=\"id\" class=\"langButton\">Indonesian</button>
\t\t\t\t\t64<button id=\"ga\" class=\"langButton\">Irish</button>
\t\t\t\t\t65<button id=\"is\" class=\"langButton\">Icelandic</button>
\t\t\t\t\t66<button id=\"kk\" class=\"langButton\">Kazakh</button>
\t\t\t\t\t67<button id=\"ca\" class=\"langButton\">Catalan</button>
\t\t\t\t\t68<button id=\"ky\" class=\"langButton\">Kyrgyz</button>
\t\t\t\t\t79<button id=\"xh\" class=\"langButton\">Xhosa</button>
\t\t\t\t\t70<button id=\"lo\" class=\"langButton\">Laotian</button>
\t\t\t\t\t71<button id=\"lv\" class=\"langButton\">Latvian (Creole)</button>
\t\t\t\t\t72<button id=\"lt\" class=\"langButton\">Lithuanian</button>
\t\t\t\t\t73<button id=\"lb\" class=\"langButton\">Luxembourgish</button>
\t\t\t\t\t74<button id=\"mt\" class=\"langButton\">Maltese</button>
\t\t\t\t\t75<button id=\"mk\" class=\"langButton\">Macedonian</button>
\t\t\t\t\t76<button id=\"mi\" class=\"langButton\">Maori</button>
\t\t\t\t\t77<button id=\"mhr\" class=\"langButton\">Mari</button>
\t\t\t\t\t78<button id=\"mn\" class=\"langButton\">Mongolian</button>
\t\t\t\t\t79<button id=\"no\" class=\"langButton\">Norwegian</button>
\t\t\t\t\t80<button id=\"pap\" class=\"langButton\">Papiamento</button>
\t\t\t\t\t81<button id=\"sk\" class=\"langButton\">Slovakian (Creole)</button>
\t\t\t\t\t82<button id=\"sl\" class=\"langButton\">Slovenian</button>
\t\t\t\t\t83<button id=\"sw\" class=\"langButton\">Swahili</button>
\t\t\t\t\t84<button id=\"tg\" class=\"langButton\">Tajik</button>
\t\t\t\t\t85<button id=\"tt\" class=\"langButton\">Tatar</button>
\t\t\t\t\t86<button id=\"udm\" class=\"langButton\">Udmurt</button>
\t\t\t\t\t87<button id=\"fi\" class=\"langButton\">Finnish</button>
\t\t\t\t\t88<button id=\"hr\" class=\"langButton\">Croatian</button>
\t\t\t\t\t89<button id=\"cs\" class=\"langButton\">Czech</button>
\t\t\t\t\t90<button id=\"sv\" class=\"langButton\">Swedish</button>
\t\t\t\t\t91<button id=\"gd\" class=\"langButton\">Scottish</button>
\t\t\t\t\t92<button id=\"et\" class=\"langButton\">Estonian</button>
\t\t\t\t\t93<button id=\"eo\" class=\"langButton\">Esperanto</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<p class=\"copy\" >&copy; by Mateusz Pijanowski and Michał Kubiak</p>
\t</div>
</div>
</body>
</html>";
        
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
\t\t\t<p class=\"error\" id=\"errorLogin\"><p>
\t\t\t<p class=\"message\">Not registered? <a href=\"#\" id=\"registerAnimation\">Create an account.</a>
\t\t\t\t\t\tHave you forgotten your password? <a href=\"#\" id=\"memorablePasswordAnimation\">Remind Password.</a></p>
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
\t\t<p class=\"error\" id=\"errorRegister\"><p>
\t\t<p class=\"message\">Already registered? <a href=\"#\" class=\"loginAnimation\">Sign In</a></p>
\t</div>
</div>
<div class=\"memorablePassword-page\">
\t<div class=\"form\">
\t\t<p class=\"stringRegister\" >Remind Password</p>
\t\t<input type=\"text\" placeholder=\"email address\" id=\"emailMemorablePassword\"/>
\t\t<button id=\"startMemorablePassword\">SEND</button>
\t\t<p class=\"error\" id=\"errorMemorablePassword\"><p>
\t\t<p class=\"message\">Already registered? <a href=\"#\" class=\"loginAnimation\">Sign In</a></p>
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
\t\t\t<div class=\"account\" id=\"nick\">NICK: </div>
\t\t\t<div class=\"account accountButton rankingPosition\">Ranking position: </div>
\t\t\t<div class=\"account\" id=\"score\">Score: </div>
\t\t\t<div class=\"account accountButton about\">About MasterLangg</div>
\t\t\t<input class=\"accountButtonLogOut account\"type=\"submit\" value=\"LOGOUT\"/>
\t\t</div>
\t\t<div class=\"account-pageContent0\">
\t\t\t<div class=\"account infoAccount\"><p class=\"nick\">Nick: </p>
\t\t\t\t\t\t\t <p class=\"email\">E-mail: </p>
\t\t\t</div>
\t\t\t<input class=\"accountButton account CHANGELOGIN\"type=\"submit\" value=\"Change LOGIN\"/>
\t\t\t<input class=\"accountButton account CHANGEPASSWORD\"type=\"submit\" value=\"Change PASSWORD\"/>
\t\t\t<input class=\"accountButton account CHANGEE-MAIL\"type=\"submit\" value=\"Change E-MAIL\"/>
\t\t</div>
\t\t<div class=\"account-pageContent2\">
\t\t\t<table id=\"rankingg\">
\t\t\t</table>
\t\t</div>
\t</div>
\t<div class=\"about-page\">
\t\t<input class=\"Back account\"type=\"submit\" value=\"Back\"/>
\t\t<div class=\"form formChange\">
\t\t\t<form class=\"formCHANGEE-MAIL\">
Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV \t\t\t</form>
\t\t</div>
\t</div>
\t<div class=\"CHANGELOGIN-page\">
\t\t<input class=\"Back account\"type=\"submit\" value=\"Back\"/>
\t\t<div class=\"form formChange\">
\t\t\t<form class=\"formCHANGELOGIN\">
\t\t\t\t<input type=\"text\" class=\"ChangeLOGIN\"  placeholder=\"New Login\"/>
\t\t\t\t<p class=\"error\" id=\"error0\"><p>
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
\t\t\t\t<p class=\"error\" id=\"error1\"><p>
\t\t\t\t<button id=\"ChangePASSWORD\" >Change</button>
\t\t\t</form>
\t\t</div>
\t</div>
\t<div class=\"CHANGEE-MAIL-page\">
\t\t<input class=\"Back account\"type=\"submit\" value=\"Back\"/>
\t\t<div class=\"form formChange\">
\t\t\t<form class=\"formCHANGEE-MAIL\">
\t\t\t\t<input type=\"text\" class=\"ChangeMAIL\"  placeholder=\"New E-Mail\"/>
\t\t\t\t<p class=\"error\" id=\"error2\"><p>
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
\t\t\t\t<div class=\"window\" id=\"timer\">
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

\t\t\t\t\t// EASY
\t\t\t\t\t1<button id=\"zh\" class=\"langButton\">Chinese</button>
\t\t\t\t\t2<button id=\"es\" class=\"langButton\">Spanish</button>
\t\t\t\t\t3<button id=\"en\" class=\"langButton\">English</button>
\t\t\t\t\t4<button id=\"hi\" class=\"langButton\">Hindi</button>
\t\t\t\t\t5<button id=\"ar\" class=\"langButton\">Arabic</button>
\t\t\t\t\t6<button id=\"pt\" class=\"langButton\">Portuguese</button>
\t\t\t\t\t7<button id=\"bn\" class=\"langButton\">Bengali</button>
\t\t\t\t\t8<button id=\"ru\" class=\"langButton\">Russian</button>
\t\t\t\t\t9<button id=\"ja\" class=\"langButton\">Japanese </button>
\t\t\t\t\t10<button id=\"pa\" class=\"langButton\">Punjabi</button>
\t\t\t\t\t11<button id=\"de\" class=\"langButton\">German</button>
\t\t\t\t\t12<button id=\"jv\" class=\"langButton\">Javanese</button>
\t\t\t\t\t13<button id=\"ms\" class=\"langButton\">Malay</button>
\t\t\t\t\t14<button id=\"te\" class=\"langButton\">Telugu</button>
\t\t\t\t\t15<button id=\"vi\" class=\"langButton\">Vietnamese</button>
\t\t\t\t\t16<button id=\"ko\" class=\"langButton\">Korean</button>
\t\t\t\t\t17<button id=\"fr\" class=\"langButton\">French</button>
\t\t\t\t\t18<button id=\"mr\" class=\"langButton\">Marathi</button>
\t\t\t\t\t19<button id=\"ta\" class=\"langButton\">Tamil</button>
\t\t\t\t\t20<button id=\"ur\" class=\"langButton\">Urdu</button>


\t\t\t\t\t// NORMAL
\t\t\t\t\t1<button id=\"zh\" class=\"langButton\">Chinese</button>
\t\t\t\t\t2<button id=\"es\" class=\"langButton\">Spanish</button>
\t\t\t\t\t3<button id=\"en\" class=\"langButton\">English</button>
\t\t\t\t\t4<button id=\"hi\" class=\"langButton\">Hindi</button>
\t\t\t\t\t5<button id=\"ar\" class=\"langButton\">Arabic</button>
\t\t\t\t\t6<button id=\"pt\" class=\"langButton\">Portuguese</button>
\t\t\t\t\t7<button id=\"bn\" class=\"langButton\">Bengali</button>
\t\t\t\t\t8<button id=\"ru\" class=\"langButton\">Russian</button>
\t\t\t\t\t9<button id=\"ja\" class=\"langButton\">Japanese </button>
\t\t\t\t\t10<button id=\"pa\" class=\"langButton\">Punjabi</button>
\t\t\t\t\t11<button id=\"de\" class=\"langButton\">German</button>
\t\t\t\t\t12<button id=\"jv\" class=\"langButton\">Javanese</button>
\t\t\t\t\t13<button id=\"ms\" class=\"langButton\">Malay</button>
\t\t\t\t\t14<button id=\"te\" class=\"langButton\">Telugu</button>
\t\t\t\t\t15<button id=\"vi\" class=\"langButton\">Vietnamese</button>
\t\t\t\t\t16<button id=\"ko\" class=\"langButton\">Korean</button>
\t\t\t\t\t17<button id=\"fr\" class=\"langButton\">French</button>
\t\t\t\t\t18<button id=\"mr\" class=\"langButton\">Marathi</button>
\t\t\t\t\t19<button id=\"ta\" class=\"langButton\">Tamil</button>
\t\t\t\t\t20<button id=\"ur\" class=\"langButton\">Urdu</button>
\t\t\t\t\t21<button id=\"tr\" class=\"langButton\">Turkish</button>
\t\t\t\t\t22<button id=\"it\" class=\"langButton\">Italian</button>
\t\t\t\t\t23<button id=\"th\" class=\"langButton\">Thai</button>
\t\t\t\t\t24<button id=\"gu\" class=\"langButton\">Gujarati</button>
\t\t\t\t\t25<button id=\"fa\" class=\"langButton\">Persian</button>
\t\t\t\t\t26<button id=\"pl\" class=\"langButton\">Polish</button>
\t\t\t\t\t27<button id=\"kn\" class=\"langButton\">Kannada</button>
\t\t\t\t\t28<button id=\"ml\" class=\"langButton\">Malayalam</button>
\t\t\t\t\t29<button id=\"su\" class=\"langButton\">Sundanese</button>
\t\t\t\t\t30<button id=\"my\" class=\"langButton\">Burmese</button>
\t\t\t\t\t31<button id=\"uk\" class=\"langButton\">Ukrainian</button>
\t\t\t\t\t32<button id=\"tl\" class=\"langButton\">Tagalog</button>
\t\t\t\t\t33<button id=\"la\" class=\"langButton\">Latin</button>
\t\t\t\t\t34<button id=\"uz\" class=\"langButton\">Uzbek</button>
\t\t\t\t\t35<button id=\"si\" class=\"langButton\">Sinhala</button>
\t\t\t\t\t36<button id=\"am\" class=\"langButton\">Amharic</button>
\t\t\t\t\t37<button id=\"ro\" class=\"langButton\">Romanian</button>
\t\t\t\t\t38<button id=\"az\" class=\"langButton\">Azerbaijan</button>
\t\t\t\t\t39<button id=\"ceb\" class=\"langButton\">Cebuano</button>
\t\t\t\t\t40<button id=\"nl\" class=\"langButton\">Dutch</button>
\t\t\t\t\t41<button id=\"sr\" class=\"langButton\">Serbian</button>
\t\t\t\t\t42<button id=\"mg\" class=\"langButton\">Malagasy</button>
\t\t\t\t\t43<button id=\"ne\" class=\"langButton\">Nepali</button>
\t\t\t\t\t44<button id=\"km\" class=\"langButton\">Khmer</button>
\t\t\t\t\t45<button id=\"el\" class=\"langButton\">Greek</button>


\t\t\t\t\t//HARD
\t\t\t\t\t1<button id=\"zh\" class=\"langButton\">Chinese</button>
\t\t\t\t\t2<button id=\"es\" class=\"langButton\">Spanish</button>
\t\t\t\t\t3<button id=\"en\" class=\"langButton\">English</button>
\t\t\t\t\t4<button id=\"hi\" class=\"langButton\">Hindi</button>
\t\t\t\t\t5<button id=\"ar\" class=\"langButton\">Arabic</button>
\t\t\t\t\t6<button id=\"pt\" class=\"langButton\">Portuguese</button>
\t\t\t\t\t7<button id=\"bn\" class=\"langButton\">Bengali</button>
\t\t\t\t\t8<button id=\"ru\" class=\"langButton\">Russian</button>
\t\t\t\t\t9<button id=\"ja\" class=\"langButton\">Japanese</button>
\t\t\t\t\t10<button id=\"pa\" class=\"langButton\">Punjabi</button>
\t\t\t\t\t11<button id=\"de\" class=\"langButton\">German</button>
\t\t\t\t\t12<button id=\"jv\" class=\"langButton\">Javanese</button>
\t\t\t\t\t13<button id=\"ms\" class=\"langButton\">Malay</button>
\t\t\t\t\t14<button id=\"te\" class=\"langButton\">Telugu</button>
\t\t\t\t\t15<button id=\"vi\" class=\"langButton\">Vietnamese</button>
\t\t\t\t\t16<button id=\"ko\" class=\"langButton\">Korean</button>
\t\t\t\t\t17<button id=\"fr\" class=\"langButton\">French</button>
\t\t\t\t\t18<button id=\"mr\" class=\"langButton\">Marathi</button>
\t\t\t\t\t19<button id=\"ta\" class=\"langButton\">Tamil</button>
\t\t\t\t\t20<button id=\"ur\" class=\"langButton\">Urdu</button>
\t\t\t\t\t21<button id=\"tr\" class=\"langButton\">Turkish</button>
\t\t\t\t\t22<button id=\"it\" class=\"langButton\">Italian</button>
\t\t\t\t\t23<button id=\"th\" class=\"langButton\">Thai</button>
\t\t\t\t\t24<button id=\"gu\" class=\"langButton\">Gujarati</button>
\t\t\t\t\t25<button id=\"fa\" class=\"langButton\">Persian</button>
\t\t\t\t\t26<button id=\"pl\" class=\"langButton\">Polish</button>
\t\t\t\t\t27<button id=\"kn\" class=\"langButton\">Kannada</button>
\t\t\t\t\t28<button id=\"ml\" class=\"langButton\">Malayalam</button>
\t\t\t\t\t29<button id=\"su\" class=\"langButton\">Sundanese</button>
\t\t\t\t\t30<button id=\"my\" class=\"langButton\">Burmese</button>
\t\t\t\t\t31<button id=\"uk\" class=\"langButton\">Ukrainian</button>
\t\t\t\t\t32<button id=\"tl\" class=\"langButton\">Tagalog</button>
\t\t\t\t\t33<button id=\"la\" class=\"langButton\">Latin</button>
\t\t\t\t\t34<button id=\"uz\" class=\"langButton\">Uzbek</button>
\t\t\t\t\t35<button id=\"si\" class=\"langButton\">Sinhala</button>
\t\t\t\t\t36<button id=\"am\" class=\"langButton\">Amharic</button>
\t\t\t\t\t37<button id=\"ro\" class=\"langButton\">Romanian</button>
\t\t\t\t\t38<button id=\"az\" class=\"langButton\">Azerbaijan</button>
\t\t\t\t\t39<button id=\"ceb\" class=\"langButton\">Cebuano</button>
\t\t\t\t\t40<button id=\"nl\" class=\"langButton\">Dutch</button>
\t\t\t\t\t41<button id=\"sr\" class=\"langButton\">Serbian</button>
\t\t\t\t\t42<button id=\"mg\" class=\"langButton\">Malagasy</button>
\t\t\t\t\t43<button id=\"ne\" class=\"langButton\">Nepali</button>
\t\t\t\t\t44<button id=\"km\" class=\"langButton\">Khmer</button>
\t\t\t\t\t45<button id=\"el\" class=\"langButton\">Greek</button>
\t\t\t\t\t46<button id=\"sq\" class=\"langButton\">Albanian</button>
\t\t\t\t\t47<button id=\"hy\" class=\"langButton\">Armenian</button>
\t\t\t\t\t48<button id=\"af\" class=\"langButton\">Afrikaans</button>
\t\t\t\t\t49<button id=\"eu\" class=\"langButton\">Basque</button>
\t\t\t\t\t50<button id=\"ba\" class=\"langButton\">Bashkir</button>
\t\t\t\t\t51<button id=\"be\" class=\"langButton\">Belarusian</button>
\t\t\t\t\t52<button id=\"bg\" class=\"langButton\">Bulgarian</button>
\t\t\t\t\t53<button id=\"bs\" class=\"langButton\">Bosnian</button>
\t\t\t\t\t54<button id=\"cy\" class=\"langButton\">Welsh</button>
\t\t\t\t\t55<button id=\"hu\" class=\"langButton\">Hungarian</button>
\t\t\t\t\t56<button id=\"ht\" class=\"langButton\">Haitian (Creole)</button>
\t\t\t\t\t57<button id=\"gl\" class=\"langButton\">Galician</button>
\t\t\t\t\t58<button id=\"mrj\" class=\"langButton\">Hill Mari</button>
\t\t\t\t\t59<button id=\"ka\" class=\"langButton\">Georgian</button>
\t\t\t\t\t60<button id=\"da\" class=\"langButton\">Danish</button>
\t\t\t\t\t61<button id=\"he\" class=\"langButton\">Hebrew</button>
\t\t\t\t\t62<button id=\"yi\" class=\"langButton\">Yiddish</button>
\t\t\t\t\t63<button id=\"id\" class=\"langButton\">Indonesian</button>
\t\t\t\t\t64<button id=\"ga\" class=\"langButton\">Irish</button>
\t\t\t\t\t65<button id=\"is\" class=\"langButton\">Icelandic</button>
\t\t\t\t\t66<button id=\"kk\" class=\"langButton\">Kazakh</button>
\t\t\t\t\t67<button id=\"ca\" class=\"langButton\">Catalan</button>
\t\t\t\t\t68<button id=\"ky\" class=\"langButton\">Kyrgyz</button>
\t\t\t\t\t79<button id=\"xh\" class=\"langButton\">Xhosa</button>
\t\t\t\t\t70<button id=\"lo\" class=\"langButton\">Laotian</button>
\t\t\t\t\t71<button id=\"lv\" class=\"langButton\">Latvian (Creole)</button>
\t\t\t\t\t72<button id=\"lt\" class=\"langButton\">Lithuanian</button>
\t\t\t\t\t73<button id=\"lb\" class=\"langButton\">Luxembourgish</button>
\t\t\t\t\t74<button id=\"mt\" class=\"langButton\">Maltese</button>
\t\t\t\t\t75<button id=\"mk\" class=\"langButton\">Macedonian</button>
\t\t\t\t\t76<button id=\"mi\" class=\"langButton\">Maori</button>
\t\t\t\t\t77<button id=\"mhr\" class=\"langButton\">Mari</button>
\t\t\t\t\t78<button id=\"mn\" class=\"langButton\">Mongolian</button>
\t\t\t\t\t79<button id=\"no\" class=\"langButton\">Norwegian</button>
\t\t\t\t\t80<button id=\"pap\" class=\"langButton\">Papiamento</button>
\t\t\t\t\t81<button id=\"sk\" class=\"langButton\">Slovakian (Creole)</button>
\t\t\t\t\t82<button id=\"sl\" class=\"langButton\">Slovenian</button>
\t\t\t\t\t83<button id=\"sw\" class=\"langButton\">Swahili</button>
\t\t\t\t\t84<button id=\"tg\" class=\"langButton\">Tajik</button>
\t\t\t\t\t85<button id=\"tt\" class=\"langButton\">Tatar</button>
\t\t\t\t\t86<button id=\"udm\" class=\"langButton\">Udmurt</button>
\t\t\t\t\t87<button id=\"fi\" class=\"langButton\">Finnish</button>
\t\t\t\t\t88<button id=\"hr\" class=\"langButton\">Croatian</button>
\t\t\t\t\t89<button id=\"cs\" class=\"langButton\">Czech</button>
\t\t\t\t\t90<button id=\"sv\" class=\"langButton\">Swedish</button>
\t\t\t\t\t91<button id=\"gd\" class=\"langButton\">Scottish</button>
\t\t\t\t\t92<button id=\"et\" class=\"langButton\">Estonian</button>
\t\t\t\t\t93<button id=\"eo\" class=\"langButton\">Esperanto</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<p class=\"copy\" >&copy; by Mateusz Pijanowski and Michał Kubiak</p>
\t</div>
</div>
</body>
</html>", "base.html.twig", "/var/www/html/masterlangg/templates/base.html.twig");
    }
}
