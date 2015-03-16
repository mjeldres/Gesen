/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


        // Ponemos en español el dtp
    $.datepicker.regional['es'] = {
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
        dateFormat: $.datepicker.TIMESTAMP,   // dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };

    $.datepicker.setDefaults($.datepicker.regional['es']);
    
    
          



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
                mainClass="gsn-calendario-columnas gsn-calendario-helper";
                break;
            case 'contenido':
                mainClass="gsn-calendario-columnas gsn-calendario-datos";
                break;
            case 'grid':
                mainClass="gsn-calendario-filas";
                break;
            case 'bg':
                mainClass="gsn-calendario-bg";
                break;
        }

        var mainBg=$("<div class=\""+mainClass+"\"><table class=\"table table-bordered\"><tbody></tbody></table></div>");
        var childObj='';

        var numFilas=1;

        if(horario!==undefined) numFilas=horario.length;

        // Agregamos columnas al header
        for(var d=0; d<numFilas; d++) {

            var strTrClass='';

                strTrClass+=(tipo==='grid') ? 'gsn-calendario-def-fila':'';

                // Estilo alternativo para filas
                if(tipo==='grid') strTrClass+=((d % 2)===0) ? ' gsn-calendario-style-fil':' gsn-calendario-style-alt';

                childObj+=(strTrClass.length===0) ? '<tr>':'<tr class=\"'+strTrClass+'\">';

            var numCols=(tipo==='grid') ? 1:numDias;

            for(var i=0; i<=numCols; i++) {

                // Determinamos las clases que incluiremos
                var strClass='';

                if (i===0) strClass+=(strClass.length===0) ? 'gsn-calendario-def-columna':' gsn-calendario-def-columna';

                // Creamos elemento
                childObj+="<td";
                childObj+=(strClass.length>0) ? ' class=\"'+strClass+'\"':'';
                childObj+= (tipo==='grid' && i===0) ? ' data-hinicio=\"'+horario[d].binicio+'\" data-htermino=\"'+horario[d].btermino+'\"':'';
                childObj+=">";
                childObj+= (tipo==='grid' && i===0) ? '<span>'+moment(horario[d].binicio, "HH:mm:ss").format('H:mm')+'</span>':'';
                childObj+=(i>0 && (tipo==='contenido' || tipo==='helper')) ? '<div class=\"gsn-calendario-dia\"></div>':'';
                childObj+="</td>";

            }

            childObj+="</tr>";
           //if(d===0 && (tipo!=='grid')) break;
        }

        $(mainBg).find("tbody").append($(childObj));

        return mainBg;

    }

    // Función que crea el calendario reuniendo los elementos retornados por la función crearContenedores
    var crearCalendario=function(horario,numDias){

        if(horario.length===0) return false;

        //  Creamos tabla principal
        var mainContenedor=$("<table><thead><tr><td><div id=\"gsn-calendario-encabezado\"></div><div class=\"gsn-calendario-separador\"></div></td></tr></thead><tbody><tr><td><div id=\"gsn-calendario-contenido\"><div id=\"gsn-calendario-grid\"></div></div></td></tr></tbody></table>");

        // Creamos header con dias semana
        var mainHeader=$("<table class=\"table table-bordered\"><thead><tr></tr></thead></table>");

        for(var i=0; i<=numDias; i++) {
            if(i===0) $(mainHeader).find("tr").append($("<th class=\"gsn-calendario-def-columna\"><span class=\"glyphicon glyphicon-time\"></span></th>"));
            else $(mainHeader).find("tr").append($("<th class=\"h5\"></th>"));
        }

        // Agregamos estructura del calendario
        $(mainContenedor).find("#gsn-calendario-grid").append(crearContenedores(7,'bg'));
        $(mainContenedor).find("#gsn-calendario-grid").append(crearContenedores(7,'grid',horario));

        // Agregamos contenedor principal
        $(mainContenedor).find("#gsn-calendario-encabezado").append(mainHeader);

        return mainContenedor;
    }

    // Función que nos permite posicionar un bloque de reserva
    $.fn.posObj=function(){
        var posTopObj=0;
        var altoObj=0;
        var bInicio,bTermino;

            bInicio=$(this).data('binicio');
            bTermino=$(this).data('btermino');
            
            /*
             * Optimizamos el codigo evitando sumar los altos y calculandolos directamente
             */

/*      // Calculamos alto y posicion del objeto
        var altosObj = $('.gsn-calendario-filas>table>tbody>tr:lt('+bTermino+')>td:nth-child(2)');

        for(var i=0; i<altosObj.length; i++) {
            var obj=$(altosObj[i]);
            
            if((i+1)>=bInicio) altoObj+=obj.outerHeight(true);
            else posTopObj+=obj.outerHeight(true);
        }
*/
        
        var altoDefObj= $('.gsn-calendario-filas>table>tbody>tr:first').outerHeight(true);       
        
        altoObj=((bTermino-bInicio)+1)*altoDefObj;
        posTopObj=(bInicio-1)*altoDefObj;

        if(posTopObj===0) console.log("error");
      
        // Posicionamos objeto
        $(this).css({'top':(posTopObj+3)+'px', 'height':(altoObj-5)+'px'});
    }

    // Función para comprobar que las reservas se asignen correctamente
    var chkObjPos=function(pSup,pInf,iColAct){

        var objCont=$('.gsn-calendario-datos>table>tbody>tr:eq(0)>td:eq('+iColAct+')>div>div')
        var error=false;

        // Selecciono los bloques disponibles para el dia actual
        var objsSort=objCont.sort(function(a,b) {
            var obj1 = parseInt($(a).data('binicio'));
            var obj2 = parseInt($(b).data('binicio'));
            return obj1 === obj2 ? 0 : obj1 < obj2 ? -1 : 1;
        });

        for(var i=0; i<$(objsSort).length; i++) {
            var o=objsSort[i];

            for(var h=pSup; h<=pInf; h++) {
                if($(o).data('binicio')<=h && $(o).data('btermino')>=h) {
                    error=true;
                    return error;
                }
            }
        }

        return error;
    }

    // Función que va cambiando la informacion de los bloques a medida que se mueven
    $.fn.setObjData=function(pSup,pInf){

        // Agregamos rangos horarios a la cabecera
        if(pSup===undefined || pInf===undefined) {
            pSup=$(this).data('binicio');
            pInf=$(this).data('btermino');
        }
        
        var contHoras=$('.gsn-calendario-filas>table>tbody');
        var contObj=$(this).find(".gsn-calendario-bloque-res-body-cont");
        
        var horaSup=contHoras.find('tr:eq('+(pSup-1)+')>td:nth-child(1)').data('hinicio');
        var horaInf=contHoras.find('tr:eq('+(pInf-1)+')>td:nth-child(1)').data('htermino');
        var horaSupF=moment(horaSup, "H:mm").format('H:mm').toString();
        var horaInfF=moment(horaInf, "H:mm").format('H:mm').toString();
        
        var txtHeader=horaSupF+ ' - ';
        
        /*
         * En caso de que sea una reserva nueva seteamos diferencia a cero
         * Para mostrar la hora completa
         */
        
        if($(this).data('id')===0) {
            txtHeader+=horaInfF;
        }
        else {
        
            var diff=pInf-pSup;

            switch(diff) {
                case 0:
                    var strCurso=$(contObj).find(".gsn-calendario-bloque-res-body-cont-grado").text()+ ' ' + $(contObj).find('.gsn-calendario-bloque-res-body-cont-nivel').text();
                    txtHeader+=strCurso;
                    $(contObj).find('.gsn-calendario-bloque-res-body-cont-footer').hide();
                    break;

                case 1:

                    $(contObj).find('span:first').removeClass('h2').addClass("h4");
                    $(contObj).removeClass('gsn-calendario-bloque-contenido-3h').addClass('gsn-calendario-bloque-contenido-2h')
                    txtHeader+=horaInfF;   
                    $(contObj).find('.gsn-calendario-bloque-res-body-cont-footer').hide();
                    break;

                case 2:
                    $(contObj).find('span:first').removeClass('h2').addClass("h4");
                    $(contObj).removeClass('gsn-calendario-bloque-contenido-3h').addClass('gsn-calendario-bloque-contenido-2h')
                    txtHeader+=horaInfF;   
                    $(contObj).find('.gsn-calendario-bloque-res-body-cont-footer').show();
                    break;

                default:

                    $(contObj).find('span:first').removeClass('h4').addClass("h2");
                    $(contObj).removeClass('gsn-calendario-bloque-contenido-2h').addClass('gsn-calendario-bloque-contenido-3h')
                    txtHeader+=horaInfF;
                    $(contObj).find('.gsn-calendario-bloque-res-body-cont-footer').show();
                    break;
            }
        
        }

        $(this).find(".gsn-calendario-bloque-res-header>span>strong").text(txtHeader);

    }

    // Función encargada de generar los bloques para las reservas
    $.fn.genBloquesReserva=function( 
            bInicio,
            bTermino,
            indice_col,
            id_dia,
            id_user,
            curso,
            asignatura) {
                
                
        /*
         * Obtenemos id del usuario logeado
         */
        var id_user_act=parseInt($('.gsn-dropdown-user').data('user_id'));
        
/*       
        var gsnDefObj=$(''+
            '<div class="gsn-calendario-bloque">\n'+
            '    <div class="gsn-control-redimen-box gsn-control-redimen-sup ui-resizable-handle ui-resizable-n gsn-sup" style=\"display:none !important;\">\n'+
            '        <span class="glyphicon glyphicon-option-horizontal gsn-btn-redimen"></span>\n'+
            '    </div>\n'+
            '    <a class="gsn-calendario-bloque-link" href="#"><div href="#" class="panel panel-default gsn-calendario-bloque-res">'+
            '       <div class="gsn-calendario-bloque-res-header panel-heading text-center"><span class="h5"><strong></strong></span></div>\n'+
            '       <div class="gsn-calendario-bloque-res-body panel-body text-center"><div class="gsn-calendario-bloque-res-body-cont"><span class=\"gsn-calendario-bloque-res-body-cont-grado\"></span><span class=\"gsn-calendario-bloque-res-body-cont-nivel h4\"></span><span class="gsn-calendario-bloque-res-body-cont-footer" style="display:block;"></span></div></div>'+
            '    </div></a>\n'+
            '    <div class="gsn-control-redimen-box gsn-control-redimen-inf ui-resizable-handle ui-resizable-s gsn-inf" style=\"display:none !important;\">\n'+
            '        <span class="glyphicon glyphicon-option-horizontal gsn-btn-redimen"></span>\n'+
            '    </div>\n'+
            '</div>');
*/
        var gsnDefObj=$(''+
            '<div class="gsn-calendario-bloque">\n'+
            '    <a class="gsn-calendario-bloque-link" href="#"><div href="#" class="panel panel-default gsn-calendario-bloque-res">'+
            '       <div class="gsn-calendario-bloque-res-header panel-heading text-center"><span class="h5"><strong></strong></span></div>\n'+
            '       <div class="gsn-calendario-bloque-res-body panel-body text-center"><div class="gsn-calendario-bloque-res-body-cont"><span class=\"gsn-calendario-bloque-res-body-cont-grado\"></span><span class=\"gsn-calendario-bloque-res-body-cont-nivel h4\"></span><span class="gsn-calendario-bloque-res-body-cont-footer" style="display:block;"></span></div></div>'+
            '    </div></a>\n'+
            '</div>');       
        
        var gsnNewObj=gsnDefObj.clone();
        
          // Declaramos atributos de la reserva
        gsnNewObj.data('id', id_dia);
        gsnNewObj.data('id_user', id_user)
        gsnNewObj.data('binicio', bInicio);
        gsnNewObj.data('btermino', bTermino);
        
      //  gsnNewObj.find('.gsn-calendario-bloque-res-body-cont>span').empty();
        
        if(curso!==undefined && curso.grado!==null){
            gsnNewObj.find('.gsn-calendario-bloque-res-body-cont-grado').text(curso.grado);
            gsnNewObj.find('.gsn-calendario-bloque-res-body-cont-nivel').text(curso.nivel);
            gsnNewObj.find('.gsn-calendario-bloque-res-body-cont-footer').text(asignatura);
        } else {
            gsnNewObj.find('.gsn-calendario-bloque-res-body-cont-nivel').text(asignatura);
        }
    
        $(this).find('table>tbody>tr>td:eq('+indice_col+')>div').append(gsnNewObj);

        gsnNewObj.posObj();  
        gsnNewObj.setObjData(bInicio,bTermino);

        /*
         * Se remueve ya que primero se debe comprobar si la sesión se encuentra abierta
         * 
         */
        if (id_user_act>0 && id_user_act===id_user) {
         
            gsnNewObj.find('div.panel').removeClass('panel-default').addClass('panel-danger');
            gsnNewObj.activarEfectos();
        }

        return gsnNewObj;

    }

    // Función que crea contenedor temporal cuando se va a editar una reservas
    $.fn.crearAyudante=function(tmpCol){

        if($('.gsn-calendario-grid>div').hasClass('gsn-calendario-helper') || $(this)===undefined) {
            alert('Se ha producido un error!!');
            $('.gsn-calendario-datos-helper').remove();
            return false;
        }

        var obj=$(this);
        var col;

        if(tmpCol===undefined) col=$(obj).closest("td").index();
        else col=tmpCol;

        //console.log(col);

        // Cambiamos estilos y otras propiedades
        $(obj).find(".panel").addClass("panel-info");
        $(obj).find(".panel").removeClass("panel-danger");

        // Generamos el ayudante
        var tbHelper=crearContenedores(7,"helper");

        // Movemos el bloque al ayudante
        $(tbHelper).find('table>tbody>tr:eq(0)>td:eq('+col+')>div').append($(obj));

        // Agregamos el ayudante al helper
        $("#gsn-calendario-grid").append(tbHelper);
    }

    // Eliminar contenedor temporal luego de editar una reserva
    $.fn.borrarAyudante=function(tmpCol){

        var obj=$(this);
        var col;

        if(tmpCol===undefined) col=$(obj).closest("td").index();
        else col=tmpCol;

        $('.gsn-calendario-datos>table>tbody>tr:eq(0)>td:eq('+col+')>div').append(obj);
        $('.gsn-calendario-helper').remove();

        // Restauramos atributos del objeto
        $(obj).css({'left':'', 'width': '100%'});
        $(obj).find(".panel").addClass("panel-primary");
        $(obj).find(".panel").removeClass("panel-default");

    }

    // Función que habilita efectos arrastrar y redimiensionar
    $.fn.activarEfectos=function(){
   
       
        /*
         * Agrego botones para controlar efectos
         */
        var mvSup=$('<div class="gsn-control-redimen-box gsn-control-redimen-sup ui-resizable-handle ui-resizable-n"><span class="glyphicon glyphicon-option-horizontal gsn-btn-redimen"></span></div>');
        var mvInf=$('<div class="gsn-control-redimen-box gsn-control-redimen-inf ui-resizable-handle ui-resizable-s"><span class="glyphicon glyphicon-option-horizontal gsn-btn-redimen"></span></div>');
       
        this.prepend(mvSup);
        this.append(mvInf);


        var anchoObj=$(this).closest("td").innerWidth();
        var altoFila=$('.gsn-calendario-filas>table>tbody>tr:first').outerHeight(true);

        // Se invoca plugin jquery ui resize para redimensionar objetos
        $(this).filter(':not(.ui-resizable)').resizable({
        handles: {
        'n': '.ui-resizable-n',
        's': '.ui-resizable-s'
        },
        containment: "#gsn-calendario-grid",
            start: function(ev,ui) {

                var obj=$(ui.helper);

                $(obj).crearAyudante();


                     mClick=$(obj).data('uiResizable').axis;


        var obj=$(ui.helper);
        var col=$(obj).closest("td").index();

         minSize=1;
         maxSize=$('.gsn-calendario-filas>table>tbody>tr').length;

         // Creamos el ayudante
        $(obj).crearAyudante();

        // Obtengo rango de bloques registrados
        $(obj).data("tmpbinicio", $(obj).data("binicio"));
        $(obj).data("tmpbtermino", $(obj).data("btermino"));


         // Selecciono los bloques disponibles para el dia actual
         var objsSort = $('.gsn-calendario-datos>table>tbody>tr>td:eq('+col+')>div>div')
                 .sort(function(a,b){
                     var obj1= parseInt($(a).data('binicio'));
                     var obj2= parseInt($(b).data('binicio'));
                     return obj1 === obj2 ? 0 : obj1 < obj2 ? -1 : 1;
         });

         for(var i=0; i<objsSort.length; i++) {

         var selBloque=$(objsSort[i]);

        /*
          *  Se elimina el if ya que se mueve el bloque actual a un contenedor temporal
          *  Este if evita incluir buscar dos veces el bloque actual
          */


                 if(selBloque.data('btermino')<obj.data('binicio')) {

                     minSize=selBloque.data('btermino')+1;

                 } else if(obj.data('btermino')<=selBloque.data('binicio')) {
                     // console.log($(this).data("binicio"));
                     maxSize=selBloque.data('binicio')-1;
                    break;
                 }


         }

                $(obj).data("tmpbinicio", $(obj).data("binicio"));
                $(obj).data("tmpbtermino", $(obj).data("btermino"));

                var altoObj=ui.size.height;


                if(mClick==='n') {
                    tamDiff=$(obj).data("binicio")-minSize;
                    $(obj).resizable("option","maxHeight",(tamDiff*altoFila)+(altoObj));

                } else {
                    tamDiff=maxSize-$(obj).data("btermino");
                    $(obj).resizable("option","maxHeight",(tamDiff*altoFila)+(altoObj));
                }

                /*
                console.log("rev.BloqueMin: " + minSize);
                console.log("rev.BloqueMax: " + maxSize);
                console.log("altoFila "+ altoFila + " altoObj " + ui.size.height+ " maxH " + $(obj).resizable("option","maxHeight"));
                */

            },
            resize: function(ev,ui) {

                var obj, col, posSup, posInf, objPos, objTam;

                obj=$(ui.helper);
                col=obj.closest("td").index();

                posSup=Math.floor(ui.position.top/(altoFila))+1;
                posInf=(mClick==='n') ? obj.data("btermino"):Math.floor((obj.outerHeight(true))/(altoFila))+posSup;

                // Movemos el bloque
                // ui.position.top= (($(obj).data("tmpbinicio")-1)*altoFila)+2;
                // ui.size.height=((($(obj).data("tmpbtermino")-$(obj).data("tmpbinicio"))+1)*altoFila)-4;   #}

                objPos=((obj.data("tmpbinicio")-1)*altoFila)+3;
                objTam=((obj.data("tmpbtermino")*altoFila)-objPos)-2;

                ui.size.height=objTam;
                ui.position.top=objPos;

                // Comprobamos que el nuevo tamaño no se sobreponga en bloques previamente registrados.
                if(posSup>=minSize && posInf<=maxSize) {

                    obj.data("tmpbinicio", posSup);
                    obj.data("tmpbtermino", posInf);
                    obj.setObjData(posSup,posInf);

                }

            },
            stop: function(ev,ui) {
                // Restauramos cambios aplicdos durante la tarea de redimensionado del objeto
                var obj = $(ui.helper);

                // Restauramos atributos del bloque
                obj.resizable("option","maxHeight",null);
                obj.css("z-index","");

                obj.data("binicio", obj.data("tmpbinicio"));
                obj.data("btermino", obj.data("tmpbtermino"));

                // Liberamos variables
                obj.removeData("tmpbinicio");
                obj.removeData("tmpbtermino");

                // Devolvemos el bloque al contenedor original
                obj.borrarAyudante();


            }

        });

    // Se invoca plugin jquery ui draggable (para arrastrar objetos)
    $(this).draggable({
        opacity: 0.9,
        containment: "#gsn-calendario-grid",
        scroll:false,
        //  snap: "#gsn-calendario-bg-grid td",
        // snapMode: "outer",
        //   snapTolerance:20,
            stop: function(ev,ui) {

                var obj=$(ui.helper);

                var col = obj.data("tmpcol");

                if($(obj).draggable("option", "revert")) {

                    var binicio = obj.data("binicio");
                    var btermino = obj.data("btermino");
                    col = obj.closest("td").index();

                    obj.setObjData(binicio,btermino);

                } else {
                    var binicio = obj.data('tmpbinicio');
                    var btermino = obj.data('tmpbtermino');

                    obj.data("binicio", binicio);
                    obj.data("btermino", btermino);
                    //    obj.data('tmpcol', colAct);
                }

                $(obj).borrarAyudante(col);

                // Limpiamos variables temporales
                obj.removeData('tmpbinicio');
                obj.removeData('tmpbtermino');
                obj.removeData('tmpcol');

            },
            start: function(ev,ui) {

                var obj=$(ui.helper);

                // Creamos el ayudanmte
                $(obj).crearAyudante();

                var binicio=obj.data("binicio");
                var btermino=obj.data("btermino");

                obj.data('tmpbinicio',binicio);
                obj.data('tmpbtermino',btermino);

                obj.data("tmpTop", ui.offset.top);
                obj.data("tmpLeft", ui.offset.left);
                obj.data("tmpLFix", 0);
                obj.data("tmpTFix", ui.position.top);
                obj.data('tmpcol', $(obj).closest("td").index());

            },
            drag: function(ev,ui) {

                var obj=$(ui.helper);
                var colAct=obj.data('tmpcol');
                var binicio=obj.data('tmpbinicio');
                var btermino=obj.data('tmpbtermino');

                var ancho=$(obj).closest("tr").find("td:nth-child("+(colAct+1)+")").outerWidth(true);
                var alto=$('.gsn-calendario-filas>table>tbody>tr:eq('+(binicio-1)+')').outerHeight(true);
                var totalFil=$('.gsn-calendario-filas>table>tbody>tr').length;
                var totalCols=$('.gsn-calendario-bg>table>tbody>tr:first>td:gt(0)').length;

/*
                if(ui.position.top>(obj.data("tmpTFix")-alto) && totalFil>btermino) {

                obj.data("tmpTop", (obj.data("tmpTop")+alto));
                obj.data("tmpTFix", (obj.data("tmpTFix")+alto));
                console.log("T");

                binicio+=1;
                }

                if(ui.position.top<(obj.data("tmpTFix")-alto) && (binicio-1)>0) {

                obj.data("tmpTop", (obj.data("tmpTop")-alto));
                obj.data("tmpTFix", (obj.data("tmpTFix")-alto));
                console.log("B");

                binicio-=1;

                }
*/

                if(ui.position.top>(obj.data("tmpTFix")-alto) && totalFil>btermino) {

                    obj.data("tmpTop", (obj.data("tmpTop")+alto));
                    obj.data("tmpTFix", (obj.data("tmpTFix")+alto));
                    //      console.log("T");

                    binicio+=1;
                    btermino+=1;
                }

                if(ui.position.top<(obj.data("tmpTFix")) && (binicio-1)>0) {

                    obj.data("tmpTop", (obj.data("tmpTop")-alto));
                    obj.data("tmpTFix", (obj.data("tmpTFix")-alto));
                    //  console.log("B");

                    binicio-=1;
                    btermino-=1;

                }

                if(ev.clientX>(obj.data("tmpLeft")+ancho) && totalCols>(colAct)) {

                    obj.data("tmpLeft", (obj.data("tmpLeft")+ancho));
                    obj.data("tmpLFix", (obj.data("tmpLFix")+ancho));

                    colAct+=1;

                }


                if(ev.clientX<(obj.data("tmpLeft")) && colAct>1) {

                    obj.data("tmpLeft", (obj.data("tmpLeft")-ancho));
                    obj.data("tmpLFix", (obj.data("tmpLFix")-ancho));

                    colAct-=1;

                }

                $(obj).draggable("option", "revert", true);


                var tmpbtermino=((obj.data('btermino')-obj.data('binicio'))+binicio);
                // Actualizamos los campos del contenedor de reserva
                obj.setObjData(binicio,tmpbtermino);

                ui.position.left=obj.data("tmpLFix");
                ui.position.top=obj.data("tmpTFix");

                obj.data('tmpbinicio',binicio);
                obj.data('tmpbtermino', tmpbtermino);
                obj.data('tmpcol', colAct);


                if(chkObjPos(binicio,btermino,colAct)) {
                    $(obj).draggable("option", "revert", true);

                } else {
                    $(obj).draggable("option", "revert", false);
                }


            }

        });

    }

    // Funcion que habilita el formulario para agregar nuevas
    $.fn.agregarNuevaReserva=function(){

        $(this).selectable({
        filter: "td:not(:nth-child(1))",
            selecting: function(ev,ui) {

                var objCont=$(ui.selecting);

                if(!$('.gsn-calendario-columnas').hasClass('gsn-calendario-helper')) {

                    var numDias=$(".gsn-calendario-bg>table>tbody>tr:eq(0)>td:gt(0)").length;
                    var anchoCont=$(objCont).outerWidth();
                    var anchoCol=Math.floor(anchoCont/numDias);

                    /*
                     * Fix para firefox que no retorna correctamente el ev.clientX hasta mover el mouse
                     * (Math.floor(((ev.clientX-$(ev.target).offset().left)/anchoCol))+1)
                     */
                    var col=(ev.offsetX)? (Math.floor((ev.offsetX/anchoCol))+1):(Math.floor(((ev.clientX-$(ev.target).offset().left)/anchoCol))+1);
                    var binicio=$(objCont).closest("tr").index()+1;

                    // Compruebo que el bloque seleccionado no se encuentre registrado
                    if(chkObjPos(binicio, binicio, col)) {

                        $(objCont).removeClass('ui-selecting');
                        return;
                    }

                    var tbHelper=$('.gsn-calendario-datos');
                    
                    // id del usuario actual
                    var id_user_act=parseInt($('.gsn-dropdown-user').data('user_id'));

                    // Agregamos al contenedor principal
                    //$("#gsn-calendario-grid").append(tbHelper);

                    var gsnNewObj=$(tbHelper).genBloquesReserva(binicio, binicio, col, 0, id_user_act);

                    // Ocultamos para agregar efecto
                    gsnNewObj.css('display','none');

                    // Guardamos la columna actual
                    gsnNewObj.data('tmpCol', col);

                    // Creamos el ayudanmte
                    gsnNewObj.crearAyudante();

                    // Mostramos
                    gsnNewObj.fadeIn(500);

                } else {

                    var gsnNewObj=$('.gsn-calendario-helper .gsn-calendario-bloque');
                    var col=$(gsnNewObj).data('tmpCol');

                    // Removemos seleccion en otras columnas
                    $('.gsn-calendario-filas>table>tbody>tr>td.ui-selecting:not(:nth-child(2)').removeClass('ui-selecting');

                    var posSup=$('.gsn-calendario-filas>table>tbody>tr>td.ui-selecting:nth-child(2):first').parent().index()+1;
                    var posInf=$('.gsn-calendario-filas>table>tbody>tr>td.ui-selecting:nth-child(2):last').parent().index()+1;
                    
                    // console.log(posSup);
                    // console.log(posInf);

                    if(!chkObjPos(posSup,posInf,col)) {

                        gsnNewObj.data('binicio', posSup);
                        gsnNewObj.data('btermino', posInf);

                        // Actualizamos los campos del contenedor de reserva
                        gsnNewObj.setObjData();

                        gsnNewObj.posObj();

                    } else {
                        $(objCont).removeClass('ui-selecting');
                    }
                }

            },
            unselecting: function(ev,ui) {

                var gsnNewObj=$('.gsn-calendario-helper .gsn-calendario-bloque');
                //var col=$(gsnNewObj).data('tmpCol');

                var posSup=$('.gsn-calendario-filas>table>tbody>tr>td.ui-selecting:nth-child(2):first').parent().index()+1;
                var posInf=$('.gsn-calendario-filas>table>tbody>tr>td.ui-selecting:nth-child(2):last').parent().index()+1;

                $(gsnNewObj).data('binicio', posSup);
                $(gsnNewObj).data('btermino', posInf);

                // Actualizamos los campos del contenedor de reserva
                gsnNewObj.setObjData();
                gsnNewObj.posObj();

            },
            stop: function(ev,ui) {

                var obj=$('.gsn-calendario-helper .gsn-calendario-bloque');

                // var iColAct=$(obj).closest("td").index();
                var col=$(obj).data('tmpCol');

                // Liberamos variable
                obj.removeData('tmpCol');

                // Quitamos seleccion
                $('.gsn-calendario-filas>table>tbody>tr>td').removeClass('ui-selected');

                // Devolvemos el bloque al contenedor original
                obj.borrarAyudante(col);

                obj.nuevaReserva();

            }
        });

    }
    
    
    $.fn.nuevaReserva=function(){
        
        var objCont=$('#detalleReserva .modal-body');
        
        objCont.data('id', $(this).data('id'));
        
        
            $('#detalleReserva .modal-body>*').remove();
            $('#detalleReserva .modal-body').loaderAjax(true);
            $('#detalleReserva').modal('show');
                   
            var url=obtenerRuta('nueva_reserva');
            
            $.ajax({
                type: "GET",
                url: url,
                dataType: "html",
                success: function(data) {
                   
                    $('#detalleReserva .modal-body').loaderAjax(false);
                    $('#detalleReserva .modal-body').append($(data));  

                }
            });
            
            
          //  return false;
 
    }

    // fix margen derecho del header con scrollbar
    var ajustarScrollbar=function(){
        var ancho = $('#gsn-calendario-grid').outerWidth(true);
        var anchoCont=$('#gsn-calendario-encabezado').outerWidth(true);
        var margen=anchoCont-ancho;
        $('#gsn-calendario-encabezado').css({"margin-right":margen+'px'});
    }
    
    var setHeaderCal=function(fecha) {
        
        if(typeof(fecha)!=='number') return false;

        var primerDiaSem, tituloCalendario, contenedorDias;
        
        primerDiaSem=moment(fecha).startOf('week');
          
        tituloCalendario=primerDiaSem.format("MMMM YYYY").toString();

        // Seteamos titulo del calendario
        $('#gsn-calendario-titulo>span').text(capitalizarStr(tituloCalendario));

        // Seteamos titulo de los dias
        contenedorDias=$("#gsn-calendario-encabezado th:gt(0)");

        for(var i=0; i<contenedorDias.length; i++) {
            var diaSem=primerDiaSem.day(i+1);
            var textCol=capitalizarStr(diaSem.format('ddd D').replace('.',''));
            $(contenedorDias[i]).text(textCol);
            $(contenedorDias[i]).data('fechaCol', diaSem.format('x'));
        }
        
        // Seteamos fecha por defecto en el dtp
        $('#gsn-calendario-dtp').datepicker("setDate", fecha.toString());
        
        
    }
          


    // Función que carga reservas existentes en bd
    var cargarReservas=function(){
        
        var fecha=parseInt( $('#gsn-calendario-dtp').val());
        
        if(typeof(fecha)!=='number') return false;
        
        var contLoader=$("#gsn-calendario-body");

        // Si ya se encuentra un inicio de sesión en progreso abandonamos la acción.
        if(contLoader.loaderAjax()) contLoader.loaderAjax(false);
        
        // Cargamos loader
        contLoader.loaderAjax(true);   
        
        // Borramos contenedor actual
        $('.gsn-calendario-datos').remove();
        
        // Borramos mensajes de alerta
        $('#gsn-calendario').msgBoxShow(false);

        // Agregamos contenedor nuevo
        $('#gsn-calendario-grid').append(crearContenedores(7,'contenido'));

        // Cargamos variables a pasar
        var dep, fechaSeg, url, con_error, user_id, val_error;
        
        // Id de la dependencia
        dep=parseInt($('#gsn-cb-dependencias>li.active').data("depid"));
        
        // Tranformamos la fecha a segundos
        fechaSeg=moment(fecha).format("X");
        
        /*
         * Cargamos estado del usuario:
         * true: logeado
         * false: no logeado
         */
        user_id=$('a.gsn-dropdown-user').data('user_id');

        // Cargamos headers del calendario
       // setHeaderCal(fecha);

        url=obtenerRuta('cargar_horario');

        $.ajax({
            type: "POST",
            url: url,
            dataType: "json",
            data: {'dependencia': dep, 'fecha': fechaSeg, 'user_id': user_id},
            success: function(data) {
                
                // En caso de que la sesion de usuario expire retornamos mensaje
                if(data.error) val_error=data.message;

            }
        })
        // Cargamos errores de conexion
        .error(function(error_msg){ 
            con_error=error_msg.statusText;  
        })
        .always(function(data){
            
            if(con_error===undefined) {
                
                var reservas=data['reservas'];

                for(var i=0; i<reservas.length; i++) {
                    var reserva=reservas[i];
                    var fReserva=reserva.fecha.date;

                    var indice_col=moment(fReserva).format("d");
                    var curso={grado:reserva.curso_letra, nivel: reserva.curso_nivel };  

                    $('.gsn-calendario-datos').genBloquesReserva(parseInt(reserva.bmin), parseInt(reserva.bmax), parseInt(indice_col), parseInt(reserva.id_dia), parseInt(reserva.id_usuario), curso, reserva.asignatura);
                }
                
                if(val_error!==undefined) {
                    
                    /*
                     * Hacemos visible el formulario de login
                     * Ocultamos menu del perfil de usuario
                     */
                    $('.gsn-dropdown-user').closest('li').css({'display':'none'}); 
                    $('.gsn-dropdown-login').closest('li').css({'display':'block'})
                  
                    
                    var titulo, cuerpo, pie, tipo_alerta;
                        
                    tipo_alerta="warning";
                    titulo='Su sesión de usuario ha expirado.';
                    cuerpo=val_error;
                    pie='<button id="gsn-btn-isclose-sesion" class="btn btn-warning"><strong>Ingresar</strong></button> <button class="btn btn-default" onclick="document.location.href=genRutaActual();">Continuar como usuario anónimo</button>';
                    
                    // Mostramos errores de sesión
                    $('#gsn-calendario').msgBoxShow(
                            tipo_alerta, 
                            false, 
                            cuerpo, 
                            titulo,
                            pie
                            );
    
                } else {
                    
                    // Remover
                    contLoader.loaderAjax(false);
                    
                }
                
                 
            } else {
                
                var titulo, cuerpo, pie, tipo_alerta;
                
                    tipo_alerta="danger";
                    titulo='Se ha producido un error cargando las reservas.';
                    cuerpo=con_error;
                    pie='<button class="btn btn-danger" onclick="cargarReservas();">Reintentar</button>'
        
                
                  // Mostramos errores de conexion
                    $('#gsn-calendario').msgBoxShow(
                            tipo_alerta, 
                            false, 
                            cuerpo, 
                            titulo,
                            pie
                            );
            }



        });

        


        }



    var capitalizarStr=function(str) {
        return str.charAt(0).toUpperCase()+str.slice(1);
    }
    
