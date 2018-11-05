<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_cf50ac07c56163333740a6e45b72a197922d6a767bfa11f5dbfe0d95cfc96b4c extends Twig_Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "function", array())) {
            // line 2
            echo "at ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "class", array()) . twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "type", array())) . twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "function", array()));
            echo "(";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatArgsAsText(twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "args", array()));
            echo ")";
        }
        // line 4
        if (( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "file", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "file", array()), "")) : (""))) &&  !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "line", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "line", array()), "")) : (""))))) {
            // line 5
            echo ((twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "function", array())) ? ("
     (") : ("at "));
            echo twig_replace_filter(strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatFile(twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "file", array()), twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "line", array()))), array((" at line " . twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "line", array())) => ""));
            echo ":";
            echo twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "line", array());
            echo ((twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "function", array())) ? (")") : (""));
        }
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  32 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/trace.txt.twig", "/var/www/html/masterlangg/vendor/symfony/twig-bundle/Resources/views/Exception/trace.txt.twig");
    }
}
