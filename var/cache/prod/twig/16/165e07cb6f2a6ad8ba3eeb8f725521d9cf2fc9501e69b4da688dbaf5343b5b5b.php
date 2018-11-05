<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_1c1a23e3eda4d72949083671e1a1ea85f9098f1136acafa2b7cd84b7bb2fef80 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'money_widget' => array($this, 'block_money_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'file_widget' => array($this, 'block_file_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_errors' => array($this, 'block_form_label_errors'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_help' => array($this, 'block_form_help'),
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
        $this->displayBlock('money_widget', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('date_widget', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('time_widget', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 107
        echo "
";
        // line 108
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 116
        echo "
";
        // line 117
        $this->displayBlock('file_widget', $context, $blocks);
        // line 128
        echo "
";
        // line 129
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 140
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 147
        $this->displayBlock('button_widget', $context, $blocks);
        // line 151
        echo "
";
        // line 152
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 166
        echo "
";
        // line 167
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 193
        echo "
";
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('form_label', $context, $blocks);
        // line 226
        echo "
";
        // line 227
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 264
        echo "
";
        // line 266
        echo "
";
        // line 267
        $this->displayBlock('form_row', $context, $blocks);
        // line 281
        echo "
";
        // line 283
        echo "
";
        // line 284
        $this->displayBlock('form_errors', $context, $blocks);
        // line 295
        echo "
";
        // line 297
        echo "
";
        // line 298
        $this->displayBlock('form_help', $context, $blocks);
    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        // line 6
        $context["prepend"] =  !(is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["money_pattern"] ?? null)) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = "{{") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)));
        // line 7
        $context["append"] =  !(is_string($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["money_pattern"] ?? null)) && is_string($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = "}}") && ('' === $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 === substr($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57, -strlen($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9))));
        // line 8
        if ((($context["prepend"] ?? null) || ($context["append"] ?? null))) {
            // line 9
            echo "<div class=\"input-group";
            echo twig_escape_filter($this->env, (((isset($context["group_class"]) || array_key_exists("group_class", $context))) ? (_twig_default_filter(($context["group_class"] ?? null), "")) : ("")), "html", null, true);
            echo "\">";
            // line 10
            if (($context["prepend"] ?? null)) {
                // line 11
                echo "<div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">";
                // line 12
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                echo "</span>
                </div>";
            }
            // line 15
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 16
            if (($context["append"] ?? null)) {
                // line 17
                echo "<div class=\"input-group-append\">
                    <span class=\"input-group-text\">";
                // line 18
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                echo "</span>
                </div>";
            }
            // line 21
            echo "</div>";
        } else {
            // line 23
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 27
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 28
        if (((($context["widget"] ?? null) != "single_text") &&  !($context["valid"] ?? null))) {
            // line 29
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 30
            $context["valid"] = true;
        }
        // line 32
        $this->displayParentBlock("datetime_widget", $context, $blocks);
    }

    // line 35
    public function block_date_widget($context, array $blocks = array())
    {
        // line 36
        if (((($context["widget"] ?? null) != "single_text") &&  !($context["valid"] ?? null))) {
            // line 37
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 38
            $context["valid"] = true;
        }
        // line 40
        $this->displayParentBlock("date_widget", $context, $blocks);
    }

    // line 43
    public function block_time_widget($context, array $blocks = array())
    {
        // line 44
        if (((($context["widget"] ?? null) != "single_text") &&  !($context["valid"] ?? null))) {
            // line 45
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 46
            $context["valid"] = true;
        }
        // line 48
        $this->displayParentBlock("time_widget", $context, $blocks);
    }

    // line 51
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        // line 52
        if (((($context["widget"] ?? null) != "single_text") &&  !($context["valid"] ?? null))) {
            // line 53
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 54
            $context["valid"] = true;
        }
        // line 56
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 60
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 61
            if (($context["with_years"] ?? null)) {
                // line 62
                echo "<div class=\"col-auto\">
                ";
                // line 63
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", array()), 'label');
                echo "
                ";
                // line 64
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", array()), 'widget');
                echo "
            </div>";
            }
            // line 67
            if (($context["with_months"] ?? null)) {
                // line 68
                echo "<div class=\"col-auto\">
                ";
                // line 69
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", array()), 'label');
                echo "
                ";
                // line 70
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", array()), 'widget');
                echo "
            </div>";
            }
            // line 73
            if (($context["with_weeks"] ?? null)) {
                // line 74
                echo "<div class=\"col-auto\">
                ";
                // line 75
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", array()), 'label');
                echo "
                ";
                // line 76
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", array()), 'widget');
                echo "
            </div>";
            }
            // line 79
            if (($context["with_days"] ?? null)) {
                // line 80
                echo "<div class=\"col-auto\">
                ";
                // line 81
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", array()), 'label');
                echo "
                ";
                // line 82
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", array()), 'widget');
                echo "
            </div>";
            }
            // line 85
            if (($context["with_hours"] ?? null)) {
                // line 86
                echo "<div class=\"col-auto\">
                ";
                // line 87
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", array()), 'label');
                echo "
                ";
                // line 88
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", array()), 'widget');
                echo "
            </div>";
            }
            // line 91
            if (($context["with_minutes"] ?? null)) {
                // line 92
                echo "<div class=\"col-auto\">
                ";
                // line 93
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", array()), 'label');
                echo "
                ";
                // line 94
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", array()), 'widget');
                echo "
            </div>";
            }
            // line 97
            if (($context["with_seconds"] ?? null)) {
                // line 98
                echo "<div class=\"col-auto\">
                ";
                // line 99
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", array()), 'label');
                echo "
                ";
                // line 100
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", array()), 'widget');
                echo "
            </div>";
            }
            // line 103
            if (($context["with_invert"] ?? null)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "invert", array()), 'widget');
            }
            // line 104
            echo "</div>";
        }
    }

    // line 108
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 109
        echo "<div class=\"input-group\">";
        // line 110
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 111
        echo "<div class=\"input-group-append\">
            <span class=\"input-group-text\">%</span>
        </div>
    </div>";
    }

    // line 117
    public function block_file_widget($context, array $blocks = array())
    {
        // line 118
        echo "<";
        echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter(($context["element"] ?? null), "div")) : ("div")), "html", null, true);
        echo " class=\"custom-file\">";
        // line 119
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "file")) : ("file"));
        // line 120
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 121
        echo "<label for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"custom-file-label\">";
        // line 122
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", array(), "any", true, true)) {
            // line 123
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", array())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", array()), array(), ($context["translation_domain"] ?? null)))), "html", null, true);
        }
        // line 125
        echo "</label>
    </";
        // line 126
        echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter(($context["element"] ?? null), "div")) : ("div")), "html", null, true);
        echo ">
