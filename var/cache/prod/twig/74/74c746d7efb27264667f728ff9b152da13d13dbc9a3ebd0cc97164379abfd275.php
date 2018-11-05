<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_65916a9e144d25118046b0c993af52b906fec6ebd76a94c9eb7d70c76012efab extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
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
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('reset_row', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('checkbox_row', $context, $blocks);
    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        // line 6
        if ((($context["label"] ?? null) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !(isset($context["expanded"]) || array_key_exists("expanded", $context)) ||  !($context["expanded"] ?? null))) {
                // line 10
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        // line 18
        echo "col-sm-2";
    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        // line 24
        if (((isset($context["expanded"]) || array_key_exists("expanded", $context)) && ($context["expanded"] ?? null))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            $context["widget_attr"] = array();
            // line 28
            if ( !twig_test_empty(($context["help"] ?? null))) {
                // line 29
                $context["widget_attr"] = array("attr" => array("aria-describedby" => (($context["id"] ?? null) . "_help")));
            }
            // line 31
            echo "<div class=\"form-group row";
            if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            // line 33
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
            // line 36
            echo "</div>
    ";
            // line 37
            echo "</div>";
        }
    }

    // line 41
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        // line 42
        $context["widget_attr"] = array();
        // line 43
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 44
            $context["widget_attr"] = array("attr" => array("aria-describedby" => (($context["id"] ?? null) . "_help")));
        }
        // line 46
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 47
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 49
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 52
        echo "</div>
        </div>
";
        // line 54
        echo "</fieldset>";
    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        // line 58
        echo "<div class=\"form-group row\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 62
        echo "</div>";
        // line 63
        echo "</div>";
    }

    // line 66
    public function block_reset_row($context, array $blocks = array())
    {
        // line 67
        echo "<div class=\"form-group row\">";
        // line 68
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 69
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 71
        echo "</div>";
        // line 72
        echo "</div>";
    }

    // line 75
    public function block_form_group_class($context, array $blocks = array())
    {
        // line 76
        echo "col-sm-10";
    }

    // line 79
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 80
        echo "<div class=\"form-group row\">";
        // line 81
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 82
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 86
        echo "</div>";
        // line 87
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  265 => 87,  263 => 86,  261 => 85,  259 => 84,  257 => 83,  253 => 82,  249 => 81,  247 => 80,  244 => 79,  240 => 76,  237 => 75,  233 => 72,  231 => 71,  229 => 70,  225 => 69,  221 => 68,  219 => 67,  216 => 66,  212 => 63,  210 => 62,  208 => 61,  204 => 60,  200 => 59,  198 => 58,  195 => 57,  191 => 54,  187 => 52,  185 => 51,  183 => 50,  179 => 49,  177 => 48,  172 => 47,  169 => 46,  166 => 44,  164 => 43,  162 => 42,  159 => 41,  154 => 37,  151 => 36,  149 => 35,  147 => 34,  143 => 33,  141 => 32,  135 => 31,  132 => 29,  130 => 28,  128 => 27,  125 => 25,  123 => 24,  120 => 23,  116 => 18,  113 => 17,  108 => 13,  106 => 12,  103 => 10,  101 => 9,  96 => 7,  94 => 6,  91 => 5,  87 => 79,  84 => 78,  82 => 75,  79 => 74,  77 => 66,  74 => 65,  72 => 57,  69 => 56,  67 => 41,  64 => 40,  62 => 23,  59 => 22,  56 => 20,  54 => 17,  51 => 16,  49 => 5,  46 => 4,  43 => 2,  18 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bootstrap_4_horizontal_layout.html.twig", "/var/www/html/masterlangg/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
