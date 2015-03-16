<?php

/* CosacoGesenBundle:Horario:Mostrar.html_9.twig */
class __TwigTemplate_3ae9771c2eb8fb61406f771fbd4a8f216ae91d1f3cf0c9678c74eadfa1228877 extends Twig_Template
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
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
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

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/blitzer/jquery-ui.css"), "html", null, true);
        echo "\">   
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/horario.css"), "html", null, true);
        echo "\">  
";
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        // line 12
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.11.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/moment.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>
";
        // line 16
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "    
    <h1 class=\"page-header\">Horarios</h1>

    <div id=\"body-cont\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">Marzo 2015</div>
            <div id=\"gsn-calendario\">

            </div>  
        </div>
    </div>
    
    <script>
        
        \$(document).ready(function(){
            var mouseClickStatus;

            
//            var gsnConHelper=\$(''+
//                '<div class=\"gsn-grid-helper\">'+
//                '    <table class=\"table table-bordered\">'+
//                '        <thead></thead>'+
//                '        <tbody>'+
//                '            <tr>'+
//                '                <td class=\"gsn-columna-tiempo\">h1</td>'+
//                '                <td><div class=\"gsn-contenedor-box\"></div></td>'+
//                '                <td><div class=\"gsn-contenedor-box\"></div></td>'+
//                '                <td><div class=\"gsn-contenedor-box\"></div></td>'+
//                '            </tr>'+
//                '        </tbody>'+
//                '    </table>'+
//                '</div>');


            
                    
            var fnCrearHorario=function(bHorario){
                
                if(bHorario.length===0) return false;
                
                var strToHtml;
 
                // Encabezado del calendario
                var strTbHeader=\$(\"<div id=\\\"gsn-calendario-header\\\"><table class=\\\"table table-bordered\\\"><tbody><tr><th class=\\\"gsn-calendario-def-columna\\\">#</th</tr></tbody></table></div>\");
        
                // Tabla que contiene el grid del calendario
                var strGridReserva=\"<div id=\\\"gsn-calendario-bg-grid\\\"><table class=\\\"table table-bordered\\\"></tbody>\";
                
                // Tabla raiz del calendario
                strToHtml=\"<div id=\\\"gsn-calendario-bg\\\"><div id=\\\"gsn-calendario-body\\\">\\n<table class=\\\"table\\\">\\n\";
                         
                strToHtml+=\"<tbody>\\n<tr>\\n\";
                
                // Tabla que contiene los bloques horarios
                strToHtml+=\"<td class=\\\"gsn-calendario-def-columna\\\">\\n<div id=\\\"gsn-calendario-horas\\\">\\n<table class=\\\"table table-bordered\\\">\\n<tbody>\\n\";
                
                // Filas
                for(var f=0; f<bHorario.length; f++) {
                    strToHtml+=\"<tr class=\\\"gsn-calendario-def-fila\\\">\\n<td data-hinicio=\\\"\"+bHorario[f].horaInicio+\"\\\" data-htermino=\\\"\"+bHorario[f].horaTermino+\"\\\"><span>\"+moment(bHorario[f].horaInicio, \"H:mm\").format('H:mm')+\"</span></td></tr>\";
                
                // Aprovechamos el bucle para crear la tabla de la derecha
                    strGridReserva+=\"<tr class=\\\"gsn-calendario-def-fila\\\">\";
                    
                    for(var c=0; c<7; c++) {
                        // Celdas del encabezado
                      if (f===0) strTbHeader.find(\"tr\").append(\$(\"<th>\"+(c+1)+\"</th>\"));
                        
                        // Celdas en general
                        strGridReserva+=\"<td></td>\";
                    }
                    
                     strGridReserva+=\"</tr>\";       
                    
        
                }
                
                strGridReserva+=\"</tbody></table></div>\";
                
                strToHtml+=\"</tbody>\\n</table>\\n</div>\\n</td>\\n\";
                strToHtml+=\"<td><div id=\\\"gsn-calendario-contenido\\\">\\n\"+strGridReserva+\"\\n</div></td>\\n\";
                
                
                strToHtml+=\"</tr>\\n</tbody>\\n</table>\\n</div></div>\\n\";
                
                //console.log(strTbHeader[0]);
                var tbMain=\$(strToHtml);
                \$(tbMain).prepend(strTbHeader);
               // \$(tbMain).filter(\"#gsn-calendario-bg-grid>table>tbody>tr>td:odd\").addClass(\"gsn-borde-tb-alterno\");
              // console.log(tbMain[0]);  //.append(\$(strTbHeader));
                
                return \$(tbMain);          
            }
            

            
            var fnDetalleHorario=function(styleClassPrefix){
                
                var strToHtml;
                        
                strToHtml=\"<div class=\\\"gsn-calendario-datos \"+ styleClassPrefix +\"\\\">\\n<table>\\n<tbody>\\n<tr>\\n\";
                                                
                    for(var c=0; c<7; c++) {
                        strToHtml+=\"<td><div class=\\\"gsn-calendario-datos-dia\\\"></div></td>\\n\";        
                    }
                
                strToHtml+=\"</tr></tbody>\\n</table>\\n</div>\\n\";
                
               // activarDrop();
                
                return \$(strToHtml).clone();
                
            }
            
            \$.fn.posObj=function(){
                var posTopObj=0;
                var altoObj=0;
                var bInicio=\$(this).data('binicio');
                var bTermino=\$(this).data('btermino');

                // Calculamos alto y posicion del objeto
                var altosObj = \$('#gsn-calendario-bg-grid>table>tbody>tr:lt('+bTermino+')>td:nth-child(2)');
                        
                for(var i=0; i<bTermino; i++) {                    
                    if((i+1)>=bInicio) altoObj+=\$(altosObj[i]).outerHeight(true);
                    else posTopObj+=\$(altosObj[i]).outerHeight(true);
                }
                
                // Posicionamos objeto               
                \$(this).css({'top':(posTopObj+2)+'px', 'height':(altoObj-4)+'px'});
            }
            
            var chkObjPos=function(pSup,pInf,iColAct){
                
                
            //    var iColAct=\$(this).closest('td').index();
                var objCont=\$('.gsn-calendario-datos-main>table>tbody>tr:eq(0)>td:eq('+iColAct+')>div>div')
                var error=false;
                
                // Selecciono los bloques disponibles para el dia actual
                var objsSort=objCont.sort(function(a,b) {
                    var obj1 = parseInt(\$(a).data('binicio'));
                    var obj2 = parseInt(\$(b).data('binicio'));
                    return obj1 === obj2 ? 0 : obj1 < obj2 ? -1 : 1;
                });
                   
                for(var i=0; i<\$(objsSort).length; i++) {
                    var o=objsSort[i];

                    for(var h=pSup; h<=pInf; h++) {
                        if(\$(o).data('binicio')<=h && \$(o).data('btermino')>=h) {
                            error=true;
                            return error;
                        }
                    }
                }        
                
                return error;              
            }
            
            \$.fn.setObjData=function(pSup,pInf){
                
                // Agregamos rangos horarios a la cabecera
                if(pSup===undefined || pInf===undefined) {
                    pSup=\$(this).data('binicio');
                    pInf=\$(this).data('btermino');
                }
                
                //console.log(\"posK: \" +pSup);
                var txtSup=\$('#gsn-calendario-horas>table>tbody>tr:eq('+(pSup-1)+')>td:nth-child(1)').data('hinicio');
                var txtInf=\$('#gsn-calendario-horas>table>tbody>tr:eq('+(pInf-1)+')>td:nth-child(1)').data('htermino');
                var txtHeader=txtSup+ \"-\\n\" + txtInf;
                
                \$(this).find(\".panel-title\").text(txtHeader);
                //console.log(txtHeader);
            }
            
";
        // line 230
        echo "                    
             
            \$.fn.fnGenBloquesReserva=function(id,bInicio,bTermino,idCol) {
                
                var gsnDefObj=\$(''+
                    '<div class=\"gsn-calendario-cont-bloque\">\\n'+
                    '    <div class=\"gsn-control-redimen-box gsn-control-redimen-sup ui-resizable-handle ui-resizable-n gsn-sup\">\\n'+
                    '        <span class=\"glyphicon glyphicon-option-horizontal gsn-btn-redimen\"></span>\\n'+
                    '    </div>\\n'+
                    '    <a href=\"#\" class=\"panel panel-primary gsn-cont-link-reserva\"><div style=\"padding-top:7px; height:46px;\" class=\"panel-heading\">\\n'+
                    '        <h3 class=\"panel-title\">Panel t</h3>\\n'+
                    '    </div>\\n'+
                    '    <div class=\"panel-body\">Panel content</div></a>\\n'+
                    '    <div class=\"gsn-control-redimen-box gsn-control-redimen-inf ui-resizable-handle ui-resizable-s gsn-inf\">\\n'+
                    '        <span class=\"glyphicon glyphicon-option-horizontal gsn-btn-redimen\"></span>\\n'+
                    '    </div>\\n'+
                    '</div>'); 
        
                    
                var gsnNewObj=gsnDefObj.clone();
                    
                    // Declaramos atributos de la reserva
                    gsnNewObj.data('id', id);
                    gsnNewObj.data('binicio', bInicio);
                    gsnNewObj.data('btermino', bTermino);
                    
                    gsnNewObj.posObj();
                    gsnNewObj.setObjData();


                    \$(this).find('table>tbody>tr>td:eq('+idCol+')>div').append(gsnNewObj);        
                   
                    gsnNewObj.activarEfectos();
                    
                    return gsnNewObj;
   
            }
            

                \$.fn.crearAyudante=function(tmpCol){

                    if(\$('.gsn-calendario-datos').hasClass('gsn-calendario-datos-helper') || \$(this)===undefined) {
                        alert('Se ha producido un error!!');
                        \$('.gsn-calendario-datos-helper').remove();
                        return false;
                    }

                    var obj=\$(this);
                    var col;
                    
                    if(tmpCol===undefined) col=\$(obj).closest(\"td\").index();
                    else col=tmpCol;

                    // Cambiamos estilos y otras propiedades
                    \$(obj).find(\".panel\").addClass(\"panel-success\");
                    \$(obj).find(\".panel\").removeClass(\"panel-primary\");

                    // Generamos el ayudante
                    var tbHelper=fnDetalleHorario(\"gsn-calendario-datos-helper\");

                    // Movemos el bloque al ayudante
                    \$(tbHelper).find('table>tbody>tr:eq(0)>td:eq('+col+')>div').append(obj);

                    // Agregamos el ayudante al helper
                    \$(\"#gsn-calendario-contenido\").append(tbHelper);                   

                 //   return true;

                } 
                
                \$.fn.borrarAyudante=function(tmpCol){
                    
                    var obj=\$(this);
                    var col;
                    
                    if(tmpCol===undefined) col=\$(obj).closest(\"td\").index();
                    else col=tmpCol;
                    
                    \$('.gsn-calendario-datos-main>table>tbody>tr:eq(0)>td:eq('+col+')>div').append(obj);
                    \$('.gsn-calendario-datos-helper').remove();
                    
                    // Restauramos atributos del objeto
                    \$(obj).css({'left':'', 'width': '100%'});
                    \$(obj).find(\".panel\").addClass(\"panel-primary\");
                    \$(obj).find(\".panel\").removeClass(\"panel-success\");
                    
                }
            
          ";
        // line 359
        echo "
            \$.fn.activarEfectos=function(){


            var anchoObj=\$(this).closest(\"td\").innerWidth();
            var altoFila=\$('#gsn-calendario-bg-grid>table>tbody>tr:first').outerHeight(true);

                \$(this).filter(':not(.ui-resizable)').resizable({
                    handles: {
                    'n': '.ui-resizable-n',
                    's': '.ui-resizable-s'
                    },
                    // grid: [anchoObj, (altoFila-2)],
                    minHeight: (altoFila-4),
                    containment: \"#gsn-calendario-contenido\",
                    start: function(ev,ui) {

                        var obj=\$(ui.helper);
                        // var col=\$(obj).closest(\"td\").index();

                        // Definimos ayudante
                        //var helperObj=\$(gsnConHelper).clone();
                        //var helperObj=fnDetalleHorario(\"gsn-calendario-datos-helper\");

                        // Cambiamos el orden del bloque para mostrarlo encima siempre
                        //var css = \$(obj).attr(\"style\")+ \" z-index: 20 !important;\";
                        //\$(obj).css(\"cssText\", css);  

                        // Trasladamos el objeto al ayudante (en la columna que corresponda. var.iColAct
                       // helperObj.find(\"table>tbody>tr:eq(0)>td:eq(\"+iColAct+\")>div\").append(obj);

                        // Agrego ayudante al dom
                        //\$('#gsn-calendario-contenido').append(helperObj);
                        \$(obj).crearAyudante();

                        \$(obj).data(\"tmpbinicio\", \$(obj).data(\"binicio\"));     
                        \$(obj).data(\"tmpbtermino\", \$(obj).data(\"btermino\"));

                    },

                    resize: function(ev,ui) {

                        var obj=\$(ui.helper);
                        
                        var colAct=\$(obj).closest(\"td\").index();                     
                        var posInfMax=\$('#gsn-calendario-bg-grid>table>tbody>tr').length;
                        var posSup=Math.floor(ui.position.top/(altoFila))+1;
                        var posInf=Math.floor((\$(obj).outerHeight(true)+1)/(altoFila))+posSup;
                        
                        // Movemos el bloque
                        ui.size.height=(((\$(obj).data(\"tmpbtermino\")-\$(obj).data(\"tmpbinicio\"))+1)*altoFila)-4;
                        ui.position.top= ((\$(obj).data(\"tmpbinicio\")-1)*altoFila)+2;
                        
";
        // line 413
        echo "                       
                                                
                        // Comprobamos que el nuevo tamaño no se sobreponga en bloques previamente registrados.                        
                        if(chkObjPos(posSup,posInf,colAct) || posInf>posInfMax) return;
                        
                        \$(obj).data(\"tmpbinicio\", posSup);     
                        \$(obj).data(\"tmpbtermino\", posInf);
                       

                    }, 
                    stop: function(ev,ui) {
                        // Restauramos cambios aplicdos durante la tarea de redimensionado del objeto
                        var obj = \$(ui.helper);
                        
                        // Restauramos atributos del bloque
                        obj.resizable(\"option\",\"maxHeight\",null);
                        obj.css(\"z-index\",\"\");

                        \$(obj).data(\"binicio\", \$(obj).data(\"tmpbinicio\"));     
                        \$(obj).data(\"btermino\", \$(obj).data(\"tmpbtermino\"));

                        // Liberamos variables
                        \$(obj).removeData(\"tmpbinicio\");     
                        \$(obj).removeData(\"tmpbtermino\");

                        // Devolvemos el bloque al contenedor original
                        \$(obj).borrarAyudante();
                        
                        //\$('.gsn-calendario-datos-main>table>tbody>tr:eq(0)>td:eq('+iColAct+')>div').append(obj);

                        //\$(\".gsn-calendario-datos-helper\").remove();

                    }

                });

           

                \$(this).draggable({
                    //grid: [anchoObj, altoFila],
                    //grid: [1, altoFila],
                    opacity: 0.9,
                    //  accept: '#gsn-calendario-contenido',
                    containment: \"#gsn-calendario-contenido\",
                    scroll:false,
                    //  snap: \"#gsn-calendario-bg-grid td\", 
                    // snapMode: \"outer\",
                    //   snapTolerance:20,
                    stop: function(ev,ui) {

                        var obj=\$(ui.helper);

                        var col = obj.data(\"tmpcol\");  
                        
                        if(\$(obj).draggable(\"option\", \"revert\")) {
                            
                            var binicio = obj.data(\"binicio\");
                            var btermino = obj.data(\"btermino\");
                            col = obj.closest(\"td\").index();
                            
                            obj.setObjData(binicio,btermino);
                            
                        } else {
                            var binicio = obj.data('tmpbinicio');
                            var btermino = obj.data('tmpbtermino');
                                      
                                          
                            obj.data(\"binicio\", binicio);
                            obj.data(\"btermino\", btermino);
                        //    obj.data('tmpcol', colAct);
                        }
                        
                        \$(obj).borrarAyudante(col);    

                        // Limpiamos variables temporales
                        obj.removeData('tmpbinicio');
                        obj.removeData('tmpbtermino');
                        obj.removeData('tmpcol');
                        
                        
                        

                    },
                start: function(ev,ui) {

                     
                    var obj=\$(ui.helper);
                    
                    // Creamos el ayudanmte
                    \$(obj).crearAyudante();
                        
                    var binicio=obj.data(\"binicio\");
                    var btermino=obj.data(\"btermino\");

                    obj.data('tmpbinicio',binicio);
                    obj.data('tmpbtermino',btermino);

                    obj.data(\"tmpTop\", ui.offset.top);
                    obj.data(\"tmpLeft\", ui.offset.left);
                    obj.data(\"tmpLFix\", 0);
                    obj.data(\"tmpTFix\", ui.position.top);
                    obj.data('tmpcol', \$(obj).closest(\"td\").index());

                },
                drag: function(ev,ui) {
                        
                        
                        var obj=\$(ui.helper);
                        var colAct=obj.data('tmpcol'); 
                        var binicio=obj.data('tmpbinicio');
                        var btermino=obj.data('tmpbtermino');
                
                       
                        var ancho=\$(obj).closest(\"tr\").find(\"td:nth-child(\"+(colAct+1)+\")\").outerWidth(true);
                        var alto=\$('#gsn-calendario-bg-grid>table>tbody>tr:eq('+(binicio-1)+')').outerHeight(true); 
                        var totalFil=\$('#gsn-calendario-bg-grid>table>tbody>tr').length;
                        var totalCols=\$('#gsn-calendario-bg-grid>table>tbody>tr:first>td').length;

                        if(ui.position.top>(obj.data(\"tmpTFix\")-alto) && totalFil>btermino) { 

                            obj.data(\"tmpTop\", (obj.data(\"tmpTop\")+alto));
                            obj.data(\"tmpTFix\", (obj.data(\"tmpTFix\")+alto));

                            binicio+=1;
                        }

                        if(ui.position.top<(obj.data(\"tmpTFix\")-alto) && (binicio-1)>0) { 

                            obj.data(\"tmpTop\", (obj.data(\"tmpTop\")-alto));
                            obj.data(\"tmpTFix\", (obj.data(\"tmpTFix\")-alto));

                            binicio-=1;

                        }


                        if(ev.clientX>(obj.data(\"tmpLeft\")+ancho) && totalCols>(colAct+1)) { 

                            obj.data(\"tmpLeft\", (obj.data(\"tmpLeft\")+ancho));
                            obj.data(\"tmpLFix\", (obj.data(\"tmpLFix\")+ancho));

                            colAct+=1;


                        }


                        if(ev.clientX<(obj.data(\"tmpLeft\")) && colAct>0) { 

                            obj.data(\"tmpLeft\", (obj.data(\"tmpLeft\")-ancho));
                            obj.data(\"tmpLFix\", (obj.data(\"tmpLFix\")-ancho));

                            colAct-=1; 

                        }

                        \$(obj).draggable(\"option\", \"revert\", true);


                        var tmpbtermino=((obj.data('btermino')-obj.data('binicio'))+binicio);
                        // Actualizamos los campos del contenedor de reserva
                        obj.setObjData(binicio,tmpbtermino);

                        ui.position.left=obj.data(\"tmpLFix\");                                  
                        ui.position.top=obj.data(\"tmpTFix\");

                        obj.data('tmpbinicio',binicio);
                        obj.data('tmpbtermino', tmpbtermino);
                        obj.data('tmpcol', colAct); 

                        if(chkObjPos(binicio,btermino,colAct)) {
                            \$(obj).draggable(\"option\", \"revert\", true);

                        } else {
                            \$(obj).draggable(\"option\", \"revert\", false);
                        }
                            }

                });

            }
 
            
                    \$.fn.agregarNuevaReserva=function(){
                                
                        \$(this).selectable({
                        filter: \"td\",
                        selecting: function(ev,ui) {
                        //console.log(ui);

                        var objCont=\$(ui.selecting);

                                                   
                        if(!\$('#gsn-calendario-contenido>div').hasClass('gsn-calendario-datos-helper')) {
                            
                            var iFilAct=\$(objCont).parent().index()+1;
                            var iColAct=\$(objCont).index();
                            
                            // Compruebo que el bloque seleccionado no se encuentre registrado
                            if(chkObjPos(iFilAct,iFilAct,iColAct)) {

                                \$(objCont).removeClass('ui-selecting');
                                return;
                            }
                            
                            var tbHelper=\$('.gsn-calendario-datos-main');
                            
                            // Agregamos al contenedor principal                            
                            \$(\"#gsn-calendario-contenido\").append(tbHelper);
                            
                            var gsnNewObj=tbHelper.fnGenBloquesReserva(0,iFilAct,iFilAct,iColAct);
                           
                            // Ocultamos para agregar efecto
                            \$(gsnNewObj).css('display','none');
                           
                            // Guardamos la columna actual
                            gsnNewObj.data('tmpCol', iColAct);
                            
                            // Creamos el ayudanmte
                            \$(gsnNewObj).crearAyudante();
                            
                            
            ";
        // line 646
        echo "                            

                            //gsnNewObj.data(\"tmpLeft\", ui.offset.left);
                            // Actualizamos los campos del contenedor de reserva
                            //gsnNewObj.setObjData();
                                                        
                            // Mostramos
                            \$(gsnNewObj).fadeIn(500);
                            
                        } else {
                            
;
                            var gsnNewObj=\$('.gsn-calendario-datos-helper .gsn-calendario-cont-bloque');
                            var iColAct=\$(gsnNewObj).data('tmpCol');
                            
                            // Removemos seleccion en otras columnas
                            \$('#gsn-calendario-bg-grid>table>tbody>tr>td.ui-selecting:not(:nth-child('+(iColAct+1)+'))').removeClass('ui-selecting');
                            
                            var posSup=\$('#gsn-calendario-bg-grid>table>tbody>tr>td.ui-selecting:nth-child('+(iColAct+1)+'):first').parent().index()+1;
                            var posInf=\$('#gsn-calendario-bg-grid>table>tbody>tr>td.ui-selecting:nth-child('+(iColAct+1)+'):last').parent().index()+1;
                            
                            if(!chkObjPos(posSup,posInf,iColAct)) {
                                
                                    gsnNewObj.data('binicio', posSup);
                                    gsnNewObj.data('btermino', posInf);

                                    // Actualizamos los campos del contenedor de reserva
                                    gsnNewObj.setObjData();

                                    gsnNewObj.posObj();
                                    
                            } else {
                                \$(objCont).removeClass('ui-selecting');
                            }                                            

                 
                        }
                           
                    },
                    unselecting: function(ev,ui) {

                            var gsnNewObj=\$('.gsn-calendario-datos-helper .gsn-calendario-cont-bloque');
                            var iColAct=\$(gsnNewObj).data('tmpCol');
                            var posSup=\$('#gsn-calendario-bg-grid>table>tbody>tr>td.ui-selecting:nth-child('+(iColAct+1)+'):first').parent().index()+1;
                            var posInf=\$('#gsn-calendario-bg-grid>table>tbody>tr>td.ui-selecting:nth-child('+(iColAct+1)+'):last').parent().index()+1;
                            
                            \$(gsnNewObj).data('binicio', posSup);
                            \$(gsnNewObj).data('btermino', posInf);
                            
                            // Actualizamos los campos del contenedor de reserva
                            gsnNewObj.setObjData();                              
                            gsnNewObj.posObj();
                            
                    },
                    stop: function(ev,ui) {

                        var obj=\$('.gsn-calendario-datos-helper .gsn-calendario-cont-bloque');
                   
                        // var iColAct=\$(obj).closest(\"td\").index();
                        var col=\$(obj).data('tmpCol');
                                                        
                        // Liberamos variable
                        \$(obj).removeData('tmpCol');
 
                        // Quitamos seleccion
                        \$('#gsn-calendario-bg-grid>table>tbody>tr>td').removeClass('ui-selected');
                        
                        // Devolvemos el bloque al contenedor original
                        \$(obj).borrarAyudante(col);
                        
                        // Activamos efectos
                         obj.activarEfectos();
     
                    }
                });
                
                
 
                
                
                
            }


            \$(\"#gsn-calendario-grid, .gsn-calendario-data-main\").on(\"mousedown\", \".gsn-sup\", function(){
                console.log(\"up\");
                mouseClickStatus=\"up\";
            });        
            \$(\"#gsn-calendario-grid, .gsn-calendario-data-main\").on(\"mousedown\", \".gsn-inf\", function(){
                console.log(\"down\");
                mouseClickStatus=\"down\";
            }); 

      
            
               
            // Iniciamos
            var gsnDatosReserva = [
                {'id':1,'dia':1,'binicio':4,'btermino':4},
                {'id':2,'dia':1,'binicio':2,'btermino':3},
                {'id':3,'dia':2,'binicio':6,'btermino':6},
                {'id':1,'dia':3,'binicio':2,'btermino':4},
                {'id':2,'dia':4,'binicio':6,'btermino':6},
                {'id':3,'dia':6,'binicio':1,'btermino':1}
            ]; 
            
            var gsnRangoHoras=[
                {'horaId': 1, 'horaInicio':'08:30:00', 'horaTermino':'09:15:00'},
                {'horaId': 2, 'horaInicio':'09:15:00', 'horaTermino':'10:00:00'},
                {'horaId': 3, 'horaInicio':'10:20:00', 'horaTermino':'11:05:00'},
                {'horaId': 4, 'horaInicio':'11:05:00', 'horaTermino':'11:50:00'},
                {'horaId': 5, 'horaInicio':'12:00:00', 'horaTermino':'12:45:00'},  
                {'horaId': 6, 'horaInicio':'12:45:00', 'horaTermino':'13:30:00'},
                {'horaId': 7, 'horaInicio':'14:50:00', 'horaTermino':'15:35:00'},
                {'horaId': 8, 'horaInicio':'15:35:00', 'horaTermino':'16:20:00'},
                {'horaId': 9, 'horaInicio':'16:30:00', 'horaTermino':'17:15:00'},  
                {'horaId': 10, 'horaInicio':'17:15:00', 'horaTermino':'18:00:00'}
            ];         
            
            // Agregamos contenedores principales
            var tbHorario=fnCrearHorario(gsnRangoHoras);
            \$(\"#gsn-calendario\").append(tbHorario);
            
            // fix margen derecho del header con scrollbar
            var marginRight=(\$(\"#gsn-calendario-body\").width()-\$(\"#gsn-calendario-body>table\").width()+1);
            var textCss=\"margin-right:\"+marginRight+\"px !important;\";
            \$(tbHorario).find(\"#gsn-calendario-header\").css(\"cssText\", textCss);
            
      // console.log(textCss);
            
            
            
            // Agregamos bloques registrados            
            var tbDetalleHorario=fnDetalleHorario(\"gsn-calendario-datos-main\");    
            \$(\"#gsn-calendario-contenido\").append(tbDetalleHorario);
            
            \$('.gsn-calendario-datos').disableSelection();

            for(var i=0; i<gsnDatosReserva.length; i++) {

                var gsnData=gsnDatosReserva[i];
                
                tbDetalleHorario.fnGenBloquesReserva(gsnData.id,  gsnData.binicio, gsnData.btermino, gsnData.dia);
 
            } 
            
            // Activamos evento para agregar nuevos bloques
            \$(tbHorario).find('#gsn-calendario-bg-grid').agregarNuevaReserva();
            

                  
            // Eventos con el mouse
            \$('#gsn-calendario').on('click', '.gsn-calendario-cont-bloque>a', function(ev){
                ev.preventDefault();
                ev.stopPropagation();
                console.log(\"click reserva\");
            });
            
           \$('#gsn-calendario').on('click', '#gsn-calendario-bg-grid>table', function(ev){
                ev.preventDefault();
                ev.stopPropagation();
                console.log(\"click bg\");
            });
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        });
    
        
    
    </script>
















";
    }

    public function getTemplateName()
    {
        return "CosacoGesenBundle:Horario:Mostrar.html_9.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  631 => 646,  407 => 413,  352 => 359,  262 => 230,  84 => 20,  81 => 19,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  58 => 12,  55 => 11,  49 => 8,  45 => 7,  41 => 6,  38 => 5,  11 => 1,);
    }
}
