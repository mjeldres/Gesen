<?php

/* CosacoGesenBundle:Horario:Calendario.html.twig */
class __TwigTemplate_8df020729297bb101989fcecdae793a538925a001fb0a68a2c06c14c3073c87f extends Twig_Template
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
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.qubit.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.bonsai.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/horario.js"), "html", null, true);
        echo "\"></script>
        
";
    }

    // line 20
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
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dependencias"]) ? $context["dependencias"] : $this->getContext($context, "dependencias")));
        foreach ($context['_seq'] as $context["_key"] => $context["dependencia"]) {
            // line 35
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
        // line 37
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
         
       

                                
        <!-- tooltip editar reservas -->                        
        <div class=\"bg-warning gsn-tooltip-reserva panel-default\" style=\"top:0; left: -21px; position:absolute; border-radius:3px; width: 20px; height: 40px; border:1px solid #ccc; text-align:center;\"><a class=\"gsn-editar-reserva\" href=\"#\"><span style=\"font-size: 0.9em;\" class=\"glyphicon glyphicon-edit\"></span></a><a href=\"#\"><span style=\"font-size: 0.9em;\" class=\"glyphicon glyphicon-remove\"></span></a></div>   
                                
        <div id=\"objPrueba\"></div>                       
                                
                                
    <script>
        

        
                    
        \$.fn.nuevaReserva=function(){       
        
            \$('#detalleReserva').remove();
             \$('body').loaderAjax(true);

            var obj=\$(this);       
            var url=obtenerRuta('nueva_reserva');
            
            console.log(obj.data());
            
            \$.ajax({
                type: \"GET\",
                url: url,
                dataType: \"html\",
                success: function(data) {
                    
                
                                      
                    if(\$(data).length) {

                      \$('body').append(\$(data));
                      
                        // Obtengo id de la dependencia actual
                        var \$id_dep = \$('#gsn-cb-dependencias>li.active:first').data(\"depid\");
                        var \$indice_col=obj.closest('td').index();
                        var \$fecha=\$('#gsn-calendario-encabezado tr>th:eq('+\$indice_col+')').data('fechaCol');
                      
                        
                        
                        
                        
";
        // line 101
        echo "
                        \$('#detalleReserva').modal('show');
                        
                    } 
                        
                }
            });            
            
          //  return false;
 
    }
    

        
        \$('document').ready(function(){
            
            

            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
";
        // line 141
        echo "            
            
            
        });
        
    var cargarCalendario=function(fecha, id_dep){
        
        /*
         * Guardamos la fecha por defecto
         * Debe estar en timestamp transormado a milisegundos,
         * ya que el datepicker requiere este formato
         */
        \$('#gsn-calendario-dtp').val(fecha);
        
        // Seleccionamos dependencia por defecto
        var dep= \$('#gsn-cb-dependencias>li[data-depid='+id_dep+']');
        dep.addClass('active');
        \$('.gsn-calendario-header-panel .gsn-dep-label').html(dep.text());

        /*
         * Obtenemos el id del usuario logeado en el sistema
         */
        var id_user_act=parseInt(\$('.gsn-dropdown-user').data('user_id'));
                    
        /*
         * fecha: primer dia de la semana
         * id_dep: codigo de la dependencia a mostrar
         */

        var gsnBloques=[
        ";
        // line 171
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bloques"]) ? $context["bloques"] : $this->getContext($context, "bloques")));
        foreach ($context['_seq'] as $context["_key"] => $context["bloque"]) {
            // line 172
            echo "        {'id':";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bloque"], "id", array()), "html", null, true);
            echo ", 'binicio':'";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["bloque"], "horaInicio", array()), "H:i:s"), "html", null, true);
            echo "', 'btermino':'";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["bloque"], "horaTermino", array()), "H:i:s"), "html", null, true);
            echo "'},
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bloque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "];

        // Aviso en caso de que no se encuentren bloques horarios
        if(gsnBloques.length===0) {
            
            var tipo_alerta, cuerpo, titulo, pie;
            
            tipo_alerta=\"warning\";
            cuerpo=\"<strong>Atención</strong> No se han encontrado rangos de tiempo válidos para la asignación de reservas.\";
            titulo=\"Falta ingresar los horarios\";
            pie='<button class=\"btn btn-danger\" onclick=\"document.location.href=genRutaActual();\">Reintentar</button>'
            
            // Mostramos errores de conexion
            \$('#gsn-calendario').msgBoxShow(
                    tipo_alerta, 
                    false, 
                    cuerpo, 
                    titulo,
                    pie
                    );

            return false;
        }

        // Agregamos contenedores principales
        var tbHorario=crearCalendario(gsnBloques,7);
        \$(\"#gsn-calendario-body\").append(tbHorario);
        
        // Calculamos fecha actual, primer y ultimo dia semana
        //var fecha=parseInt(moment().format(\"x\"));
 
        // \$('#gsn-calendario-dtp').val(fecha);
        


        // Cargamos fechas de los días y titulo del horario
        setHeaderCal(fecha);

        // Ajustamos el margen izquierdo del header
        ajustarScrollbar();

        /*
         * Desactivamos la selección con el mouse de los elementos del calendario
         * Se cambia el contenedor a uno inferior 
         * ya que se desahabilitan los botones superiores del horario
         */
        \$('#gsn-calendario-body').disableSelection();

        /*
         * Activamos evento para agregar nuevos bloques 
         * 
         */
        if(id_user_act>0) \$(tbHorario).find('.gsn-calendario-filas').agregarNuevaReserva();
        
        /*
         * Función para agregar los bloques horarios
         */
        cargarReservas();
";
        // line 235
        echo "                                                    
                                                    

    }

