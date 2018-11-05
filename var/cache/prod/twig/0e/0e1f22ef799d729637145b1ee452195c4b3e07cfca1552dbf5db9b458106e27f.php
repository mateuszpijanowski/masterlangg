<?php

/* @Twig/Exception/traces_text.html.twig */
class __TwigTemplate_5b80e2d43c7d323b8ae4bb8a79477d74169587774e6c95fae7e8ce5f34413471 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            '__internal_d5afdb4d416834b87583c682b00d8753600b7f187c0622c823982651738f61f9' => array($this, 'block___internal_d5afdb4d416834b87583c682b00d8753600b7f187c0622c823982651738f61f9'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<table class=\"trace trace-as-text\">
    <thead class=\"trace-head\">
        <tr>
            <th class=\"sf-toggle\" data-toggle-selector=\"#trace-text-";
        // line 4
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "\" data-toggle-initial=\"";
        echo (((1 == ($context["index"] ?? null))) ? ("display") : (""));
        echo "\">
                <h3 class=\"trace-class\">
                    ";
        // line 6
        if ((($context["num_exceptions"] ?? null) > 1)) {
            // line 7
            echo "                        <span class=\"text-muted\">[";
            echo twig_escape_filter($this->env, ((($context["num_exceptions"] ?? null) - ($context["index"] ?? null)) + 1), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, ($context["num_exceptions"] ?? null), "html", null, true);
            echo "]</span>
                    ";
        }
        // line 9
        echo "                    ";
        echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "class", array()), "\\")), "html", null, true);
        echo "
                    <span class=\"icon icon-close\">";
        // line 10
        echo twig_include($this->env, $context, "@Twig/images/icon-minus-square-o.svg");
        echo "</span>
                    <span class=\"icon icon-open\">";
        // line 11
        echo twig_include($this->env, $context, "@Twig/images/icon-plus-square-o.svg");
        echo "</span>
                </h3>
            </th>
        </tr>
    </thead>

    <tbody id=\"trace-text-";
        // line 17
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "\">
        <tr>
            <td>
                ";
        // line 20
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "trace", array()))) {
            // line 21
            echo "                <pre class=\"stacktrace\">";
            // line 22
            echo twig_escape_filter($this->env,             $this->renderBlock("__internal_d5afdb4d416834b87583c682b00d8753600b7f187c0622c823982651738f61f9", $context, $blocks), "html");
            // line 25
            echo "                </pre>
                ";
        }
        // line 27
        echo "            </td>
        </tr>
    </tbody>
</table>
";
    }

    // line 22
    public function block___internal_d5afdb4d416834b87583c682b00d8753600b7f187c0622c823982651738f61f9($context, array $blocks = array())
    {
        // line 23
        echo twig_include($this->env, $context, "@Twig/Exception/traces.txt.twig", array("exception" => ($context["exception"] ?? null), "format" => "html"), false);
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 23,  88 => 22,  80 => 27,  76 => 25,  74 => 22,  72 => 21,  70 => 20,  64 => 17,  55 => 11,  51 => 10,  46 => 9,  38 => 7,  36 => 6,  29 => 4,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/traces_text.html.twig", "/var/www/html/masterlangg/vendor/symfony/twig-bundle/Resources/views/Exception/traces_text.html.twig");
    }
}
