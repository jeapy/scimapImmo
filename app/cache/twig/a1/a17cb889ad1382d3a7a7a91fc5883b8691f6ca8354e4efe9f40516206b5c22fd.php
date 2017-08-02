<?php

/* admin/article.html.twig */
class __TwigTemplate_3e95658dcc6feeef5027edd98d27e1113b08e4e7cadb67198f4483fe276e4f5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/article.html.twig", 2);
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
        echo "Article";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
  \t\t\t
  \t\t\t<div class=\"content-box-large\">
  \t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<div class=\"panel-title\">\t<h1>Listes des articles\t</h1></div>
\t\t\t\t\t<span class=\"pull-right\"><a class=\"btn btn-primary btn-sm\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles_new");
        echo "\">Ajouter</a></span>
\t\t\t\t</div>
\t\t\t\t
  \t\t\t\t<div class=\"panel-body\">
  \t\t\t\t
  \t\t\t\t\t<div class=\"table-responsive\">
  \t\t\t\t\t\t<table class=\"table\">
\t\t\t              <thead>
\t\t\t                <tr>
\t\t\t                  <th>#</th>
\t\t\t                  <th>titre</th>\t\t\t                 
\t\t\t                  <th>description</th>
\t\t\t                  <th>Date de publication</th>
\t\t\t                </tr>
\t\t\t              </thead>

\t\t\t               ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 31
            echo "
\t\t\t               <tbody>
\t\t\t                <tr>
\t\t\t                  <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t                  <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</td>\t
\t\t\t                  <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "description", array()), "html", null, true);
            echo "</td>\t
\t\t\t                  <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>\t\t                  
\t\t\t                <td> <a class=\"btn btn-warning btn-sm\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("article" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
\t\t\t                </tr>
\t\t\t                 </tbody>
                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t              
\t\t\t             
\t\t\t            </table>
\t\t\t           
  \t\t\t\t\t</div>
  \t\t\t\t</div>
  \t\t\t\t
  \t\t\t\t\t";
        // line 50
        $this->loadTemplate("admin/pagination.html.twig", "admin/article.html.twig", 50)->display($context);
        // line 51
        echo "  \t\t\t\t
  \t\t\t</div>
 </div>
  \t\t\t

";
    }

    public function getTemplateName()
    {
        return "admin/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 51,  109 => 50,  100 => 43,  89 => 38,  85 => 37,  81 => 36,  77 => 35,  73 => 34,  68 => 31,  64 => 30,  45 => 14,  38 => 9,  35 => 8,  29 => 4,  11 => 2,);
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

\t {% block title %}Article{% endblock %}



\t\t\t     {% block content %}

  \t\t\t
  \t\t\t<div class=\"content-box-large\">
  \t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<div class=\"panel-title\">\t<h1>Listes des articles\t</h1></div>
\t\t\t\t\t<span class=\"pull-right\"><a class=\"btn btn-primary btn-sm\" href=\"{{ path('articles_new') }}\">Ajouter</a></span>
\t\t\t\t</div>
\t\t\t\t
  \t\t\t\t<div class=\"panel-body\">
  \t\t\t\t
  \t\t\t\t\t<div class=\"table-responsive\">
  \t\t\t\t\t\t<table class=\"table\">
\t\t\t              <thead>
\t\t\t                <tr>
\t\t\t                  <th>#</th>
\t\t\t                  <th>titre</th>\t\t\t                 
\t\t\t                  <th>description</th>
\t\t\t                  <th>Date de publication</th>
\t\t\t                </tr>
\t\t\t              </thead>

\t\t\t               {% for article in articles %}

\t\t\t               <tbody>
\t\t\t                <tr>
\t\t\t                  <td>{{ article.id }}</td>
\t\t\t                  <td>{{ article.title }}</td>\t
\t\t\t                  <td>{{ article.description }}</td>\t
\t\t\t                  <td>{{ article.createdAt | date('d-m-Y H:i') }}</td>\t\t                  
\t\t\t                <td> <a class=\"btn btn-warning btn-sm\" href=\"{{ path('article_edit', {'article': article.id}) }}\">Modifier</a></td>
\t\t\t                </tr>
\t\t\t                 </tbody>
                    
                {% endfor %}
\t\t\t              
\t\t\t             
\t\t\t            </table>
\t\t\t           
  \t\t\t\t\t</div>
  \t\t\t\t</div>
  \t\t\t\t
  \t\t\t\t\t{% include \"admin/pagination.html.twig\" %}
  \t\t\t\t
  \t\t\t</div>
 </div>
  \t\t\t

{% endblock %}


", "admin/article.html.twig", "C:\\wamp\\www\\scimapimmo\\app\\views\\admin\\article.html.twig");
    }
}