/*
 *  Eventos que se ejecutan una vez que se ha cargado 
 *  Completamente el DOM
 */
    \$(document).ready(function(){

        /*
         * la función requiere el primer dia de la semana y el código de la dependencia
         * Ambos parametros se pasan desde php
         */
        cargarCalendario(";
        // line 250
        echo twig_escape_filter($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, (isset($context["id_dep"]) ? $context["id_dep"] : $this->getContext($context, "id_dep")), "html", null, true);
        echo ");

        // Inicializamos el calendario
        \$('#gsn-calendario-dtp').datepicker({
            showAnim: \"slideDown\",
            // dateFormat: \"yy-mm-dd\",
            dateFormat: \$.datepicker.TIMESTAMP,
            beforeShow: function(ev,ui){
                setTimeout(function(){
                    var btn=\$('.gsn-fecha-group'); // Basarse en la posicion del grupo de botones
                //    var btn=\$(\"#gsn-calendario-btn\"); // basarse en la posicion del btn
                    var p=btn.offset();
                //    var pLeft=p.left; // Cuando alineamos el boton al a izquierda
                    var pLeft=(p.left-ui.dpDiv.outerWidth(true))+btn.outerWidth(true);
                    var pTop=p.top+btn.outerHeight(true)+2;
                    ui.dpDiv.css({'left': pLeft, 'top': pTop});
                    //console.log(pLeft);
                },5);
            }
        });
 
        // Eventos para mostrar y ocultar el datePicker
        \$(\"#gsn-calendario-btn-dtp\").on('click', function(){ (\$('#ui-datepicker-div').css('display')==='none')? \$('#gsn-calendario-dtp').datepicker(\"show\"):\$('#gsn-calendario-dtp').datepicker(\"hide\"); });
   
        // Habilitamos evento para aquellos objetos que varien su tamaño o posición al redimensionar
        \$(window).resize(function(ev){          

            if(ev.target==window) {
                // Ajustamos margen derecho del header para el scrollbar
                ajustarScrollbar()

                // Ocultamos datepicker
                \$('#gsn-calendario-dtp').datepicker(\"hide\");
            }

        });

        // Eventos para los botnes avanzar, retroceder y hoy de las fechas
        

       \$('.gsn-btn-fecha').on('click', function(ev){
           
           ev.handle=true;

            var sFechaAct=parseInt(\$('#gsn-calendario-dtp').val());
            var fechaAct=moment(sFechaAct);

            var fecha;

            switch(\$(this).attr(\"id\")) {
                case 'gsn-calendario-btn-hoy':
                    
                    // Obtengo fecha actual, sin la hora actual (solo fecha)
                    var fechahoy=moment().format('YYYY-MM-DD');
                    
                    // Transformo a timestap con miliseg
                    fecha=moment(fechahoy);
            
                    break;
                case 'gsn-calendario-btn-ant':
                    fecha=fechaAct.subtract(7, 'days');
                    break;
                case 'gsn-calendario-btn-sig':
                    fecha=fechaAct.add(7, 'days');
                    break;
                default:
                    return false;
            }
          //  console.log(typeof(fecha.format('x')));
            // Cargamos headers
            var fechaInt=parseInt(fecha.format('x'));

            /*
             * En caso de estar ejecutando una tarea previa salgo
             */
            if(\$(\"#gsn-calendario-body\").loaderAjax()) {
                ev.stopImmediatePropagation();
                return false;
            }
                                                                            
            if(!ev.isImmediatePropagationStopped()) { 

            // Cargamos titulos de los dias            
            setHeaderCal(fechaInt);
            
            // Cargamos reservas de la semana seleccionada
            cargarReservas();

            }

       });
        
        \$('#gsn-calendario-dtp').datepicker('option', 'onSelect', function(fecha, inst) {
            
            var fechaInt=parseInt(fecha);
            
            // Cargamos titulos de los dias            
            setHeaderCal(fechaInt);
            
            // Cargamos reservas de la semana seleccionada
            cargarReservas();
            
            });
            
                    
        // Evento que se dispara cuando se selecciona una dependencia    
        \$('#gsn-cb-dependencias>li').on('click', function(ev){
            var obj=\$(ev.currentTarget);

            obj.parent().find('.active').removeClass('active');        
            obj.addClass('active');

            obj.closest('.btn-group')
                    .find('.gsn-dep-label').text(obj.text())
                    .end()
                    .children('.dropdown-toogle')
                    .dropdown('toggle');
            
            var fechaInt=parseInt( \$('#gsn-calendario-dtp').val());
            
            // Cargamos titulos de los dias            
            setHeaderCal(fechaInt);
            
            // Cargamos reservas de la semana seleccionada
            cargarReservas();

        });
        
        // Cargamos denuevo las reservas al pulsar en el boton refrescar
        \$(\"#gsn-refrescar-btn\").click(function(){
            
        //    \$(this).attr('disabled','disabled');
            
            cargarReservas();
         
        
        });


       \$('#gsn-calendario-body').on('click', '.gsn-calendario-bloque', function(){
            console.log(\$(this).data());
        });

    
";
        // line 397
        echo "    
        
        \$('#gsn-calendario-body')
            .on('mouseenter', '.gsn-calendario-bloque', function(){
                
                if(\$(this).data('id')===0) return;

                var toolTip=\$('.gsn-tooltip-reserva').clone().hide().fadeIn(1000);

                \$(this).append(toolTip);

            })
            .on('mouseleave', '.gsn-calendario-bloque', function(){
                console.log('salida del mouse');
                \$(this).find('.gsn-tooltip-reserva').fadeOut(1000, function(){ this.remove(); });
            })
            .on('click', '.gsn-editar-reserva', function(){

                
                
                
            });
        
        
   
    });
    


   
    </script>
















";
    }

    public function getTemplateName()
    {
        return "CosacoGesenBundle:Horario:Calendario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  493 => 397,  344 => 250,  327 => 235,  267 => 173,  254 => 172,  250 => 171,  218 => 141,  182 => 101,  119 => 37,  108 => 35,  104 => 34,  86 => 20,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  52 => 10,  47 => 8,  41 => 7,  38 => 6,  11 => 1,);
    }
}
