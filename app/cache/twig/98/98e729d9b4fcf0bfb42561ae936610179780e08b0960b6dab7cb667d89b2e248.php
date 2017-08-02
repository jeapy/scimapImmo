<?php

/* admin/pagination.html.twig */
class __TwigTemplate_030d24982a57f5f7920437b2cf72c77431c866748e153672934d01db5d05896e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (((isset($context["numPages"]) ? $context["numPages"] : $this->getContext($context, "numPages")) > 1)) {
            // line 2
            echo "    
        <ul class=\"pagination\">
            <li ";
            // line 4
            if (((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) == 1)) {
                echo "class=\"disabled\"";
            }
            echo ">
                <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["here"]) ? $context["here"] : $this->getContext($context, "here")), "html", null, true);
            echo "?page=";
            echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) - 1), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prev"), "html", null, true);
            echo "</a>
            </li>
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["numPages"]) ? $context["numPages"] : $this->getContext($context, "numPages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 8
                echo "                <li ";
                if (((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) == $context["i"])) {
                    echo "class=\"active\"";
                }
                echo ">
                    <a href=\"";
                // line 9
                echo twig_escape_filter($this->env, (isset($context["here"]) ? $context["here"] : $this->getContext($context, "here")), "html", null, true);
                echo "?page=";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "            <li ";
            if (((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) == (isset($context["numPages"]) ? $context["numPages"] : $this->getContext($context, "numPages")))) {
                echo "class=\"disabled\"";
            }
            echo ">
                <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["here"]) ? $context["here"] : $this->getContext($context, "here")), "html", null, true);
            echo "?page=";
            echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) + 1), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Next"), "html", null, true);
            echo "</a>
            </li>
        </ul>
    
";
        }
    }

    public function getTemplateName()
    {
        return "admin/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  64 => 12,  51 => 9,  44 => 8,  40 => 7,  31 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if numPages > 1 %}
    
        <ul class=\"pagination\">
            <li {% if currentPage == 1 %}class=\"disabled\"{% endif %}>
                <a href=\"{{ here }}?page={{ currentPage - 1 }}\">{{ 'Prev'|trans }}</a>
            </li>
            {% for i in 1..numPages %}
                <li {% if currentPage == i %}class=\"active\"{% endif %}>
                    <a href=\"{{ here }}?page={{ i }}\">{{ i }}</a>
                </li>
            {% endfor %}
            <li {% if currentPage == numPages %}class=\"disabled\"{% endif %}>
                <a href=\"{{ here }}?page={{ currentPage + 1 }}\">{{ 'Next'|trans }}</a>
            </li>
        </ul>
    
{% endif %}
", "admin/pagination.html.twig", "C:\\wamp\\www\\scimapimmo\\app\\views\\admin\\pagination.html.twig");
    }
}
