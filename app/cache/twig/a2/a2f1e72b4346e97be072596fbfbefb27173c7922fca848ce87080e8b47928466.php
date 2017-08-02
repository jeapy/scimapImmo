<?php

/* contact.html.twig */
class __TwigTemplate_c9636087177a0f9da050a05ff3a543c930d5b2f62eae173414d76416412467f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("public_layout.html.twig", "contact.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
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
        echo "Contact";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<section class=\"section section-tertiary section-no-border pb-md mt-none\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row mt-xl\">
\t\t\t\t\t\t\t<div class=\"col-md-10 col-md-offset-2 pt-xlg mt-xlg align-right\">
\t\t\t\t\t\t\t\t<h1 class=\"text-uppercase font-weight-light mt-xl text-color-primary\">Contact</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t\t\t<div class=\"container\">

\t\t\t\t\t<div class=\"row pt-xl mb-xl\">
\t\t\t\t\t\t<div class=\"col-md-7\">

\t\t\t\t\t\t\t<h2 class=\"mb-none\">Nous envoyer un mail</h2>

\t\t\t\t\t\t\t<p class=\"lead mb-xl mt-xs\"></p>

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t  <p>";
        // line 28
        if (((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) != "")) {
            // line 29
            echo "
\t\t\t\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</strong> 
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
        }
        // line 34
        echo "</p>

\t\t\t\t";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms")), 'form_start', array("attr" => array("class" => "")));
        echo "

\t\t\t\t<div class=\"form-group\"> 
\t\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom et Prenom")));
        echo "\t\t\t\t\t                       
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms")), "mail", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Adresse email")));
        echo "
\t\t\t\t</div>
\t\t\t\t    

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms")), "title", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "sujet")));
        echo "
\t\t\t\t\t\t
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms")), "message", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "8", "placeholder" => "Message")));
        echo "
\t\t\t\t
\t\t\t\t</div>

\t\t\t\t       
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Envoyé\" class=\"btn btn-primary mb-xlg\" >
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms")), 'form_end');
        echo "

\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t<div class=\"col-md-4 col-md-offset-1\">

\t\t\t\t\t\t\t<h4 class=\"text-color-dark mb-xs pb-md\">Scimap immobilier</h4>

\t\t\t\t\t\t\t<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
\t\t\t\t\t\t\t<div id=\"googlemaps\" class=\"google-map small\"></div>

\t\t\t\t\t\t\t<ul class=\"list list-icons mt-xlg mb-xlg\">
\t\t\t\t\t\t\t\t<li><i class=\"icon-pin icons\"></i> <strong>Address:</strong> ABIDJAN- Cocody Angre, star 11</li>
\t\t\t\t\t\t\t\t<li><i class=\"icon-call-end icons\"></i> <strong>Phone:</strong>(225) 22 01 00 05 /22 00 80 32</li>
\t\t\t\t\t\t\t\t<li><i class=\"icon-envelope icons\"></i> <strong>Email:</strong> <a href=\"mailto:mail@example.com\">infos@scimapimmo.com</a></li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>

\t\t\t

 ";
    }

    // line 91
    public function block_js($context, array $blocks = array())
    {
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/views/view.contact.js"), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 91,  123 => 65,  108 => 53,  100 => 48,  92 => 43,  85 => 39,  79 => 36,  75 => 34,  68 => 31,  64 => 29,  62 => 28,  39 => 7,  36 => 6,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"public_layout.html.twig\" %}

\t {% block title %}Contact{% endblock %}


 {% block content %}
<section class=\"section section-tertiary section-no-border pb-md mt-none\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row mt-xl\">
\t\t\t\t\t\t\t<div class=\"col-md-10 col-md-offset-2 pt-xlg mt-xlg align-right\">
\t\t\t\t\t\t\t\t<h1 class=\"text-uppercase font-weight-light mt-xl text-color-primary\">Contact</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t\t\t<div class=\"container\">

\t\t\t\t\t<div class=\"row pt-xl mb-xl\">
\t\t\t\t\t\t<div class=\"col-md-7\">

\t\t\t\t\t\t\t<h2 class=\"mb-none\">Nous envoyer un mail</h2>

\t\t\t\t\t\t\t<p class=\"lead mb-xl mt-xs\"></p>

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t  <p>{% if message!=\"\" %}

\t\t\t\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>{{ message }}</strong> 
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t{% endif %}</p>

\t\t\t\t{{ form_start(forms, { 'attr': {'class': ''} }) }}

\t\t\t\t<div class=\"form-group\"> 
\t\t\t\t\t\t{{ form_widget(forms.name, { 'attr':  {'class': 'form-control' ,'placeholder':'Nom et Prenom'   }}) }}\t\t\t\t\t                       
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_widget(forms.mail, { 'attr':  {'class': 'form-control','placeholder':'Adresse email'    }}) }}
\t\t\t\t</div>
\t\t\t\t    

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t {{ form_widget(forms.title, { 'attr':  {'class': 'form-control','placeholder':'sujet'    }}) }}
\t\t\t\t\t\t
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t {{ form_widget(forms.message, { 'attr':  {'class': 'form-control'  ,'rows':'8','placeholder':'Message'   }}) }}
\t\t\t\t
\t\t\t\t</div>

\t\t\t\t       
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Envoyé\" class=\"btn btn-primary mb-xlg\" >
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t{{ form_end(forms) }}

\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t<div class=\"col-md-4 col-md-offset-1\">

\t\t\t\t\t\t\t<h4 class=\"text-color-dark mb-xs pb-md\">Scimap immobilier</h4>

\t\t\t\t\t\t\t<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
\t\t\t\t\t\t\t<div id=\"googlemaps\" class=\"google-map small\"></div>

\t\t\t\t\t\t\t<ul class=\"list list-icons mt-xlg mb-xlg\">
\t\t\t\t\t\t\t\t<li><i class=\"icon-pin icons\"></i> <strong>Address:</strong> ABIDJAN- Cocody Angre, star 11</li>
\t\t\t\t\t\t\t\t<li><i class=\"icon-call-end icons\"></i> <strong>Phone:</strong>(225) 22 01 00 05 /22 00 80 32</li>
\t\t\t\t\t\t\t\t<li><i class=\"icon-envelope icons\"></i> <strong>Email:</strong> <a href=\"mailto:mail@example.com\">infos@scimapimmo.com</a></li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>

\t\t\t

 {% endblock %}

 {% block js %}<script src=\"{{ asset('js/views/view.contact.js') }}\"></script>{% endblock %}
", "contact.html.twig", "C:\\wamp\\www\\scimapimmo\\app\\views\\contact.html.twig");
    }
}
