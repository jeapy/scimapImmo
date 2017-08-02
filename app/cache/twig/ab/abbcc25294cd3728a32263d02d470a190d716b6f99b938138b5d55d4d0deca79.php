<?php

/* admin/medias.html.twig */
class __TwigTemplate_8baae5fcbafbda35c3735576adac7b0797d6bbc220adad8d0f5df06926ba4a15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/medias.html.twig", 2);
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
        echo "Media";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
  \t\t\t
  \t\t\t<div class=\"content-box-large\">
  \t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<div class=\"panel-title\">\t<h1>Listes des medias\t</h1></div>
\t\t\t\t\t<span class=\"pull-right\"><a class=\"btn btn-primary btn-sm\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("medias_new");
        echo "\">Ajouter</a></span>
\t\t\t\t</div>
  \t\t\t\t<div class=\"panel-body\">
  \t\t\t\t\t<div class=\"table-responsive\">
  \t\t\t\t\t\t<table class=\"table\">
\t\t\t              <thead>
\t\t\t                <tr>
\t\t\t                  <th>#</th>
\t\t\t                  <th>type de media</th>\t\t\t                 
\t\t\t                  <th>description</th>
\t\t\t                  <th>Date de publication</th>
\t\t\t                </tr>
\t\t\t              </thead>

\t\t\t               ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medias"]) ? $context["medias"] : $this->getContext($context, "medias")));
        foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
            // line 29
            echo "
\t\t\t               <tbody>
\t\t\t                <tr>
\t\t\t                  <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t                  ";
            // line 33
            if (($this->getAttribute($context["media"], "mediatype", array()) == 1)) {
                // line 34
                echo "\t\t\t                  \t<td>VIDEO</td>
\t\t\t                  ";
            } else {
                // line 36
                echo "\t\t\t                   <td>IMAGE</td>
\t\t\t                  ";
            }
            // line 37
            echo "\t
\t\t\t                  <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "description", array()), "html", null, true);
            echo "</td>\t
\t\t\t                  <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["media"], "createdAt", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>\t\t                  
\t\t\t                <td> <a class=\"btn btn-warning btn-sm\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("media_edit", array("media" => $this->getAttribute($context["media"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
\t\t\t                </tr>
\t\t\t                 </tbody>
                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t              
\t\t\t             
\t\t\t            </table>
\t\t\t           
  \t\t\t\t\t</div>
  \t\t\t\t</div>
  \t\t\t\t
  \t\t\t\t\t";
        // line 52
        $this->loadTemplate("admin/pagination.html.twig", "admin/medias.html.twig", 52)->display($context);
        // line 53
        echo "  \t\t\t\t
  \t\t\t</div>
 </div>
  \t\t\t

";
    }

    public function getTemplateName()
    {
        return "admin/medias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 53,  116 => 52,  107 => 45,  96 => 40,  92 => 39,  88 => 38,  85 => 37,  81 => 36,  77 => 34,  75 => 33,  71 => 32,  66 => 29,  62 => 28,  45 => 14,  38 => 9,  35 => 8,  29 => 4,  11 => 2,);
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

\t {% block title %}Media{% endblock %}



\t\t\t     {% block content %}

  \t\t\t
  \t\t\t<div class=\"content-box-large\">
  \t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<div class=\"panel-title\">\t<h1>Listes des medias\t</h1></div>
\t\t\t\t\t<span class=\"pull-right\"><a class=\"btn btn-primary btn-sm\" href=\"{{ path('medias_new') }}\">Ajouter</a></span>
\t\t\t\t</div>
  \t\t\t\t<div class=\"panel-body\">
  \t\t\t\t\t<div class=\"table-responsive\">
  \t\t\t\t\t\t<table class=\"table\">
\t\t\t              <thead>
\t\t\t                <tr>
\t\t\t                  <th>#</th>
\t\t\t                  <th>type de media</th>\t\t\t                 
\t\t\t                  <th>description</th>
\t\t\t                  <th>Date de publication</th>
\t\t\t                </tr>
\t\t\t              </thead>

\t\t\t               {% for media in medias %}

\t\t\t               <tbody>
\t\t\t                <tr>
\t\t\t                  <td>{{ media.id }}</td>
\t\t\t                  {% if media.mediatype == 1 %}
\t\t\t                  \t<td>VIDEO</td>
\t\t\t                  {% else %}
\t\t\t                   <td>IMAGE</td>
\t\t\t                  {% endif %}\t
\t\t\t                  <td>{{ media.description }}</td>\t
\t\t\t                  <td>{{ media.createdAt | date('d-m-Y H:i') }}</td>\t\t                  
\t\t\t                <td> <a class=\"btn btn-warning btn-sm\" href=\"{{ path('media_edit', {'media': media.id}) }}\">Modifier</a></td>
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


", "admin/medias.html.twig", "C:\\wamp\\www\\scimapimmo\\app\\views\\admin\\medias.html.twig");
    }
}
