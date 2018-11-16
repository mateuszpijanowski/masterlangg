<?php

/* basepassword.html.twig */
class __TwigTemplate_1b8a18e093a0cb06a23134714e238c2e95ef5306ad39b6140660377efb5e24e2 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basepassword.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basepassword.html.twig"));

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
\t<script src=\"/assets/js/animation2.js\"></script>



</head>
<body>
<div class=\"dimness\" ></div>
<div id=\"loginPanel\">
<div class=\"account-page\">
\t\t<div class=\"CHANGEPASSWORD-page\">
\t\t\t<input class=\"Back account\"type=\"submit\" value=\"Back\"/>
\t\t\t<p>User ID: ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "</p>
\t\t\t<p>User name: ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["nick"]) || array_key_exists("nick", $context) ? $context["nick"] : (function () { throw new Twig_Error_Runtime('Variable "nick" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "</p>
\t\t\t<div class=\"form formChange\">
\t\t\t\t<form class=\"formCHANGEPASSWORD\">
\t\t\t\t\t<input type=\"password\" class=\"ChangePASSWORD1\" placeholder=\"New Password\"/>
\t\t\t\t\t<input type=\"password\" class=\"ChangePASSWORD2\" placeholder=\"Repeat New Password\"/>
\t\t\t\t\t<p class=\"error\" id=\"error1\"><p>
\t\t\t\t\t<button id=\"ChangePASSWORD\" >Change</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
</div>



</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "basepassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 31,  60 => 30,  29 => 1,);
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
\t<script src=\"/assets/js/animation2.js\"></script>



</head>
<body>
<div class=\"dimness\" ></div>
<div id=\"loginPanel\">
<div class=\"account-page\">
\t\t<div class=\"CHANGEPASSWORD-page\">
\t\t\t<input class=\"Back account\"type=\"submit\" value=\"Back\"/>
\t\t\t<p>User ID: {{ id }}</p>
\t\t\t<p>User name: {{ nick }}</p>
\t\t\t<div class=\"form formChange\">
\t\t\t\t<form class=\"formCHANGEPASSWORD\">
\t\t\t\t\t<input type=\"password\" class=\"ChangePASSWORD1\" placeholder=\"New Password\"/>
\t\t\t\t\t<input type=\"password\" class=\"ChangePASSWORD2\" placeholder=\"Repeat New Password\"/>
\t\t\t\t\t<p class=\"error\" id=\"error1\"><p>
\t\t\t\t\t<button id=\"ChangePASSWORD\" >Change</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
</div>



</body>
</html>
", "basepassword.html.twig", "/var/www/html/masterlangg/templates/basepassword.html.twig");
    }
}
