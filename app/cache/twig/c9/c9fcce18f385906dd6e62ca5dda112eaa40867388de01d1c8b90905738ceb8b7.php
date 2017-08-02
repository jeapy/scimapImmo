<?php

/* login_layout.html.twig */
class __TwigTemplate_4686ef22bd7fd81f57d18cfb0010b5dd85dbb7dc44833ef9ebda3423d46b96a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html data-style-switcher-options=\"{'borderRadius': '0', 'changeLogo': false, 'colorPrimary': '#E04622', 'colorSecondary': '#EEAB26', 'colorTertiary': '#EAEFF3', 'colorQuaternary': '#080808'}\">
\t
<head>

\t\t<!-- Basic -->
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\t

\t\t
\t\t<title>Scimap Immobilier | ";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>\t

\t\t<meta name=\"keywords\" content=\"HTML5 Template\" />
\t\t<meta name=\"description\" content=\"Porto - Responsive HTML5 Template\">
\t\t<meta name=\"author\" content=\"okler.net\">

\t\t<!-- Favicon -->
\t\t<link rel=\"shortcut icon\" href=\"img/favicon.ico\" type=\"image/x-icon\" />
\t\t<link rel=\"apple-touch-icon\" href=\"img/apple-touch-icon.png\">

\t\t<!-- Mobile Metas -->
\t\t<meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">

\t\t<!-- Web Fonts  -->
\t\t<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light\" rel=\"stylesheet\" type=\"text/css\">

\t\t<!-- Vendor CSS -->
\t\t
\t\t<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/animate/animate.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/simple-line-icons/css/simple-line-icons.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/owl.carousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/owl.carousel/assets/owl.theme.default.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/magnific-popup/magnific-popup.min.css"), "html", null, true);
        echo "\">

\t\t<!-- Theme CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/theme.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/theme-elements.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/theme-blog.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/theme-shop.css"), "html", null, true);
        echo "\">

\t\t<!-- Current Page CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/rs-plugin/css/settings.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/rs-plugin/css/layers.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/rs-plugin/css/navigation.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/nivo-slider/nivo-slider.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/nivo-slider/default/default.css"), "html", null, true);
        echo "\">

\t\t<!-- Skin CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/skins/skin-construction.css"), "html", null, true);
        echo "\">\t\t
\t\t<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("master/style-switcher/style.switcher.localstorage.js"), "html", null, true);
        echo "\"></script> 

\t\t<!-- Demo CSS -->\t\t
\t\t<link rel=\"stylesheet\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/demos/demo-construction.css"), "html", null, true);
        echo "\">

\t\t<!-- Theme Custom CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\">

\t\t<!-- Head Libs -->
\t\t<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/modernizr/modernizr.min.js"), "html", null, true);
        echo "\"></script>

\t</head>
\t<body data-spy=\"scroll\" data-target=\"#sidebar\" data-offset=\"120\">

\t\t<div class=\"body\">
\t\t\t<header id=\"header\" class=\"header-narrow header-semi-transparent-light header-flex\" data-plugin-options=\"{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 1, 'stickySetTop': '1'}\">
\t\t\t\t
\t\t\t</header>

\t\t\t<div role=\"main\" class=\"main\">
\t\t\t\t ";
        // line 72
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "\t\t\t</div>



\t\t\t\t";
        // line 77
        $this->loadTemplate("footer.html.twig", "login_layout.html.twig", 77)->display($context);
        // line 78
        echo "
\t\t</div>

\t\t<!-- Vendor -->
\t\t<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery.appear/jquery.appear.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery.easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery-cookie/jquery-cookie.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("master/style-switcher/style.switcher.js"), "html", null, true);
        echo "\" id=\"styleSwitcherScript\" data-base-path=\"\" data-skin-src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("master/less/skin-construction.less"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/common/common.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery.validation/jquery.validation.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery.gmap/jquery.gmap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery.lazyload/jquery.lazyload.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/isotope/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/owl.carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/magnific-popup/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/vide/vide.min.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<!-- Theme Base, Components and Settings -->
\t\t<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/theme.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<!-- Current Page Vendor and Views -->
\t\t<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/rs-plugin/js/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>\t
\t\t
\t\t<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- Current Page Vendor and Views -->
\t\t<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/nivo-slider/jquery.nivo.slider.min.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<!-- Demo -->
\t\t<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/demos/demo-construction.js"), "html", null, true);
        echo "\"></script>\t
\t\t
\t\t<!-- Theme Custom -->
\t\t<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<!-- Theme Initialization Files -->
\t\t<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/theme.init.js"), "html", null, true);
        echo "\"></script>


\t</body>

