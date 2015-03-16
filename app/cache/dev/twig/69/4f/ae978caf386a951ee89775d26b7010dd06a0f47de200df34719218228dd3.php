<?php

/* :default:base.html.twig */
class __TwigTemplate_694fae978caf386a951ee89775d26b7010dd06a0f47de200df34719218228dd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\"><head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "   
";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </head>
    <body>
        

<nav class=\"navbar navbar-default navbar-gesen navbar-fixed-top\">
    <div class=\"container-fluid\">

        <!-- titulo -->
        <div class=\"navbar-header\">
            <a class=\"navbar-brand navbar-brand-gesen\" href=\"#\"><span>Gesen v1</span></a>
        </div>

        <div id=\"navbar\" class=\"navbar-collapse collapse\">

            <!-- menu izquierda -->
            <ul class=\"nav navbar-nav navbar-left navbar-gesen-menu hidden-sm\" style=\"display:inline; text-align: center;\">
                <li class=\"btn btn-xs btn-danger\" style=\"\"><a href=\"#\">Dashboard</a></li>
                <li class=\"btn btn-xs btn-danger\" style=\"\"><a href=\"#\">Settings</a></li>
                <li class=\"btn btn-xs btn-danger\" style=\"\"><a href=\"#\">Profile</a></li>
                <li class=\"btn btn-xs btn-danger\" style=\"\"><a href=\"#\">Help</a></li>
            </ul>  

            <!-- menu derecha -->
            <ul class=\"nav navbar-nav navbar-gesen-menu pull-right\">
                <li class=\"dropdown btn btn-xs btn-danger\">
                <a href=\"#\" class=\"gsn-dropdown-login\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-user\"></span><span> Login</span></a>
                    <div class=\"dropdown-menu dropdown-menu-right\" role=\"menu\" style=\"padding:0; margin:0;border:none; background:none; background:none;\">
                    
                        <!--formulario inicio sesion -->    
                        <div class=\"panel panel-default\" style=\"width:300px !important; padding:0; margin:0;border:none; background-color:#ccc; \">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\">Inicio de sesión</h3>
                            </div>
                            <div class=\"panel-body\">
                                <form  action=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("gsn_login_check");
        echo "\" method=\"post\">
                                    <fieldset>
                                        <div class=\"form-group\">
                                            <div class=\"input-group\">
                                                <span class=\"input-group-addon primary\"><span class=\"glyphicon glyphicon-user\"></span></span>
                                                <input class=\"form-control\" placeholder=\"Usuario\" name=\"_username\" type=\"text\" />
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <div class=\"input-group\">
                                                <span class=\"input-group-addon primary\"><span class=\"glyphicon glyphicon-lock\"></span></span>
                                                <input class=\"form-control\" placeholder=\"Contraseña\" name=\"_password\" type=\"password\" />
                                            </div>
                                        </div>
                                        <div class=\"checkbox\">
                                        <label>
                                        <input name=\"remember\" type=\"checkbox\" value=\"\"> Mantener sesión abierta
                                        </label>
                                        </div>
                                        <button id=\"gsn-btn-login\" class=\"btn btn-lg btn-success btn-block\" type=\"submit\">Entrar</button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                                    
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

        
        
                                    <script>
                                        \$(document).ready(function(){
                                            
                                        \$(\"gsn-btn-login\").click(function(ev){
                                            ev.preventDefault();
                                            
                                        url='";
        // line 96
        echo $this->env->getExtension('routing')->getPath("_cargar_reservas");
        echo "';

                                        var ajaxState=\$.ajax({
                                        type: \"POST\",
                                        url: url,
                                        dataType: \"json\",
                                        data: {'dependencia': dep, 'fecha': fechaSeg},
                                        success: function(data) {

                                            console.log(data);


                                            var reservas=data['reservas'];

                                            for(var i=0; i<reservas.length; i++) {
                                                var reserva=reservas[i];
                                                var fReserva=reserva.fecha.date;

                                                var col=moment(fReserva).format(\"d\");

                                                \$('.gsn-calendario-datos').fnGenBloquesReserva(parseInt(reserva.id),  parseInt(reserva.bmin), parseInt(reserva.bmax), parseInt(col));
                                            }

                                        }
                                        }).done(function(){
                                        // Remover
                                        \$(\".gsn-loader\").remove();

                                        });
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                        });    
                                            
                                            
                                            
                                            
                                        });
                                        
                                        
                                        
                                    </script>      
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    <div class=\"container-fluid\">
      <div class=\"row\">
        <div class=\"col-sm-3 col-md-2 sidebar\">
            
            <div class=\"gesen-logo\"><img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/cosaco_md.png"), "html", null, true);
        echo "\" /></div>   
            
          <ul class=\"nav nav-sidebar\">
            <li class=\"active\"><a href=\"#\">Overview <span class=\"sr-only\">(current)</span></a></li>
            <li><a href=\"#\">Reports</a></li>
            <li><a href=\"#\">Analytics</a></li>
            <li><a href=\"#\">Export</a></li>
          </ul>
          <ul class=\"nav nav-sidebar\">
            <li><a href=\"\">Nav item</a></li>
            <li><a href=\"\">Nav item again</a></li>
            <li><a href=\"\">One more nav</a></li>
            <li><a href=\"\">Another nav item</a></li>
            <li><a href=\"\">More navigation</a></li>
          </ul>

        </div>
        <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">

          
          
        ";
        // line 195
        $this->displayBlock('body', $context, $blocks);
        // line 196
        echo "
          
          
          
          
          
          
        </div>
      </div>
    </div>







</body>

</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenido a Gesen";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-theme.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/dashboard.css"), "html", null, true);
        echo "\">
    
";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 195
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 195,  291 => 20,  288 => 19,  281 => 16,  277 => 15,  273 => 14,  268 => 13,  265 => 12,  259 => 10,  235 => 196,  233 => 195,  209 => 174,  128 => 96,  85 => 56,  49 => 22,  47 => 19,  44 => 18,  42 => 12,  37 => 10,  32 => 8,  23 => 1,);
    }
}
