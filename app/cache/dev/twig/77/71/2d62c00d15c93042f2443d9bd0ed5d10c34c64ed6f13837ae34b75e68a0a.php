<?php

/* CosacoGesenBundle:Seguridad:login_form.html.twig */
class __TwigTemplate_77712d62c00d15c93042f2443d9bd0ed5d10c34c64ed6f13837ae34b75e68a0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'login' => array($this, 'block_login'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('login', $context, $blocks);
    }

    public function block_login($context, array $blocks = array())
    {
        echo "   
                        <div id=\"gsn-login-dropdown-panel\" class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\">Inicio de sesión</h3>        
                            </div>
                            <div id=\"gsn-login-form-contenedor\" class=\"panel-body\">
";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "                                <div id=\"gsn-msgbox-show\" class=\"alert alert-warning alert-dismissible fade in\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <h4>Error al iniciar la sesión</h4>
                                    <p>";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), array(), "security"), "html", null, true);
            echo "</p>
                                </div>
";
        }
        // line 14
        echo "                                <!-- formulario de ingreso de usuario -->
                                <form id=\"gsn-login-form\" action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("gsn_login_check");
        echo "\" method=\"post\">
                                    <fieldset>
                                        <div class=\"form-group\">
                                            <div class=\"input-group\">
                                                <span class=\"input-group-addon primary\"><span class=\"glyphicon glyphicon-user\"></span></span>
                                                <input id=\"gsn-user-login\" class=\"form-control\" placeholder=\"Usuario\" name=\"_username\" type=\"text\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <div class=\"input-group\">
                                                <span class=\"input-group-addon primary\"><span class=\"glyphicon glyphicon-lock\"></span></span>
                                                <input id=\"gsn-pw-login\" class=\"form-control\" placeholder=\"Contraseña\" name=\"_password\" type=\"password\" value='' />
                                            </div>
                                        </div>
                                        <div class=\"checkbox\">
                                            <label style=\"color:#eee;\">
                                                <input id=\"gsn-rememberme-login\" name=\"_remember_me\" type=\"checkbox\" />Recordarme
                                            </label>
                                        </div>
                                        <button id=\"gsn-btn-login\" class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" ><span>Entrar</span></button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
";
    }

    public function getTemplateName()
    {
        return "CosacoGesenBundle:Seguridad:login_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  49 => 15,  46 => 14,  40 => 11,  35 => 8,  33 => 7,  20 => 1,);
    }
}
