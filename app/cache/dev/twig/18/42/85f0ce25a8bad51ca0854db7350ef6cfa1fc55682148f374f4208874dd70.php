<?php

/* CosacoGesenBundle:Seguridad:login.html.twig */
class __TwigTemplate_184285f0ce25a8bad51ca0854db7350ef6cfa1fc55682148f374f4208874dd70 extends Twig_Template
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
        // line 4
        echo "        <div class=\"gsn-body\">
                <div class=\"gsn-intro-form-login\">";
        // line 5
        $this->displayBlock('login', $context, $blocks);
        // line 6
        echo "                </div>
        </div>
";
    }

    // line 5
    public function block_login($context, array $blocks = array())
    {
        $this->env->loadTemplate("CosacoGesenBundle:Seguridad:login_form.html.twig")->display(array_merge($context, array("error" => (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "last_username" => (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")))));
    }

    public function getTemplateName()
    {
        return "CosacoGesenBundle:Seguridad:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  45 => 6,  43 => 5,  40 => 4,  37 => 3,  11 => 1,);
    }
}
