<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_1f675cff470506b6d65f3dac0960ce8be8ecca3e030cb8becd63407a1608be4b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('submit_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('reset_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('checkbox_row', $context, $blocks);
    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        // line 11
        if ((($context["label"] ?? null) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        // line 20
        echo "col-sm-2";
    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        // line 26
        $context["widget_attr"] = array();
        // line 27
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 28
            $context["widget_attr"] = array("attr" => array("aria-describedby" => (($context["id"] ?? null) . "_help")));
        }
        // line 30
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 32
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 36
        echo "</div>
";
        // line 37
        echo "</div>";
    }

    // line 40
    public function block_submit_row($context, array $blocks = array())
    {
        // line 41
        echo "<div class=\"form-group\">";
        // line 42
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 43
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 45
        echo "</div>";
        // line 46
        echo "</div>";
    }

    // line 49
    public function block_reset_row($context, array $blocks = array())
    {
        // line 50
        echo "<div class=\"form-group\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
    }

    // line 58
    public function block_form_group_class($context, array $blocks = array())
    {
        // line 59
        echo "col-sm-10";
    }

    // line 62
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 63
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 64
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 65
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 68
        echo "</div>";
        // line 69
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  231 => 69,  229 => 68,  227 => 67,  225 => 66,  221 => 65,  217 => 64,  211 => 63,  208 => 62,  204 => 59,  201 => 58,  197 => 55,  195 => 54,  193 => 53,  189 => 52,  185 => 51,  183 => 50,  180 => 49,  176 => 46,  174 => 45,  172 => 44,  168 => 43,  164 => 42,  162 => 41,  159 => 40,  155 => 37,  152 => 36,  150 => 35,  148 => 34,  146 => 33,  142 => 32,  140 => 31,  134 => 30,  131 => 28,  129 => 27,  127 => 26,  124 => 25,  120 => 20,  117 => 19,  112 => 15,  110 => 14,  105 => 12,  103 => 11,  100 => 10,  96 => 5,  94 => 4,  91 => 3,  87 => 62,  84 => 61,  82 => 58,  79 => 57,  77 => 49,  74 => 48,  72 => 40,  69 => 39,  67 => 25,  64 => 24,  61 => 22,  59 => 19,  56 => 18,  54 => 10,  51 => 9,  48 => 7,  46 => 3,  43 => 2,  18 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bootstrap_3_horizontal_layout.html.twig", "/var/www/html/masterlangg/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
