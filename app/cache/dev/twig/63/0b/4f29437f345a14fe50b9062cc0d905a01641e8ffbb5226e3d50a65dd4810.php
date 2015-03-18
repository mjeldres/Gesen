<?php

/* CosacoGesenBundle:Horario:new.html_2.twig */
class __TwigTemplate_630b4f29437f345a14fe50b9062cc0d905a01641e8ffbb5226e3d50a65dd4810 extends Twig_Template
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
        echo " ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        echo " 


";
        // line 6
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 7
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
                <!-- comienzo del formulario -->
                ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "gsn-form-editar-reserva")));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    <div class=\"form-group gsn-tipo-reserva-cmb\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoReserva", array()), 'label', array("label" => "Reserva: "));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoReserva", array()), 'errors');
        echo "
                        <div class=\"col-sm-10\">
";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoReserva", array()), 'widget', array("attr" => array("class" => "gsn-cmb-tipo-reserva")));
        echo "
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
";
        // line 25
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "asignatura", array(), "any", true, true)) {
            // line 26
            echo "
   ";
            // line 27
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "asignatura", array()), 'row');
            echo "
";
            // line 29
            echo "    
";
            // line 36
            echo "    <div class=\"form-group gsn-option gsn-curso-cmb\">
        ";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'label');
            echo "
        ";
            // line 38
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'errors');
            echo "
        <div class=\"col-sm-10\">";
            // line 39
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'widget');
            echo "</div>
        <div class=\"clearfix\"></div>
    </div>
    
";
        }
        // line 44
        echo "
";
        // line 45
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "taller", array(), "any", true, true)) {
            // line 47
            echo "    
    <div class=\"form-group gsn-option gsn-taller-cmb\">
        ";
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taller", array()), 'label');
            echo "
        ";
            // line 50
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taller", array()), 'errors');
            echo "
        <div class=\"col-sm-10\">";
            // line 51
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taller", array()), 'widget');
            echo "</div>
        <div class=\"clearfix\"></div>
    </div>

";
        }
        // line 55
        echo "       

";
        // line 57
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dias", array(), "any", false, true), 0, array(), "array", true, true)) {
            // line 58
            echo "
";
            // line 61
            echo "         
    <div class=\"form-group\">
        ";
            // line 63
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dias", array()), 0, array(), "array"), "actividadReserva", array()), 'label');
            echo "
        ";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dias", array()), 0, array(), "array"), "actividadReserva", array()), 'errors');
            echo "
        <div class=\"col-sm-10\">";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dias", array()), 0, array(), "array"), "actividadReserva", array()), 'widget');
            echo "</div>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"form-group\">
        ";
            // line 69
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dias", array()), 0, array(), "array"), "observacionReserva", array()), 'label');
            echo "
        ";
            // line 70
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dias", array()), 0, array(), "array"), "observacionReserva", array()), 'errors');
            echo "
        <div class=\"col-sm-10\">";
            // line 71
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dias", array()), 0, array(), "array"), "observacionReserva", array()), 'widget');
            echo "</div>
        <div class=\"clearfix\"></div>
    </div>
    

";
        }
        // line 77
        echo "
    ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " 
    ";
        // line 79
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                      
              
              
              
              
              
</div>          
              
              
              

          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
            <button id=\"gsn-btn-guardar-reserva\" type=\"submit\" class=\"btn btn-success\">Guardar</button>
          </div>

        </div>
      </div>
    </div>        
 
 
 
 

 
 
 
 
 
 
 
 
 
 

 
          
          
          
  ";
        // line 120
        echo "    <script>
        
    \$('document').ready(function(){
         
        
        \$('#gsn-form-editar-reserva').submit(function(ev){
            
            ev.preventDefault();
            
            var form = \$(this);
            
            \$.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: form.serializeArray(),
                dataType: 'json',
                success: function(data) {
                    console.log(data);
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
            
            console.log(form_name);
            
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
        
          
          
          
          

      
      
      
      
      
      
      
      
      
      
      
      
  
        
        
        
        
        
        
        
        
          
          
          
          
          
          
          
          
          
          

          
          
          
    
    

          
          
          
          
          
          
          
          

          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
          

   
   
   
   

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
     

        
";
    }

    public function getTemplateName()
    {
        return "CosacoGesenBundle:Horario:new.html_2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 120,  175 => 79,  171 => 78,  168 => 77,  159 => 71,  155 => 70,  151 => 69,  144 => 65,  140 => 64,  136 => 63,  132 => 61,  129 => 58,  127 => 57,  123 => 55,  115 => 51,  111 => 50,  107 => 49,  103 => 47,  101 => 45,  98 => 44,  90 => 39,  86 => 38,  82 => 37,  79 => 36,  76 => 29,  72 => 27,  69 => 26,  67 => 25,  60 => 21,  54 => 19,  49 => 18,  36 => 7,  30 => 6,  23 => 3,  20 => 1,);
    }
}
