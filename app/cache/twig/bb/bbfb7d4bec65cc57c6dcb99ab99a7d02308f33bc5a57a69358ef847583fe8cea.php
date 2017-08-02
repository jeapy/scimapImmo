<?php

/* index.html.twig */
class __TwigTemplate_f0a2bd6659b671216b31b4c30941e029933356692716d6313f3a981a219ccf3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("public_layout.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "public_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "   
<div class=\"slider-container light rev_slider_wrapper\" style=\"height: 700px;\">
\t\t\t\t\t<div id=\"revolutionSlider\" class=\"slider rev_slider\" data-plugin-revolution-slider data-plugin-options=\"{'delay': 9000, 'gridwidth': 1170, 'gridheight': 700, 'disableProgressBar': 'on'}\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li data-transition=\"fade\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/demos/construction/slides/slide-construction-1.jpg"), "html", null, true);
        echo "\"  
\t\t\t\t\t\t\t\t\talt=\"\"
\t\t\t\t\t\t\t\t\tdata-bgposition=\"center 100%\" 
\t\t\t\t\t\t\t\t\tdata-bgfit=\"cover\" 
\t\t\t\t\t\t\t\t\tdata-bgrepeat=\"no-repeat\" 
\t\t\t\t\t\t\t\t\tclass=\"rev-slidebg\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"tp-caption top-label tp-caption-custom-stripe\"
\t\t\t\t\t\t\t\t\tdata-x=\"right\" data-hoffset=\"100\"
\t\t\t\t\t\t\t\t\tdata-y=\"bottom\" data-voffset=\"100\"
\t\t\t\t\t\t\t\t\tdata-start=\"1000\"
\t\t\t\t\t\t\t\t\tdata-transform_in=\"x:[100%];opacity:0;s:1000;\">FAITE LE CHOIX DE VIVRE CHEZ VOUS EN UNE ANNÉE</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li data-transition=\"fade\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/demos/construction/slides/slide-construction-2.jpg"), "html", null, true);
        echo "\"  
\t\t\t\t\t\t\t\t\talt=\"\"
\t\t\t\t\t\t\t\t\tdata-bgposition=\"center 100%\" 
\t\t\t\t\t\t\t\t\tdata-bgfit=\"cover\" 
\t\t\t\t\t\t\t\t\tdata-bgrepeat=\"no-repeat\" 
\t\t\t\t\t\t\t\t\tclass=\"rev-slidebg\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"tp-caption top-label tp-caption-custom-stripe\"
\t\t\t\t\t\t\t\t\tdata-x=\"right\" data-hoffset=\"180\"
\t\t\t\t\t\t\t\t\tdata-y=\"bottom\" data-voffset=\"100\"
\t\t\t\t\t\t\t\t\tdata-start=\"1000\"
\t\t\t\t\t\t\t\t\tdata-transform_in=\"x:[100%];opacity:0;s:1000;\">UN CHOIX DE VIE, UN GOUT UNIQUE DE TRANQUILITE</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li data-transition=\"fade\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/demos/construction/slides/slide-construction-3.jpg"), "html", null, true);
        echo "\"  
\t\t\t\t\t\t\t\t\talt=\"\"
\t\t\t\t\t\t\t\t\tdata-bgposition=\"center 100%\" 
\t\t\t\t\t\t\t\t\tdata-bgfit=\"cover\" 
\t\t\t\t\t\t\t\t\tdata-bgrepeat=\"no-repeat\" 
\t\t\t\t\t\t\t\t\tclass=\"rev-slidebg\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"tp-caption top-label tp-caption-custom-stripe\"
\t\t\t\t\t\t\t\t\tdata-x=\"right\" data-hoffset=\"180\"
\t\t\t\t\t\t\t\t\tdata-y=\"bottom\" data-voffset=\"100\"
\t\t\t\t\t\t\t\t\tdata-start=\"1000\"
\t\t\t\t\t\t\t\t\tdata-transform_in=\"x:[100%];opacity:0;s:1000;\">VOS REVES DEVIENNENT REALITE</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li data-transition=\"fade\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/demos/construction/slides/slide-construction-4.jpg"), "html", null, true);
        echo "\"  
