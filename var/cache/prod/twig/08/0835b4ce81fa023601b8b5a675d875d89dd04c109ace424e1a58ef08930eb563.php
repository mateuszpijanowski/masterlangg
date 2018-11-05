<?php

/* base.html.twig */
class __TwigTemplate_116d0b9e34e83d66e790aac779a0d368c890b53ce1c4ee82aa51d178cf86c9cd extends Twig_Template
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
\t

\t
</head>
\t<body>\t
\t\t\t<div class=\"dimness\" ></div>
            <div id=\"loginPanel\">
\t\t\t
\t\t\t\t\t<div class=\"login-page\">
\t\t\t\t\t\t<div class=\"form\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"login\" placeholder=\"username\"/>
\t\t\t\t\t\t\t\t<input type=\"password\" id=\"password\" placeholder=\"password\"/>
\t\t\t\t\t\t\t\t<button class=\"start\" >login</button>
\t\t\t\t\t\t\t\t<p class=\"message\">Not registered? <a href=\"#\" id=\"registerAnimation\">Create an account</a></p>
\t\t\t\t\t\t\t<p class=\"copy\" >&copy; by Mateusz Pijanowski and Michał Kubiak</p>
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"register-page\">
\t\t\t\t<div class=\"form\">
\t\t\t\t\t\t<p class=\"stringRegister\" >REGISTRATION</p>
\t\t\t\t\t\t<input type=\"text\" placeholder=\"name\" id=\"loginRegister\"/>
\t\t\t\t\t\t<input type=\"password\" placeholder=\"password\" id=\"password1\"/>
\t\t\t\t\t\t<input type=\"password\" placeholder=\"password\" id=\"password2\"/>
\t\t\t\t\t\t<input type=\"text\" placeholder=\"email address\" id=\"emailRegister\"/>
\t\t\t\t\t\t<button id=\"startRegister\">create</button>
\t\t\t\t\t\t<p class=\"message\">Already registered? <a href=\"#\" id=\"loginAnimation\">Sign In</a></p>
\t\t\t\t</div>\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"account-page\">
\t\t\t\t<div class=\"account-page-content container-fluid\">
\t\t\t\t\t\t<div class=\"account-pageMenu row\">
\t\t\t\t\t\t\t<div class=\"account-pageMenu0 col-sm-4\"><a href=\"#\" class=\"registerAnimationMenu0\">EDIT ACCOUNT</a></div>
\t\t\t\t\t\t\t<div class=\"account-pageMenu1 col-sm-4\"><a href=\"#\" class=\"registerAnimationMenu1\" style=\"font-size: 25px;\">USER ACCOUNT</a></div>
\t\t\t\t\t\t\t<div class=\"account-pageMenu2 col-sm-4\"><a href=\"#\" class=\"registerAnimationMenu2\">RANKING</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"account-pageContent1\">
\t\t\t\t\t\t<div class=\"account\">NICK: ";
        // line 59
        echo twig_escape_filter($this->env, ($context["nick"] ?? null), "html", null, true);
        echo "</div>
\t\t\t\t\t\t<div class=\"account accountButton rankingPosition\">RANKING POSITION: ";
        // line 60
        echo twig_escape_filter($this->env, ($context["ranking_pos"] ?? null), "html", null, true);
        echo "</div>
\t\t\t\t\t\t<div class=\"account\">SCORE: ";
        // line 61
        echo twig_escape_filter($this->env, ($context["score"] ?? null), "html", null, true);
        echo "</div>
