<?php

/* admin/souscripteur_show.html.twig */
class __TwigTemplate_bf35f94d08c92d2ee94fd3cf500d1521543b67d22fb68327ef8b10c5aabf9c49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/souscripteur_show.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Souscripteur";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
  \t\t\t
  \t\t\t<div class=\"content-box-large\">
  \t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<div class=\"panel-title\">\t<h1>Details Souscripteurs\t</h1></div>
\t\t\t\t</div>
  \t\t\t\t<div class=\"panel-body\">
  \t\t\t\t

  \t\t\t\t
  \t\t\t\t\t<table class=\"table table-condensed table-responsive table-user-information\">
                                    <tbody>
                                    <tr>
                                        <td>Nom:</td>
                                         <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscribe"]) ? $context["subscribe"] : $this->getContext($context, "subscribe")), "souscrire", array()), "firstname", array()));
        echo "</td>
\t\t\t                 
                                    </tr>
                                    <tr>
                                        <td>Prenom:</td>
                                         <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscribe"]) ? $context["subscribe"] : $this->getContext($context, "subscribe")), "souscrire", array()), "lastname", array()));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td>Date de souscription</td>                                    
\t\t\t                 \t\t <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscribe"]) ? $context["subscribe"] : $this->getContext($context, "subscribe")), "souscrire", array()), "createAt", array()), "d-m-Y"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td>Type de plan</td>
                                        ";
        // line 36
        if (($this->getAttribute((isset($context["subscribe"]) ? $context["subscribe"] : $this->getContext($context, "subscribe")), "plan", array()) == 1)) {
            // line 37
            echo "\t\t\t\t\t\t                   <td>PLAN PERSONNEL</td>
\t\t\t\t\t\t                  ";
        } else {
            // line 39
            echo "\t\t\t\t\t\t                   <td>PLAN SCIMAF</td>
\t\t\t\t\t\t                   ";
        }
        // line 41
        echo "
                                    </tr>

                                    ";
        // line 44
        if (($this->getAttribute((isset($context["subscribe"]) ? $context["subscribe"] : $this->getContext($context, "subscribe")), "plan", array()) == 1)) {
            // line 45
            echo "                                    <tr>
                                        <td>Type de Travaux</td>
                                        <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscribe"]) ? $context["subscribe"] : $this->getContext($context, "subscribe")), "worktype", array()), "html", null, true);
            echo "</td>
                                    </tr>
                                    <tr>
                                        <td>Localisation du terrain</td>
                                        <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscribe"]) ? $context["subscribe"] : $this->getContext($context, "subscribe")), "local", array()), "html", null, true);
            echo "</td>
                                    </tr>
                                    <tr>
                                        <td>Superficie</td>
                                        <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscribe"]) ? $context["subscribe"] : $this->getContext($context, "subscribe")), "area", array()), "html", null, true);
            echo "m²</td>
                                    </tr>
                                    <tr>
                                        <td>Permis de Construire</td>
                                        <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscribe"]) ? $context["subscribe"] : $this->getContext($context, "subscribe")), "buildnumber", array()), "html", null, true);
            echo "</td>
                                    </tr>
                                    ";
        }
        // line 62
        echo "                                    ";
        if (($this->getAttribute((isset($context["subscribe"]) ? $context["subscribe"] : $this->getContext($context, "subscribe")), "plan", array()) == 2)) {
            // line 63
            echo "                                    <tr>
                                        <td>Type de Travaux</td>
                                        <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscribe"]) ? $context["subscribe"] : $this->getContext($context, "subscribe")), "housetype", array()), "html", null, true);
            echo "</td>
                                    </tr>
                                    
                                    ";
        }
        // line 69
        echo "
                                    <tr>
                                        <td>Apport initial</td>
                                        <td>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscribe"]) ? $context["subscribe"] : $this->getContext($context, "subscribe")), "startmoney", array()), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td>Solde</td>
                                        <td>";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscribe"]) ? $context["subscribe"] : $this->getContext($context, "subscribe")), "solde", array()), "html", null, true);
        echo "</td>
                                    </tr>
                                    
                                    </tbody>
                                </table>
                                 <a class=\"btn btn-primary\" href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("souscripteur");
        echo "\">Retour à la liste</a>
  \t\t\t\t</div>
  \t\t\t</div>

 </div>
  \t\t\t