";
    }

    // line 129
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 130
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || (($context["type"] ?? null) != "hidden"))) {
            // line 131
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . ((((((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "")) : ("")) == "file")) ? (" custom-file-input") : (" form-control"))))));
        }
        // line 133
        if (((isset($context["type"]) || array_key_exists("type", $context)) && ((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color")))) {
            // line 134
            echo "        ";
            // line 135
            $context["required"] = false;
        }
        // line 137
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 140
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 141
        if ( !($context["valid"] ?? null)) {
            // line 142
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " is-invalid"))));
            // line 143
            echo "    ";
        }
        // line 144
        $this->displayParentBlock("widget_attributes", $context, $blocks);
    }

    // line 147
    public function block_button_widget($context, array $blocks = array())
    {
        // line 148
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 149
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 152
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 153
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 154
        if (twig_in_filter("checkbox-custom", ($context["parent_label_class"] ?? null))) {
            // line 155
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " custom-control-input"))));
            // line 156
            echo "<div class=\"custom-control custom-checkbox";
            echo ((twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) ? (" custom-control-inline") : (""));
            echo "\">";
            // line 157
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 158
            echo "</div>";
        } else {
            // line 160
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
            // line 161
            echo "<div class=\"form-check";
            echo ((twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) ? (" form-check-inline") : (""));
            echo "\">";
            // line 162
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 163
            echo "</div>";
        }
    }

    // line 167
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 168
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 169
        if (twig_in_filter("radio-custom", ($context["parent_label_class"] ?? null))) {
            // line 170
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " custom-control-input"))));
            // line 171
            echo "<div class=\"custom-control custom-radio";
            echo ((twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" custom-control-inline") : (""));
            echo "\">";
            // line 172
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 173
            echo "</div>";
        } else {
            // line 175
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
            // line 176
            echo "<div class=\"form-check";
            echo ((twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" form-check-inline") : (""));
            echo "\">";
            // line 177
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 178
            echo "</div>";
        }
    }

    // line 182
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 183
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 185
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->source,             // line 186
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>             // line 187
($context["choice_translation_domain"] ?? null), "valid" =>             // line 188
($context["valid"] ?? null)));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "</div>";
    }

    // line 196
    public function block_form_label($context, array $blocks = array())
    {
        // line 197
        if ( !(($context["label"] ?? null) === false)) {
            // line 198
            if (((isset($context["compound"]) || array_key_exists("compound", $context)) && ($context["compound"] ?? null))) {
                // line 199
                $context["element"] = "legend";
                // line 200
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            } else {
                // line 202
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("for" => ($context["id"] ?? null)));
            }
            // line 204
            if (($context["required"] ?? null)) {
                // line 205
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 207
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 208
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 209
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), array("%name%" =>                     // line 210
($context["name"] ?? null), "%id%" =>                     // line 211
($context["id"] ?? null)));
                } else {
                    // line 214
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 217
            echo "<";
            echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? null)) {
                $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = array("attr" => ($context["label_attr"] ?? null));
                if (!is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.', 217, $this->source);
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)))), "html", null, true);
            $this->displayBlock('form_label_errors', $context, $blocks);
            echo "</";
            echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            echo ">";
        } else {
            // line 219
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
                // line 220
                echo "<div id=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "_errors\" class=\"mb-2\">";
                // line 221
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
                // line 222
                echo "</div>";
            }
        }
    }

    // line 217
    public function block_form_label_errors($context, array $blocks = array())
    {
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
    }

    // line 227
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        // line 229
        if ((isset($context["widget"]) || array_key_exists("widget", $context))) {
            // line 230
            $context["is_parent_custom"] = ((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context)) && (twig_in_filter("checkbox-custom", ($context["parent_label_class"] ?? null)) || twig_in_filter("radio-custom", ($context["parent_label_class"] ?? null))));
            // line 231
            echo "        ";
            $context["is_custom"] = (twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true) && (twig_in_filter("checkbox-custom", twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array())) || twig_in_filter("radio-custom", twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()))));
            // line 232
            if ((($context["is_parent_custom"] ?? null) || ($context["is_custom"] ?? null))) {
                // line 233
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " custom-control-label"))));
            } else {
                // line 235
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-check-label"))));
            }
            // line 237
            if ( !($context["compound"] ?? null)) {
                // line 238
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("for" => ($context["id"] ?? null)));
            }
            // line 240
            if (($context["required"] ?? null)) {
                // line 241
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 243
            if ((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) {
                // line 244
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(twig_replace_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)), array("checkbox-inline" => "", "radio-inline" => "", "checkbox-custom" => "", "radio-custom" => "")))));
            }
            // line 246
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 247
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 248
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), array("%name%" =>                     // line 249
($context["name"] ?? null), "%id%" =>                     // line 250
($context["id"] ?? null)));
                } else {
                    // line 253
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 257
            echo ($context["widget"] ?? null);
            echo "
        <label";
            // line 258
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 259
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null))))) : ("")), "html", null, true);
            // line 260
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 261
            echo "</label>";
        }
    }

    // line 267
    public function block_form_row($context, array $blocks = array())
    {
        // line 268
        if (((isset($context["compound"]) || array_key_exists("compound", $context)) && ($context["compound"] ?? null))) {
            // line 269
            $context["element"] = "fieldset";
        }
        // line 271
        $context["widget_attr"] = array();
        // line 272
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 273
            $context["widget_attr"] = array("attr" => array("aria-describedby" => (($context["id"] ?? null) . "_help")));
        }
        // line 275
        echo "<";
        echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter(($context["element"] ?? null), "div")) : ("div")), "html", null, true);
        echo " class=\"form-group\">";
        // line 276
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 277
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 278
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 279
        echo "</";
        echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter(($context["element"] ?? null), "div")) : ("div")), "html", null, true);
        echo ">";
    }

    // line 284
    public function block_form_errors($context, array $blocks = array())
    {
        // line 285
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 286
            echo "<span class=\"";
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                echo "invalid-feedback";
            } else {
                echo "alert alert-danger";
            }
            echo " d-block\">";
            // line 287
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 288
                echo "<span class=\"d-block\">
                    <span class=\"form-error-icon badge badge-danger text-uppercase\">";
                // line 289
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error", array(), "validators"), "html", null, true);
                echo "</span> <span class=\"form-error-message\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", array()), "html", null, true);
                echo "</span>
                </span>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 292
            echo "</span>";
        }
    }

    // line 298
    public function block_form_help($context, array $blocks = array())
    {
        // line 299
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 300
            echo "<small id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "_help\" class=\"form-text text-muted\">";
            // line 301
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 302
                echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
            } else {
                // line 304
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
            }
            // line 306
            echo "</small>";
        }
    }

    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  769 => 306,  766 => 304,  763 => 302,  761 => 301,  757 => 300,  755 => 299,  752 => 298,  747 => 292,  737 => 289,  734 => 288,  730 => 287,  722 => 286,  720 => 285,  717 => 284,  711 => 279,  709 => 278,  707 => 277,  705 => 276,  701 => 275,  698 => 273,  696 => 272,  694 => 271,  691 => 269,  689 => 268,  686 => 267,  681 => 261,  679 => 260,  677 => 259,  663 => 258,  659 => 257,  655 => 253,  652 => 250,  651 => 249,  650 => 248,  648 => 247,  646 => 246,  643 => 244,  641 => 243,  638 => 241,  636 => 240,  633 => 238,  631 => 237,  628 => 235,  625 => 233,  623 => 232,  620 => 231,  618 => 230,  616 => 229,  613 => 227,  607 => 217,  601 => 222,  599 => 221,  595 => 220,  593 => 219,  573 => 217,  569 => 214,  566 => 211,  565 => 210,  564 => 209,  562 => 208,  560 => 207,  557 => 205,  555 => 204,  552 => 202,  549 => 200,  547 => 199,  545 => 198,  543 => 197,  540 => 196,  536 => 191,  530 => 188,  529 => 187,  528 => 186,  527 => 185,  523 => 184,  519 => 183,  516 => 182,  511 => 178,  509 => 177,  505 => 176,  503 => 175,  500 => 173,  498 => 172,  494 => 171,  492 => 170,  490 => 169,  488 => 168,  485 => 167,  480 => 163,  478 => 162,  474 => 161,  472 => 160,  469 => 158,  467 => 157,  463 => 156,  461 => 155,  459 => 154,  457 => 153,  454 => 152,  450 => 149,  448 => 148,  445 => 147,  441 => 144,  438 => 143,  435 => 142,  433 => 141,  430 => 140,  426 => 137,  423 => 135,  421 => 134,  419 => 133,  416 => 131,  414 => 130,  411 => 129,  405 => 126,  402 => 125,  399 => 123,  397 => 122,  393 => 121,  391 => 120,  389 => 119,  385 => 118,  382 => 117,  375 => 111,  373 => 110,  371 => 109,  368 => 108,  363 => 104,  359 => 103,  354 => 100,  350 => 99,  347 => 98,  345 => 97,  340 => 94,  336 => 93,  333 => 92,  331 => 91,  326 => 88,  322 => 87,  319 => 86,  317 => 85,  312 => 82,  308 => 81,  305 => 80,  303 => 79,  298 => 76,  294 => 75,  291 => 74,  289 => 73,  284 => 70,  280 => 69,  277 => 68,  275 => 67,  270 => 64,  266 => 63,  263 => 62,  261 => 61,  257 => 60,  255 => 59,  252 => 57,  250 => 56,  247 => 54,  245 => 53,  243 => 52,  240 => 51,  236 => 48,  233 => 46,  231 => 45,  229 => 44,  226 => 43,  222 => 40,  219 => 38,  217 => 37,  215 => 36,  212 => 35,  208 => 32,  205 => 30,  203 => 29,  201 => 28,  198 => 27,  193 => 23,  190 => 21,  185 => 18,  182 => 17,  180 => 16,  178 => 15,  173 => 12,  170 => 11,  168 => 10,  164 => 9,  162 => 8,  160 => 7,  158 => 6,  155 => 5,  151 => 298,  148 => 297,  145 => 295,  143 => 284,  140 => 283,  137 => 281,  135 => 267,  132 => 266,  129 => 264,  127 => 227,  124 => 226,  122 => 196,  119 => 195,  116 => 193,  114 => 182,  111 => 181,  109 => 167,  106 => 166,  104 => 152,  101 => 151,  99 => 147,  97 => 140,  95 => 129,  92 => 128,  90 => 117,  87 => 116,  85 => 108,  82 => 107,  80 => 51,  77 => 50,  75 => 43,  72 => 42,  70 => 35,  67 => 34,  65 => 27,  62 => 26,  60 => 5,  57 => 4,  54 => 2,  18 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bootstrap_4_layout.html.twig", "/var/www/html/masterlangg/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_4_layout.html.twig");
    }
}
