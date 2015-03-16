<?php

/* CosacoGesenBundle:Horario:Calendario.html_2.twig */
class __TwigTemplate_c2dd199e5d62b6f857b733e194e76eef666a41d945a685762c0be49ae4c9628a extends Twig_Template
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

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/smoothness/jquery-ui.css"), "html", null, true);
        echo "\">   
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/horario.css"), "html", null, true);
        echo "\">  
";
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        // line 13
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/moment.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>
";
        // line 17
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        // line 21
        echo "
    <div id=\"body-gsn\">
        <h1 class=\"page-header\">Horarios</h1>

        <div class=\"panel panel-default\">
            <div class=\"panel-heading gsn-calendario-header-panel\">
                <div class=\"btn-group\" role=\"group\" aria-label=\"...\">
                    <button id=\"gsn-calendario-dtp-btn\" type=\"button\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\"></span></button>
                    <input class=\"gsn-calendario-header-titulo\" type=\"hidden\" id=\"gsn-calendario-dtp\">
                </div>
                <div class=\"btn-group pull-right\" role=\"group\" aria-label=\"...\">
                    <button id=\"gsn-fecha-ant\" type=\"button\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-menu-left\" aria-hidden=\"true\"></span></button>
                    <button type=\"button\" class=\"btn btn-default hidden-xs\">Hoy</button>
                    <button type=\"button\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-menu-right\" aria-hidden=\"true\"></span></button>
                </div>
            </div>
            <div class=\"panel-body text-center\"><span class=\"gsn-calendario-header-titulo h3\">Marzo 2015</span></div>
            <div id=\"gsn-calendario\"></div>
        </div>
    </div>

    <script>

    // Función para crear los contenedores principales para el calendario
    var crearContenedores=function(numDias, tipo, horario) {

        /* 
         * var tipo:
         * helper:  gsn-calendario-helper
         * contenido:  gsn-calendario-datos
         * bg:  gsn-calendario-bg
         */

        var mainClass;
        
        switch(tipo) {
            case 'helper':
                mainClass=\"gsn-calendario-columnas gsn-calendario-helper\";
                break;
            case 'contenido':
                mainClass=\"gsn-calendario-columnas gsn-calendario-datos\";
                break;
            case 'grid':
                mainClass=\"gsn-calendario-filas\";
                break;
            case 'bg':
                mainClass=\"gsn-calendario-bg\";
                break;
        }

        var mainBg=\$(\"<div class=\\\"\"+mainClass+\"\\\"><table class=\\\"table table-bordered\\\"><tbody></tbody></table></div>\");
        var childObj='';
        
        var numFilas=1;
        
        if(horario!==undefined) numFilas=horario.length;

        // Agregamos columnas al header
        for(var d=0; d<numFilas; d++) {

            var strTrClass='';

                strTrClass+=(tipo==='grid') ? 'gsn-calendario-def-fila':'';
                
                // Estilo alternativo para filas   
                if(tipo==='grid') strTrClass+=((d % 2)===0) ? ' gsn-calendario-style-fil':' gsn-calendario-style-alt';

                childObj+='<tr class=\\\"'+strTrClass+'\\\">';

            var numCols=(tipo==='grid') ? 1:numDias;

            for(var i=0; i<=numCols; i++) { 

                // Determinamos las clases que incluiremos
                var strClass='';

                if (i===0) strClass+=(strClass.length===0) ? 'gsn-calendario-def-columna':' gsn-calendario-def-columna';  

                // Creamos elemento
                childObj+=\"<td\";
                childObj+=(strClass.length>0) ? ' class=\\\"'+strClass+'\\\"':'';
                childObj+= (tipo==='grid' && i===0) ? ' data-hinicio=\\\"'+horario[d].binicio+'\\\" data-htermino=\\\"'+horario[d].btermino+'\\\"':'';
                childObj+=\">\";
                childObj+= (tipo==='grid' && i===0) ? '<span>'+moment(horario[d].binicio, \"H:mm\").format('H:mm')+'</span>':'';
                childObj+=(i>0 && (tipo==='contenido' || tipo==='helper')) ? '<div class=\\\"gsn-calendario-cont-dia\\\"></div>':'';
                childObj+=\"</td>\";

            } 

            childObj+=\"</tr>\";
           //if(d===0 && (tipo!=='grid')) break;
        }

        \$(mainBg).find(\"tbody\").append(\$(childObj));
        
        return mainBg;

    }
    
    // Función que crea el calendario reuniendo los elementos retornados por la función crearContenedores
    var crearCalendario=function(horario,numDias){

        if(horario.length===0) return false;

        //  Creamos tabla principal
        var mainContenedor=\$(\"<div id=\\\"gsn-calendario-contenedor\\\"><table><thead><tr><td><div id=\\\"gsn-calendario-header\\\"></div><div class=\\\"gsn-calendario-separador\\\"></div></td></tr></thead><tbody><tr><td><div id=\\\"gsn-calendario-body\\\"><div id=\\\"gsn-calendario-grid\\\"></div></div></td></tr></tbody></table></div>\");

        // Creamos header con dias semana
        var mainHeader=\$(\"<table class=\\\"table table-bordered\\\"><thead><tr></tr></thead></table>\");

        for(var i=0; i<=numDias; i++) {
            if(i===0) \$(mainHeader).find(\"tr\").append(\$(\"<th class=\\\"gsn-calendario-def-columna\\\">\"+i+\"</th>\"));
            else \$(mainHeader).find(\"tr\").append(\$(\"<th>\"+i+\"</th>\"));
        }

        // Agregamos estructura del calendario
        \$(mainContenedor).find(\"#gsn-calendario-grid\").append(crearContenedores(7,'bg'));
        \$(mainContenedor).find(\"#gsn-calendario-grid\").append(crearContenedores(7,'grid',horario));
        \$(mainContenedor).find(\"#gsn-calendario-grid\").append(crearContenedores(7,'contenido'));

        // Agregamos contenedor principal    
        \$(mainContenedor).find(\"#gsn-calendario-header\").append(mainHeader);

        return mainContenedor;
    }
            
    // Función que nos permite posicionar un bloque de reserva
    \$.fn.posObj=function(){
        var posTopObj=0;
        var altoObj=0;
        var bInicio,bTermino;
        
            bInicio=\$(this).data('binicio');
            bTermino=\$(this).data('btermino');

        // Calculamos alto y posicion del objeto
        var altosObj = \$('.gsn-calendario-filas>table>tbody>tr:lt('+bTermino+')>td:nth-child(2)');

        for(var i=0; i<bTermino; i++) {                    
            if((i+1)>=bInicio) altoObj+=\$(altosObj[i]).outerHeight(true);
            else posTopObj+=\$(altosObj[i]).outerHeight(true);
        }

        // Posicionamos objeto               
        \$(this).css({'top':(posTopObj+3)+'px', 'height':(altoObj-5)+'px'});
    }

    // Función para comprobar que las reservas se asignen correctamente
    var chkObjPos=function(pSup,pInf,iColAct){

        var objCont=\$('.gsn-calendario-datos>table>tbody>tr:eq(0)>td:eq('+iColAct+')>div>div')
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
    
    // Función que va cambiando la informacion de los bloques a medida que se mueven
    \$.fn.setObjData=function(pSup,pInf){

        // Agregamos rangos horarios a la cabecera
  ";
        // line 203
        echo "
        //console.log(\"posK: \" +pSup);
        var txtSup=\$('.gsn-calendario-filas>table>tbody>tr:eq('+(pSup-1)+')>td:nth-child(1)').data('hinicio');
        var txtInf=\$('.gsn-calendario-filas>table>tbody>tr:eq('+(pInf-1)+')>td:nth-child(1)').data('htermino');
        var txtHeader=txtSup+ \"-\\n\" + txtInf;

        \$(this).find(\".panel-title\").text(txtHeader);

    }
            
    // Función encargada de generar los bloques para las reservas           
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
        gsnNewObj.setObjData(bInicio,bTermino);


        \$(this).find('table>tbody>tr>td:eq('+idCol+')>div').append(gsnNewObj);        

        gsnNewObj.activarEfectos();

        return gsnNewObj;

    }
            
    // Función que crea contenedor temporal cuando se va a editar una reservas
    \$.fn.crearAyudante=function(tmpCol){

        if(\$('.gsn-calendario-grid>div').hasClass('gsn-calendario-helper') || \$(this)===undefined) {
            alert('Se ha producido un error!!');
            \$('.gsn-calendario-datos-helper').remove();
            return false;
        }

        var obj=\$(this);
        var col;

        if(tmpCol===undefined) col=\$(obj).closest(\"td\").index();
        else col=tmpCol;

        //console.log(col);

        // Cambiamos estilos y otras propiedades
        \$(obj).find(\".panel\").addClass(\"panel-default\");
        \$(obj).find(\".panel\").removeClass(\"panel-primary\");

        // Generamos el ayudante
        var tbHelper=crearContenedores(7,\"helper\");

        // Movemos el bloque al ayudante
        \$(tbHelper).find('table>tbody>tr:eq(0)>td:eq('+col+')>div').append(\$(obj));

        // Agregamos el ayudante al helper
        \$(\"#gsn-calendario-grid\").append(tbHelper);                   

    } 
                
    // Eliminar contenedor temporal luego de editar una reserva
    \$.fn.borrarAyudante=function(tmpCol){

        var obj=\$(this);
        var col;

        if(tmpCol===undefined) col=\$(obj).closest(\"td\").index();
        else col=tmpCol;

        \$('.gsn-calendario-datos>table>tbody>tr:eq(0)>td:eq('+col+')>div').append(obj);
        \$('.gsn-calendario-helper').remove();

        // Restauramos atributos del objeto
        \$(obj).css({'left':'', 'width': '100%'});
        \$(obj).find(\".panel\").addClass(\"panel-primary\");
        \$(obj).find(\".panel\").removeClass(\"panel-default\");

    }
    
    // Función que habilita efectos arrastrar y redimiensionar
    \$.fn.activarEfectos=function(){

        var anchoObj=\$(this).closest(\"td\").innerWidth();
        var altoFila=\$('.gsn-calendario-filas>table>tbody>tr:first').outerHeight(true);

        // Se invoca plugin jquery ui resize para redimensionar objetos
        \$(this).filter(':not(.ui-resizable)').resizable({
        handles: {
        'n': '.ui-resizable-n',
        's': '.ui-resizable-s'
        },
        containment: \"#gsn-calendario-grid\",
            start: function(ev,ui) {

                var obj=\$(ui.helper);

                \$(obj).crearAyudante();
                
                
                     mClick=\$(obj).data('uiResizable').axis;
                 

        var obj=\$(ui.helper);
        var col=\$(obj).closest(\"td\").index();

         minSize=1;
         maxSize=\$('.gsn-calendario-filas>table>tbody>tr').length;

         // Creamos el ayudante
        \$(obj).crearAyudante();
        
        // Obtengo rango de bloques registrados
        \$(obj).data(\"tmpbinicio\", \$(obj).data(\"binicio\"));     
        \$(obj).data(\"tmpbtermino\", \$(obj).data(\"btermino\"));

     
         // Selecciono los bloques disponibles para el dia actual
         var objsSort = \$('.gsn-calendario-datos>table>tbody>tr>td:eq('+col+')>div>div')
                 .sort(function(a,b){
                     var obj1= parseInt(\$(a).data('binicio'));
                     var obj2= parseInt(\$(b).data('binicio'));
                         return obj1 === obj2 ? 0 : obj1 < obj2 ? -1 : 1;
         });

         for(var i=0; i<objsSort.length; i++) {

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
               
                \$(obj).data(\"tmpbinicio\", \$(obj).data(\"binicio\"));     
                \$(obj).data(\"tmpbtermino\", \$(obj).data(\"btermino\"));
                
                var altoObj=ui.size.height;
                
                
                if(mClick==='n') {
                    tamDiff=\$(obj).data(\"binicio\")-minSize;
                    \$(obj).resizable(\"option\",\"maxHeight\",(tamDiff*altoFila)+(altoObj));
                    
                } else {
                    tamDiff=maxSize-\$(obj).data(\"btermino\");
                    \$(obj).resizable(\"option\",\"maxHeight\",(tamDiff*altoFila)+(altoObj));
                }

                /*
                console.log(\"rev.BloqueMin: \" + minSize);
                console.log(\"rev.BloqueMax: \" + maxSize);
                console.log(\"altoFila \"+ altoFila + \" altoObj \" + ui.size.height+ \" maxH \" + \$(obj).resizable(\"option\",\"maxHeight\"));
                */
                
            },
            resize: function(ev,ui) {
                
                var obj, col, posSup, posInf, objPos, objTam;

                obj=\$(ui.helper);
                col=obj.closest(\"td\").index();                     

                posSup=Math.floor(ui.position.top/(altoFila))+1;
                posInf=(mClick==='n') ? obj.data(\"btermino\"):Math.floor((obj.outerHeight(true))/(altoFila))+posSup;

                // Movemos el bloque
                // ui.position.top= ((\$(obj).data(\"tmpbinicio\")-1)*altoFila)+2;
                // ui.size.height=(((\$(obj).data(\"tmpbtermino\")-\$(obj).data(\"tmpbinicio\"))+1)*altoFila)-4;   #}   

                objPos=((obj.data(\"tmpbinicio\")-1)*altoFila)+3;
                objTam=((obj.data(\"tmpbtermino\")*altoFila)-objPos)-2;

                ui.size.height=objTam;
                ui.position.top=objPos;

                // Comprobamos que el nuevo tamaño no se sobreponga en bloques previamente registrados.                        
                if(posSup>=minSize && posInf<=maxSize) {

                    obj.data(\"tmpbinicio\", posSup);    
                    obj.data(\"tmpbtermino\", posInf);
                    obj.setObjData(posSup,posInf);

                }

            }, 
            stop: function(ev,ui) {
                // Restauramos cambios aplicdos durante la tarea de redimensionado del objeto
                var obj = \$(ui.helper);

                // Restauramos atributos del bloque
                obj.resizable(\"option\",\"maxHeight\",null);
                obj.css(\"z-index\",\"\");

                obj.data(\"binicio\", obj.data(\"tmpbinicio\"));     
                obj.data(\"btermino\", obj.data(\"tmpbtermino\"));

                // Liberamos variables
                obj.removeData(\"tmpbinicio\");     
                obj.removeData(\"tmpbtermino\");

                // Devolvemos el bloque al contenedor original
                obj.borrarAyudante();


            }

        });

    // Se invoca plugin jquery ui draggable (para arrastrar objetos)
    \$(this).draggable({
        opacity: 0.9,
        containment: \"#gsn-calendario-grid\",
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
                var alto=\$('.gsn-calendario-filas>table>tbody>tr:eq('+(binicio-1)+')').outerHeight(true); 
                var totalFil=\$('.gsn-calendario-filas>table>tbody>tr').length;
                var totalCols=\$('.gsn-calendario-bg>table>tbody>tr:first>td:gt(0)').length;

                ";
        // line 533
        echo "
                if(ui.position.top>(obj.data(\"tmpTFix\")-alto) && totalFil>btermino) { 

                    obj.data(\"tmpTop\", (obj.data(\"tmpTop\")+alto));
                    obj.data(\"tmpTFix\", (obj.data(\"tmpTFix\")+alto));
                    //      console.log(\"T\");

                    binicio+=1;
                    btermino+=1;
                }

                if(ui.position.top<(obj.data(\"tmpTFix\")) && (binicio-1)>0) { 

                    obj.data(\"tmpTop\", (obj.data(\"tmpTop\")-alto));
                    obj.data(\"tmpTFix\", (obj.data(\"tmpTFix\")-alto));
                    //  console.log(\"B\");

                    binicio-=1;
                    btermino-=1;

                }

                if(ev.clientX>(obj.data(\"tmpLeft\")+ancho) && totalCols>(colAct)) { 

                    obj.data(\"tmpLeft\", (obj.data(\"tmpLeft\")+ancho));
                    obj.data(\"tmpLFix\", (obj.data(\"tmpLFix\")+ancho));

                    colAct+=1;

                }


                if(ev.clientX<(obj.data(\"tmpLeft\")) && colAct>1) { 

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

    // Funcion que habilita el formulario para agregar nuevas 
    \$.fn.agregarNuevaReserva=function(){

        \$(this).selectable({
        filter: \"td:not(:nth-child(1))\",
            selecting: function(ev,ui) {

                var objCont=\$(ui.selecting);

                if(!\$('.gsn-calendario-columnas').hasClass('gsn-calendario-helper')) {

                    var numDias=\$(\".gsn-calendario-bg>table>tbody>tr:eq(0)>td:gt(0)\").length;
                    var anchoCont=\$(objCont).outerWidth();
                    var anchoCol=Math.floor(anchoCont/numDias);

                    var col=Math.floor((ev.offsetX/anchoCol))+1;
                    var binicio=\$(objCont).closest(\"tr\").index()+1;

                    // Compruebo que el bloque seleccionado no se encuentre registrado
                    if(chkObjPos(binicio, binicio, col)) {

                        \$(objCont).removeClass('ui-selecting');
                        return;
                    }

                    var tbHelper=\$('.gsn-calendario-datos');

                    // Agregamos al contenedor principal                            
                    //\$(\"#gsn-calendario-grid\").append(tbHelper);

                    var gsnNewObj=\$(tbHelper).fnGenBloquesReserva(0, binicio, binicio, col);

                    // Ocultamos para agregar efecto
                    \$(gsnNewObj).css('display','none');

                    // Guardamos la columna actual
                    gsnNewObj.data('tmpCol', col);

                    // Creamos el ayudanmte
                    \$(gsnNewObj).crearAyudante();

                    // Mostramos
                    \$(gsnNewObj).fadeIn(500);

                } else {

                    var gsnNewObj=\$('.gsn-calendario-helper .gsn-calendario-cont-bloque');
                    var col=\$(gsnNewObj).data('tmpCol');

                    // Removemos seleccion en otras columnas
                    \$('.gsn-calendario-filas>table>tbody>tr>td.ui-selecting:not(:nth-child(2)').removeClass('ui-selecting');

                    var posSup=\$('.gsn-calendario-filas>table>tbody>tr>td.ui-selecting:nth-child(2):first').parent().index()+1;
                    var posInf=\$('.gsn-calendario-filas>table>tbody>tr>td.ui-selecting:nth-child(2):last').parent().index()+1;

                    if(!chkObjPos(posSup,posInf,col)) {

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

                var gsnNewObj=\$('.gsn-calendario-helper .gsn-calendario-cont-bloque');
                //var col=\$(gsnNewObj).data('tmpCol');

                var posSup=\$('.gsn-calendario-filas>table>tbody>tr>td.ui-selecting:nth-child(2):first').parent().index()+1;
                var posInf=\$('.gsn-calendario-filas>table>tbody>tr>td.ui-selecting:nth-child(2):last').parent().index()+1;

                \$(gsnNewObj).data('binicio', posSup);
                \$(gsnNewObj).data('btermino', posInf);

                // Actualizamos los campos del contenedor de reserva
                gsnNewObj.setObjData();                              
                gsnNewObj.posObj();

            },
            stop: function(ev,ui) {

                var obj=\$('.gsn-calendario-helper .gsn-calendario-cont-bloque');

                // var iColAct=\$(obj).closest(\"td\").index();
                var col=\$(obj).data('tmpCol');

                // Liberamos variable
                \$(obj).removeData('tmpCol');

                // Quitamos seleccion
                \$('.gsn-calendario-filas>table>tbody>tr>td').removeClass('ui-selected');

                // Devolvemos el bloque al contenedor original
                \$(obj).borrarAyudante(col);

                // Activamos efectos
                \$(obj).activarEfectos();

            }
        });

    }

    // fix margen derecho del header con scrollbar            
    var ajustarScrollbar=function(){
        var ancho = \$('#gsn-calendario-grid').outerWidth(true);
        var anchoCont=\$('#gsn-calendario-header').outerWidth(true);
        var margen=anchoCont-ancho;
        \$('#gsn-calendario-header').css({\"margin-right\":margen+'px'});
    }

    // Función que carga reservas existentes en bd
    var cargarReservas=function(){

        // Iniciamos
        var gsnDatosReserva = [
            {'id':1,'dia':1,'binicio':4,'btermino':4},
            {'id':2,'dia':1,'binicio':2,'btermino':3},
            {'id':3,'dia':2,'binicio':6,'btermino':6},
            {'id':1,'dia':3,'binicio':2,'btermino':4},
            {'id':2,'dia':4,'binicio':6,'btermino':6},
            {'id':3,'dia':6,'binicio':1,'btermino':1}
        ]; 


        for(var i=0; i<gsnDatosReserva.length; i++) {

            var gsnData=gsnDatosReserva[i];

            \$('.gsn-calendario-datos').fnGenBloquesReserva(gsnData.id,  gsnData.binicio, gsnData.btermino, gsnData.dia);

        } 

    }

    var cargarCalendario=function(agregarBloques){

        var gsnBloques=[
        ";
        // line 749
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bloques"]) ? $context["bloques"] : $this->getContext($context, "bloques")));
        foreach ($context['_seq'] as $context["_key"] => $context["bloque"]) {
            // line 750
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
        // line 751
        echo "];
        
        // Aviso en caso de que no se encuentren bloques horarios    
        if(gsnBloques.length===0) {
            var alert='<div class=\\\"alert alert-warning alert-dismissible\\\" role=\\\"alert\\\">'+
                    '<button type=\\\"button\\\" class=\\\"close\\\" data-dismiss=\\\"alert\\\" aria-label=\\\"Close\\\">&times</span></button>'+
                    '<strong>Atención</strong> No se han registrado los rangos de tiempo</div>';
            
            \$(alert).insertBefore(\"#body-gsn>.panel\");
            return false;
            //\$('#body-gsn').insert.prepend(\$(alert));
        }

        // Agregamos contenedores principales
        var tbHorario=crearCalendario(gsnBloques,7);
        \$(\"#gsn-calendario\").append(tbHorario);

        // LLamamos a la funcion
        ajustarScrollbar();


        
        \$('#gsn-calendario').disableSelection();

        // Activamos evento para agregar nuevos bloques
        \$(tbHorario).find('.gsn-calendario-filas').agregarNuevaReserva();
        
       
        
        // Agregamos bloques horarios
        if(agregarBloques && typeof(agregarBloques)===\"function\" && gsnBloques.length>0) {
            agregarBloques();
            
        }
 
    }

    // Ponemos en español el dtp
    \$.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '<Ant',
        nextText: 'Sig>',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };

    \$.datepicker.setDefaults(\$.datepicker.regional['es']);


        // Habilitamos evento para aquellos objetos que varien su tamaño o posición al redimensionar
        \$(window).resize(function(ev){
            
            if(ev.target==window) {
            
            console.log(\"resizeEvent\")
            // Ajustamos margen derecho del header para el scrollbar
            ajustarScrollbar()
            
            // Ocultamos datepicker
            \$('#gsn-calendario-dtp').datepicker(\"hide\");
            }
        
        }); 

                  
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
            
           


";
        // line 851
        echo "            
       
    \$(document).ready(function(){
    
    cargarCalendario(cargarReservas);
    
    \$('#gsn-calendario-dtp').datepicker({
        showAnim: \"slideDown\",
        beforeShow: function(ev,ui){
            setTimeout(function(){
                var btn=\$(\"#gsn-calendario-dtp-btn\");
                var p=btn.offset();
                var pLeft=p.left;
                var pTop=p.top+btn.outerHeight(true)+2;
                ui.dpDiv.css({'left': pLeft, 'top': pTop});
                //console.log(pLeft);
            },5);
        }
    });
          
    // Eventos para mostrar y ocultar el datePicker    
    \$(\"#gsn-calendario-dtp-btn\").on('click', function(){ (\$('#ui-datepicker-div').css('display')==='none')? \$('#gsn-calendario-dtp').datepicker(\"show\"):\$('#gsn-calendario-dtp').datepicker(\"hide\"); });
    \$('#gsn-fecha-ant').click(function(){ console.log(\$('#gsn-calendario-dtp').val()); });
    });
    


    
    </script>
















";
    }

    public function getTemplateName()
    {
        return "CosacoGesenBundle:Horario:Calendario.html_2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  906 => 851,  813 => 751,  800 => 750,  796 => 749,  578 => 533,  264 => 203,  84 => 21,  81 => 20,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  58 => 13,  55 => 12,  49 => 9,  45 => 8,  41 => 7,  38 => 6,  11 => 1,);
    }
}
