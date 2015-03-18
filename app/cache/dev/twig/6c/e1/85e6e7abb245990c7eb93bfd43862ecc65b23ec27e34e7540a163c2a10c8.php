<?php

/* CosacoGesenBundle:Horario:new.html.twig */
class __TwigTemplate_6ce185e6e7abb245990c7eb93bfd43862ecc65b23ec27e34e7540a163c2a10c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        echo " 

";
        // line 5
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "              
<!-- Modal -->
<div class=\"modal fade\" id=\"detalleReserva\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger\" style=\"border-radius: 5px 5px 0 0;\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Editar Reserva</h4>
            </div>
            <div class=\"modal-body\" style=\"min-height: 200px;\">

                <div role=\"tabpanel\">

                    <!-- Nav tabs -->
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li role=\"presentation\" class=\"active\"><a href=\"#home\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\">Día</a></li>
                        <li role=\"presentation\"><a href=\"#profile\" aria-controls=\"profile\" role=\"tab\" data-toggle=\"tab\">Lote</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class=\"tab-content\" style=\"margin-top:20px;\">

                        <div role=\"tabpanel\" class=\"tab-pane active\" id=\"home\">    

                            <!-- comienzo del formulario -->
                            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "gsn-form-editar-reserva")));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                
                            <!-- select tipo reservas -->
                            <div class=\"form-group gsn-tipo-reserva-cmb\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoReserva", array()), 'label', array("label" => "Reserva: "));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoReserva", array()), 'errors');
        echo "<div class=\"col-sm-10\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoReserva", array()), 'widget', array("attr" => array("class" => "gsn-cmb-tipo-reserva")));
        echo "</div><div class=\"clearfix\"></div></div>
                    
";
        // line 36
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "asignatura", array(), "any", true, true)) {
            // line 37
            echo "                            <!-- select asignatura -->
                            <div class=\"form-group\">";
            // line 38
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "asignatura", array()), 'label');
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "asignatura", array()), 'errors');
            echo "<div class=\"col-sm-10\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "asignatura", array()), 'widget');
            echo "</div><div class=\"clearfix\"></div></div>

                            <!-- select curso -->
                            <div class=\"form-group\">";
            // line 41
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'label');
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'errors');
            echo "<div class=\"col-sm-10\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'widget');
            echo "</div><div class=\"clearfix\"></div></div>
";
        }
        // line 43
        echo "
";
        // line 44
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "taller", array(), "any", true, true)) {
            // line 45
            echo "                            <!-- select taller -->
                            <div class=\"form-group gsn-option gsn-taller-cmb\">";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taller", array()), 'label');
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taller", array()), 'errors');
            echo "<div class=\"col-sm-10\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taller", array()), 'widget');
            echo "</div><div class=\"clearfix\"></div></div>
";
        }
        // line 47
        echo "       
";
        // line 48
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dias", array(), "any", false, true), 0, array(), "array", true, true)) {
            // line 49
            echo "                            <!-- ingreso actividad -->
                            <div class=\"form-group\">";
            // line 50
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dias", array()), 0, array(), "array"), "actividadReserva", array()), 'label');
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dias", array()), 0, array(), "array"), "actividadReserva", array()), 'errors');
            echo "<div class=\"col-sm-10\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dias", array()), 0, array(), "array"), "actividadReserva", array()), 'widget');
            echo "</div><div class=\"clearfix\"></div></div>

                            <!-- ingreso observación -->
                            <div class=\"form-group\">";
            // line 53
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dias", array()), 0, array(), "array"), "observacionReserva", array()), 'label');
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dias", array()), 0, array(), "array"), "observacionReserva", array()), 'errors');
            echo "<div class=\"col-sm-10\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dias", array()), 0, array(), "array"), "observacionReserva", array()), 'widget');
            echo "</div><div class=\"clearfix\"></div></div>
