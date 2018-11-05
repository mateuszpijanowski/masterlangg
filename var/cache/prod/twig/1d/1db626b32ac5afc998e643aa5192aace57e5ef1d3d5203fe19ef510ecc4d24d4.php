<?php

/* @Swiftmailer/Collector/swiftmailer.html.twig */
class __TwigTemplate_7175427cb188a4c22e24708333c7762207d3dfc035cb7ded083cd1e59134965b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Swiftmailer/Collector/swiftmailer.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter(($context["profiler_markup_version"] ?? null), 1)) : (1));
        // line 5
        echo "
    ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messageCount", array())) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            if ((($context["profiler_markup_version"] ?? null) == 1)) {
                // line 9
                echo "                <img width=\"23\" height=\"28\" alt=\"Swiftmailer\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAcCAYAAACK7SRjAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0NEOTU1MjM0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0NEOTU1MjQ0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoxMEQ5OTQ5QzQ5OEMxMUUwODc3MkE1MTY4ODBDMzEzNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3Q0Q5NTUyMjQ5OEUxMUUwODc3MkE1MTY4ODBDMzEzNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PpkRnSAAAAJ0SURBVHjaYvz//z8DrQATAw3BqOFYAaO9vT1FBhw4cGCAXA5MipxBQUHT3r17l0AVAxkZ/wkLC89as2ZNIcjlYkALXKnlWqBZTH/+/PEDmQsynLW/v3+NoaHhN2oYDjJn8uTJK4BMNpDhPwsLCwOKiop2+fn5vafEYC8vrw8gc/Lz8wOB3B8gw/nev38vn5WV5eTg4LA/Ly/vESsrK2npmYmJITU19SnQ8L0gc4DxpwgyF2S4EEjB58+f+crLy31YWFjOt7S0XBYUFPxHjMEcHBz/6+rqboqJiZ0qKSnxBpkDlRICGc4MU/j792+2CRMm+L18+fLSxIkTDykoKPzBZ7CoqOi/np6eE8rKylvb29v9fvz4wYEkzYKRzjk5OX/LyMjcnDRpEkjjdisrK6wRraOj8wvokAMLFy788ejRoxcaGhrPCWai4ODgB8DUE3/mzBknYMToASNoMzAfvEVW4+Tk9LmhoWFbTU2NwunTpx2BjiiMjo6+hm4WCzJHUlLyz+vXrxkfP36sDOI/ffpUPikpibe7u3sLsJjQW7VqlSrQxe+Avjmanp7u9PbtWzGQOmCCkARmmu/m5uYfT548yY/V5UpKSl+2b9+uiiz26dMnIWBSDTp27NgdYGrYCIzwE7m5uR4wg2Hg/PnzSsDI/QlKOcjZ3wGUBLm5uf+DwLdv38gub4AG/xcSEvr35s0bZmCB5sgCE/z69SsjyDJKMtG/f/8YQQYD8wkoGf8H51AbG5sH1CpbQBnQ09PzBiiHgoIFFHlBQGwLxLxUMP8dqJgH4k3gIhfIkAKVYkDMTmmhCHIxEL8A4peMo02L4WU4QIABANxZAoDIQDv3AAAAAElFTkSuQmCC\" />
                <span class=\"sf-toolbar-status\">";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messageCount", array()), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 12
                echo "                ";
                echo twig_include($this->env, $context, "@Swiftmailer/Collector/icon.svg");
                echo "
                <span class=\"sf-toolbar-value\">";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messageCount", array()), "html", null, true);
                echo "</span>
            ";
            }
            // line 15
            echo "        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 16
            echo "
        ";
            // line 17
            ob_start();
            // line 18
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Sent messages</b>
                <span class=\"sf-toolbar-status\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messageCount", array()), "html", null, true);
            echo "</span>
            </div>

            ";
            // line 23
            if ((($context["profiler_markup_version"] ?? null) == 1)) {
                // line 24
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mailers", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                    // line 25
                    echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>";
                    // line 26
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</b>
                        <span>";
                    // line 27
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messageCount", array(0 => $context["name"]), "method"), "html", null, true);
                    echo "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Is spooled?</b>
                        <span>";
                    // line 31
                    echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "isSpool", array(0 => $context["name"]), "method")) ? ("yes") : ("no"));
                    echo "</span>
                    </div>

                    ";
                    // line 34
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", array())) {
                        // line 35
                        echo "                        <hr>
                    ";
                    }
                    // line 37
                    echo "                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "            ";
            } else {
                // line 39
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mailers", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                    // line 40
                    echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>";
                    // line 41
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo " mailer</b>
                        <span class=\"sf-toolbar-status\">";
                    // line 42
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messageCount", array(0 => $context["name"]), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messageCount", array(0 => $context["name"]), "method"), 0)) : (0)), "html", null, true);
                    echo "</span>
                        &nbsp; (<small>";
                    // line 43
                    echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "isSpool", array(0 => $context["name"]), "method")) ? ("spooled") : ("sent"));
                    echo "</small>)
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "            ";
            }
            // line 47
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 48
            echo "
        ";
            // line 49
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? null)));
            echo "
    ";
        }
    }

    // line 53
    public function block_head($context, array $blocks = array())
    {
        // line 54
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        /* utility classes */
        .m-t-0 { margin-top: 0 !important; }
        .m-t-10 { margin-top: 10px !important; }

        /* basic grid */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .col {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }
        .col-4 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        /* small tabs */
        .sf-tabs-sm .tab-navigation li {
            font-size: 14px;
            padding: .3em .5em;
        }
    </style>
";
    }

    // line 90
    public function block_menu($context, array $blocks = array())
    {
        // line 91
        echo "    ";
        $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter(($context["profiler_markup_version"] ?? null), 1)) : (1));
        // line 92
        echo "
    <span class=\"label ";
        // line 93
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messageCount", array())) ? ("") : ("disabled"));
        echo "\">
        ";
        // line 94
        if ((($context["profiler_markup_version"] ?? null) == 1)) {
            // line 95
            echo "            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAYAAABaKIzgAAAEDElEQVR42u2XWUhUURjHy6isILAebO+lonpJ8qkHM3NFVFxAUVFM0RSXUKnwwdAQn3wQE0MyA1MwBEUQcxvHZTTTHNcZl9DUGqd0JBOzcsZ7+n8XJ0Z0GueOVwg68GfmnLn3O7/7Lee7s4cxZpHq6uos0bb3+Q+6DrG3u7v7RHt7u3tbW9uD5ubm8qamJnlDQ4NKIpG8HhkZOU3X7BYoD9Tb22sjk8mcWltb70ul0pcAegugBfzOjKmzs/MJ7j0kCujw8PBhADkAKAVAz+EZGYA+08bmCN79qdFo7sGmjaWg+wgIIUtoaWl5CqDmxsbGj7SJpYK3uYWFBRnsDmEfWyGg+zs6OkIBNEoGxVB9fT2bnZ1VIHff03xmZuY29rUyF9QWT6sWC5I0OTk5rVAo3unnSqXyEfa1Nhf0Kp5UKRYk8lsDD0oM1/r6+l5h32Pmgl5UqVTP5ubmlEgBHRlCobC8vDzm5eXFHB0dRZWzs/OXsLCwu5SCpkBPo4DaMVRI9rbp6Wk1vnP+/v5kaFfk4eGhAcdJU6Dn+/v7q9aTnpPL5YqVlRV5eXm5Fk+7Gx7lCgsL68Fx2RToWST7C8McQgr8yMrKWkLu/hQz/LDNIZojycnJb8BxwRTocYT8oSEoQs8bSkpK0k5MTGgiIiK4nYYMDg7mcBLIo6OjP9Ec44opUGvIF+eoTg/a1dX1x2BISMgyKncpLS1tbacgU1NT2djY2HxoaOi8fg3jhilQK+gmQvBVD4qQbzDs4+ND6bBWUFCgtRQyJyeHdwSKdcODY9zaTgu9jheMcWOgJFdXV1ZZWclqamp0bm5uQoqGVVRUrFHBuru782tCQC+hW0j/BkpCPlGXIY9wfn5+5hQN5T3dS+cz5btg0DNTU1NFpkBra2tZaWkpy8jIYOPj4ywmJmY7RcMGBwdZZmYmKykpoa7ELPGozeLiYrIetKenZ5OhuLg4ft3T05OfJyQk8LDp6el/LRq6JiUlheb8vXgzY7m5uYJBD0LeeDnRApQ8sKloqK3GxsZuWEPrYzhiWHFx8ZZFMzo6yiIjIw1DTTZ+qNXqMRcXF0GgVpADKltDoCisDcbj4+NZfn7+ll5D9fKeprYbFRXFwsPDWVVV1SodPwEBAVueEtnZ2QNIhTkhoKRrAxhb5WhRURFzcnIyGmIcX9rq6uoPq6urAzqdrresrGwIHtMZux62OOT6AD4FgZ5bXl5+DMhv6P16j/KhCwoK2vHO5O3t/SsxMfG7ENAjkAOUBUkMvMVDiiFKDSGge6Gj0CUoGmffpvwSEfg7dUch/0LtkWcdvr6+a2JDBgYG6tDt6DXPTgjoKegOVAo1QVKR1AgVQ8GQrRDQA+uw9ushuSWSyLYdQRr7K/JP6DcTwr8i7Fj8pwAAAABJRU5ErkJggg==\" alt=\"Swiftmailer\" /></span>
        ";
        } else {
            // line 97
            echo "            <span class=\"icon\">";
            echo twig_include($this->env, $context, "@Swiftmailer/Collector/icon.svg");
            echo "</span>
        ";
        }
        // line 99
        echo "
        <strong>E-Mails</strong>
        ";
        // line 101
        if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messageCount", array()) > 0)) {
            // line 102
            echo "            <span class=\"count\">
                <span>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messageCount", array()), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 106
        echo "    </span>
