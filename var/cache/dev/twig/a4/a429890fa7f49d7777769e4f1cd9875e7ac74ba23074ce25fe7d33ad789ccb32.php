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
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <title></title>
    <meta name=\"description\" content=\"Projekt 6\" />
    <meta name=\"keywords\" content=\"Projekt 6\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"/assets/Img/style.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css\" type=\"text/css\" />
    <link href=\"https://fonts.googleapis.com/css?family=Pangolin\" rel=\"stylesheet\">


    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
    <script src=\"/assets/js/jquery.scrollTo.min.js\"></script>
    <script src=\"/assets/js/animation.js\"></script>
</head>

<body>
<div class=\"dimness\" ></div>
<div id=\"loginPanel\">

    <div class=\"login-page\">
        <div class=\"form\">
            <form class=\"login-form\">
                <input type=\"text\" placeholder=\"username\"/>
                <input type=\"password\" placeholder=\"password\"/>
                <button class=\"start\" >login</button>
                <p class=\"message\">Not registered? <a href=\"#\" id=\"registerAnimation\">Create an account</a></p>
            </form>
        </div>
    </div>
</div>
<div class=\"register-page\">
    <div class=\"form\">
        <form class=\"login-form \">
            <input type=\"text\" placeholder=\"name\"/>
            <input type=\"password\" placeholder=\"password\"/>
            <input type=\"password\" placeholder=\"password\"/>
            <input type=\"text\" placeholder=\"email address\"/>
            <button>create</button>
            <p class=\"message\">Already registered? <a href=\"#\" id=\"loginAnimation\">Sign In</a></p>
        </form>
    </div>
</div>
<div class=\"account-page\">
    <div class=\"account-page-content container-fluid\">
        <div class=\"account-pageMenu row\">
            <div class=\"account-pageMenu0 col-sm-4\"><a href=\"#\" class=\"registerAnimationMenu0\">EDIT ACCOUNT</a></div>
            <div class=\"account-pageMenu1 col-sm-4\"><a href=\"#\" class=\"registerAnimationMenu1\" style=\"font-size: 25px;\">USER ACCOUNT</a></div>
            <div class=\"account-pageMenu2 col-sm-4\"><a href=\"#\" class=\"registerAnimationMenu2\">RANKING</a></div>
        </div>

        <div class=\"account-pageContent1\">
            <div class=\"account\">NICK: zdzisia</div>
            <div class=\"account\">RANKING POSITION: 1564</div>
            <div class=\"account\">SCORE: 534jp3</div>
            <input class=\"accountButtonLogOut account\"type=\"submit\" value=\"LOGOUT\"/>
        </div>
        <div class=\"account-pageContent0\">
            <div class=\"account infoAccount\"><p>NICK: root</p>
                E-MAIL: root@wp.pl
            </div>
            <input class=\"accountButton account CHANGELOGIN\"type=\"submit\" value=\"Change LOGIN\"/>
            <input class=\"accountButton account CHANGEPASSWORD\"type=\"submit\" value=\"CHANGE PASSWORD\"/>
            <input class=\"accountButton account CHANGEE-MAIL\"type=\"submit\" value=\"CHANGE E-MAIL\"/>
        </div>
        <div class=\"account-pageContent2\">
            tu se jest ranking
        </div>
    </div>
    <div class=\"CHANGELOGIN-page\">
        <input class=\"Back account\"type=\"submit\" value=\"Back\"/>
        <div class=\"form formChange\">
            <form class=\"formCHANGELOGIN\">
                <input type=\"text\" placeholder=\"New Login\"/>
                <button class=\"Change LOGIN\" >Change</button>
            </form>
        </div>
    </div>
    <div class=\"CHANGEPASSWORD-page\">
        <input class=\"Back account\"type=\"submit\" value=\"Back\"/>
        <div class=\"form formChange\">
            <form class=\"formCHANGEPASSWORD\">
                <input type=\"password\" placeholder=\"New Password\"/>
                <input type=\"password\" placeholder=\"Repeat New Password\"/>
                <button class=\"Change PASSWORD\" >Change</button>
            </form>
        </div>
    </div>
    <div class=\"CHANGEE-MAIL-page\">
        <input class=\"Back account\"type=\"submit\" value=\"Back\"/>
        <div class=\"form formChange\">
            <form class=\"formCHANGEE-MAIL\">
                <input type=\"text\" placeholder=\"New E-Mail\"/>
                <button class=\"Change MAIL\" >Change</button>
            </form>
        </div>
    </div>