";
    }

    public function getTemplateName()
    {
        return "admin/souscripteur_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 81,  150 => 76,  143 => 72,  138 => 69,  131 => 65,  127 => 63,  124 => 62,  118 => 59,  111 => 55,  104 => 51,  97 => 47,  93 => 45,  91 => 44,  86 => 41,  82 => 39,  78 => 37,  76 => 36,  69 => 32,  62 => 28,  54 => 23,  38 => 9,  35 => 8,  29 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
\t{% extends \"admin/layout.html.twig\" %}

\t {% block title %}Souscripteur{% endblock %}



\t\t\t     {% block content %}

  \t\t\t
  \t\t\t<div class=\"content-box-large\">
  \t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<div class=\"panel-title\">\t<h1>Details Souscripteurs\t</h1></div>
\t\t\t\t</div>
  \t\t\t\t<div class=\"panel-body\">
  \t\t\t\t

  \t\t\t\t
  \t\t\t\t\t<table class=\"table table-condensed table-responsive table-user-information\">
                                    <tbody>
                                    <tr>
                                        <td>Nom:</td>
                                         <td>{{ subscribe.souscrire.firstname|e }}</td>
\t\t\t                 
                                    </tr>
                                    <tr>
                                        <td>Prenom:</td>
                                         <td>{{ subscribe.souscrire.lastname|e }}</td>
                                    </tr>
                                    <tr>
                                        <td>Date de souscription</td>                                    
\t\t\t                 \t\t <td>{{ subscribe.souscrire.createAt | date('d-m-Y') }}</td>
                                    </tr>
                                    <tr>
                                        <td>Type de plan</td>
                                        {% if subscribe.plan == 1 %}
\t\t\t\t\t\t                   <td>PLAN PERSONNEL</td>
\t\t\t\t\t\t                  {% else %}
\t\t\t\t\t\t                   <td>PLAN SCIMAF</td>
\t\t\t\t\t\t                   {% endif %}

                                    </tr>

                                    {% if subscribe.plan == 1 %}
                                    <tr>
                                        <td>Type de Travaux</td>
                                        <td>{{subscribe.worktype}}</td>
                                    </tr>
                                    <tr>
                                        <td>Localisation du terrain</td>
                                        <td>{{subscribe.local}}</td>
                                    </tr>
                                    <tr>
                                        <td>Superficie</td>
                                        <td>{{subscribe.area}}m²</td>
                                    </tr>
                                    <tr>
                                        <td>Permis de Construire</td>
                                        <td>{{subscribe.buildnumber}}</td>
                                    </tr>
                                    {% endif %}
                                    {% if subscribe.plan == 2 %}
                                    <tr>
                                        <td>Type de Travaux</td>
                                        <td>{{subscribe.housetype}}</td>
                                    </tr>
                                    
                                    {% endif %}

                                    <tr>
                                        <td>Apport initial</td>
                                        <td>{{subscribe.startmoney}}</td>
                                    </tr>
                                    <tr>
                                        <td>Solde</td>
                                        <td>{{subscribe.solde}}</td>
                                    </tr>
                                    
                                    </tbody>
                                </table>
                                 <a class=\"btn btn-primary\" href=\"{{ path('souscripteur') }}\">Retour à la liste</a>
  \t\t\t\t</div>
  \t\t\t</div>

 </div>
  \t\t\t
{% endblock %}


", "admin/souscripteur_show.html.twig", "C:\\wamp\\www\\scimapimmo\\app\\views\\admin\\souscripteur_show.html.twig");
    }
}
