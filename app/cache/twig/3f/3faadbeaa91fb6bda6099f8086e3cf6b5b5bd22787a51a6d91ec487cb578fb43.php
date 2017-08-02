<?php

/* admin/layout.html.twig */
class __TwigTemplate_fc66f414af46a07eab0ef5121349d15f89dcdf5f47f33995250659a5578681de extends Twig_Template
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
<html>
  <head>
    <title>Scimap Immobilier | ";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Bootstrap -->
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- styles -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>
  \t<div class=\"header\">
\t     <div class=\"container\">
\t        <div class=\"row\">
\t           <div class=\"col-md-6\">
\t              <!-- Logo -->
\t              <div class=\"logo\">
\t                 <h1><a href=\"index.html\">Administration - Scimap Immobilier</a></h1>
\t              </div>
\t           </div>
\t           <div class=\"col-md-4\">
\t              <div class=\"row\">
\t                <div class=\"col-lg-12\">
\t                  
\t                </div>
\t              </div>
\t           </div>
\t           <div class=\"col-md-2\">
\t              <div class=\"navbar navbar-inverse\" role=\"banner\">
\t                  <nav class=\"collapse navbar-collapse bs-navbar-collapse navbar-right\" role=\"navigation\">
\t                    <ul class=\"nav navbar-nav\">
\t                      <li class=\"dropdown\">
\t                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Mon compte <b class=\"caret\"></b></a>
\t                        <ul class=\"dropdown-menu animated fadeInUp\">
\t                          <li><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil", array("profil" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">Profil</a></li>
\t                          <li><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">Deconnexion</a></li>
\t                        </ul>
\t                      </li>
\t                    </ul>
\t                  </nav>
\t              </div>
\t           </div>
\t        </div>
\t     </div>
\t</div>

    <div class=\"page-content\">
    \t<div class=\"row\">
\t\t  <div class=\"col-md-2\">
\t\t  \t<div class=\"sidebar content-box\" style=\"display: block;\">
                <ul class=\"nav\">
                    <!-- Main menu -->
                    <li class=\"current\"><a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i> Dashboard</a></li>
               
                    <li><a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("souscripteur");
        echo "\"><i class=\"glyphicon glyphicon-list\"></i> Souscripteur</a></li>
                   
                    <li><a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletter");
        echo "\"><i class=\"glyphicon glyphicon-tasks\"></i> Newsletters</a></li>

                     <li class=\"submenu\">
                         <a href=\"#\">
                            <i class=\"glyphicon glyphicon-list\"></i> CMS
                            <span class=\"caret pull-right\"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles");
        echo "\">Actualités</a></li>
                            <li><a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("medias");
        echo "\">Medias</a></li>
                          
                            
                        </ul>
                    </li>


                    
                </ul>
             </div>
\t\t  </div>
\t\t  <div class=\"col-md-10\">
\t\t    ";
        // line 87
        $this->displayBlock('content', $context, $blocks);
        // line 88
        echo "
\t\t  </div>


\t\t</div>
    </div>

    <footer>
         <div class=\"container\">
         
            <div class=\"copy text-center\">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <!--  <script src=\"https://code.jquery.com/jquery.js\"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js\"></script>
     <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/custom.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 87
    public function block_content($context, array $blocks = array())
    {
        echo "  ";
    }

    public function getTemplateName()
    {
        return "admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 87,  179 => 4,  172 => 114,  168 => 113,  141 => 88,  139 => 87,  124 => 75,  120 => 74,  108 => 65,  103 => 63,  98 => 61,  78 => 44,  74 => 43,  37 => 9,  32 => 7,  26 => 4,  21 => 1,);
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
<html>
  <head>
    <title>Scimap Immobilier | {% block title %}{% endblock %}</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Bootstrap -->
    <link href=\"{{asset('admin/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    <!-- styles -->
    <link href=\"{{asset('admin/css/styles.css')}}\" rel=\"stylesheet\">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>
  \t<div class=\"header\">
\t     <div class=\"container\">
\t        <div class=\"row\">
\t           <div class=\"col-md-6\">
\t              <!-- Logo -->
\t              <div class=\"logo\">
\t                 <h1><a href=\"index.html\">Administration - Scimap Immobilier</a></h1>
\t              </div>
\t           </div>
\t           <div class=\"col-md-4\">
\t              <div class=\"row\">
\t                <div class=\"col-lg-12\">
\t                  
\t                </div>
\t              </div>
\t           </div>
\t           <div class=\"col-md-2\">
\t              <div class=\"navbar navbar-inverse\" role=\"banner\">
\t                  <nav class=\"collapse navbar-collapse bs-navbar-collapse navbar-right\" role=\"navigation\">
\t                    <ul class=\"nav navbar-nav\">
\t                      <li class=\"dropdown\">
\t                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Mon compte <b class=\"caret\"></b></a>
\t                        <ul class=\"dropdown-menu animated fadeInUp\">
\t                          <li><a href=\"{{path('profil', {'profil': app.user.id})}}\">Profil</a></li>
\t                          <li><a href=\"{{ path('logout') }}\">Deconnexion</a></li>
\t                        </ul>
\t                      </li>
\t                    </ul>
\t                  </nav>
\t              </div>
\t           </div>
\t        </div>
\t     </div>
\t</div>

    <div class=\"page-content\">
    \t<div class=\"row\">
\t\t  <div class=\"col-md-2\">
\t\t  \t<div class=\"sidebar content-box\" style=\"display: block;\">
                <ul class=\"nav\">
                    <!-- Main menu -->
                    <li class=\"current\"><a href=\"{{path('admin')}}\"><i class=\"glyphicon glyphicon-home\"></i> Dashboard</a></li>
               
                    <li><a href=\"{{path('souscripteur')}}\"><i class=\"glyphicon glyphicon-list\"></i> Souscripteur</a></li>
                   
                    <li><a href=\"{{path('newsletter')}}\"><i class=\"glyphicon glyphicon-tasks\"></i> Newsletters</a></li>

                     <li class=\"submenu\">
                         <a href=\"#\">
                            <i class=\"glyphicon glyphicon-list\"></i> CMS
                            <span class=\"caret pull-right\"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href=\"{{path('articles')}}\">Actualités</a></li>
                            <li><a href=\"{{path('medias')}}\">Medias</a></li>
                          
                            
                        </ul>
                    </li>


                    
                </ul>
             </div>
\t\t  </div>
\t\t  <div class=\"col-md-10\">
\t\t    {% block content %}  {% endblock  %}

\t\t  </div>


\t\t</div>
    </div>

    <footer>
         <div class=\"container\">
         
            <div class=\"copy text-center\">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <!--  <script src=\"https://code.jquery.com/jquery.js\"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js\"></script>
     <script src=\"{{asset('admin/bootstrap/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('admin/js/custom.js')}}\"></script>
  </body>
</html>", "admin/layout.html.twig", "C:\\wamp\\www\\scimapimmo\\app\\views\\admin\\layout.html.twig");
    }
}
