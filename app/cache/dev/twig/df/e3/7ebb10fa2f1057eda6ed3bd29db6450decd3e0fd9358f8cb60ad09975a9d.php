<?php

/* ::base.html_2.twig */
class __TwigTemplate_dfe37ebb10fa2f1057eda6ed3bd29db6450decd3e0fd9358f8cb60ad09975a9d extends Twig_Template
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
 <nav class=\"navbar navbar-default navar-gesen navbar-fixed-top\">
      <div class=\"container-fluid\">
        <div class=\"navbar-header\">

            <a class=\"navbar-brand navar-brand-gesen\" href=\"#\"><span>Gesen v1</span></a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"#\">Dashboard</a></li>
            <li><a href=\"#\">Settings</a></li>
            <li><a href=\"#\">Profile</a></li>
            <li><a href=\"#\">Help</a></li>
          </ul>

        </div>
      </div>
    </nav>

    <div class=\"container-fluid\">
      <div class=\"row\">
        <div class=\"col-sm-3 col-md-2 sidebar\">
            
            <div class=\"gesen-logo\"></div>   
            
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
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 68
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

    // line 67
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html_2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 67,  154 => 20,  151 => 19,  144 => 16,  140 => 15,  136 => 14,  131 => 13,  128 => 12,  122 => 10,  98 => 68,  96 => 67,  49 => 22,  47 => 19,  44 => 18,  42 => 12,  37 => 10,  32 => 8,  23 => 1,);
    }
}
