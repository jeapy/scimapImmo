<?php

/* login.html.twig */
class __TwigTemplate_dfab398e95421d183cf542452a081bb7c7b9dee14887cd18761ff4435f837ad3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("login_layout.html.twig", "login.html.twig", 1);
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
\t\t\t\t\t\t\t\t\t<h1 class=\"text-center\">AUTHENTIFICATION</h1>
\t\t\t\t\t\t\t<div class=\"featured-boxes\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"featured-box featured-box-primary align-left mt-xlg\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"heading-primary text-uppercase mb-md\">Déja Utilisateur !</h4>

\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 37
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 38
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">

\t\t\t\t\t\t\t\t\t\t\t\t    <strong>Erreur de connexion!</strong> ";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 46
        echo "

";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => ""), "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check")));
        echo "

        <div class=\"row\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("\tlabel_attr" => array("class" => "")));
        echo "\t\t
\t\t\t\t\t  ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
\t\t              ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control input-lg")));
        echo "
\t\t\t
           \t\t </div>
\t\t\t\t\t 
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label', array("\tlabel_attr" => array("class" => "")));
        echo "\t\t
\t\t\t\t\t  ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "
\t\t              ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control input-lg")));
        echo "
\t\t\t
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
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscrire");
        echo "\" class=\" pull-right mb-xl\" > S'inscrire'</a>
\t\t</div>

    ";
        // line 85
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 85,  147 => 82,  129 => 67,  125 => 66,  121 => 65,  108 => 55,  104 => 54,  100 => 53,  92 => 48,  88 => 46,  80 => 41,  75 => 38,  73 => 37,  52 => 19,  38 => 7,  35 => 6,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login.html.twig", "C:\\wamp\\www\\scimapimmo\\app\\views\\login.html.twig");
    }
}
