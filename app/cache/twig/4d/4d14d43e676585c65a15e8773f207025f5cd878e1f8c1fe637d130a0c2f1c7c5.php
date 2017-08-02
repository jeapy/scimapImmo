<?php

/* nav.html.twig */
class __TwigTemplate_fbd03a535ac6a364a67e209e0d56f3cea32dcd63bf849be6c87c637aa8bd00da extends Twig_Template
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
        echo "
<div class=\"header-body\">
\t\t\t\t\t<div class=\"header-container container\">
\t\t\t\t\t\t<div class=\"header-row\">
\t\t\t\t\t\t\t<div class=\"header-column\">
\t\t\t\t\t\t\t\t<div class=\"header-logo\">
\t\t\t\t\t\t\t\t\t<img class=\"logo-default\" alt=\"Porto\" width=\"324\" height=\"212\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/demos/construction/logo-construction.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t\t<img class=\"logo-small\" alt=\"Porto\" width=\"131\" height=\"48\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/demos/construction/logo-construction-small.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"header-column\">
\t\t\t\t\t\t\t\t<div class=\"header-row\">
\t\t\t\t\t\t\t\t\t<div class=\"header-nav header-nav-stripe\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn header-btn-collapse-nav\" data-toggle=\"collapse\" data-target=\".header-nav-main\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<ul class=\"header-social-icons social-icons visible-lg\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"social-icons-facebook\"><a href=\"http://www.facebook.com/\" target=\"_blank\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>

\t\t\t\t\t\t\t\t\t\t\t<li class=\"social-icons-twitter\"><a href=\"http://www.twitter.com/\" target=\"_blank\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1 collapse\">
\t\t\t\t\t\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills\" id=\"mainNav\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compagny");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNotre entreprise
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduits
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet");
        echo "\">Souscription en ligne</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">Compte client</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tActualites
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog");
        echo "\">Nos Projets</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tGalerie
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image");
        echo "\">Image</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("video");
        echo "\">Video</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tContact
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>



\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 76
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 77
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-lock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 84
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Deconnexion</a>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 87
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 88
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
                echo "\" >Administration</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 89
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t ";
        }
        // line 93
        echo "

\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t ";
    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 93,  151 => 89,  145 => 88,  143 => 87,  137 => 84,  128 => 77,  126 => 76,  116 => 69,  108 => 64,  104 => 63,  92 => 54,  80 => 45,  76 => 44,  63 => 34,  55 => 29,  32 => 9,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "nav.html.twig", "C:\\wamp\\www\\scimapimmo\\app\\views\\nav.html.twig");
    }
}
