<?php

/* admin/admin_users_edit.html.twig */
class __TwigTemplate_529f7fd24d4d74b14838e07aa5d028812f5b0531a509827f0ff9c14e054c0e90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/admin_users_edit.html.twig", 2);
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
\t\t\t\t\t<div class=\"panel-title\">\t<h1>Modifier un utilisateur</h1></div>
          <span class=\"pull-right\"><a class=\"btn btn-default btn-sm\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users");
        echo "\">Annuler</a></span>
\t\t\t\t</div>
        
  \t\t\t\t<div class=\"panel-body\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 19
            echo "        <div class=\"alert alert-success\">
          ";
            // line 20
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  \t\t\t\t\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                  <fieldset>
                    <div class=\"form-group\">
                      ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                      ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                      ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                   <div class=\"form-group\">
                      ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'label');
        echo "
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'errors');
        echo "
                  ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                      ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'label');
        echo "
                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'errors');
        echo "
                  ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                      ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'label');
        echo "
                      ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'errors');
        echo "
                      ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>

                    <div class=\"form-group\">  
           ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
           ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'errors');
        echo "
                  ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
  <div class=\"form-group\">  
          ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
           ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'errors');
        echo "
                  ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>                    
                  </fieldset>
                  <div>
                   <input type=\"submit\" value=\"Valider\" class=\"btn btn-primary\" > 
                  </div>
                ";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

  \t\t\t\t\t
  \t\t\t\t</div>

  \t\t\t</div>

 </div>
  \t\t\t
";
    }

    public function getTemplateName()
    {
        return "admin/admin_users_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 61,  158 => 55,  154 => 54,  150 => 53,  144 => 50,  140 => 49,  136 => 48,  129 => 44,  125 => 43,  121 => 42,  115 => 39,  111 => 38,  107 => 37,  101 => 34,  97 => 33,  93 => 32,  87 => 29,  83 => 28,  79 => 27,  73 => 24,  68 => 23,  59 => 20,  56 => 19,  52 => 18,  45 => 14,  38 => 9,  35 => 8,  29 => 4,  11 => 2,);
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
\t\t\t\t\t<div class=\"panel-title\">\t<h1>Modifier un utilisateur</h1></div>
          <span class=\"pull-right\"><a class=\"btn btn-default btn-sm\" href=\"{{ path('admin_users') }}\">Annuler</a></span>
\t\t\t\t</div>
        
  \t\t\t\t<div class=\"panel-body\">
            {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"alert alert-success\">
          {{ flashMessage }}
        </div>
      {% endfor %}
  \t\t\t\t\t{{form_start(form)}}
                    {{form_errors(form)}}
                  <fieldset>
                    <div class=\"form-group\">
                      {{form_label(form.username)}}
                      {{form_errors(form.username)}}
                      {{form_widget(form.username,{'attr':{'class':'form-control'}})}}
                    </div>
                   <div class=\"form-group\">
                      {{ form_label(form.password.first)}}
                    {{ form_errors(form.password.first) }}
                  {{ form_widget(form.password.first, { 'attr':  {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"form-group\">
                      {{ form_label(form.password.second)}}
                    {{ form_errors(form.password.second) }}
                  {{ form_widget(form.password.second, { 'attr':  {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"form-group\">
                      {{form_label(form.file)}}
                      {{form_errors(form.file)}}
                      {{form_widget(form.file,{'attr':{'class':'form-control'}})}}
                    </div>

                    <div class=\"form-group\">  
           {{ form_label(form.mail, null, { 'label_attr': { 'class': '' }}) }}
           {{ form_errors(form.mail) }}
                  {{ form_widget(form.mail, { 'attr':  {'class': 'form-control' }}) }}
          </div>
  <div class=\"form-group\">  
          {{ form_label(form.role, null, { 'label_attr': { 'class': '' }}) }}
           {{ form_errors(form.role) }}
                  {{ form_widget(form.role, { 'attr':  {'class': 'form-control' }}) }}
</div>                    
                  </fieldset>
                  <div>
                   <input type=\"submit\" value=\"Valider\" class=\"btn btn-primary\" > 
                  </div>
                {{form_end(form)}}

  \t\t\t\t\t
  \t\t\t\t</div>

  \t\t\t</div>

 </div>
  \t\t\t
{% endblock %}


", "admin/admin_users_edit.html.twig", "C:\\wamp\\www\\scimapimmo\\app\\views\\admin\\admin_users_edit.html.twig");
    }
}
