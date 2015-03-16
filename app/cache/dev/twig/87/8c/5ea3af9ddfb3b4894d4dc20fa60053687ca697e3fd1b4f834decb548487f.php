<?php

/* CosacoGesenBundle::layout.html.twig */
class __TwigTemplate_878c5ea3af9ddfb3b4894d4dc20fa60053687ca697e3fd1b4f834decb548487f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'login' => array($this, 'block_login'),
            'cont_derecha' => array($this, 'block_cont_derecha'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        echo "  
    <nav id=\"gsn-nav\" class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <!-- Boton que despliega el menu en pantallas pequeñas -->
                <button id=\"gsn-btn-nav-menu\" type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#gsn-nav-menu\">
                    <span class=\"sr-only\">Menú</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\"><strong>Gesen v1</strong></a>
            </div>
            <!-- Barra contenedora del menu -->
            <div id=\"gsn-nav-menu\" class=\"collapse navbar-collapse navbar-right\">
            <ul id=\"gsn-nav-menu-links\" class=\"nav navbar-nav\">
                <li class=\"gsn-active\"><a href=\"#\">Link <span class=\"sr-only\">(current)</span></a></li>
                <li><a href=\"#\">Link</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">One more separated link</a></li>
                        <li><a href=\"#\">One more separated link</a></li>
                        <li><a href=\"#\">One more separated link</a></li>
                        <li><a href=\"#\">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <ul id=\"gsn-nav-menu-sesion\" class=\"nav navbar-nav\">
                <li class=\"dropdown\"";
        // line 38
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "  style=\"display:none;\"";
        }
        echo ">
                    <!-- Formulario login -->  
                    <a href=\"#\" class=\"gsn-dropdown-login\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
                        <span class=\"glyphicon glyphicon-user\"></span><span class=\"gsn-user-perfil-name\"> Login</span>
                    </a>
                    <div id=\"gsn-nav-menu-form\" class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
                        <!--Panel desplegable contenedor del formulario de login -->";
        // line 44
        $this->displayBlock('login', $context, $blocks);
        // line 45
        echo "                    </div>
                </li>
                <li class=\"dropdown\"";
        // line 47
        if ( !$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "  style=\"display:none;\"";
        }
        echo ">
                    <!-- Menu de usuario -->
                    <a href=\"#\" class=\"gsn-dropdown-user\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" data-user_id=\"";
        // line 49
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
        } else {
            echo "0";
        }
        echo "\">
                        <span class=\"gsn-user-perfil-name\">Hola </span><span>";
        // line 50
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "primerNombre", array()), "html", null, true);
        }
        echo "</span> <span class=\"glyphicon glyphicon-chevron-down\"></span>                            
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
                        <!-- Menu desplegable del usuario -->
                        <li><a href=\"#\">Perfil</a></li>
                        <li class=\"gsn-cerrar-sesion\"><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("gsn_logout");
        echo "\">Cerrar sesión</a></li>
                    </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse --> 
        </div>
    </nav>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-3 col-md-2 sidebar\">
                <div class=\"gesen-logo\">
                    <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/cosaco_md.png"), "html", null, true);
        echo "\" />
                </div>
                <ul class=\"nav nav-sidebar\">
                    <li class=\"active\"><a href=\"#\">Overview <span class=\"sr-only\">(current)</span></a></li>
                    <li><a href=\"#\">Reports</a></li>
                    <li><a href=\"#\">Analytics</a></li>
                    <li><a href=\"#\">Export</a></li>
                </ul>
                <ul class=\"nav nav-sidebar\">
                    <li><a href=\"#\">Nav item</a></li>
                    <li><a href=\"#\">Nav item again</a></li>
                    <li><a href=\"#\">One more nav</a></li>
                    <li><a href=\"#\">Another nav item</a></li>
                    <li><a href=\"#\">More navigation</a></li>
                </ul>
            </div>        
        <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">   
        <!-- bloque contenido -->";
        // line 83
        $this->displayBlock('cont_derecha', $context, $blocks);
        // line 85
        echo "        </div>      
    ";
        // line 86
        echo $this->env->getExtension('dump')->dump($this->env, $context, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()));
        echo "
";
    }

    // line 44
    public function block_login($context, array $blocks = array())
    {
        $this->env->loadTemplate("CosacoGesenBundle:Seguridad:login_form.html.twig")->display(array_merge($context, array("error" => "", "last_username" => "")));
    }

    // line 83
    public function block_cont_derecha($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CosacoGesenBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 83,  164 => 44,  158 => 86,  155 => 85,  153 => 83,  133 => 66,  119 => 55,  109 => 50,  101 => 49,  94 => 47,  90 => 45,  88 => 44,  77 => 38,  38 => 3,  11 => 1,);
    }
}
