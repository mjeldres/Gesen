<?php

/* CosacoGesenBundle:Horario:Mostrar.html - copia.twig */
class __TwigTemplate_0f24bfbd61ed4bb2930daaa449708f7a6714258078688300cb117cc7a8941592 extends Twig_Template
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
        <div id=\"gsn-calendario\">
            <div id=\"gsn-calendario-grid\">
                
            </div> 
        </div>       
    </div>
    
    <script>
        
        \$(document).ready(function(){
            var mouseClickStatus;
            
            
            var gsnDatosReserva = [
                {'id':1,'dia':1,'binicio':4,'btermino':4},
                {'id':2,'dia':1,'binicio':2,'btermino':3},
                {'id':3,'dia':1,'binicio':6,'btermino':6},
                {'id':1,'dia':3,'binicio':2,'btermino':4},
                {'id':2,'dia':3,'binicio':6,'btermino':6},
                {'id':3,'dia':3,'binicio':1,'btermino':1}
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
            
                    
            var fnCrearHorario=function(bHorario){
                
                if(bHorario.length===0) return false;
                
                var strToHtml=\"<div id=\\\"gsn-calendario-bg\\\">\\n<table class=\\\"table table-bordered\\\">\\n<tbody>\\n\";
                
                // Filas
                for(var f=0; f<bHorario.length; f++) {
                    
                   // console.log(bHorario[f].horaid);
                    
                    strToHtml+=\"<tr>\\n\";
                    
                    for(var c=0; c<=7; c++) {
                    //strToHtml+=\"<td>\";
                        if(c===0) strToHtml+=\"<td class=\\\"gsn-col-horas\\\" data-hinicio=\\\"\"+bHorario[f].horaInicio+\"\\\" data-htermino=\\\"\"+bHorario[f].horaTermino+\"\\\"><span>\"+moment(bHorario[f].horaInicio, \"H:mm\").format('H:mm')+\"</span>\";
                        else strToHtml+=\"<td>\";
                        
                    strToHtml+=\"</td>\\n\";
                        
                    }
                    
                    strToHtml+=\"</tr>\\n\";              
                }
                
                strToHtml+=\"</tbody>\\n</table>\\n</div>\\n\";
                
                return \$(strToHtml);          
            }
            

            
            var fnDetalleHorario=function(styleClassPrefix){
                
                var strToHtml=\"<div class=\\\"gsn-calendario-data \"+ styleClassPrefix +\"\\\"><table class=\\\"table table-bordered\\\">\\n<tbody><tr>\\n\";
                                                
                    for(var c=0; c<=7; c++) {
                        if (c===0) strToHtml+=\"<td class=\\\"gsn-col-horas\\\">\";
                        else strToHtml+=\"<td><div class=\\\"gsn-calendario-data-dia\\\"></div>\";
                        
                        strToHtml+=\"</td>\\n\";                    
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
                var altosObj = \$('#gsn-calendario-bg>table>tbody>tr:lt('+bTermino+')>td:nth-child(2)');
                        
                for(var i=0; i<bTermino; i++) {                    
                    if((i+1)>=bInicio) altoObj+=\$(altosObj[i]).outerHeight(true);
                    else posTopObj+=\$(altosObj[i]).outerHeight(true);
                }
                
                // Posicionamos objeto               
                \$(this).css({'top':(posTopObj+2)+'px', 'height':(altoObj-4)+'px'});
            }
            
            \$.fn.chkObjPos=function(pSup,pInf,iColAct){
                
                
            //    var iColAct=\$(this).closest('td').index();
                var objCont=\$('.gsn-calendario-data-main>table>tbody>tr:eq(0)>td:eq('+iColAct+')>div>div')
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
                var txtSup=\$('#gsn-calendario-bg>table>tbody>tr:eq('+(pSup-1)+')>td:nth-child(1)').data('hinicio');
                var txtInf=\$('#gsn-calendario-bg>table>tbody>tr:eq('+(pInf-1)+')>td:nth-child(1)').data('htermino');
                var txtHeader=txtSup+ \"-\\n\" + txtInf;
                
                \$(this).find(\".panel-title\").text(txtHeader);
                //console.log(txtHeader);
            }
            
            var fnGenBloquesReserva=function(gsnData,gsnDefObj) {
                
                for(var i=0; i<gsnData.length; i++) {
                    
                    var gsnNewObj=gsnDefObj.clone();
                    
                    // Declaramos atributos de la reserva
                    gsnNewObj.data('id', gsnData[i].id);
                    gsnNewObj.data('binicio', gsnData[i].binicio);
                    gsnNewObj.data('btermino', gsnData[i].btermino);
                    
                    gsnNewObj.posObj();
                    gsnNewObj.setObjData();
            

                    
                    \$('.gsn-calendario-data>table>tbody>tr>td:eq('+gsnData[i].dia+')>div').append(gsnNewObj);        
                    
                    gsnNewObj.activarEfectos();
                }        
            }                    
            
            \$.fn.activarDrop=function(){
                      
                \$(this).droppable({
                    accept: \".gsn-calendario-cont-bloque\",
                    drop: function(ev,ui){
        

        
                    var obj=\$(ui.helper);         
                    var binicio=\$(obj).data('tmpBinicio');
                    var btermino=(\$(obj).data('btermino')-\$(ui.draggable).data('binicio'))+binicio;
                    var colOrig=\$(obj).data('colOrig');
                    var colAct=\$(obj).data('tmpCol');

                    // destruimos variables
                    \$(obj).removeData('tmpCol');
                    \$(obj).removeData('tmpBinicio');
                    \$(obj).removeData('colOrig');
                     
                    if(obj.chkObjPos(binicio,btermino,colAct)) {

                        // Actualizamos los campos del contenedor de reserva
                        obj.setObjData();

                        colAct=colOrig;

                        // Devolvemos el objeto a su posicion original
                        \$(obj).draggable(\"option\", \"revert\", true);

                    } else {
                        \$(obj).data('binicio', binicio);
                        \$(obj).data('btermino', btermino);
                    }
                    
                              //    

//                    var objs=\$('.gsn-calendario-data-main>table>tbody>tr:eq(0)>td:eq('+colAct+')>div>div');
//                    var objsSort=objs.sort(function(a,b) {
//                        var obj1 = parseInt(\$(a).data('binicio'));
//                        var obj2 = parseInt(\$(b).data('binicio'));
//                            return obj1 == obj2 ? 0 : obj1 < obj2 ? -1 : 1;
//                    });
//
//                    bloqueEx:                   
//                    for(var i=0; i<\$(objsSort).length; i++) {
//                        var o=objsSort[i];
//
//                        for(var h=binicio; h<=btermino; h++) {
//                            if(\$(o).data('binicio')<=h && \$(o).data('btermino')>=h) {
//                                error=true;
//                                break bloqueEx;
//                            }
//
//                        }
//
//                    }   
//                                       
//                    // Actualizamos variables nuevas
//                    if(error) { 
//                        \$(obj).draggable(\"option\", \"revert\", true);
//                        colAct=colOrig;
//                    } else {
//                        \$(obj).data('binicio', binicio);
//                        \$(obj).data('btermino', btermino);
//                    }



                   \$('.gsn-calendario-data-main>table>tbody>tr:eq(0)>td:eq('+colAct+')>div').append(obj);
                                         //        
                         /*       
                        \$(ui.helper).closest(\"tr\").find(\".gsn-calendario-data-dia\").each(function(i){
                            \$(this).activarDrop();
                        });*/

                    \$(\".gsn-calendario-data-helper\").remove();                        
                         
                     }
                });
             
             
             
            }
            

            \$.fn.activarEfectos=function(){


            var anchoObj=\$(this).closest(\"td\").outerWidth(true);
            var altoFila=\$('#gsn-calendario-bg>table>tbody>tr:first').outerHeight(true);





                \$(this).filter(':not(.ui-resizable)').resizable({
                    handles: {
                    'n': '.ui-resizable-n',
                    's': '.ui-resizable-s'
                    },
                    // grid: [anchoObj, (altoFila)],
                    minHeight: (altoFila-4),
                    containment: \"#gsn-calendario-grid\",
                    start: function(ev,ui) {

                        var minSize;
                        var maxSize;

                        var obj=\$(ui.helper);
                        var iColAct=\$(obj).closest(\"td\").index();

                        minSize=1;
                        maxSize=\$('#gsn-calendario-bg>table>tbody>tr').length;

                        // Definimos ayudante
                        //var helperObj=\$(gsnConHelper).clone();
                        var helperObj=fnDetalleHorario(\"gsn-calendario-data-helper\");

                        // Cambiamos el orden del bloque para mostrarlo encima siempre
                        var css = \$(obj).attr(\"style\")+ \" z-index: 20 !important;\";
                        \$(obj).css(\"cssText\", css);  

                        // Trasladamos el objeto al ayudante (en la columna que corresponda. var.iColAct
                        helperObj.find(\"tr:eq(0)>td:eq(\"+iColAct+\")>div\").append(obj);

                        // Agrego ayudante al dom
                        \$('#gsn-calendario-grid').append(helperObj);

                        // Selecciono los bloques disponibles para el dia actual
                        var objsSort = \$('.gsn-calendario-data-main>table>tbody>tr:eq(0)>td:eq('+iColAct+')>div>div')
                                .sort(function(a,b){
                                    var obj1= parseInt(\$(a).data('binicio'));
                                    var obj2= parseInt(\$(b).data('binicio'));
                                        return obj1 == obj2 ? 0 : obj1 < obj2 ? -1 : 1;
                        });

                        for(var i=0; i<=objsSort.length; i++) {

                            var selBloque=\$(objsSort[i]);

                            /*
                            *  Se elimina el if ya que se mueve el bloque actual a un contenedor temporal
                            *  Este if evita incluir buscar dos veces el bloque actual
                            */
                                if(selBloque.data('btermino')<obj.data('binicio')) {
                                    minSize=selBloque.data('btermino')+1;
                                } else if(obj.data('btermino')<=selBloque.data('binicio')) {
                                    // console.log(\$(this).data(\"binicio\"));
                                    maxSize=selBloque.data('binicio')-1;
                                    break;
                                }
                        }






                      //  \$(obj).resizable(\"option\",\"maxHeight\", ((altoFila*((maxSize-minSize+1)))-4));

                        \$(obj).data(\"tmpAlto\", ui.size.height);
                        \$(obj).data(\"tmpPosSup\", ui.position.top);

                        \$(obj).data(\"tmpbinicio\", \$(obj).data(\"binicio\"));     
                        \$(obj).data(\"tmpbtermino\", \$(obj).data(\"btermino\"));

                        \$(obj).data(\"tmpminsize\", minSize);     
                        \$(obj).data(\"tmpmaxsize\", maxSize);

                        console.log(\"rev.BloqueMin: \" + minSize);
                        console.log(\"rev.BloqueMax: \" + maxSize);
                    },

                    resize: function(ev,ui) {

                        var obj=\$(ui.helper);

                        var minSize=\$(obj).data(\"tmpminsize\");     
                        var maxSize=\$(obj).data(\"tmpmaxsize\");

                        var altoTmp=\$(obj).data(\"tmpAlto\");
                        var supTmp=\$(obj).data(\"tmpPosSup\");

                        var posAct=\$(obj).position();

                        var posSup=Math.floor(posAct.top/(altoFila))+1;
                        var posInf=Math.floor((\$(obj).outerHeight(true)+1)/(altoFila))+posSup; 

                        if(mouseClickStatus===\"down\") {
                            var fixMin=\$(obj).data(\"tmpbinicio\");
                            \$(obj).resizable(\"option\",\"maxHeight\", ((altoFila*((maxSize-fixMin+1)))-4));
                        } else {
                            var fixMax=\$(obj).data(\"tmpbtermino\");
                            \$(obj).resizable(\"option\",\"maxHeight\", ((altoFila*((fixMax-minSize+1)))-4));

                        }

                        console.log(ui.position.top);
                        console.log(posSup);

                        if(ui.size.height>=\$(obj).resizable(\"option\",\"maxHeight\")) return false;

                        //console.log(\"aaa: \" + \$(obj).resizable(\"option\",\"maxHeight\"));
                        //console.log(\"bbb: \" + ui.size.height);


                        if(mouseClickStatus===\"up\"){

                            if((ui.position.top)<(supTmp-2)) \$(obj).data(\"tmpPosSup\", (supTmp-altoFila));
                            if(((ui.position.top-altoFila))>(supTmp-2)) \$(obj).data(\"tmpPosSup\", (supTmp+altoFila));
                        }


                        if((ui.size.height)>(altoTmp+2)) \$(obj).data(\"tmpAlto\", (altoTmp+altoFila));
                        if((ui.size.height+altoFila)<(altoTmp+2)) \$(obj).data(\"tmpAlto\", (altoTmp-altoFila));

                        ui.position.top=\$(obj).data(\"tmpPosSup\");
                        ui.size.height=\$(obj).data(\"tmpAlto\");

                        \$(obj).data(\"tmpbinicio\", posSup);     
                        \$(obj).data(\"tmpbtermino\", posInf);
                        \$(obj).data(\"tmpPosSup\", ui.position.top);
                        
                        // Actualizamos los campos del contenedor de reserva
                        obj.setObjData(posSup,posInf);


                    }, 
                    stop: function(ev,ui) {
                        // Restauramos cambios aplicdos durante la tarea de redimensionado del objeto
                        var obj = \$(ui.helper);
                        var iColAct=\$(obj).closest(\"td\").index();
            //            
            //            // Restauramos atributos del bloque
                        obj.resizable(\"option\",\"maxHeight\",null);
                        obj.css(\"z-index\",\"\");

                        \$(obj).data(\"binicio\", \$(obj).data(\"tmpbinicio\"));     
                        \$(obj).data(\"btermino\", \$(obj).data(\"tmpbtermino\"));

                        // Liberamos variables
                        \$(obj).removeData(\"tmpAlto\");
                        \$(obj).removeData(\"tmpPosSup\");

                        \$(obj).removeData(\"tmpbinicio\");     
                        \$(obj).removeData(\"tmpbtermino\");

                        \$(obj).removeData(\"tmpminsize\");     
                        \$(obj).removeData(\"tmpmaxsize\");

                        // console.log(\$(obj).data());

                        // Devolvemos el bloque al contenedor original
                        \$('.gsn-calendario-data-main>table>tbody>tr:eq(0)>td:eq('+iColAct+')>div').append(obj);
                                                 //        
                                 /*       
                                \$(ui.helper).closest(\"tr\").find(\".gsn-calendario-data-dia\").each(function(i){
                                    \$(this).activarDrop();
                                });*/

                        \$(\".gsn-calendario-data-helper\").remove();

                    }

                });


                \$(this).draggable({
                    grid: [anchoObj, altoFila],
                    //grid: [1, altoFila],
                   //opacity: 0.35,
                   // stack: '.gsn-calendario-cont-bloque',
                    containment: \"#gsn-calendario-bg\",
                   // scroll:false,
                    start: function(ev,ui) {

                     
                        var obj=\$(ui.helper);

                        var colAct=obj.closest(\"td\").index();   
                        var tbHelper=fnDetalleHorario(\"gsn-calendario-data-helper\");
                              
                     //   \$(obj).width(\$(obj).closest(\".gsn-calendario-data-dia\").innerWidth());
       
                       \$(obj).width(\$(obj).closest(\".gsn-calendario-data-dia\").outerWidth());
                        
                        var anchoAct=\$(obj).closest(\"td\").outerWidth(true);

                        if (anchoAct!==anchoObj) {
                            \$(obj).draggable(\"option\", \"grid\", [anchoAct, altoFila]);
                        }
  
                        //obj.data('colId',colAct);
                        \$(tbHelper).find('tr:eq(0)>td:eq('+colAct+')>div').append(obj);
                        \$(\"#gsn-calendario-grid\").append(tbHelper);

                        \$(tbHelper).find(\".gsn-calendario-data-dia\").each(function(i){
                            \$(this).activarDrop();
                        });

                        \$(obj).draggable(\"option\", \"revert\", false);
                        
                        \$(obj).data(\"tmpLeft\", 0);


                    },
                    stop: function(ev,ui) {
         
                    //    console.log(\$(ui.helper).data());
                   // \$(obj).droppable(\"destroy\");

                        var obj=\$(ui.helper);
                        \$(obj).css({'left':'', 'width': '100%'});
                        
                        \$(obj).removeData('tmpLeft');

                    },
                    drag: function(ev,ui) {

                        //console.log(ui.position.left);

                        var obj = \$(ui.helper);
                        var colWidth=\$(obj).closest(\"td\").outerWidth(true);

                        //   var colWidth=anchoObj;                      
                        // var colDiff=Math.round(ui.position.left/colWidth);
                        var colDiff=(((ui.position.left-(ui.position.left % colWidth)))/colWidth);

                        var colOrig=\$(obj).closest(\"td\").index();
                        var colAct= colOrig+colDiff;
                        var filAct= ((ui.position.top - (ui.position.top % altoFila))/altoFila)+1;
                         
                        // Fix para evitar que se pasen los bloques a la columna 0 
                        if(colAct==0)
                        {
                            ui.position.left=\$(obj).data(\"tmpLeft\");
                          //  return;
                        } else {
                            \$(obj).data(\"tmpLeft\", ui.position.left);
                        }

                        if(\$(obj).data('tmpBinicio')!==filAct || \$(obj).data('tmpCol')!==colAct) {
                            \$(obj).data('tmpBinicio',filAct);
                            \$(obj).data('tmpCol',colAct);
                            \$(obj).data('colOrig', colOrig);
                        }
                     
                        // Actualizamos los campos del contenedor de reserva
                        obj.setObjData(filAct,((\$(obj).data('btermino')-\$(obj).data('binicio'))+filAct));

                    }

                });

            }
            

            
            \$.fn.agregarReserva=function(){
                                
                \$(this).selectable({
                    filter: \"td:not(:nth-child(1))\",
                    start: function(ev,ui) {
                      //console.log(ui);
                    },
                    selecting: function(ev,ui) {
                        //console.log(ui);
                        
                            var objCont=\$(ui.selecting);
                            var iFilAct=\$(objCont).parent().index()+1;
                                                   
                        if(!\$('#gsn-calendario-grid>div').hasClass('gsn-calendario-data-helper')) {
                            
                            var iColAct=\$(objCont).index();
                            var tbHelper=fnDetalleHorario(\"gsn-calendario-data-helper\");                            
                            var gsnNewObj=gsnDefObj.clone();
                            
                            // Guardamos la columna actual
                            gsnNewObj.data('tmpCol', iColAct);
                            
                            // Agregamos el contenedor de la reserva
                            \$(tbHelper).find(\"td:eq(\"+iColAct+\")>div\").append(gsnNewObj);
                            
                            // Ocultamos para agregar efecto
                            \$(gsnNewObj).css('display','none');
                            
                            // Declaramos atributos de la reserva
                            gsnNewObj.data('id', 0);
                            gsnNewObj.data('binicio', iFilAct);
                            gsnNewObj.data('btermino', iFilAct);
                            gsnNewObj.posObj(); 
                            
                            // Agregamos al contenedor principal
                            \$(\"#gsn-calendario-grid\").append(tbHelper);
                            
                            // Actualizamos los campos del contenedor de reserva
                            gsnNewObj.setObjData();
                                                        
                            // Mostramos
                            \$(gsnNewObj).fadeIn(500);
                            
                        } else {
                            
;
                            var gsnNewObj=\$('.gsn-calendario-data-helper .gsn-calendario-cont-bloque');
                            var iColAct=\$(gsnNewObj).data('tmpCol');
                            
                            // Removemos seleccion en otras columnas
                            \$('#gsn-calendario-bg>table>tbody>tr>td.ui-selecting:not(:nth-child('+(iColAct+1)+'))').removeClass('ui-selecting');
                            
                            var posSup=\$('#gsn-calendario-bg>table>tbody>tr>td.ui-selecting:nth-child('+(iColAct+1)+'):first').parent().index()+1;
                            var posInf=\$('#gsn-calendario-bg>table>tbody>tr>td.ui-selecting:nth-child('+(iColAct+1)+'):last').parent().index()+1;
                            
                            if(!gsnNewObj.chkObjPos(posSup,posInf,iColAct)) {
                                
                                    gsnNewObj.data('binicio', posSup);
                                    gsnNewObj.data('btermino', posInf);

                                    // Actualizamos los campos del contenedor de reserva
                                    gsnNewObj.setObjData();

                                    gsnNewObj.posObj();
                                    
                            } else {
                                \$(objCont).removeClass('ui-selecting');
                            }                                            
                         




//                                if(!gsnNewObj.chkObjPos(posSup,posInf,iColAct)) {
//
//                                    gsnNewObj.data('binicio', posSup);
//                                    gsnNewObj.data('btermino', posInf);
//
//                                    // Actualizamos los campos del contenedor de reserva
//                                    gsnNewObj.setObjData();
//
//                                    gsnNewObj.posObj();
//                                } 
                 
                        }
                           
                    },
                    unselecting: function(ev,ui) {
                        
                            
                            
                            //console.log(iColAct);
                            
                            var gsnNewObj=\$('.gsn-calendario-data-helper .gsn-calendario-cont-bloque');
                            var iColAct=\$(gsnNewObj).data('tmpCol');
                            var posSup=\$('#gsn-calendario-bg>table>tbody>tr>td.ui-selecting:nth-child('+(iColAct+1)+'):first').parent().index()+1;
                            var posInf=\$('#gsn-calendario-bg>table>tbody>tr>td.ui-selecting:nth-child('+(iColAct+1)+'):last').parent().index()+1;
                            
                            \$(gsnNewObj).data('binicio', posSup);
                            \$(gsnNewObj).data('btermino', posInf);

                            
                            // Actualizamos los campos del contenedor de reserva
                            gsnNewObj.setObjData();
                                
                            gsnNewObj.posObj();
                            
                    },
                    stop: function(ev,ui) {

                        
                        var obj=\$('.gsn-calendario-data-helper .gsn-calendario-cont-bloque');
                   
                        // var iColAct=\$(obj).closest(\"td\").index();
                        var iColAct=\$(obj).data('tmpCol');
 
                        // Quitamos seleccion
                        \$('#gsn-calendario-bg>table>tbody>tr>td').removeClass('ui-selected');
        
                        // Liberamos variable
                        \$(obj).removeData('tmpCol');
                        
                        // Devolvemos el bloque al contenedor original
                        \$('.gsn-calendario-data-main>table>tbody>tr:eq(0)>td:eq('+iColAct+')>div').append(obj);
                        
                        // Activamos efectos
                        obj.activarEfectos();
                                                 //        
                                 /*       
                                \$(ui.helper).closest(\"tr\").find(\".gsn-calendario-data-dia\").each(function(i){
                                    \$(this).activarDrop();
                                });*/

                        \$(\".gsn-calendario-data-helper\").remove();
     
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

      
            
            
            
            
            var tbHorario=fnCrearHorario(gsnRangoHoras);
            var tbDetalleHorario=fnDetalleHorario(\"gsn-calendario-data-main\");
          //  console.log(\$(tbHorario));
            
            \$(tbHorario).agregarReserva();
            
            \$(\"#gsn-calendario-grid\").append(tbHorario);        
            \$(\"#gsn-calendario-grid\").append(tbDetalleHorario);
            fnGenBloquesReserva(gsnDatosReserva,gsnDefObj);
        

            
            
            
            \$('#gsn-calendario-grid').on('click', '.gsn-calendario-cont-bloque>a', function(ev){
                ev.preventDefault();
                ev.stopPropagation();
                console.log(\"click reserva\");
            });
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        });
    
        
    
    </script>
















";
    }

    public function getTemplateName()
    {
        return "CosacoGesenBundle:Horario:Mostrar.html - copia.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  81 => 19,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  58 => 12,  55 => 11,  49 => 8,  45 => 7,  41 => 6,  38 => 5,  11 => 1,);
    }
}
