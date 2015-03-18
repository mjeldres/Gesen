<?php

/* CosacoGesenBundle:Horario:new.html_1.twig */
class __TwigTemplate_5461c069e5a757eadc7c0c5ab0e92c784e4fbb44374be2600767444090ef3468 extends Twig_Template
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
        // line 4
        echo "

";
        // line 6
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
    
   ";
        // line 10
        echo "   
  ";
        // line 12
        echo "   
 ";
        // line 14
        echo "
       <div role=\"tabpanel\">

  <!-- Nav tabs -->
  <ul class=\"nav nav-tabs\" role=\"tablist\">
    <li role=\"presentation\" class=\"active\"><a href=\"#home\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\">Home</a></li>
    <li role=\"presentation\"><a href=\"#profile\" aria-controls=\"profile\" role=\"tab\" data-toggle=\"tab\">Profile</a></li>
  </ul>

  <!-- Tab panes -->
  <div class=\"tab-content\">
      
<div role=\"tabpanel\" class=\"tab-pane active\" id=\"home\">
    
    
    ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "gsn-form-editar-reserva")));
        echo "
    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    
    <div class=\"form-group gsn-tipo-reserva-cmb\">
        ";
        // line 34
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoReserva", array()), 'label', array("label" => "Reserva: "));
        echo "
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoReserva", array()), 'errors');
        echo "
        <div class=\"col-sm-10\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoReserva", array()), 'widget');
        echo "</div>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"form-group gsn-option gsn-asignatura-cmb\">
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "asignatura", array()), 'label');
        echo "
        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "asignatura", array()), 'errors');
        echo "
        <div class=\"col-sm-10\">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "asignatura", array()), 'widget');
        echo "</div>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"form-group gsn-option gsn-taller-cmb\">
        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taller", array()), 'label');
        echo "
        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taller", array()), 'errors');
        echo "
        <div class=\"col-sm-10\">";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taller", array()), 'widget');
        echo "</div>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"form-group gsn-option gsn-curso-cmb\">
        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'label');
        echo "
        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'errors');
        echo "
        <div class=\"col-sm-10\">";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "curso", array()), 'widget');
        echo "</div>
        <div class=\"clearfix\"></div>
    </div>
      
    <div class=\"form-group\">
        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dias", array()), 0, array(), "array"), "actividadReserva", array()), 'label');
        echo "
        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dias", array()), 0, array(), "array"), "actividadReserva", array()), 'errors');
        echo "
        <div class=\"col-sm-10\">";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dias", array()), 0, array(), "array"), "actividadReserva", array()), 'widget');
        echo "</div>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"form-group\">
        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dias", array()), 0, array(), "array"), "observacionReserva", array()), 'label');
        echo "
        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dias", array()), 0, array(), "array"), "observacionReserva", array()), 'errors');
        echo "
        <div class=\"col-sm-10\">";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dias", array()), 0, array(), "array"), "observacionReserva", array()), 'widget');
        echo "</div>
        <div class=\"clearfix\"></div>
    </div>     
           
    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        ";
        // line 72
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
          
          
      </div>
        <div role=\"tabpanel\" class=\"tab-pane\" id=\"profile\">

        
             <script>
                 
    \$('document').ready(function(){
        
        function guardarReserva(form) {
                               
            var values=[];
            
            \$.each(form.serializeArray(), function(i, field){
                values[field.name]=field.value;
            });
            
            console.log(values);
            
            \$.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: form.serializeArray(),
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                }
                });
            
        }
        
        
        \$('#gsn-form-editar-reserva').submit(function(ev){
            
            ev.preventDefault();
            
 console.log(\"btn-guardar\");
            guardarReserva(\$(this));
            
            
        });
        
        
        
    });             
                 
                 
      
    \$(function(){
                       
                \$('.gsn-dragging-reservas').bonsai({
                    expandAll: false,
                    checkboxes: true, // depends on jquery.qubit plugin
                    createCheckboxes: true // takes values from data-name and data-value, and data-name is inherited
                });
    });
            

            
        \$('document').ready(function(){
                
                
                
            var removerObjs=function(contenedor,estado) {
  
                var labs=contenedor.children(\"li\");                   

                var depCount=labs.length;

                // Limpiamos dependencias
                for(var l=0; l<depCount; l++) {
                    var lab=\$(labs[l]);
                    var dias=lab.children(\"ol\").children(\"li\");

                    // Limpiamos dias
                    for (var d=0; d<dias.length; d++) {
                        var dia=\$(dias[d]);
                        var bloques=dia.children(\"ol\").children(\"li\");

                        // Limpiamos bloques
                        for(var b=0; b<bloques.length; b++) {
                            var bloque=\$(bloques[b]);

                            if(bloque.children(\"input\").prop(\"checked\")===estado) bloque.remove();
                        }

                        if(dia.children(\"ol\").children(\"li\").length===0) dia.remove();
                    }

                    if(lab.children(\"ol\").children(\"li\").length===0) lab.remove();
                }
                
                contenedor.actualizarBadge();

            }
            
                
                
                
                
                
                
                
                
                
                
                \$('.gsn-dragging-reservas').draggable({
                   helper:'clone',
                   stack:'.gsn-dragging-reservas',
                   appendTo: 'parent',
                   cursorAt: { top: 5, left: 5},
                   stop: function(){
                       \$('.gsn-dragging-reservas').bonsai('update');
                   },
                   start: function(ev,ui){
                     /*
                      * Quitamos elementos no seleccionados 
                      */  
                     removerObjs(ui.helper,false);
";
        // line 220
        echo "                       

                        ";
        // line 239
        echo "                    
        
                    
                   }
                });
                
                \$.fn.agregarOrdenado=function(bloque,attrDatos){
                
                    var objs=this.children('li');
                    var objsCount=objs.length;

                    for (var i=0; i<objsCount; i++) {
                        var obj=\$(objs[i]);

                        if(bloque.data(attrDatos)<obj.data(attrDatos)) {

                            bloque.insertBefore(obj);
                            break;
                        }


                        if(bloque.data(attrDatos)>obj.data(attrDatos)) {

                            bloque.insertAfter(obj);

                        }

                    }
                }
                
                \$.fn.actualizarBadge=function(){
                    var contObjs=this.find('.gsn-chkbox-nivel2');
                    
                    for(var i=0; i<contObjs.length; i++) {
                        var obj=\$(contObjs[i]).children('ol').children('li');
                        \$(contObjs[i]).find('.badge').text(obj.length);
                    }
                }
                
                \$('.gsn-reservas-edicion>.panel-body').droppable({
                    accept: \".gsn-dragging-reservas\",
                    drop: function(ev,ui){
                        
                        // Invalidamos el dropbox en caso de que arrastremos sobre el mismo bloque
                        if(\$(ui.draggable).attr('id')===\$(ev.target).children('ol').attr('id')) return;
                        
                        /*
                         * Registramos los elementos al mover las reservas
                         * Manteniendo la estructura del treeview
                         */

                        var rootObjDst=\$(this).children(\"ol\");
                        var rootObj=\$(ui.helper).clone();                    
                        var objs=rootObj.find('.gsn-chkbox-nivel3');
                        
                        for(var i=0; i<objs.length; i++) {
                           var obj=\$(objs[i]);
                           var dia=obj.closest(\".gsn-chkbox-nivel2\");
                           var dep=obj.closest(\".gsn-chkbox-nivel1\");
                           var depDst=rootObjDst.children('li[data-iddep='+dep.data('iddep')+']');
                           
                           if(depDst.length===0) {
                               rootObjDst.append(dep);                               
                           } 
                           else {
                               
                               var diaDst=depDst.children(\"ol\").children('li[data-iddia=\"'+dia.data('iddia')+'\"]');
                               
                               if(diaDst.length===0) {
                                   depDst.children('ol').agregarOrdenado(dia,'iddia');
       
                               } else {
                                   
                                    var objDst=diaDst.children(\"ol\").children('li[data-idbloque='+obj.data('idbloque')+']');
                                    if(objDst.length===0) diaDst.children('ol').agregarOrdenado(obj,'idbloque');
                               }                        
                                 
                           }
                            
                        }
                            // Desseleccionamos controles
                            rootObjDst.find('input').attr('checked',false);
                            
                            // Quitamos horas del control que inició el evento
                            removerObjs(ui.draggable,true);
                            
                            // Actualizamos cantidad de horas por dia
                            rootObjDst.actualizarBadge();
                    }
                    
                });               
                
            });
            
                            
    var ocultarCampos=function(reset) {

        var selItem=\$('.gsn-tipo-reserva-cmb>div>select').val();

        // if(!reset) \$(\".gsn-option>select\").prop(\"selectedIndex\",0);
        \$('.gsn-option').hide();

        switch(selItem) {
            case 'Curricular':

                \$('.gsn-asignatura-cmb').show();
                \$('.gsn-curso-cmb').show();
                break;

            case 'Taller':

                \$('.gsn-taller-cmb').show();
                break;
        }
    }
                
                
    \$(document).ready(function(){

        ocultarCampos(true);
        \$('.gsn-tipo-reserva-cmb>div>select').change(ocultarCampos);
console.log(\$('.gsn-tipo-reserva-cmb>div>select').val());
    });
              
            
            
            
            
            
            
            
            
            
            
            
            
        </script>        

        <div class=\"row\">

<div id=\"col-left\" class=\"col-xs-6\">
<div  id=\"gsn-reservas-nuevas\" class=\"gsn-reservas-edicion panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">Horas disponibles</h3>
  </div>
  <div class=\"panel-body\"  style=\"overflow-y: scroll; height: 200px;\">
     
<ol id=\"gsn-lista-reservas-nuevas\" class=\"gsn-dragging-reservas\">
    <li class='gsn-chkbox-nivel1 expanded' data-iddep='1'>
        <span> </span><span class=\"glyphicon glyphicon-home\"></span><span> Enlaces</span>
    <ol>
        <li class=\"gsn-chkbox-nivel2\" data-iddia=\"20150323\">
            <span> </span><span class=\"glyphicon glyphicon-calendar\"></span><span> 23/03/2015 </span><span class=\"badge\">2</span>
            <ol>
                <li class=\"gsn-chkbox-nivel3\" data-idbloque=\"1\" data-checked='1'>
                    <span> </span><span class=\"glyphicon glyphicon-time\"></span><span> 8:30 - 9:15</span></li>
                <li class=\"gsn-chkbox-nivel3\" data-idbloque=\"2\" data-checked='1'>
                    <span> </span><span class=\"glyphicon glyphicon-time\"></span><span> 9:15 - 10:00</span></li>
            </ol>
        </li>
        <li class=\"gsn-chkbox-nivel2\" data-iddia=\"20150312\">
            <span> </span><span class=\"glyphicon glyphicon-remove-circle\"></span><span> 12/03/2015 </span><span class=\"badge\">2</span>
            <ol>
                <li class=\"gsn-chkbox-nivel3\" data-idbloque=\"1\" data-checked='1'>
                    <span> </span><span class=\"glyphicon glyphicon-time\"></span><span> 8:30 - 9:15</span></li>
                <li class=\"gsn-chkbox-nivel3\" data-idbloque=\"2\" data-checked='1'>9:15 - 10:00</li>
            </ol>
        </li>
        <li class=\"gsn-chkbox-nivel2\" data-iddia=\"20150319\">
        <span> </span><span class=\"glyphicon glyphicon-remove-circle\"></span><span> 19/03/2015 </span><span class=\"badge\">2</span>
            <ol>
                <li class=\"gsn-chkbox-nivel3\" data-idbloque=\"2\" data-checked='1'>9:15 - 10:00</li>
            </ol>
        </li>
    </ol>
    </li>
</ol>
      
      
      
  </div>
</div>            

        </div>
            
<div id=\"col-right\" class=\"col-xs-6\">
<div id=\"gsn-reservas-registradas\" class=\"gsn-reservas-edicion panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">Horas registradas</h3>
  </div>
  <div class=\"panel-body\" style=\"overflow-y: scroll; height: 200px;\">

<ol id=\"gsn-lista-reservas-registradas\" class=\"gsn-dragging-reservas\">

        <li class='gsn-chkbox-nivel1 expanded' data-iddep='2'>Basica
    <ol>
        <li class=\"gsn-chkbox-nivel2\" data-iddia=\"20150319\">
            <span> </span><span class=\"glyphicon glyphicon-remove-circle\"></span><span> 19/03/2015 </span><span class=\"badge\">2</span>
            <ol>
                <li class=\"gsn-chkbox-nivel3\" data-idbloque=\"3\" data-checked='1'>10:20 - 10:55</li>
                <li class=\"gsn-chkbox-nivel3\" data-idbloque=\"4\" data-checked='1'>10:55 - 11:50</li>
            </ol>
        </li>
        <li class=\"gsn-chkbox-nivel2\" data-iddia=\"20150323\">
        <span> </span><span class=\"glyphicon glyphicon-remove-circle\"></span><span> 23/03/2015 </span><span class=\"badge\">2</span>
            <ol>
                <li class=\"gsn-chkbox-nivel3\" data-idbloque=\"2\" data-checked='1'>9:15 - 10:00</li>
            </ol>
        </li>
    </ol>
    </li>
    
    
</ol> 
      
  
      
      
      
      
 
      
      
      
      
      
      
  </div>    
      
  </div>
</div>              
            
        </div>  
            
            
       
            
           <style>
               
               .bonsai,
.bonsai li {
  margin: 0;
  padding: 0;
  list-style: none;
  overflow: hidden;
  min-width: 200px !important;
  
}
.bonsai label {
    margin-bottom:0 !important;
}

.bonsai li {
  position: relative;
  padding-left: 1.3em; /* padding for the thumb */
}

li .thumb {
  margin: -1px 0 0 -1em; /* negative margin into the padding of the li */
  position: absolute;
  cursor: pointer;
}

li.has-children > .thumb:after {
  content: '▸';
}

li.has-children.expanded > .thumb:after {
  content: '▾';
}

li.collapsed > ol.bonsai {
  height: 0;
  overflow: hidden;
}

.bonsai .all,
.bonsai .none {
  cursor: pointer;
}
               
               
           </style>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            

            
            
            
            
            
            
         
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        </div>

  </div>

</div>   
          
          
          
          
          
          
          
          
          
          

      
      
      
      
      
      
      
      
      
      
      
      
  
        
        
        
        
        
        
        
        
          
          
          
          
          
          
          
          
          
          

          
          
          
    
    

          
          
          
          
          
          
          
          

          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
          

   
   
   
   

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
     

        
";
    }

    public function getTemplateName()
    {
        return "CosacoGesenBundle:Horario:new.html_1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 239,  292 => 220,  168 => 72,  164 => 71,  157 => 67,  153 => 66,  149 => 65,  142 => 61,  138 => 60,  134 => 59,  126 => 54,  122 => 53,  118 => 52,  111 => 48,  107 => 47,  103 => 46,  96 => 42,  92 => 41,  88 => 40,  81 => 36,  77 => 35,  72 => 34,  66 => 30,  62 => 29,  45 => 14,  42 => 12,  39 => 10,  35 => 7,  29 => 6,  25 => 4,  23 => 3,  20 => 1,);
    }
}
