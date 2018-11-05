<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9f6c721858db6f5b9da4d7f0441e78a3a8e439fa5a1e69f18981ddab8dff6bc5 extends Twig_Template
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
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/form_rows.html.php", "/var/www/html/masterlangg/vendor/symfony/framework-bundle/Resources/views/Form/form_rows.html.php");
    }
}