\t\t\t\t\t\t\t\t\talt=\"\"
\t\t\t\t\t\t\t\t\tdata-bgposition=\"center 100%\" 
\t\t\t\t\t\t\t\t\tdata-bgfit=\"cover\" 
\t\t\t\t\t\t\t\t\tdata-bgrepeat=\"no-repeat\" 
\t\t\t\t\t\t\t\t\tclass=\"rev-slidebg\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"tp-caption top-label tp-caption-custom-stripe\"
\t\t\t\t\t\t\t\t\tdata-x=\"right\" data-hoffset=\"180\"
\t\t\t\t\t\t\t\t\tdata-y=\"bottom\" data-voffset=\"100\"
\t\t\t\t\t\t\t\t\tdata-start=\"1000\"
\t\t\t\t\t\t\t\t\tdata-transform_in=\"x:[100%];opacity:0;s:1000;\">VIVEZ DANS UN ESPRIT RIVIERA</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row mt-xl mb-xl pt-xl mb-xl\">
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<h2 class=\"mt-xl mb-none text-color-dark\">Qui sommes nous</h2>
\t\t\t\t\t\t\t<p >Nou conjugons des compétences extremement pointues pour construire des maisons indivudualisées</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 center hidden-xs hidden-sm\">
\t\t\t\t\t\t\t<img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/dotted-line-angle.png"), "html", null, true);
        echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<p class=\"mt-xl\">Filiale du GROUP SCIMAP-SA, 
\t\t\t\t\t\t\tSCIMAP Immobilier, spécialiste de la construction individualisée conçoit chaque projet 
\t\t\t\t\t\t\tsur mesure en pensant aux objectifs 
\t\t\t\t\t\t\tattendus en termes de performance et 
\t\t\t\t\t\t\tde conformité. En vous appuyant sur un 
\t\t\t\t\t\t\tprestataire unique pour la gestion globale de votre projet clé en main, vous ne 
\t\t\t\t\t\t\tdétournez pas vos forces vives du cœur 
\t\t\t\t\t\t\tde votre rêve de « vivre chez vous »....
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<a class=\"mt-md\" href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compagny");
        echo "#who-we-are\">Voir plus <i class=\"fa fa-long-arrow-right\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<section class=\"section section-tertiary section-no-border section-custom-construction\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row pt-xl\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<h2 class=\"mb-none text-color-dark\">Produits</h2>
\t\t\t\t\t\t\t\t<p class=\"lead\"></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row mt-lg\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"feature-box feature-box-style-2 mb-xl appear-animation\" data-appear-animation=\"fadeInUp\" data-appear-animation-delay=\"300\">
\t\t\t\t\t\t\t\t\t<div class=\"feature-box-icon\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/demos/construction/icons/construction.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"feature-box-info ml-md\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"mb-sm\">Maison Sociale</h4>
\t\t\t\t\t\t\t\t\t\t<p>Cette gamme comprend des villas basses de 3 à 5 pièces baties sur une superficifie de 61,91 à 98,80 m².</p>
\t\t\t\t\t\t\t\t\t\t<a class=\"mt-md\" href=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet");
        echo "#pre-construction\">Voir Plus <i class=\"fa fa-long-arrow-right\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"feature-box feature-box-style-2 mb-xl appear-animation\" data-appear-animation=\"fadeInUp\" data-appear-animation-delay=\"0\">
\t\t\t\t\t\t\t\t\t<div class=\"feature-box-icon\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/demos/construction/icons/ground-construction.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"feature-box-info ml-md\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"mb-sm\">Maison Moyen Standing</h4>
\t\t\t\t\t\t\t\t\t\t<p>Cette gamme comprend des villas basses de 3 à 5 pièces baties sur une superficifie de 103,31 à 144,03 m².</p>
\t\t\t\t\t\t\t\t\t\t<a class=\"mt-md\" href=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet");
        echo "#general-construction\">Voir Plus<i class=\"fa fa-long-arrow-right\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"feature-box feature-box-style-2 mb-xl appear-animation\" data-appear-animation=\"fadeInUp\" data-appear-animation-delay=\"0\">