\t\t\t\t\t\t<input class=\"accountButtonLogOut account\"type=\"submit\" value=\"LOGOUT\"/>
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t<div class=\"account-pageContent0\">
\t\t\t\t\t\t<div class=\"account infoAccount\"><p>NICK: ";
        // line 65
        echo twig_escape_filter($this->env, ($context["nick"] ?? null), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tE-MAIL: ";
        // line 66
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input class=\"accountButton account CHANGELOGIN\"type=\"submit\" value=\"Change LOGIN\"/>
\t\t\t\t\t\t<input class=\"accountButton account CHANGEPASSWORD\"type=\"submit\" value=\"CHANGE PASSWORD\"/>
\t\t\t\t\t\t<input class=\"accountButton account CHANGEE-MAIL\"type=\"submit\" value=\"CHANGE E-MAIL\"/>
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t<div class=\"account-pageContent2\">
\t\t\t\t\t\t";
        // line 73
        echo twig_escape_filter($this->env, ($context["ranking"] ?? null), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"CHANGELOGIN-page\">
\t\t\t\t\t<input class=\"Back account\"type=\"submit\" value=\"Back\"/>
\t\t\t\t\t<div class=\"form formChange\">
\t\t\t\t\t\t<form class=\"formCHANGELOGIN\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"ChangeLOGIN\"  placeholder=\"New Login\"/>
\t\t\t\t\t\t\t<button id=\"ChangeLOGIN\" >Change</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t</div>\t\t\t\t
\t\t\t\t<div class=\"CHANGEPASSWORD-page\">
\t\t\t\t\t<input class=\"Back account\"type=\"submit\" value=\"Back\"/>
\t\t\t\t\t<div class=\"form formChange\">
\t\t\t\t\t\t<form class=\"formCHANGEPASSWORD\">
\t\t\t\t\t\t\t<input type=\"password\" class=\"ChangePASSWORD1\" placeholder=\"New Password\"/>
\t\t\t\t\t\t\t<input type=\"password\" class=\"ChangePASSWORD2\" placeholder=\"Repeat New Password\"/>
\t\t\t\t\t\t\t<button id=\"ChangePASSWORD\" >Change</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t</div>\t\t\t\t
\t\t\t\t<div class=\"CHANGEE-MAIL-page\">
\t\t\t\t\t<input class=\"Back account\"type=\"submit\" value=\"Back\"/>
\t\t\t\t\t<div class=\"form formChange\">
\t\t\t\t\t\t<form class=\"formCHANGEE-MAIL\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"ChangeMAIL\"  placeholder=\"New E-Mail\"/>
\t\t\t\t\t\t\t<button id=\"ChangeMAIL\" >Change</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"options-page\">
\t\t\t\t<input class=\"levelOfDifficulty\" id=\"EASY\" type=\"submit\" value=\"EASY\"/>
\t\t\t\t<input class=\"levelOfDifficulty\" id=\"NORMAL\" type=\"submit\" value=\"NORMAL\"/>
\t\t\t\t<input class=\"levelOfDifficulty\" id=\"HARD\" type=\"submit\" value=\"HARD\"/>
\t\t\t</div>
\t\t\t
            <div id=\"gamePanel\">
              \t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"topDiv\" >
\t\t\t\t\t\t\t<a href='#' id='account'> YOUR ACCOUNT</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"topDiv\">
\t\t\t\t\t\t\t<p class=\"score\">SCORE</p>
\t\t\t\t\t\t\t";
        // line 123
        echo twig_escape_filter($this->env, ($context["score"] ?? null), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"topDiv\">
\t\t\t\t\t\t\t<a href=\"#\"id=\"options\" >DIFFICULTY</a><p class=\"difficultyDisplays\">";
        // line 128
        echo twig_escape_filter($this->env, ($context["difficulty"] ?? null), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"offset-xl-2 col-xl-1 offset-md-2 col-md-2\">
\t\t\t\t\t\t\t<div class=\"window\">12
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-5 col-md-3\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"window\" id=\"quotation\" placeholder=\"Give a text\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-1\">
\t\t\t\t\t\t\t\t<button id=\"startGame\" class=\"startGame\">Start</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-xl-1 col-md-2\">
\t\t\t\t\t\t\t<div class=\"window\">12
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-12\">
\t\t\t\t\t\t\t<img src=\"/assets/Img/arrow.png\">
\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"offset-xl-2 col-xl-1 offset-md-2 col-md-2\">
\t\t\t\t\t\t\t<div class=\"window\">12
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-6 col-md-4\">
\t\t\t\t\t\t\t<div class=\"window\">jp
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-1  col-md-2 \">
\t\t\t\t\t\t\t<button class=\"startGame\" id=\"ok\">OK</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"offset-md-2 col-md-8 offsset-md-2\">
\t\t\t\t\t\t\t<div class=\"window langList\">";
        // line 163
        echo twig_escape_filter($this->env, ($context["lang_list"] ?? null), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"copy\" >&copy; by Mateusz Pijanowski and Michał Kubiak ";
        // line 167
        echo twig_escape_filter($this->env, ($context["test"] ?? null), "html", null, true);
        echo "</p>
\t\t\t\t</div>
            </div>\t
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 167,  211 => 163,  173 => 128,  165 => 123,  112 => 73,  102 => 66,  98 => 65,  91 => 61,  87 => 60,  83 => 59,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/var/www/html/masterlangg/templates/base.html.twig");
    }
}
