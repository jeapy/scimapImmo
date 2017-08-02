<?php

/* public_layout.html.twig */
class __TwigTemplate_96bccc699aa43d859e5f02aa59df1c1c87bee63ed29d0118a75ed4433a187671 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
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
\t\t<link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap-datepicker/bootstrap-datepicker3.css"), "html", null, true);
        echo "\">

\t\t<!-- Theme CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/theme.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/theme-elements.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/theme-blog.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/theme-shop.css"), "html", null, true);
        echo "\">

\t\t<!-- Current Page CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/rs-plugin/css/settings.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/rs-plugin/css/layers.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/rs-plugin/css/navigation.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/nivo-slider/nivo-slider.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/nivo-slider/default/default.css"), "html", null, true);
        echo "\">

\t\t<!-- Skin CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/skins/skin-construction.css"), "html", null, true);
        echo "\">\t\t
\t\t<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("master/style-switcher/style.switcher.localstorage.js"), "html", null, true);
        echo "\"></script> 

\t\t<!-- Demo CSS -->\t\t
\t\t<link rel=\"stylesheet\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/demos/demo-construction.css"), "html", null, true);
        echo "\">

\t\t<!-- Theme Custom CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\">

\t\t<!-- Head Libs -->
\t\t<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/modernizr/modernizr.min.js"), "html", null, true);
        echo "\"></script>

\t</head>
\t<body data-spy=\"scroll\" data-target=\"#sidebar\" data-offset=\"120\">

\t\t<div class=\"body\">
\t\t\t<header id=\"header\" class=\"header-narrow header-semi-transparent-light header-flex\" data-plugin-options=\"{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 1, 'stickySetTop': '1'}\">
\t\t\t\t";
        // line 69
        $this->loadTemplate("nav.html.twig", "public_layout.html.twig", 69)->display($context);
        // line 70
        echo "\t\t\t</div>
\t\t\t</header>

\t\t\t<div role=\"main\" class=\"main\">
\t\t\t\t ";
        // line 74
        $this->displayBlock('content', $context, $blocks);
        // line 75
        echo "\t\t\t</div>



\t\t\t\t";
        // line 79
        $this->loadTemplate("footer.html.twig", "public_layout.html.twig", 79)->display($context);
        // line 80
        echo "
\t\t</div>

\t\t<!-- Vendor -->
\t\t<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery.appear/jquery.appear.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery.easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery-cookie/jquery-cookie.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("master/style-switcher/style.switcher.js"), "html", null, true);
        echo "\" id=\"styleSwitcherScript\" data-base-path=\"\" data-skin-src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("master/less/skin-construction.less"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/common/common.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery.validation/jquery.validation.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery.gmap/jquery.gmap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery.lazyload/jquery.lazyload.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/isotope/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/owl.carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/magnific-popup/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/vide/vide.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<!-- Theme Base, Components and Settings -->
\t\t<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/theme.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<!-- Current Page Vendor and Views -->
\t\t<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/rs-plugin/js/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>\t
\t\t\t<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- Current Page Vendor and Views -->
\t\t<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/nivo-slider/jquery.nivo.slider.min.js"), "html", null, true);
        echo "\"></script>
\t\t

\t\t ";
        // line 112
        $this->displayBlock('js', $context, $blocks);
        // line 113
        echo "
\t\t<!-- Demo -->
\t\t<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/demos/demo-construction.js"), "html", null, true);
        echo "\"></script>\t
\t\t
\t\t<!-- Theme Custom -->
\t\t<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<!-- Theme Initialization Files -->
\t\t<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/theme.init.js"), "html", null, true);
        echo "\"></script>




\t\t<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("master/analytics/analytics.js"), "html", null, true);
        echo "\"></script>
\t\t
\t</body>

</html>";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
    }

    // line 74
    public function block_content($context, array $blocks = array())
    {
        echo "    ";
    }

    // line 112
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "public_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 112,  315 => 74,  310 => 11,  301 => 126,  293 => 121,  287 => 118,  281 => 115,  277 => 113,  275 => 112,  269 => 109,  263 => 106,  259 => 105,  253 => 102,  247 => 99,  243 => 98,  239 => 97,  235 => 96,  231 => 95,  227 => 94,  223 => 93,  219 => 92,  215 => 91,  211 => 90,  207 => 89,  201 => 88,  197 => 87,  193 => 86,  189 => 85,  185 => 84,  179 => 80,  177 => 79,  171 => 75,  169 => 74,  163 => 70,  161 => 69,  151 => 62,  145 => 59,  139 => 56,  133 => 53,  129 => 52,  123 => 49,  119 => 48,  115 => 47,  111 => 46,  107 => 45,  101 => 42,  97 => 41,  93 => 40,  89 => 39,  83 => 36,  79 => 35,  75 => 34,  71 => 33,  67 => 32,  63 => 31,  59 => 30,  55 => 29,  34 => 11,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "public_layout.html.twig", "C:\\wamp\\www\\scimapimmo\\app\\views\\public_layout.html.twig");
    }
}
