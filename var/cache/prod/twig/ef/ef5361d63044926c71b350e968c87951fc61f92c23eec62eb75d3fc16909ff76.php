<?php

/* product/index.html.twig */
class __TwigTemplate_91a795e05e51b7385a3e729bd5cb2637ac4ed7c43f8c79ada5860a2902e40251 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Hello ";
        echo twig_escape_filter($this->env, ($context["controller_name"] ?? null), "html", null, true);
        echo "!";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello ";
        // line 12
        echo twig_escape_filter($this->env, ($context["controller_name"] ?? null), "html", null, true);
        echo "! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("src/Controller/ProductController.php", 0), "html", null, true);
        echo "\">src/Controller/ProductController.php</a></code></li>
        <li>Your template at <code><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("templates/product/index.html.twig", 0), "html", null, true);
        echo "\">templates/product/index.html.twig</a></code></li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 17,  59 => 16,  52 => 12,  44 => 6,  41 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "product/index.html.twig", "/var/www/html/masterlangg/templates/product/index.html.twig");
    }
}
