<?php

/* common/error.html.twig */
class __TwigTemplate_d15d297aa8d36f8a2b46988f2fd8749af3df51f93a4e88ad6fd5fd5b4390e96e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("login_layout.html.twig", "common/error.html.twig", 1);
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
        echo "Erreur";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "\t\t\t\t<section class=\"page-header\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<h1>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (isset($context["entete"]) ? $context["entete"] : $this->getContext($context, "entete")), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t\t\t<div class=\"container\">

\t\t\t\t\t<section class=\"page-not-found\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6 col-md-offset-1\">
\t\t\t\t\t\t\t\t<div class=\"page-not-found-main\">
\t\t\t\t\t\t\t\t\t<h2>";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "html", null, true);
        echo " <i class=\"fa fa-file\"></i></h2>
\t\t\t\t\t\t\t\t\t<p>";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<h4 class=\"heading-primary\">Here are some useful links</h4>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-list\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">About Us</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">FAQ's</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Sitemap</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Contact Us</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>

\t\t\t\t</div>


\t\t\t\t\t\t\t\t
 ";
    }

    public function getTemplateName()
    {
        return "common/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 29,  66 => 28,  49 => 16,  38 => 7,  35 => 6,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/error.html.twig", "C:\\wamp\\www\\scimapimmo\\app\\views\\common\\error.html.twig");
    }
}
