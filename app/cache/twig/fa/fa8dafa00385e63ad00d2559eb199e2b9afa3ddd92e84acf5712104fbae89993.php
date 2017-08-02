<?php

/* inscription.html.twig */
class __TwigTemplate_b5d4b088597a2690acb1140af2f6ba40a23cc34b1ed6b2b5952e183f75233c1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("login_layout.html.twig", "inscription.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "login_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Connexion";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "\t\t\t\t<section class=\"page-header\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"active\"></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<h1><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil <i class=\"fa fa-home\"></i></a></h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t\t\t<div class=\"container\">

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<h1 class=\"text-center\">INSCRIPTION</h1>
\t\t\t\t\t\t\t<div class=\"featured-boxes\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"featured-box featured-box-primary align-left mt-xlg\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"heading-primary text-uppercase mb-md\">Nouvel Utilisateur !</h4>

";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 38
            echo "
<div class=\"alert alert-success\">

    ";
            // line 41
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "

</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
";
        // line 47
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "password", array()), "first", array()), 'errors')) {
            // line 48
            echo "
<div class=\"alert alert-danger\">

    ";
            // line 51
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "password", array()), "first", array()), 'errors');
            echo "

</div>

";
        }
        // line 56
        echo "
    ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), 'form_start', array("attr" => array("class" => "")));
        echo "


        <div class=\"row\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "username", array()), 'label', array("\tlabel_attr" => array("class" => "")));
        echo "\t\t
\t\t\t\t\t  ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "username", array()), 'errors');
        echo "
\t\t              ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "username", array()), 'widget', array("attr" => array("class" => "form-control input-lg")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t
\t\t\t\t\t ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "password", array()), "first", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t\t\t\t\t ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "password", array()), "first", array()), 'errors');
        echo "
\t\t              ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "password", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control input-lg")));
        echo "
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t
\t\t\t\t\t ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "password", array()), "second", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t\t\t\t\t ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "password", array()), "second", array()), 'errors');
        echo "
\t\t              ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "password", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control input-lg")));
        echo "
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t
\t\t\t\t\t ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "mail", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t\t\t\t\t ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "mail", array()), 'errors');
        echo "
\t\t              ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "mail", array()), 'widget', array("attr" => array("class" => "form-control input-lg")));
        echo "
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t
\t\t\t\t\t ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "file", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t\t\t\t\t ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "file", array()), 'errors');
        echo "
\t\t              ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "file", array()), 'widget', array("attr" => array("class" => "form-control input-lg")));
        echo "
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t
     

       <div class=\"row\">
\t\t\t
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<input type=\"submit\" value=\"Valider\" class=\"btn btn-primary pull-right mb-xl\" data-loading-text=\"Loading...\">\t\t\t\t
\t\t\t</div>
\t\t\t<a  href=\"";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" class=\" pull-right mb-xl\" > Se connecter</a>
\t\t</div>

   ";
        // line 129
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), 'form_end');
        echo "

\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t


\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 129,  231 => 126,  214 => 112,  210 => 111,  206 => 110,  193 => 100,  189 => 99,  185 => 98,  172 => 88,  168 => 87,  164 => 86,  151 => 76,  147 => 75,  143 => 74,  131 => 65,  127 => 64,  123 => 63,  114 => 57,  111 => 56,  103 => 51,  98 => 48,  96 => 47,  93 => 46,  82 => 41,  77 => 38,  73 => 37,  52 => 19,  38 => 7,  35 => 6,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"login_layout.html.twig\" %}

\t {% block title %}Connexion{% endblock %}


 {% block content %}
\t\t\t\t<section class=\"page-header\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"active\"></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<h1><a href=\"{{path('homepage')}}\">Accueil <i class=\"fa fa-home\"></i></a></h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t\t\t<div class=\"container\">

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<h1 class=\"text-center\">INSCRIPTION</h1>
\t\t\t\t\t\t\t<div class=\"featured-boxes\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"featured-box featured-box-primary align-left mt-xlg\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"heading-primary text-uppercase mb-md\">Nouvel Utilisateur !</h4>

{% for flashMessage in app.session.flashbag.get('success') %}

<div class=\"alert alert-success\">

    {{ flashMessage }}

</div>

{% endfor %}

{% if form_errors(userForm.password.first) %}

<div class=\"alert alert-danger\">

    {{ form_errors(userForm.password.first) }}

</div>

{% endif %}

    {{ form_start(userForm, { 'attr': {'class': ''} }) }}


        <div class=\"row\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t {{ form_label(userForm.username, null, { '\tlabel_attr':  {'class': '' }}) }}\t\t
\t\t\t\t\t  {{ form_errors(userForm.username) }}
\t\t              {{ form_widget(userForm.username, { 'attr':  {'class': 'form-control input-lg' }}) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t
\t\t\t\t\t {{ form_label(userForm.password.first, null, { 'label_attr': { 'class': '' }}) }}
\t\t\t\t\t {{ form_errors(userForm.password.first) }}
\t\t              {{ form_widget(userForm.password.first, { 'attr':  {'class': 'form-control input-lg' }}) }}
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t
\t\t\t\t\t {{ form_label(userForm.password.second, null, { 'label_attr': { 'class': '' }}) }}
\t\t\t\t\t {{ form_errors(userForm.password.second) }}
\t\t              {{ form_widget(userForm.password.second, { 'attr':  {'class': 'form-control input-lg' }}) }}
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t
\t\t\t\t\t {{ form_label(userForm.mail, null, { 'label_attr': { 'class': '' }}) }}
\t\t\t\t\t {{ form_errors(userForm.mail) }}
\t\t              {{ form_widget(userForm.mail, { 'attr':  {'class': 'form-control input-lg' }}) }}
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t
\t\t\t\t\t {{ form_label(userForm.file, null, { 'label_attr': { 'class': '' }}) }}
\t\t\t\t\t {{ form_errors(userForm.file) }}
\t\t              {{ form_widget(userForm.file, { 'attr':  {'class': 'form-control input-lg' }}) }}
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t
     

       <div class=\"row\">
\t\t\t
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<input type=\"submit\" value=\"Valider\" class=\"btn btn-primary pull-right mb-xl\" data-loading-text=\"Loading...\">\t\t\t\t
\t\t\t</div>
\t\t\t<a  href=\"{{path('login')}}\" class=\" pull-right mb-xl\" > Se connecter</a>
\t\t</div>

   {{ form_end(userForm) }}

\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t


\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
{% endblock %}", "inscription.html.twig", "C:\\wamp\\www\\scimapimmo\\app\\views\\inscription.html.twig");
    }
}
