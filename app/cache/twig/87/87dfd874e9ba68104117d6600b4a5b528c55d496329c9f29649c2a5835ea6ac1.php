<?php

/* admin/dashbord.html.twig */
class __TwigTemplate_7b40e321211071de93ccf898b3f46b9ede3b55a4fd494b2bd6e5f8f9d2f1a41f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/dashbord.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Dashbord";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "


\t<div class=\"row\">
\t\t<div class=\"col-sm-4\">
    \t    <div class=\"hero-widget well well-sm\">
                <div class=\"icon\">
                     <i class=\"glyphicon glyphicon-ok-sign\"></i>
                </div>
                <div class=\"text\">
                    <var>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["sous"]) ? $context["sous"] : $this->getContext($context, "sous")), "html", null, true);
        echo "</var>
                    <label class=\"text-muted\">souscripteur(s)</label>
                </div>
                <div class=\"options\">
                    <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("souscripteur");
        echo "\" class=\"btn btn-primary btn-lg\"><i class=\"glyphicon glyphicon-search\"></i> Details</a>
                </div>
            </div>
\t\t</div>
        
        <div class=\"col-sm-4\">
            <div class=\"hero-widget well well-sm\">
                <div class=\"icon\">
                     <i class=\"glyphicon glyphicon-tags\"></i>
                </div>
                <div class=\"text\">
                    <var>";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "html", null, true);
        echo "</var>
                    <label class=\"text-muted\">souscription(s) newsletter</label>
                </div>
                <div class=\"options\">
                    <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletter");
        echo "\" class=\"btn btn-primary btn-lg\"><i class=\"glyphicon glyphicon-search\"></i> Details</a>
                </div>
            </div>
    \t</div>
        <div class=\"col-sm-4\">
            <div class=\"hero-widget well well-sm\">
                <div class=\"icon\">
                     <i class=\"glyphicon glyphicon-user\"></i>
                </div>
                <div class=\"text\">
                    <var>";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["usr"]) ? $context["usr"] : $this->getContext($context, "usr")), "html", null, true);
        echo "</var>
                    <label class=\"text-muted\">utilisteur(s)</label>
                </div>
                <div class=\"options\">
                    <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users");
        echo "\" class=\"btn btn-primary btn-lg\"><i class=\"glyphicon glyphicon-wrench\"></i> Details</a>
                </div>
            </div>
\t\t</div>
\t</div>





\t\t  \t<div class=\"row\">
\t\t  \t\t<div class=\"col-md-12 panel-warning\">
\t\t  \t\t\t<div class=\"content-box-header panel-heading\">
\t  \t\t\t\t\t<div class=\"panel-title \">Rapport des souscriptions par mois</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"panel-options\">
\t\t\t\t\t\t\t<a href=\"#\" data-rel=\"collapse\"><i class=\"glyphicon glyphicon-refresh\"></i></a>
\t\t\t\t\t\t\t<a href=\"#\" data-rel=\"reload\"><i class=\"glyphicon glyphicon-cog\"></i></a>
\t\t\t\t\t\t</div>
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"content-box-large box-with-header text-center\">
\t\t\t  \t\t
\t\t\t\t\t       <label class=\"label label-success\">Line Chart</label>
\t\t\t\t\t      <div id=\"line-chart\"></div>

\t\t\t\t\t\t<br /><br />
\t\t\t\t\t</div>
\t\t  \t\t</div>
\t\t  \t</div>
    \t  \t<div class=\"content-box-large\">

    \t  \t\t

\t\t\t    

\t\t\t    
\t\t\t\t
\t\t  \t</div>
\t\t  \t


 ";
    }

    public function getTemplateName()
    {
        return "admin/dashbord.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 52,  91 => 48,  78 => 38,  71 => 34,  57 => 23,  50 => 19,  38 => 9,  35 => 8,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("\t{% extends \"admin/layout.html.twig\" %}

\t {% block title %}Dashbord{% endblock %}


\t

\t\t\t     {% block content %}



\t<div class=\"row\">
\t\t<div class=\"col-sm-4\">
    \t    <div class=\"hero-widget well well-sm\">
                <div class=\"icon\">
                     <i class=\"glyphicon glyphicon-ok-sign\"></i>
                </div>
                <div class=\"text\">
                    <var>{{sous}}</var>
                    <label class=\"text-muted\">souscripteur(s)</label>
                </div>
                <div class=\"options\">
                    <a href=\"{{path('souscripteur')}}\" class=\"btn btn-primary btn-lg\"><i class=\"glyphicon glyphicon-search\"></i> Details</a>
                </div>
            </div>
\t\t</div>
        
        <div class=\"col-sm-4\">
            <div class=\"hero-widget well well-sm\">
                <div class=\"icon\">
                     <i class=\"glyphicon glyphicon-tags\"></i>
                </div>
                <div class=\"text\">
                    <var>{{news}}</var>
                    <label class=\"text-muted\">souscription(s) newsletter</label>
                </div>
                <div class=\"options\">
                    <a href=\"{{path('newsletter')}}\" class=\"btn btn-primary btn-lg\"><i class=\"glyphicon glyphicon-search\"></i> Details</a>
                </div>
            </div>
    \t</div>
        <div class=\"col-sm-4\">
            <div class=\"hero-widget well well-sm\">
                <div class=\"icon\">
                     <i class=\"glyphicon glyphicon-user\"></i>
                </div>
                <div class=\"text\">
                    <var>{{usr}}</var>
                    <label class=\"text-muted\">utilisteur(s)</label>
                </div>
                <div class=\"options\">
                    <a href=\"{{path('admin_users')}}\" class=\"btn btn-primary btn-lg\"><i class=\"glyphicon glyphicon-wrench\"></i> Details</a>
                </div>
            </div>
\t\t</div>
\t</div>





\t\t  \t<div class=\"row\">
\t\t  \t\t<div class=\"col-md-12 panel-warning\">
\t\t  \t\t\t<div class=\"content-box-header panel-heading\">
\t  \t\t\t\t\t<div class=\"panel-title \">Rapport des souscriptions par mois</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"panel-options\">
\t\t\t\t\t\t\t<a href=\"#\" data-rel=\"collapse\"><i class=\"glyphicon glyphicon-refresh\"></i></a>
\t\t\t\t\t\t\t<a href=\"#\" data-rel=\"reload\"><i class=\"glyphicon glyphicon-cog\"></i></a>
\t\t\t\t\t\t</div>
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"content-box-large box-with-header text-center\">
\t\t\t  \t\t
\t\t\t\t\t       <label class=\"label label-success\">Line Chart</label>
\t\t\t\t\t      <div id=\"line-chart\"></div>

\t\t\t\t\t\t<br /><br />
\t\t\t\t\t</div>
\t\t  \t\t</div>
\t\t  \t</div>
    \t  \t<div class=\"content-box-large\">

    \t  \t\t

\t\t\t    

\t\t\t    
\t\t\t\t
\t\t  \t</div>
\t\t  \t


 {% endblock %}", "admin/dashbord.html.twig", "C:\\wamp\\www\\scimapimmo\\app\\views\\admin\\dashbord.html.twig");
    }
}