</div>
<div class=\"options-page\">
    <input class=\"levelOfDifficulty\" id=\"EASY\" type=\"submit\" value=\"EASY\"/>
    <input class=\"levelOfDifficulty\" id=\"NORMAL\" type=\"submit\" value=\"NORMAL\"/>
    <input class=\"levelOfDifficulty\" id=\"HARD\" type=\"submit\" value=\"HARD\"/>
</div>

<div id=\"gamePanel\">
    <div class=\"container-fluid\">
        <div class=\"row\">

            <div class=\"col-sm-3\">
                <div class=\"topDiv\" >
                    <a href='#' id='account'> YOUR ACCOUNT</a>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"topDiv\">
                    <p class=\"score\">SCORE</p>
                    9608
                </div>
            </div>
            <div class=\"col-sm-3\">
                <div class=\"topDiv\">
                    <a href=\"#\"id=\"options\" >DIFFICULT</a>
                </div>
            </div>
            <div class=\"offset-xl-2 col-xl-1 offset-md-2 col-md-2\">
                <div class=\"window\">12
                </div>
            </div>
            <div class=\"col-xl-6 col-md-4\">
                <div class=\"window\">jp
                </div>
            </div>
            <div class=\"col-xl-1 col-md-2\">
                <div class=\"window\">12
                </div>
            </div>
            <div class=\"col-xl-12\">
                <img src=\"/assets/Img/arrow.png\">
            </div>

            <div class=\"offset-xl-2 col-xl-1 offset-md-2 col-md-2\">
                <div class=\"window\">12
                </div>
            </div>
            <div class=\"col-xl-6 col-md-4\">
                <div class=\"window\">jp
                </div>
            </div>
            <div class=\"col-xl-1  col-md-2 \">
                <div class=\"window\">12
                </div>
            </div>
            <div class=\"offset-md-2 col-md-8 offsset-md-2\">
                <div class=\"window langList\">jp
                </div>
            </div>
        </div>
    </div>
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
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"pl\">
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <title></title>
    <meta name=\"description\" content=\"Projekt 6\" />
    <meta name=\"keywords\" content=\"Projekt 6\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"/assets/Img/style.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css\" type=\"text/css\" />
    <link href=\"https://fonts.googleapis.com/css?family=Pangolin\" rel=\"stylesheet\">


    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
    <script src=\"/assets/js/jquery.scrollTo.min.js\"></script>
    <script src=\"/assets/js/animation.js\"></script>
</head>

<body>
<div class=\"dimness\" ></div>
<div id=\"loginPanel\">

    <div class=\"login-page\">
        <div class=\"form\">
            <form class=\"login-form\">
                <input type=\"text\" placeholder=\"username\"/>
                <input type=\"password\" placeholder=\"password\"/>
                <button class=\"start\" >login</button>
                <p class=\"message\">Not registered? <a href=\"#\" id=\"registerAnimation\">Create an account</a></p>
            </form>
        </div>
    </div>
</div>
<div class=\"register-page\">
    <div class=\"form\">
        <form class=\"login-form \">
            <input type=\"text\" placeholder=\"name\"/>
            <input type=\"password\" placeholder=\"password\"/>
            <input type=\"password\" placeholder=\"password\"/>
            <input type=\"text\" placeholder=\"email address\"/>
            <button>create</button>
            <p class=\"message\">Already registered? <a href=\"#\" id=\"loginAnimation\">Sign In</a></p>
        </form>
    </div>
