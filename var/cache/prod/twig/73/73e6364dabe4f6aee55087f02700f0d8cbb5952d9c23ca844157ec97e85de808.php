<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_f85aec430c4973b78414ce2841594c46d451d9155dbb4c0ab99fd04cf5c3c8c8 extends Twig_Template
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
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/hidden_row.html.php", "/var/www/html/masterlangg/vendor/symfony/framework-bundle/Resources/views/Form/hidden_row.html.php");
    }
}
