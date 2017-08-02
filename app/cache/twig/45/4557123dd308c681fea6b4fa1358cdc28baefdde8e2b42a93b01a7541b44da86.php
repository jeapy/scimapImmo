<?php

/* admin/newsletters.html.twig */
class __TwigTemplate_7d67b7c8a44a9e40d46e7892f544ca8967a3d8a2b20bfacb71c8d0272b3f5c60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/newsletters.html.twig", 2);
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
\t\t\t\t\t<div class=\"panel-title\">\t<h1>Listes des souscripteurs à la newsletter\t</h1></div>
\t\t\t\t\t<span class=\"pull-right\"><a class=\"btn btn-primary btn-sm\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("excel");
        echo "\">Exportez</a></span>
\t\t\t\t</div>
  \t\t\t\t<div class=\"panel-body\">

  \t\t\t\t\t<div class=\"row\">
  \t\t\t\t\t\t<div class=\"col-md-8\">
\t\t  \t\t\t\t\t<div class=\"table-responsive\">
\t\t  \t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t              <thead>
\t\t\t\t\t                <tr>
\t\t\t\t\t                  <th>#</th>
\t\t\t\t\t                  <th>Email</th>\t\t\t                 
\t\t\t\t\t                  <th>Subscribe Date</th>
\t\t\t\t\t                </tr>
\t\t\t\t\t              </thead>

\t\t\t\t\t               ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 31
            echo "
\t\t\t\t\t               <tbody>
\t\t\t\t\t                <tr>
\t\t\t\t\t                  <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t                  <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "mail", array()), "html", null, true);
            echo "</td>\t
\t\t\t\t\t                  <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["new"], "createAt", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>\t\t                  
\t\t\t\t\t               
\t\t\t\t\t                </tr>
\t\t\t\t\t                 </tbody>
\t\t                    
\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t\t\t              
\t\t\t\t\t             
\t\t\t\t\t            </table>
\t\t  \t\t\t\t\t</div>
\t\t  \t\t\t</div>
  \t\t\t\t\t<div class=\"col-md-4\">
\t\t  \t\t\t\t\t<div class=\"table-responsive\">
\t\t  \t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t              <thead>
\t\t\t\t\t                <tr>
\t\t\t\t\t                  <th>#</th>
\t\t\t\t\t                  
\t\t\t\t\t                </tr>
\t\t\t\t\t              </thead>

\t\t\t\t\t               ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["files"]) ? $context["files"] : $this->getContext($context, "files")), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 58
            echo "
\t\t\t\t\t               <tbody>
\t\t\t\t\t                <tr>
\t\t\t\t\t                \t ";
            // line 61
            $context["file_base"] = "/scimapimmo/web/fic/";
            // line 62
            echo "\t\t\t\t\t                  <td> ";
            echo twig_escape_filter($this->env, $context["f"], "html", null, true);
            echo " </td>
\t\t\t\t\t                   <td>  <a class=\"btn btn-success btn-sm\" href=\"";
            // line 63
            echo twig_escape_filter($this->env, (isset($context["file_base"]) ? $context["file_base"] : $this->getContext($context, "file_base")), "html", null, true);
            echo twig_escape_filter($this->env, $context["f"], "html", null, true);
            echo "\" title=\"Télécharger\"><i class=\"glyphicon glyphicon-download\"></i> </a></td>
\t\t\t\t\t                </tr>
\t\t\t\t\t                 </tbody>
\t\t                    
\t\t               \t\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t\t\t\t              
\t\t\t\t\t             
\t\t\t\t\t            </table>
\t\t  \t\t\t\t\t</div>
  \t\t\t\t\t   </div>
  \t\t\t\t\t</div>

  \t\t\t\t</div>
  \t\t\t\t";
        // line 76
        $this->loadTemplate("admin/pagination.html.twig", "admin/newsletters.html.twig", 76)->display($context);
        // line 77
        echo "  \t\t\t</div>

 </div>
  \t\t\t

";
    }

    public function getTemplateName()
    {
        return "admin/newsletters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 77,  148 => 76,  138 => 68,  126 => 63,  121 => 62,  119 => 61,  114 => 58,  110 => 57,  93 => 42,  81 => 36,  77 => 35,  73 => 34,  68 => 31,  64 => 30,  45 => 14,  38 => 9,  35 => 8,  29 => 4,  11 => 2,);
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
\t\t\t\t\t<div class=\"panel-title\">\t<h1>Listes des souscripteurs à la newsletter\t</h1></div>
\t\t\t\t\t<span class=\"pull-right\"><a class=\"btn btn-primary btn-sm\" href=\"{{path('excel')}}\">Exportez</a></span>
\t\t\t\t</div>
  \t\t\t\t<div class=\"panel-body\">

  \t\t\t\t\t<div class=\"row\">
  \t\t\t\t\t\t<div class=\"col-md-8\">
\t\t  \t\t\t\t\t<div class=\"table-responsive\">
\t\t  \t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t              <thead>
\t\t\t\t\t                <tr>
\t\t\t\t\t                  <th>#</th>
\t\t\t\t\t                  <th>Email</th>\t\t\t                 
\t\t\t\t\t                  <th>Subscribe Date</th>
\t\t\t\t\t                </tr>
\t\t\t\t\t              </thead>

\t\t\t\t\t               {% for new in news %}

\t\t\t\t\t               <tbody>
\t\t\t\t\t                <tr>
\t\t\t\t\t                  <td>{{ new.id }}</td>
\t\t\t\t\t                  <td>{{ new.mail }}</td>\t
\t\t\t\t\t                  <td>{{ new.createAt | date('d-m-Y H:i') }}</td>\t\t                  
\t\t\t\t\t               
\t\t\t\t\t                </tr>
\t\t\t\t\t                 </tbody>
\t\t                    
\t\t                {% endfor %}
\t\t\t\t\t              
\t\t\t\t\t             
\t\t\t\t\t            </table>
\t\t  \t\t\t\t\t</div>
\t\t  \t\t\t</div>
  \t\t\t\t\t<div class=\"col-md-4\">
\t\t  \t\t\t\t\t<div class=\"table-responsive\">
\t\t  \t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t              <thead>
\t\t\t\t\t                <tr>
\t\t\t\t\t                  <th>#</th>
\t\t\t\t\t                  
\t\t\t\t\t                </tr>
\t\t\t\t\t              </thead>

\t\t\t\t\t               {% for f in files|slice(0, 5) %}

\t\t\t\t\t               <tbody>
\t\t\t\t\t                <tr>
\t\t\t\t\t                \t {% set file_base = '/scimapimmo/web/fic/' %}
\t\t\t\t\t                  <td> {{ f }} </td>
\t\t\t\t\t                   <td>  <a class=\"btn btn-success btn-sm\" href=\"{{file_base}}{{ f }}\" title=\"Télécharger\"><i class=\"glyphicon glyphicon-download\"></i> </a></td>
\t\t\t\t\t                </tr>
\t\t\t\t\t                 </tbody>
\t\t                    
\t\t               \t\t\t\t {% endfor %}
\t\t\t\t\t              
\t\t\t\t\t             
\t\t\t\t\t            </table>
\t\t  \t\t\t\t\t</div>
  \t\t\t\t\t   </div>
  \t\t\t\t\t</div>

  \t\t\t\t</div>
  \t\t\t\t{% include \"admin/pagination.html.twig\" %}
  \t\t\t</div>

 </div>
  \t\t\t

{% endblock %}


", "admin/newsletters.html.twig", "C:\\wamp\\www\\scimapimmo\\app\\views\\admin\\newsletters.html.twig");
    }
}
