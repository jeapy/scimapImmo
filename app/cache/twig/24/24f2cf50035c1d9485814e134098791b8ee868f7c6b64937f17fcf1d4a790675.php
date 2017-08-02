<?php

/* admin/souscripteur.html.twig */
class __TwigTemplate_977faa455b5a7018f738d63394053dfc1b3a876f2a55299ea5e88afbad53c1a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/souscripteur.html.twig", 2);
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
\t\t\t\t\t<div class=\"panel-title\">\t<h1>Listes des souscripteurs\t</h1></div>
\t\t\t\t</div>
  \t\t\t\t<div class=\"panel-body\">
  \t\t\t\t\t<div class=\"table-responsive\">
  \t\t\t\t\t\t<table class=\"table\">
\t\t\t              <thead>
\t\t\t                <tr>
\t\t\t                  <th>#</th>
\t\t\t                  <th>First Name</th>
\t\t\t                  <th>Last Name</th>
\t\t\t                  <th>Subscribe Date</th>
\t\t\t                  <th>Subscribe Plan</th>
\t\t\t                </tr>
\t\t\t              </thead>

\t\t\t               ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["artists"]) ? $context["artists"] : $this->getContext($context, "artists")));
        foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
            // line 29
            echo "
\t\t\t               <tbody>
\t\t\t                <tr>
\t\t\t                  <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["artist"], "souscrire", array()), "id", array()), "html", null, true);
            echo "</td>
\t\t\t                  <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["artist"], "souscrire", array()), "firstname", array()));
            echo "</td>
\t\t\t                  <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["artist"], "souscrire", array()), "lastname", array()));
            echo "</td>
\t\t\t                  <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["artist"], "souscrire", array()), "createAt", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
\t\t\t                 
\t\t\t                  
\t\t\t                  ";
            // line 38
            if (($this->getAttribute($context["artist"], "plan", array()) == 1)) {
                // line 39
                echo "\t\t\t                   <td>PLAN PERSONNEL</td>
\t\t\t                  ";
            } else {
                // line 41
                echo "\t\t\t                   <td>PLAN SCIMAF</td>
\t\t\t                   ";
            }
            // line 43
            echo "
\t\t\t                   <td> <a class=\"btn btn-primary\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("souscripteur_show", array("subscribe" => $this->getAttribute($context["artist"], "id", array()))), "html", null, true);
            echo "\">Details</a></td>
\t\t\t                </tr>
\t\t\t                 </tbody>
                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t              
\t\t\t             
\t\t\t            </table>
  \t\t\t\t\t</div>
  \t\t\t\t</div>
  \t\t\t\t";
        // line 54
        $this->loadTemplate("admin/pagination.html.twig", "admin/souscripteur.html.twig", 54)->display($context);
        // line 55
        echo "  \t\t\t</div>

 </div>
  \t\t\t

";
    }

    public function getTemplateName()
    {
        return "admin/souscripteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 55,  117 => 54,  110 => 49,  99 => 44,  96 => 43,  92 => 41,  88 => 39,  86 => 38,  80 => 35,  76 => 34,  72 => 33,  68 => 32,  63 => 29,  59 => 28,  38 => 9,  35 => 8,  29 => 4,  11 => 2,);
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
\t\t\t\t\t<div class=\"panel-title\">\t<h1>Listes des souscripteurs\t</h1></div>
\t\t\t\t</div>
  \t\t\t\t<div class=\"panel-body\">
  \t\t\t\t\t<div class=\"table-responsive\">
  \t\t\t\t\t\t<table class=\"table\">
\t\t\t              <thead>
\t\t\t                <tr>
\t\t\t                  <th>#</th>
\t\t\t                  <th>First Name</th>
\t\t\t                  <th>Last Name</th>
\t\t\t                  <th>Subscribe Date</th>
\t\t\t                  <th>Subscribe Plan</th>
\t\t\t                </tr>
\t\t\t              </thead>

\t\t\t               {% for artist in artists %}

\t\t\t               <tbody>
\t\t\t                <tr>
\t\t\t                  <td>{{ artist.souscrire.id }}</td>
\t\t\t                  <td>{{ artist.souscrire.firstname|e }}</td>
\t\t\t                  <td>{{ artist.souscrire.lastname|e }}</td>
\t\t\t                  <td>{{ artist.souscrire.createAt | date('d-m-Y H:i') }}</td>
\t\t\t                 
\t\t\t                  
\t\t\t                  {% if artist.plan == 1 %}
\t\t\t                   <td>PLAN PERSONNEL</td>
\t\t\t                  {% else %}
\t\t\t                   <td>PLAN SCIMAF</td>
\t\t\t                   {% endif %}

\t\t\t                   <td> <a class=\"btn btn-primary\" href=\"{{ path('souscripteur_show', {'subscribe': artist.id}) }}\">Details</a></td>
\t\t\t                </tr>
\t\t\t                 </tbody>
                    
                {% endfor %}
\t\t\t              
\t\t\t             
\t\t\t            </table>
  \t\t\t\t\t</div>
  \t\t\t\t</div>
  \t\t\t\t{% include \"admin/pagination.html.twig\" %}
  \t\t\t</div>

 </div>
  \t\t\t

{% endblock %}


", "admin/souscripteur.html.twig", "C:\\wamp\\www\\scimapimmo\\app\\views\\admin\\souscripteur.html.twig");
    }
}
