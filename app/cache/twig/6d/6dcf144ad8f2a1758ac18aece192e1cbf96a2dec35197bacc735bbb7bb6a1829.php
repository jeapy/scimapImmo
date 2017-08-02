<?php

/* admin/profil.html.twig */
class __TwigTemplate_f3d478031b73f111df88ab47f680ce4ce594d9a3851fcf50b619f5fb034f504e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/profil.html.twig", 2);
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
        echo "uTILISATEUR";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
                <div class=\"panel panel-primary\">
                    <div class=\"content-box-header  panel-heading\">
                        <h3 class=\"panel-title\">User information</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"row-fluid\">
                            <div class=\"col-md-3\" >
                                 ";
        // line 17
        $context["img_base"] = "/scimapimmo/web/img/users/";
        // line 18
        echo "                                <img class=\"img-circle\"
                                     src=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["img_base"]) ? $context["img_base"] : $this->getContext($context, "img_base")), "html", null, true);
        echo "jean.jpeg\"
                                     alt=\"User Pic\"  style=\"width:100px; heigth:100px;\">
                            </div>
                            <div class=\"col-md-6\">
                                <strong>Cyruxx</strong><br>
                                <table class=\"table table-condensed table-responsive table-user-information\">
                                    <tbody>
                                    <tr>
                                        <td>User level:</td>
                                        <td>Administrator</td>
                                    </tr>
                                    <tr>
                                        <td>Registered since:</td>
                                        <td>11/12/2013</td>
                                    </tr>
                                    <tr>
                                        <td>Topics</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <td>Warnings</td>
                                        <td>0</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel-footer\">
                        <button class=\"btn  btn-primary\" type=\"button\"
                                data-toggle=\"tooltip\"
                                data-original-title=\"Send message to user\"><i class=\"glyphicon glyphicon-wrench\"></i></button>
                        <span class=\"pull-right\">
                            <button class=\"btn btn-warning\" type=\"button\"
                                    data-toggle=\"tooltip\"
                                    data-original-title=\"Edit this user\"><i class=\"glyphicon glyphicon-wrench\"></i></button>
                            <button class=\"btn btn-danger\" type=\"button\"
                                    data-toggle=\"tooltip\"
                                    data-original-title=\"Remove this user\"><i class=\"glyphicon glyphicon-wrench\"></i></button>
                        </span>
                    </div>
                </div>
  
";
    }

    public function getTemplateName()
    {
        return "admin/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 19,  50 => 18,  48 => 17,  38 => 9,  35 => 8,  29 => 4,  11 => 2,);
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
    {% extends \"admin/layout.html.twig\" %}

     {% block title %}uTILISATEUR{% endblock %}



                 {% block content %}

                <div class=\"panel panel-primary\">
                    <div class=\"content-box-header  panel-heading\">
                        <h3 class=\"panel-title\">User information</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"row-fluid\">
                            <div class=\"col-md-3\" >
                                 {% set img_base = '/scimapimmo/web/img/users/' %}
                                <img class=\"img-circle\"
                                     src=\"{{img_base}}jean.jpeg\"
                                     alt=\"User Pic\"  style=\"width:100px; heigth:100px;\">
                            </div>
                            <div class=\"col-md-6\">
                                <strong>Cyruxx</strong><br>
                                <table class=\"table table-condensed table-responsive table-user-information\">
                                    <tbody>
                                    <tr>
                                        <td>User level:</td>
                                        <td>Administrator</td>
                                    </tr>
                                    <tr>
                                        <td>Registered since:</td>
                                        <td>11/12/2013</td>
                                    </tr>
                                    <tr>
                                        <td>Topics</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <td>Warnings</td>
                                        <td>0</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel-footer\">
                        <button class=\"btn  btn-primary\" type=\"button\"
                                data-toggle=\"tooltip\"
                                data-original-title=\"Send message to user\"><i class=\"glyphicon glyphicon-wrench\"></i></button>
                        <span class=\"pull-right\">
                            <button class=\"btn btn-warning\" type=\"button\"
                                    data-toggle=\"tooltip\"
                                    data-original-title=\"Edit this user\"><i class=\"glyphicon glyphicon-wrench\"></i></button>
                            <button class=\"btn btn-danger\" type=\"button\"
                                    data-toggle=\"tooltip\"
                                    data-original-title=\"Remove this user\"><i class=\"glyphicon glyphicon-wrench\"></i></button>
                        </span>
                    </div>
                </div>
  
{% endblock %}
", "admin/profil.html.twig", "C:\\wamp\\www\\scimapimmo\\app\\views\\admin\\profil.html.twig");
    }
}