\t\t\t\t\t\t\t\t\t<div class=\"feature-box-icon\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/demos/construction/icons/painting.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"feature-box-info ml-md\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"mb-sm\">Maison Haut Standing</h4>
\t\t\t\t\t\t\t\t\t\t<p>Cette gamme comprend des villas duplexe de 3 à 5 pièces (Rez-de-chausée + étage) baties sur des superficifies de 105,08 à 134,80 m² (Rez-de-chausée) et 69,63 à 129,56 m² (Etage)</p>
\t\t\t\t\t\t\t\t\t\t<a class=\"mt-md\" href=\"";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet");
        echo "#plumbing\">Voir Plus<i class=\"fa fa-long-arrow-right\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t\t\t<section class=\"pt-md pb-xl home-concept-construction\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row pt-xl\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<h2 class=\"mb-none text-color-dark\">Projects</h2>
\t\t\t\t\t\t\t\t<p class=\"lead\"></p>

\t\t\t\t\t\t\t\t<div class=\"diamonds-wrapper lightbox\" data-plugin-options=\"{'delegate': '.diamond', 'type': 'image', 'gallery': {'enabled': true}}\">
\t\t\t\t\t\t\t\t\t<ul class=\"diamonds\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/demos/construction/gallery/construction-gallery-1.jpg"), "html", null, true);
        echo "\" class=\"diamond\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/demos/construction/gallery/construction-gallery-1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/demos/construction/gallery/construction-gallery-2.jpg"), "html", null, true);
        echo "\" class=\"diamond\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/demos/construction/gallery/construction-gallery-2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/demos/construction/gallery/construction-gallery-3.jpg"), "html", null, true);
        echo "\" class=\"diamond\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/demos/construction/gallery/construction-gallery-3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/demos/construction/gallery/construction-gallery-4.jpg"), "html", null, true);
        echo "\" class=\"diamond diamond-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/demos/construction/gallery/construction-gallery-4.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/demos/construction/gallery/construction-gallery-5.jpg"), "html", null, true);
        echo "\" class=\"diamond\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/demos/construction/gallery/construction-gallery-5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/demos/construction/gallery/construction-gallery-6.jpg"), "html", null, true);
        echo "\" class=\"diamond diamond-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/demos/construction/gallery/construction-gallery-6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/demos/construction/gallery/construction-gallery-7.jpg"), "html", null, true);
        echo "\" class=\"diamond diamond-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/demos/construction/gallery/construction-gallery-7.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row row-diamons-description\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<a class=\"btn btn-borders btn-primary\" href=\"";
        // line 215
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formS");
        echo "\">Souscrire</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t\t\t<section class=\"section section-background mb-xl\" style=\"background-image: url(";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/demos/construction/testimonials/testimonials-bg.jpg"), "html", null, true);
        echo "); background-position: 50% 100%; min-height: 540px;\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6 col-md-offset-6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"owl-carousel owl-theme nav-bottom rounded-nav mt-xl pt-xl mb-xl pb-xl\" data-plugin-options=\"{'items': 1, 'loop': false}\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial testimonial-style-2 testimonial-with-quotes mb-none\">