</div>
<div class=\"account-page\">
    <div class=\"account-page-content container-fluid\">
        <div class=\"account-pageMenu row\">
            <div class=\"account-pageMenu0 col-sm-4\"><a href=\"#\" class=\"registerAnimationMenu0\">EDIT ACCOUNT</a></div>
            <div class=\"account-pageMenu1 col-sm-4\"><a href=\"#\" class=\"registerAnimationMenu1\" style=\"font-size: 25px;\">USER ACCOUNT</a></div>
            <div class=\"account-pageMenu2 col-sm-4\"><a href=\"#\" class=\"registerAnimationMenu2\">RANKING</a></div>
        </div>

        <div class=\"account-pageContent1\">
            <div class=\"account\">NICK: zdzisia</div>
            <div class=\"account\">RANKING POSITION: 1564</div>
            <div class=\"account\">SCORE: 534jp3</div>
            <input class=\"accountButtonLogOut account\"type=\"submit\" value=\"LOGOUT\"/>
        </div>
        <div class=\"account-pageContent0\">
            <div class=\"account infoAccount\"><p>NICK: root</p>
                E-MAIL: root@wp.pl
            </div>
            <input class=\"accountButton account CHANGELOGIN\"type=\"submit\" value=\"Change LOGIN\"/>
            <input class=\"accountButton account CHANGEPASSWORD\"type=\"submit\" value=\"CHANGE PASSWORD\"/>
            <input class=\"accountButton account CHANGEE-MAIL\"type=\"submit\" value=\"CHANGE E-MAIL\"/>
        </div>
        <div class=\"account-pageContent2\">
            tu se jest ranking
        </div>
    </div>
    <div class=\"CHANGELOGIN-page\">
        <input class=\"Back account\"type=\"submit\" value=\"Back\"/>
        <div class=\"form formChange\">
            <form class=\"formCHANGELOGIN\">
                <input type=\"text\" placeholder=\"New Login\"/>
                <button class=\"Change LOGIN\" >Change</button>
            </form>
        </div>
    </div>
    <div class=\"CHANGEPASSWORD-page\">
        <input class=\"Back account\"type=\"submit\" value=\"Back\"/>
        <div class=\"form formChange\">
            <form class=\"formCHANGEPASSWORD\">
                <input type=\"password\" placeholder=\"New Password\"/>
                <input type=\"password\" placeholder=\"Repeat New Password\"/>
                <button class=\"Change PASSWORD\" >Change</button>
            </form>
        </div>
    </div>
    <div class=\"CHANGEE-MAIL-page\">
        <input class=\"Back account\"type=\"submit\" value=\"Back\"/>
        <div class=\"form formChange\">
            <form class=\"formCHANGEE-MAIL\">
                <input type=\"text\" placeholder=\"New E-Mail\"/>
                <button class=\"Change MAIL\" >Change</button>
            </form>
        </div>
    </div>
</div>
<div class=\"options-page\">
    <input class=\"levelOfDifficulty\" id=\"EASY\" type=\"submit\" value=\"EASY\"/>
    <input class=\"levelOfDifficulty\" id=\"NORMAL\" type=\"submit\" value=\"NORMAL\"/>
    <input class=\"levelOfDifficulty\" id=\"HARD\" type=\"submit\" value=\"HARD\"/>
</div>

<div id=\"gamePanel\">
    <div class=\"container-fluid\">
        <div class=\"row\">

            <div class=\"col-sm-3\">
                <div class=\"topDiv\" >
                    <a href='#' id='account'> YOUR ACCOUNT</a>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"topDiv\">
                    <p class=\"score\">SCORE</p>
                    9608
                </div>
            </div>
            <div class=\"col-sm-3\">
                <div class=\"topDiv\">
                    <a href=\"#\"id=\"options\" >DIFFICULT</a>
                </div>
            </div>
            <div class=\"offset-xl-2 col-xl-1 offset-md-2 col-md-2\">
                <div class=\"window\">12
                </div>
            </div>
            <div class=\"col-xl-6 col-md-4\">
                <div class=\"window\">jp
                </div>
            </div>
            <div class=\"col-xl-1 col-md-2\">
                <div class=\"window\">12
                </div>
            </div>
            <div class=\"col-xl-12\">
                <img src=\"/assets/Img/arrow.png\">
            </div>

            <div class=\"offset-xl-2 col-xl-1 offset-md-2 col-md-2\">
                <div class=\"window\">12
                </div>
            </div>
            <div class=\"col-xl-6 col-md-4\">
                <div class=\"window\">jp
                </div>
            </div>
            <div class=\"col-xl-1  col-md-2 \">
                <div class=\"window\">12
                </div>
            </div>
            <div class=\"offset-md-2 col-md-8 offsset-md-2\">
                <div class=\"window langList\">jp
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
", "base.html.twig", "/var/www/html/masterlangg/templates/base.html.twig");
    }
}
