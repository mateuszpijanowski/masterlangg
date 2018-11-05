<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_7bfe27d412a7c129a868177aacf34a216ba4c2be320ebf6aa0b82dd15cfaf1f6 extends Twig_Template
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
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error.atom.twig", "/var/www/html/masterlangg/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}