";
        }
        // line 55
        echo "                            <!-- submit -->
                            <div style=\"border-bottom: 1px solid #ddd; margin-bottom: 15px;\"></div>
                            <div class=\"form-group\" style=\"margin-bottom:0;\"><div class=\"col-sm-2\"><button class=\"gsn-prevent-validation btn btn-primary pull-left\"><span class=\"glyphicon glyphicon-print\"></span></button></div><div class=\"col-sm-10\"><button type=\"submit\" class=\"btn btn-success pull-right\" id=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_submit\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "name", array()), "html", null, true);
        echo "[submit]\"><span class=\"glyphicon glyphicon-floppy-save\"></span> Guardar</button><button id=\"gsn-close-editar-reserva\" class=\"gsn-prevent-validation btn btn-default pull-right\" style=\"margin-right: 5px;\">Cerrar</button></div></div>

                            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dias", array()), 'widget', array("attr" => array("style" => "display:none !important; margin:0 !important;")));
        echo "
                            ";
        // line 60
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                            
                        </div>    
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"profile\"></div>
                    </div>
                </div>          
            </div>
        </div>
    </div>        

 
<script>
        
    \$('document').ready(function(){
        
        \$('body').on('click', '.gsn-prevent-validation', function(ev){ ev.preventDefault(); });
         
        
        \$('#gsn-form-editar-reserva').submit(function(ev){
            
            ev.preventDefault();
            
            var form = \$(this);
            
            \$.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: form.serializeArray(),
                dataType: 'json',
                success: function(data) {
               //     console.log(data);
                }
            });
              
        });
              
        /*
         * Cargamos dinamicamente los combos al seleccionar el tipo de reserva
         */
        var cmb=\$('.gsn-cmb-tipo-reserva');

        cmb.change(function(){
            
            var form=\$(this).closest('form');
            var form_name=form.attr('name');
            
            //console.log(form_name);
            
            var data = {};
            data[cmb.attr('name')]=cmb.val();
            
            \$('select[name=\"'+form_name+'[asignatura]\"]').closest('.form-group').remove();
            \$('select[name=\"'+form_name+'[curso]\"]').closest('.form-group').remove();
            \$('select[name=\"'+form_name+'[taller]\"]').closest('.form-group').remove();
                         
            \$.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                data: data,
                success: function(html) {
                    
        

                    if(cmb.prop('selectedIndex')===0) {
                        var asignatura = \$(html).find('select[name=\"'+form_name+'[asignatura]\"]').closest('.form-group');
                        var curso = \$(html).find('select[name=\"'+form_name+'[curso]\"]').closest('.form-group');

                        curso.insertAfter('.gsn-tipo-reserva-cmb');
                        asignatura.insertAfter('.gsn-tipo-reserva-cmb');

                    }
                  
                    if(cmb.prop('selectedIndex')===1) {                  
                        
                        var taller = \$(html).find('select[name=\"'+form_name+'[taller]\"]').closest('.form-group');

                        taller.insertAfter('.gsn-tipo-reserva-cmb');
                    }
                   
                }
            })
            
        });
        
    });
        
    </script>
        
</div>          
          
          
          

      
      
      
      
      
      
      
      
      
      
      
      
  
        
        
        
        
        
        
        
        
          
          
          
          
          
          
          
          
          
          

          
          
          
    
    

          
          
          
          
          
          
          
          

          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
          

   
   
   
   

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
     

        
";
    }

    public function getTemplateName()
    {
        return "CosacoGesenBundle:Horario:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 60,  150 => 59,  143 => 57,  139 => 55,  131 => 53,  122 => 50,  119 => 49,  117 => 48,  114 => 47,  106 => 46,  103 => 45,  101 => 44,  98 => 43,  90 => 41,  81 => 38,  78 => 37,  76 => 36,  68 => 34,  61 => 31,  34 => 6,  28 => 5,  23 => 3,  20 => 1,);
    }
}
