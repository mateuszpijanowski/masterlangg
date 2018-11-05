<?php

/* bootstrap_base_layout.html.twig */
class __TwigTemplate_02a25f69bf4e44e5b336d869ebf0fa4765ef5bc37a59777c023a0e06f47ac863 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_base_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
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
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('money_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('date_widget', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('time_widget', $context, $blocks);
        // line 104
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 142
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 146
        echo "
";
        // line 147
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 166
        echo "
";
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('choice_label', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 178
        echo "
";
        // line 179
        $this->displayBlock('radio_label', $context, $blocks);
        // line 182
        echo "
";
        // line 184
        echo "
";
        // line 185
        $this->displayBlock('button_row', $context, $blocks);
        // line 190
        echo "
";
        // line 191
        $this->displayBlock('choice_row', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('date_row', $context, $blocks);
        // line 200
        echo "
";
        // line 201
        $this->displayBlock('time_row', $context, $blocks);
        // line 205
        echo "
";
        // line 206
        $this->displayBlock('datetime_row', $context, $blocks);
    }

    // line 5
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 6
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
    }

    // line 10
    public function block_money_widget($context, array $blocks = array())
    {
        // line 11
        $context["prepend"] =  !(is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["money_pattern"] ?? null)) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = "{{") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)));
        // line 12
        echo "    ";
        $context["append"] =  !(is_string($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["money_pattern"] ?? null)) && is_string($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = "}}") && ('' === $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 === substr($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57, -strlen($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9))));
        // line 13
        echo "    ";
        if ((($context["prepend"] ?? null) || ($context["append"] ?? null))) {
            // line 14
            echo "        <div class=\"input-group";
            echo twig_escape_filter($this->env, (((isset($context["group_class"]) || array_key_exists("group_class", $context))) ? (_twig_default_filter(($context["group_class"] ?? null), "")) : ("")), "html", null, true);
            echo "\">
            ";
            // line 15
            if (($context["prepend"] ?? null)) {
                // line 16
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                echo "</span>
            ";
            }
            // line 18
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 19
            if (($context["append"] ?? null)) {
                // line 20
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                echo "</span>
            ";
            }
            // line 22
            echo "        </div>
    ";
        } else {
            // line 24
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 28
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 29
        echo "<div class=\"input-group\">";
        // line 30
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 31
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
    }

    // line 35
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 36
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 37
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 40
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array()), 'errors');
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", array()), 'errors');
            // line 44
            echo "<div class=\"sr-only\">";
            // line 45
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array(), "any", false, true), "year", array(), "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array()), "year", array()), 'label');
            }
            // line 46
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array(), "any", false, true), "month", array(), "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array()), "month", array()), 'label');
            }
            // line 47
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array(), "any", false, true), "day", array(), "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array()), "day", array()), 'label');
            }
            // line 48
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", array(), "any", false, true), "hour", array(), "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", array()), "hour", array()), 'label');
            }
            // line 49
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", array(), "any", false, true), "minute", array(), "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", array()), "minute", array()), 'label');
            }
            // line 50
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", array(), "any", false, true), "second", array(), "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", array()), "second", array()), 'label');
            }
            // line 51
            echo "</div>";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array()), 'widget', array("datetime" => true));
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", array()), 'widget', array("datetime" => true));
            // line 55
            echo "</div>";
        }
    }

    // line 59
    public function block_date_widget($context, array $blocks = array())
    {
        // line 60
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 61
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 63
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 64
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !($context["datetime"] ?? null))) {
                // line 65
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 67
            if ( !(($context["label"] ?? null) === false)) {
                // line 68
                echo "<div class=\"sr-only\">
                ";
                // line 69
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", array()), 'label');
                echo "
                ";
                // line 70
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", array()), 'label');
                echo "
                ";
                // line 71
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", array()), 'label');
                echo "
            </div>";
            }
            // line 75
            echo twig_replace_filter(($context["date_pattern"] ?? null), array("{{ year }}" =>             // line 76
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", array()), 'widget'), "{{ month }}" =>             // line 77
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", array()), 'widget'), "{{ day }}" =>             // line 78
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", array()), 'widget')));
            // line 80
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !($context["datetime"] ?? null))) {
                // line 81
                echo "</div>";
            }
        }
    }

    // line 86
    public function block_time_widget($context, array $blocks = array())
    {
        // line 87
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 88
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 90
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 91
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) || (false == ($context["datetime"] ?? null)))) {
                // line 92
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 94
            if ( !(($context["label"] ?? null) === false)) {
                echo "<div class=\"sr-only\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", array()), 'label');
                echo "</div>";
            }
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", array()), 'widget');
            // line 96
            if (($context["with_minutes"] ?? null)) {
                echo ":";
                if ( !(($context["label"] ?? null) === false)) {
                    echo "<div class=\"sr-only\">";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", array()), 'label');
                    echo "</div>";
                }
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", array()), 'widget');
            }
            // line 97
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                if ( !(($context["label"] ?? null) === false)) {
                    echo "<div class=\"sr-only\">";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "second", array()), 'label');
                    echo "</div>";
                }
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "second", array()), 'widget');
            }
            // line 98
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) || (false == ($context["datetime"] ?? null)))) {
                // line 99
                echo "</div>";
            }
        }
    }

    // line 104
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        // line 105
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 106
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 108
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 109
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 110
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 111
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 112
            echo twig_escape_filter($this->env, (((isset($context["table_class"]) || array_key_exists("table_class", $context))) ? (_twig_default_filter(($context["table_class"] ?? null), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\" role=\"presentation\">
                    <thead>
                    <tr>";
            // line 115
            if (($context["with_years"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", array()), 'label');
                echo "</th>";
            }
            // line 116
            if (($context["with_months"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", array()), 'label');
                echo "</th>";
            }
            // line 117
            if (($context["with_weeks"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 118
            if (($context["with_days"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", array()), 'label');
                echo "</th>";
            }
            // line 119
            if (($context["with_hours"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", array()), 'label');
                echo "</th>";
            }
            // line 120
            if (($context["with_minutes"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 121
            if (($context["with_seconds"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 122
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 126
            if (($context["with_years"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", array()), 'widget');
                echo "</td>";
            }
            // line 127
            if (($context["with_months"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", array()), 'widget');
                echo "</td>";
            }
            // line 128
            if (($context["with_weeks"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 129
            if (($context["with_days"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", array()), 'widget');
                echo "</td>";
            }
            // line 130
            if (($context["with_hours"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 131
            if (($context["with_minutes"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 132
            if (($context["with_seconds"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 133
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 137
            if (($context["with_invert"] ?? null)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "invert", array()), 'widget');
            }
            // line 138
            echo "</div>";
        }
    }

    // line 142
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 143
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 144
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 147
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 148
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 150
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 151
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 152
($context["choice_translation_domain"] ?? null)));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 156
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 157
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 158
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 159
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 160
($context["choice_translation_domain"] ?? null)));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "</div>";
        }
    }

    // line 169
    public function block_choice_label($context, array $blocks = array())
    {
        // line 171
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "", "checkbox-custom" => "", "radio-custom" => "")))));
        // line 172
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 175
    public function block_checkbox_label($context, array $blocks = array())
    {
        // line 176
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 179
    public function block_radio_label($context, array $blocks = array())
    {
        // line 180
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 185
    public function block_button_row($context, array $blocks = array())
    {
        // line 186
        echo "<div class=\"form-group\">";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 188
        echo "</div>";
    }

    // line 191
    public function block_choice_row($context, array $blocks = array())
    {
        // line 192
        $context["force_error"] = true;
        // line 193
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 196
    public function block_date_row($context, array $blocks = array())
    {
        // line 197
        $context["force_error"] = true;
        // line 198
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 201
    public function block_time_row($context, array $blocks = array())
    {
        // line 202
        $context["force_error"] = true;
        // line 203
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 206
    public function block_datetime_row($context, array $blocks = array())
    {
        // line 207
        $context["force_error"] = true;
        // line 208
        $this->displayBlock("form_row", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "bootstrap_base_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  603 => 208,  601 => 207,  598 => 206,  594 => 203,  592 => 202,  589 => 201,  585 => 198,  583 => 197,  580 => 196,  576 => 193,  574 => 192,  571 => 191,  567 => 188,  565 => 187,  563 => 186,  560 => 185,  556 => 180,  553 => 179,  549 => 176,  546 => 175,  542 => 172,  540 => 171,  537 => 169,  532 => 163,  526 => 160,  525 => 159,  524 => 158,  520 => 157,  516 => 156,  509 => 152,  508 => 151,  507 => 150,  503 => 149,  501 => 148,  498 => 147,  494 => 144,  492 => 143,  489 => 142,  484 => 138,  480 => 137,  475 => 133,  469 => 132,  463 => 131,  457 => 130,  451 => 129,  445 => 128,  439 => 127,  433 => 126,  428 => 122,  422 => 121,  416 => 120,  410 => 119,  404 => 118,  398 => 117,  392 => 116,  386 => 115,  381 => 112,  378 => 111,  376 => 110,  372 => 109,  370 => 108,  367 => 106,  365 => 105,  362 => 104,  356 => 99,  354 => 98,  344 => 97,  334 => 96,  332 => 95,  326 => 94,  321 => 92,  319 => 91,  317 => 90,  314 => 88,  312 => 87,  309 => 86,  303 => 81,  301 => 80,  299 => 78,  298 => 77,  297 => 76,  296 => 75,  291 => 71,  287 => 70,  283 => 69,  280 => 68,  278 => 67,  273 => 65,  271 => 64,  269 => 63,  266 => 61,  264 => 60,  261 => 59,  256 => 55,  254 => 54,  252 => 53,  250 => 51,  246 => 50,  242 => 49,  238 => 48,  234 => 47,  230 => 46,  226 => 45,  224 => 44,  222 => 42,  220 => 41,  216 => 40,  214 => 39,  211 => 37,  209 => 36,  206 => 35,  201 => 31,  199 => 30,  197 => 29,  194 => 28,  189 => 24,  185 => 22,  179 => 20,  177 => 19,  175 => 18,  169 => 16,  167 => 15,  162 => 14,  159 => 13,  156 => 12,  154 => 11,  151 => 10,  147 => 7,  145 => 6,  142 => 5,  138 => 206,  135 => 205,  133 => 201,  130 => 200,  128 => 196,  125 => 195,  123 => 191,  120 => 190,  118 => 185,  115 => 184,  112 => 182,  110 => 179,  107 => 178,  105 => 175,  102 => 174,  100 => 169,  97 => 168,  94 => 166,  92 => 147,  89 => 146,  87 => 142,  85 => 104,  83 => 86,  80 => 85,  78 => 59,  75 => 58,  73 => 35,  70 => 34,  68 => 28,  65 => 27,  63 => 10,  60 => 9,  58 => 5,  55 => 4,  52 => 2,  18 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bootstrap_base_layout.html.twig", "/var/www/html/masterlangg/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_base_layout.html.twig");
    }
}
