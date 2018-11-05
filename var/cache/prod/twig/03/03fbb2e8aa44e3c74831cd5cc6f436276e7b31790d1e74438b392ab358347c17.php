<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_53c77d9aee9abd1a2b46b04b21af4c2808341c3987a5960ec52e3fce35dea438 extends Twig_Template
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
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/FormTable/button_row.html.php", "/var/www/html/masterlangg/vendor/symfony/framework-bundle/Resources/views/FormTable/button_row.html.php");
    }
}