\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Au cœur de notre mission, créativité, écoute, engagement, réactivité, éthique, esthétique et expériences 
\t\t\t\t\t\t\t\t\t\t\t\t\tsont nos valeurs. Elles matérialisent le socle de notre 
\t\t\t\t\t\t\t\t\t\t\t\t\tphilosophie qui est de construire un espace de partage 
\t\t\t\t\t\t\t\t\t\t\t\t\touvert sur la confiance pour notre clientèle dont la 
\t\t\t\t\t\t\t\t\t\t\t\t\tsatisfaction cristallise tout l’intérêt de nos attentes.</p>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p><strong>Scimap Immobilier</strong></p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial testimonial-style-2 testimonial-with-quotes mb-none\">
\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Parce que chez nous c’est vous 
\t\t\t\t\t\t\t\t\t\t\t\t\tqui construisez, nous vous 
\t\t\t\t\t\t\t\t\t\t\t\t\taccordons la priorité de votre 
\t\t\t\t\t\t\t\t\t\t\t\t\touvrage en termes de goût et de choix.</p>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p><strong>Scimap Immobilier</strong></p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t\t\t<section class=\"pt-md section-custom-construction-2\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12 center\">
\t\t\t\t\t\t\t\t<div class=\"owl-carousel owl-theme stage-margin rounded-nav\" data-plugin-options=\"{'margin': 10, 'loop': true, 'nav': true, 'dots': false, 'stagePadding': 40, 'items': 6, 'autoplay': true, 'autoplayTimeout': 3000}\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logos/logo-1.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logos/logo-2.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logos/logo-3.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logos/logo-4.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logos/logo-5.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logos/logo-6.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logos/logo-4.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logos/logo-2.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logos/logo-3.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logos/logo-5.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12 center mt-xl\">
\t\t\t\t\t\t\t\t<hr class=\"solid mt-none mb-xl\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row pt-xl\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<h2 class=\"mb-none text-color-dark\">Projets</h2>
\t\t\t\t\t\t\t\t<p class=\"lead mb-sm\"></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"recent-posts mt-xl\">
\t\t\t\t\t\t\t\t\t<a href=\"demo-construction-blog-detail.html\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive pb-md\" src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/demos/construction/blog/blog-construction-1.jpg"), "html", null, true);
        echo "\" alt=\"Blog\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<article class=\"post\">
\t\t\t\t\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"day\">15</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"month\">Jan</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"pt-md pb-none mb-none\"><a class=\"text-color-dark\" href=\"demo-construction-blog-detail.html\">Projet 1</a></h4>
\t\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t\t\t<a class=\"mt-md\" href=\"demo-construction-blog-detail.html\"></a>
\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"recent-posts mt-xl\">
\t\t\t\t\t\t\t\t\t<a href=\"demo-construction-blog-detail.html\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive pb-md\" src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/demos/construction/blog/blog-construction-3.jpg"), "html", null, true);
        echo "\" alt=\"Blog\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<article class=\"post\">
\t\t\t\t\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"day\">25</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"month\">Mai</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"pt-md pb-none mb-none\"><a class=\"text-color-dark\" href=\"demo-construction-blog-detail.html\">Projet 2</a></h4>
\t\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t\t\t<a class=\"mt-md\" href=\"demo-construction-blog-detail.html\"> </a>
\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t

\t\t\t\t</section>

\t\t\t\t
\t\t\t\t\t<div class=\"container-fluid news\">
\t\t\t\t\t\t<div class=\"row mt-xl mb-xl pt-xl mb-xl\">
\t\t\t\t\t\t\t<div class=\"col-md-offset-3 col-md-6 text-center\">
\t\t\t\t\t\t\t\t<h4>Souscrire à la newsletter</h4>

\t\t\t\t\t\t\t<div class=\"newsletter\">
\t\t\t\t\t\t\t\t";
        // line 364
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 365
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-success\" id=\"newsletterSuccess\">
\t\t\t\t\t\t\t\t <strong>    ";
            // line 366
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 369
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 374
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t\t\t\t\t";
        // line 375
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
        // line 378
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 379
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ex: votrenom@gmail.com ", "id" => "newsletterEmail")));
        echo "
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"submit\"><i class=\"icon-paper-plane icons\"></i></button>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 385
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t\t

\t\t\t\t ";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  561 => 385,  552 => 379,  548 => 378,  542 => 375,  538 => 374,  531 => 369,  522 => 366,  519 => 365,  515 => 364,  484 => 336,  463 => 318,  440 => 298,  434 => 295,  428 => 292,  422 => 289,  416 => 286,  410 => 283,  404 => 280,  398 => 277,  392 => 274,  386 => 271,  333 => 221,  324 => 215,  309 => 203,  304 => 201,  296 => 196,  291 => 194,  283 => 189,  278 => 187,  270 => 182,  265 => 180,  257 => 175,  252 => 173,  244 => 168,  239 => 166,  231 => 161,  226 => 159,  203 => 139,  195 => 134,  185 => 127,  177 => 122,  167 => 115,  159 => 110,  138 => 92,  123 => 80,  96 => 56,  79 => 42,  62 => 28,  45 => 14,  38 => 9,  35 => 8,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "C:\\wamp\\www\\scimapimmo\\app\\views\\index.html.twig");
    }
}
