<?php

/* common/form_div_layout.html.twig */
class __TwigTemplate_9b7d7b0a49c2f750b2680d16403f6c134a2ef82d1582ce0ba633a3fe85cb6c25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "common/form_div_layout.html.twig", 1);
        $this->blocks = array(
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'form_label' => array($this, 'block_form_label'),
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 6
        ob_start();
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(            // line 9
$context["child"], 'label', array("in_choice_list" => true, "widget" =>             // line 13
$this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget'), "multiple" =>             // line 14
(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))));
            // line 16
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 21
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 22
        ob_start();
        // line 23
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 24
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 26
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 27
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            echo "
            ";
            // line 28
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            echo "
            ";
            // line 29
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "&nbsp;
            ";
            // line 30
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 36
    public function block_date_widget($context, array $blocks = array())
    {
        // line 37
        ob_start();
        // line 38
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 39
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 41
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 42
                echo "        <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 44
            echo "            ";
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 45
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget', array("attr" => array("class" => "span1"))), "{{ month }}" =>             // line 46
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget', array("attr" => array("class" => "span1"))), "{{ day }}" =>             // line 47
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget', array("attr" => array("class" => "span1")))));
            // line 48
            echo "
        ";
            // line 49
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 50
                echo "        </div>
        ";
            }
            // line 52
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 56
    public function block_time_widget($context, array $blocks = array())
    {
        // line 57
        ob_start();
        // line 58
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 59
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 61
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 62
                echo "        <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 64
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', array("attr" => array("class" => "span1")));
            echo ":";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', array("attr" => array("class" => "span1")));
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', array("attr" => array("class" => "span1")));
            }
            // line 65
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 66
                echo "        </div>
        ";
            }
            // line 68
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 73
    public function block_money_widget($context, array $blocks = array())
    {
        // line 74
        ob_start();
        // line 75
        echo "    ";
        $context["append"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 76
        echo "    <div class=\"";
        echo (((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) ? ("input-append") : ("input-prepend"));
        echo "\">
        ";
        // line 77
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 78
            echo "            <span class=\"add-on\">
                ";
            // line 79
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "
            </span>
        ";
        }
        // line 82
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
        ";
        // line 83
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 84
            echo "            <span class=\"add-on\">
                ";
            // line 85
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "
            </span>
        ";
        }
        // line 88
        echo "    </div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 93
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 94
        ob_start();
        // line 95
        echo "    <div class=\"input-append\">
        ";
        // line 96
        $this->displayParentBlock("percent_widget", $context, $blocks);
        echo "
        <span class=\"add-on\">%</span>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 104
    public function block_form_label($context, array $blocks = array())
    {
        // line 105
        ob_start();
        // line 106
        echo "    ";
        if (((array_key_exists("in_choice_list", $context) && (isset($context["in_choice_list"]) ? $context["in_choice_list"] : $this->getContext($context, "in_choice_list"))) && array_key_exists("widget", $context))) {
            // line 107
            echo "        ";
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 108
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                // line 109
                echo "        ";
            }
            // line 110
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 111
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 112
                echo "        ";
            }
            // line 113
            echo "        ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 114
                echo "            ";
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 115
                echo "        ";
            }
            // line 116
            echo "
        ";
            // line 117
            if ((array_key_exists("multiple", $context) && (isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
                // line 118
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " checkbox"))));
                // line 119
                echo "        ";
            } elseif ((array_key_exists("multiple", $context) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
                // line 120
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " radio"))));
                // line 121
                echo "        ";
            }
            // line 122
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
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
            echo ">
            ";
            // line 123
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo "
            <span>
                ";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
            </span>
        </label>
    ";
        } else {
            // line 129
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
            // line 130
            echo "        ";
            $this->displayParentBlock("form_label", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 137
    public function block_form_row($context, array $blocks = array())
    {
        // line 138
        ob_start();
        // line 139
        echo "    <div class=\"control-group";
        if ( !$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            echo " error";
        }
        echo "\">
        ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
        <div class=\"controls\">
            ";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 149
    public function block_form_errors($context, array $blocks = array())
    {
        // line 150
        ob_start();
        // line 151
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 152
            echo "    ";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-inline\">";
            } else {
                echo "<div class=\"alert alert-error error\" >";
            }
            // line 153
            echo "        ";
            $this->displayParentBlock("form_errors", $context, $blocks);
            echo "
    ";
            // line 154
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
            // line 155
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "common/form_div_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 155,  398 => 154,  393 => 153,  386 => 152,  383 => 151,  381 => 150,  378 => 149,  369 => 143,  365 => 142,  360 => 140,  353 => 139,  351 => 138,  348 => 137,  339 => 130,  336 => 129,  329 => 125,  324 => 123,  308 => 122,  305 => 121,  302 => 120,  299 => 119,  296 => 118,  294 => 117,  291 => 116,  288 => 115,  285 => 114,  282 => 113,  279 => 112,  276 => 111,  273 => 110,  270 => 109,  267 => 108,  264 => 107,  261 => 106,  259 => 105,  256 => 104,  247 => 96,  244 => 95,  242 => 94,  239 => 93,  232 => 88,  226 => 85,  223 => 84,  221 => 83,  216 => 82,  210 => 79,  207 => 78,  205 => 77,  200 => 76,  197 => 75,  195 => 74,  192 => 73,  185 => 68,  181 => 66,  178 => 65,  169 => 64,  163 => 62,  160 => 61,  154 => 59,  151 => 58,  149 => 57,  146 => 56,  140 => 52,  136 => 50,  134 => 49,  131 => 48,  129 => 47,  128 => 46,  127 => 45,  125 => 44,  119 => 42,  116 => 41,  110 => 39,  107 => 38,  105 => 37,  102 => 36,  93 => 30,  89 => 29,  85 => 28,  81 => 27,  76 => 26,  70 => 24,  67 => 23,  65 => 22,  62 => 21,  52 => 16,  50 => 14,  49 => 13,  48 => 9,  46 => 8,  41 => 7,  39 => 6,  36 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/form_div_layout.html.twig", "C:\\wamp\\www\\scimapimmo\\app\\views\\common\\form_div_layout.html.twig");
    }
}