</html>";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
    }

    // line 72
    public function block_content($context, array $blocks = array())
    {
        echo "    ";
    }

    public function getTemplateName()
    {
        return "login_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 72,  285 => 11,  275 => 116,  269 => 113,  263 => 110,  257 => 107,  251 => 104,  246 => 102,  240 => 99,  234 => 96,  230 => 95,  226 => 94,  222 => 93,  218 => 92,  214 => 91,  210 => 90,  206 => 89,  202 => 88,  198 => 87,  192 => 86,  188 => 85,  184 => 84,  180 => 83,  176 => 82,  170 => 78,  168 => 77,  162 => 73,  160 => 72,  146 => 61,  140 => 58,  134 => 55,  128 => 52,  124 => 51,  118 => 48,  114 => 47,  110 => 46,  106 => 45,  102 => 44,  96 => 41,  92 => 40,  88 => 39,  84 => 38,  78 => 35,  74 => 34,  70 => 33,  66 => 32,  62 => 31,  58 => 30,  54 => 29,  33 => 11,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html data-style-switcher-options=\"{'borderRadius': '0', 'changeLogo': false, 'colorPrimary': '#E04622', 'colorSecondary': '#EEAB26', 'colorTertiary': '#EAEFF3', 'colorQuaternary': '#080808'}\">
\t
<head>

\t\t<!-- Basic -->
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\t

\t\t
\t\t<title>Scimap Immobilier | {% block title %}{% endblock %}</title>\t

\t\t<meta name=\"keywords\" content=\"HTML5 Template\" />
\t\t<meta name=\"description\" content=\"Porto - Responsive HTML5 Template\">
\t\t<meta name=\"author\" content=\"okler.net\">

\t\t<!-- Favicon -->
\t\t<link rel=\"shortcut icon\" href=\"img/favicon.ico\" type=\"image/x-icon\" />
\t\t<link rel=\"apple-touch-icon\" href=\"img/apple-touch-icon.png\">

\t\t<!-- Mobile Metas -->
\t\t<meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">

\t\t<!-- Web Fonts  -->
\t\t<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light\" rel=\"stylesheet\" type=\"text/css\">

\t\t<!-- Vendor CSS -->
\t\t
\t\t<link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('vendor/animate/animate.min.css') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('vendor/simple-line-icons/css/simple-line-icons.min.css') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('vendor/owl.carousel/assets/owl.theme.default.min.css') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('vendor/magnific-popup/magnific-popup.min.css') }}\">

\t\t<!-- Theme CSS -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/theme.css') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/theme-elements.css') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/theme-blog.css') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/theme-shop.css') }}\">

\t\t<!-- Current Page CSS -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('vendor/rs-plugin/css/settings.css') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('vendor/rs-plugin/css/layers.css') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('vendor/rs-plugin/css/navigation.css') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('vendor/nivo-slider/nivo-slider.css') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('vendor/nivo-slider/default/default.css') }}\">

\t\t<!-- Skin CSS -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/skins/skin-construction.css') }}\">\t\t
\t\t<script src=\"{{ asset('master/style-switcher/style.switcher.localstorage.js') }}\"></script> 

\t\t<!-- Demo CSS -->\t\t
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/demos/demo-construction.css') }}\">

\t\t<!-- Theme Custom CSS -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/custom.css') }}\">

\t\t<!-- Head Libs -->
\t\t<script src=\"{{ asset('vendor/modernizr/modernizr.min.js') }}\"></script>

\t</head>
\t<body data-spy=\"scroll\" data-target=\"#sidebar\" data-offset=\"120\">

\t\t<div class=\"body\">
\t\t\t<header id=\"header\" class=\"header-narrow header-semi-transparent-light header-flex\" data-plugin-options=\"{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 1, 'stickySetTop': '1'}\">
\t\t\t\t
\t\t\t</header>

\t\t\t<div role=\"main\" class=\"main\">
\t\t\t\t {% block content %}    {% endblock %}
\t\t\t</div>



\t\t\t\t{% include 'footer.html.twig' %}

\t\t</div>

\t\t<!-- Vendor -->
\t\t<script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
\t\t<script src=\"{{ asset('vendor/jquery.appear/jquery.appear.min.js') }}\"></script>
\t\t<script src=\"{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}\"></script>
\t\t<script src=\"{{ asset('vendor/jquery-cookie/jquery-cookie.min.js') }}\"></script>
\t\t<script src=\"{{ asset('master/style-switcher/style.switcher.js') }}\" id=\"styleSwitcherScript\" data-base-path=\"\" data-skin-src=\"{{ asset('master/less/skin-construction.less')}}\"></script>
\t\t<script src=\"{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}\"></script>
\t\t<script src=\"{{ asset('vendor/common/common.min.js') }}\"></script>
\t\t<script src=\"{{ asset('vendor/jquery.validation/jquery.validation.min.js') }}\"></script>
\t\t<script src=\"{{ asset('vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js') }}\"></script>
\t\t<script src=\"{{ asset('vendor/jquery.gmap/jquery.gmap.min.js') }}\"></script>
\t\t<script src=\"{{ asset('vendor/jquery.lazyload/jquery.lazyload.min.js') }}\"></script>
\t\t<script src=\"{{ asset('vendor/isotope/jquery.isotope.min.js') }}\"></script>
\t\t<script src=\"{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}\"></script>
\t\t<script src=\"{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}\"></script>
\t\t<script src=\"{{ asset('vendor/vide/vide.min.js') }}\"></script>
\t\t
\t\t<!-- Theme Base, Components and Settings -->
\t\t<script src=\"{{ asset('js/theme.js') }}\"></script>
\t\t
\t\t<!-- Current Page Vendor and Views -->
\t\t<script src=\"{{ asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}\"></script>\t
\t\t
\t\t<script src=\"{{ asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}\"></script>

\t\t<!-- Current Page Vendor and Views -->
\t\t<script src=\"{{ asset('vendor/nivo-slider/jquery.nivo.slider.min.js') }}\"></script>
\t\t
\t\t<!-- Demo -->
\t\t<script src=\"{{ asset('js/demos/demo-construction.js') }}\"></script>\t
\t\t
\t\t<!-- Theme Custom -->
\t\t<script src=\"{{ asset('js/custom.js') }}\"></script>
\t\t
\t\t<!-- Theme Initialization Files -->
\t\t<script src=\"{{ asset('js/theme.init.js') }}\"></script>


\t</body>

</html>", "login_layout.html.twig", "C:\\wamp\\www\\scimapimmo\\app\\views\\login_layout.html.twig");
    }
}
