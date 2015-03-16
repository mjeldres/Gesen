<?php

/* ::base.html.twig */
class __TwigTemplate_10c29d612dc9562c5678b4f805f2c9a8ee39f5ff06dca8cb53e5ec5051d8acfe extends Twig_Template
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
<html lang=\"es\">
    
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "    
";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "    </head>
    
<body>
";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "</body>
</html>
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenido a Gesen";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "        <!-- hojas de estilo -->
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-theme.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/dashboard.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/gesen.css"), "html", null, true);
        echo "\">
";
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        // line 23
        echo "    
        <!-- java script -->
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script>var obtenerRuta=function(ruta) {var path;switch(ruta){case 'horario':path='";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_horario", array("id_dep" => "0000", "fecha" => "0000")), "html", null, true);
        echo "';break; case 'cargar_horario':path='";
        echo $this->env->getExtension('routing')->getPath("_horario_cargar");
        echo "';break; case 'home_horario':path='";
        echo $this->env->getExtension('routing')->getPath("_home_horario");
        echo "';break;case 'login':path='";
        echo $this->env->getExtension('routing')->getPath("gsn_login");
        echo "';break; case 'logout':path='";
        echo $this->env->getExtension('routing')->getPath("gsn_logout");
        echo "';break; case 'nueva_reserva':path='";
        echo $this->env->getExtension('routing')->getPath("_horario_nueva_reserva");
        echo "';break;} return path;}</script> 
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/gesen.js"), "html", null, true);
        echo "\"></script>";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 32,  127 => 28,  113 => 27,  109 => 26,  105 => 25,  101 => 23,  98 => 22,  92 => 20,  88 => 19,  84 => 18,  80 => 17,  76 => 16,  73 => 15,  70 => 14,  64 => 12,  58 => 33,  56 => 32,  51 => 29,  49 => 22,  46 => 21,  44 => 14,  39 => 12,  34 => 10,  23 => 1,);
    }
}
