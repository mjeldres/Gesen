<?php

/* CosacoGesenBundle:Horario:Calendario6.html_.twig */
class __TwigTemplate_947f0c42b6165cd399f2ab2607e3072363e801a5f5fbdb21c8c9109e4e8884d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("CosacoGesenBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'cont_derecha' => array($this, 'block_cont_derecha'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CosacoGesenBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/smoothness/jquery-ui.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/horario.css"), "html", null, true);
        echo "\">";
    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        // line 11
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/moment-with-locales.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>
        
";
    }

    // line 17
    public function block_cont_derecha($context, array $blocks = array())
    {
        echo " 
        <div id=\"gsn-contenedor\">
            <h1 class=\"page-header\">Horarios</h1>
            <div id=\"gsn-calendario\">
                <div  id=\"gsn-calendario-panel\" class=\"panel panel-default\">
                    <div id=\"gsn-calendario-header\" class=\"panel-heading gsn-calendario-header-panel\">
                        <div class=\"btn-group\" role=\"group\">
                            <button id=\"gsn-refrescar-btn\" type=\"button\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span></button>
                            <div class=\"btn-group\" role=\"group\">
                                <button class=\"btn btn-primary\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                    <span class=\"gsn-dep-label\">Laboratorio</span>
                                    <span class=\"caret\"></span>
                                </button>
                                <ul id=\"gsn-cb-dependencias\" class=\"dropdown-menu\" role=\"menu\">
";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dependencias"]) ? $context["dependencias"] : $this->getContext($context, "dependencias")));
        foreach ($context['_seq'] as $context["_key"] => $context["dependencia"]) {
            // line 32
            echo "                                    <li data-depid=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dependencia"], "id", array()), "html", null, true);
            echo "\"><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dependencia"], "nombre", array()), "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dependencia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                                </ul>
                            </div>
                        </div>
                        <div class=\"btn-group pull-right gsn-fecha-group\" role=\"group\" aria-label=\"...\">
                            <button id=\"gsn-calendario-btn-dtp\" type=\"button\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\"></span></button>
                            <button id=\"gsn-calendario-btn-ant\" type=\"button\" class=\"btn btn-default gsn-btn-fecha\"><span class=\"glyphicon glyphicon-menu-left\" aria-hidden=\"true\"></span></button>
                            <button id=\"gsn-calendario-btn-hoy\" type=\"button\" class=\"btn btn-default hidden-xs gsn-btn-fecha\">Hoy</button>
                            <button id=\"gsn-calendario-btn-sig\" type=\"button\" class=\"btn btn-default gsn-btn-fecha\"><span class=\"glyphicon glyphicon-menu-right\" aria-hidden=\"true\"></span></button>
                        </div>
                    </div>
                    <div id=\"gsn-calendario-titulo\" class=\"panel-body text-center\"><span class=\"h3\"></span></div>
                    <div id=\"gsn-calendario-body\"></div><input type=\"hidden\" id=\"gsn-calendario-dtp\" value=\"\">
                </div>                    
            </div>
        </div>
                                

















";
    }

    public function getTemplateName()
    {
        return "CosacoGesenBundle:Horario:Calendario6.html_.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 34,  96 => 32,  92 => 31,  74 => 17,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  52 => 10,  47 => 8,  41 => 7,  38 => 6,  11 => 1,);
    }
}