";
    }

    // line 109
    public function block_panel($context, array $blocks = array())
    {
        // line 110
        echo "    ";
        $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter(($context["profiler_markup_version"] ?? null), 1)) : (1));
        // line 111
        echo "
    ";
        // line 112
        if ((($context["profiler_markup_version"] ?? null) == 1)) {
            // line 113
            echo "        <style>
            h3 { margin-top: 2em; }
            h3 span { color: #999; font-weight: normal; }
            h3 small { color: #999; }
            h4 { font-size: 14px; font-weight: bold; }
            .card { background: #F5F5F5; margin: .5em 0 1em; padding: .5em; }
            .card .label { display: block; font-size: 13px; font-weight: bold; margin-bottom: .5em; }
            .card .card-block { margin-bottom: 1em; }
        </style>
    ";
        }
        // line 123
        echo "
    <h2>E-mails</h2>

    ";
        // line 126
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mailers", array())) {
            // line 127
            echo "        <div class=\"empty\">
            <p>No e-mail messages were sent.</p>
        </div>
    ";
        }
        // line 131
        echo "
    ";
        // line 132
        if (((($context["profiler_markup_version"] ?? null) == 1) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mailers", array())) > 1))) {
            // line 133
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Mailer Name</th>
                    <th scope=\"col\">Num. of messages</th>
                    <th scope=\"col\">Messages status</th>
                    <th scope=\"col\">Notes</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mailers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 144
                echo "                    <tr>
                        <th class=\"font-normal\">";
                // line 145
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</th>
                        <td class=\"font-normal\">";
                // line 146
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messageCount", array(0 => $context["name"]), "method"), "html", null, true);
                echo "</td>
                        <td class=\"font-normal\">";
                // line 147
                echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "isSpool", array(0 => $context["name"]), "method")) ? ("spooled") : ("sent"));
                echo "</td>
                        <td class=\"font-normal\">";
                // line 148
                echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "isDefaultMailer", array(0 => $context["name"]), "method")) ? ("This is the default mailer") : (""));
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 154
            echo "        <div class=\"metrics\">
            ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mailers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 156
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 157
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messageCount", array(0 => $context["name"]), "method"), "html", null, true);
                echo "</span>
                    <span class=\"label\">";
                // line 158
                echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "isSpool", array(0 => $context["name"]), "method")) ? ("spooled") : ("sent"));
                echo " ";
                echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messageCount", array(0 => $context["name"]), "method") == 1)) ? ("message") : ("messages"));
                echo "</span>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "        </div>
    ";
        }
        // line 163
        echo "
    ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mailers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 165
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mailers", array())) > 1)) {
                // line 166
                echo "            <h3>
                ";
                // line 167
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo " <span>mailer</span>
                <small>";
                // line 168
                echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "isDefaultMailer", array(0 => $context["name"]), "method")) ? ("(default app mailer)") : (""));
                echo "</small>
            </h3>
        ";
            }
            // line 171
            echo "
        ";
            // line 172
            if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", array(0 => $context["name"]), "method")) {
                // line 173
                echo "            <div class=\"empty\">
                <p>No e-mail messages were sent.</p>
            </div>
        ";
            } else {
                // line 177
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", array(0 => $context["name"]), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 178
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "length", array()) > 1)) {
                        // line 179
                        echo "                    <h4>E-mail #";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                        echo " details</h4>
                ";
                    } else {
                        // line 181
                        echo "                    <h4>E-mail details</h4>
                ";
                    }
                    // line 183
                    echo "
                <div class=\"card\">
                    <div class=\"card-block\">
                        <span class=\"label\">Subject</span>
                        <h2 class=\"m-t-10\">";
                    // line 187
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "headers", array(), "any", false, true), "get", array(0 => "subject"), "method", false, true), "value", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "headers", array(), "any", false, true), "get", array(0 => "subject"), "method", false, true), "value", array())))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "headers", array(), "any", false, true), "get", array(0 => "subject"), "method", false, true), "value", array())) : ("(empty)")), "html", null, true);
                    echo "</h2>
                    </div>
                    <div class=\"card-block\">
                        <div class=\"row\">
                            <div class=\"col col-4\">
                                <span class=\"label\">From</span>
                                <pre class=\"prewrap\">";
                    // line 193
                    echo twig_escape_filter($this->env, twig_replace_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "headers", array(), "any", false, true), "get", array(0 => "from"), "method", false, true), "toString", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "headers", array(), "any", false, true), "get", array(0 => "from"), "method", false, true), "toString", array())))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "headers", array(), "any", false, true), "get", array(0 => "from"), "method", false, true), "toString", array())) : ("(empty)")), array("From:" => "")), "html", null, true);
                    echo "</pre>

                                <span class=\"label\">To</span>
                                <pre class=\"prewrap\">";
                    // line 196
                    echo twig_escape_filter($this->env, twig_replace_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "headers", array(), "any", false, true), "get", array(0 => "to"), "method", false, true), "toString", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "headers", array(), "any", false, true), "get", array(0 => "to"), "method", false, true), "toString", array())))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "headers", array(), "any", false, true), "get", array(0 => "to"), "method", false, true), "toString", array())) : ("(empty)")), array("To:" => "")), "html", null, true);
                    echo "</pre>
                            </div>
                            <div class=\"col\">
                                <span class=\"label\">Headers</span>
                                <pre class=\"prewrap\">";
                    // line 200
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "headers", array()), "all", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                        if (!twig_in_filter((((twig_get_attribute($this->env, $this->source, $context["header"], "fieldName", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->source, $context["header"], "fieldName", array())))) ? (twig_get_attribute($this->env, $this->source, $context["header"], "fieldName", array())) : ("")), array(0 => "Subject", 1 => "From", 2 => "To"))) {
                            // line 201
                            echo twig_escape_filter($this->env, $context["header"], "html", null, true);
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 202
                    echo "</pre>
                            </div>
                        </div>
                    </div>

                    <div class=\"card-block\">
                        <div class=\"sf-tabs sf-tabs-sm\">
                            <div class=\"tab\">
                                <h3 class=\"tab-title\">Raw content</h3>

                                <div class=\"tab-content\">
                                    <pre class=\"prewrap\" style=\"max-height: 600px\">";
                    // line 214
                    if ((twig_get_attribute($this->env, $this->source, $context["message"], "charset", array(), "any", true, true) && twig_get_attribute($this->env, $this->source, $context["message"], "charset", array()))) {
                        // line 215
                        echo twig_escape_filter($this->env, twig_convert_encoding(twig_get_attribute($this->env, $this->source, $context["message"], "body", array()), "UTF-8", twig_get_attribute($this->env, $this->source, $context["message"], "charset", array())), "html", null, true);
                    } else {
                        // line 217
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "body", array()), "html", null, true);
                    }
                    // line 219
                    echo "</pre>
                                </div>
                            </div>

                            <div class=\"tab\">
                                <h3 class=\"tab-title\">Rendered content</h3>

                                <div class=\"tab-content\">
                                    <iframe class=\"full-width\" style=\"min-height: 600px\" src=\"data:";
                    // line 227
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "__contentType", array()), "html", null, true);
                    echo ";base64,";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "__base64EncodedBody", array()), "html", null, true);
                    echo "\"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    ";
                    // line 233
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["message"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["messagePart"]) {
                        if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["messagePart"], "contentType", array()), array(0 => "text/plain", 1 => "text/html"))) {
                            // line 234
                            echo "                        <div class=\"card-block\">
                            <span class=\"label\">Alternative part (";
                            // line 235
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messagePart"], "contentType", array()), "html", null, true);
                            echo ")</span>
                            <pre class=\"prewrap\">";
                            // line 237
                            if ((twig_get_attribute($this->env, $this->source, $context["messagePart"], "charset", array(), "any", true, true) && twig_get_attribute($this->env, $this->source, $context["messagePart"], "charset", array()))) {
                                // line 238
                                echo twig_escape_filter($this->env, twig_convert_encoding(twig_get_attribute($this->env, $this->source, $context["messagePart"], "body", array()), "UTF-8", twig_get_attribute($this->env, $this->source, $context["messagePart"], "charset", array())), "html", null, true);
                            } else {
                                // line 240
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messagePart"], "body", array()), "html", null, true);
                            }
                            // line 242
                            echo "</pre>
                        </div>
                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messagePart'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 245
                    echo "
                    ";
                    // line 246
                    $context["attachments"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "extractAttachments", array(0 => $context["message"]), "method");
                    // line 247
                    echo "                    ";
                    if (($context["attachments"] ?? null)) {
                        // line 248
                        echo "                        <div class=\"card-block\">
                            <span class=\"label\">
                                ";
                        // line 250
                        if ((twig_length_filter($this->env, ($context["attachments"] ?? null)) > 1)) {
                            // line 251
                            echo "                                    ";
                            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["attachments"] ?? null)), "html", null, true);
                            echo " Attachments
                                ";
                        } else {
                            // line 253
                            echo "                                    1 Attachment
                                ";
                        }
                        // line 255
                        echo "                            </span>

                            <ol>
                                ";
                        // line 258
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["attachments"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                            // line 259
                            echo "                                    <li>
                                        Filename:
                                        ";
                            // line 261
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "filename", array()), "html", null, true);
                            echo "
                                    </li>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 264
                        echo "                            </ol>
                        </div>
                    ";
                    }
                    // line 267
                    echo "                </div>
            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 269
                echo "        ";
            }
            // line 270
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@Swiftmailer/Collector/swiftmailer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  640 => 270,  637 => 269,  622 => 267,  617 => 264,  608 => 261,  604 => 259,  600 => 258,  595 => 255,  591 => 253,  585 => 251,  583 => 250,  579 => 248,  576 => 247,  574 => 246,  571 => 245,  562 => 242,  559 => 240,  556 => 238,  554 => 237,  550 => 235,  547 => 234,  542 => 233,  531 => 227,  521 => 219,  518 => 217,  515 => 215,  513 => 214,  500 => 202,  493 => 201,  488 => 200,  481 => 196,  475 => 193,  466 => 187,  460 => 183,  456 => 181,  450 => 179,  447 => 178,  429 => 177,  423 => 173,  421 => 172,  418 => 171,  412 => 168,  408 => 167,  405 => 166,  402 => 165,  398 => 164,  395 => 163,  391 => 161,  380 => 158,  376 => 157,  373 => 156,  369 => 155,  366 => 154,  361 => 151,  352 => 148,  348 => 147,  344 => 146,  340 => 145,  337 => 144,  333 => 143,  321 => 133,  319 => 132,  316 => 131,  310 => 127,  308 => 126,  303 => 123,  291 => 113,  289 => 112,  286 => 111,  283 => 110,  280 => 109,  275 => 106,  269 => 103,  266 => 102,  264 => 101,  260 => 99,  254 => 97,  250 => 95,  248 => 94,  244 => 93,  241 => 92,  238 => 91,  235 => 90,  195 => 54,  192 => 53,  185 => 49,  182 => 48,  179 => 47,  176 => 46,  167 => 43,  163 => 42,  159 => 41,  156 => 40,  151 => 39,  148 => 38,  134 => 37,  130 => 35,  128 => 34,  122 => 31,  115 => 27,  111 => 26,  108 => 25,  90 => 24,  88 => 23,  82 => 20,  78 => 18,  76 => 17,  73 => 16,  70 => 15,  65 => 13,  60 => 12,  55 => 10,  52 => 9,  49 => 8,  46 => 7,  44 => 6,  41 => 5,  38 => 4,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Swiftmailer/Collector/swiftmailer.html.twig", "/var/www/html/masterlangg/vendor/symfony/swiftmailer-bundle/Resources/views/Collector/swiftmailer.html.twig");
    }
}
