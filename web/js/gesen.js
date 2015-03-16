/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// Mensajes de error para transferencias ajax


    $.ajaxSetup({
        error: function(jqXHR, exception) {
            
            var msgError;
            
            if (jqXHR.status === 0) {
                msgError='No ha sido posible establecer una conexión valida. Verifique su conexión.';
            } else if (jqXHR.status === 404) {
                msgError='La página solicitada no se encuentra disponible [404].';
            } else if (jqXHR.status === 500) {
                msgError='Error interno del servidor [500]';
            } else if (exception === 'parsererror') {
                msgError='La petición Json falló.';
            } else if (exception === 'timeout') {
                msgError='Se ha superado el tiempo de espera';
            } else if (exception === 'abort') {
                msgError='Se ha cancelado la petición';
            } else {
                msgError='Problema desconocido: ' + jqXHR.responseText;
            }
            
            jqXHR.statusText=msgError;
          
        }
    });
    
    var sprintf=function(sep,str) {
        
        // Cambiar caracteres de cadena
        for(var i=2; i<arguments.length; i++) {
            str=str.replace(sep, arguments[i]);
            
        }
        
        return str;      

    };
    
    // Función que inserta o borra en el elemento que referenciemos el loader ajax
    $.fn.loaderAjax=function(action) {
        
        /*
         * action=true: inserta el objeto
         * action=flse: borra el objeto
         */
        
        /*
         * Si action es false borra el loader del contenedor
         */
        if (action===false) {
            
            $(this).find('.gsn-loader').remove();
            return;
        } 
        
        /*
         * Si action es true inserta el loader en el contenendor
         */
        if (action) {
        
        var bg=$('<div id=\"gsn-loader\"><div id=\"gsn-loader-reserva" class=\"gsn-loader\"></div><div id=\"gsn-loader-reserva-ani\" class=\"gsn-loader\"></div></div>');
            $(this).append(bg).hide().fadeIn(1000);
            return;
        
        }
        
        /*
         * Cuando action no se establece comprueba si existe el loader en el contenedor
         * si existe retorna true
         * si no existe retorna false
         */
        
        if($(this).find('.gsn-loader').length>0) {
            return true;
        } else {
            return false;
        }
        
    };

    $.fn.msgBoxShow=function(tipoMsg, enCerrar, body, header, footer){
        
        
        $(this).find('#gsn-msgbox-show').remove();
        
        /*
         * En caso de que llamemos a la función sin argumentos 
         * Se utilizara para borrar un alert ya existente
         * Como minimo se requieren tres argumentos para generar el bloque, el if siguiente comprueba que se ingrese la cantidad minima
         * Cuando se llama la función pasandole false, se remueve el mensaje actual
         */
        
        if(arguments.length<=2) return;
        
        var msgBox = '<div id="gsn-msgbox-show" class="alert alert-'+tipoMsg+' alert-dimissible fade in" role="alert">';
        
        if(enCerrar!==undefined && enCerrar) {
            msgBox+='<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times</span></button>';
        }               
        
        if(header!==undefined && header.length>0) msgBox+='<h4>'+header+'</h4>';
        if(body!==undefined && body.length>0) msgBox+='<p>'+body+'</p>';
        if(footer!==undefined && footer.length>0) msgBox+='<p>'+footer+'</p>';
        
        msgBox+='</div>';
        
        $(this).prepend(msgBox);
    }    

    var genRutaActual=function() {
        
        var id_dep, fecha_ms, fecha_seg, horarioPath;

        // Obtenemos la dependencia actual
        id_dep=$('#gsn-cb-dependencias>.active').data('depid');

        // Obtenemos fecha
        fecha_ms=parseInt($('#gsn-calendario-dtp').val());         

        // Tranformamos la fecha a segundos
        fecha_seg=moment(fecha_ms).format("X");

        horarioPath=sprintf('0000',obtenerRuta('horario'),id_dep,fecha_seg);
        
        return horarioPath;
    }
    



 
     /*
      * Script para el login de los usuarios
      * Algunas peticiones se envian via ajax
      */   
    $(document).ready(function(){
        
/*
 * Evento que desplega el formulario de login cuando la sesion de usuario cauduca
 * 
 */        
    $('body').on('click', '#gsn-btn-isclose-sesion', function(ev)
    {
        ev.stopImmediatePropagation();

        $('#gsn-nav-menu').removeAttr('style').addClass('in');
        $('.gsn-dropdown-login').parent().addClass('open');
        $('#gsn-nav-menu-form').get(0).scrollIntoView(true);
    
    });

    /*
     * Reseteamos el formulrio de login al ingresar nuevamente
     */
    $("#gsn-nav-menu-sesion>li").on('show.bs.dropdown', function(){
        if($("#gsn-login-form").length>0) $("#gsn-login-form")[0].reset();
        $('#gsn-login-form-contenedor').msgBoxShow();
    });

    // Prevenir accion por defecto para boton cerrar en alertas de bootstrap
    $('#gsn-nav-menu-form').on('click', '.close', function(ev) {  ev.stopPropagation(); $(this).parent().remove(); });

    // Función para logear al usuario mediante ajax
    $("#gsn-btn-login").click(function(ev){
                 
        ev.preventDefault();
        
        var contLoader=$(this).closest(".panel-body");

        // Si ya se encuentra un inicio de sesión en progreso abandonamos la acción.
        if(contLoader.loaderAjax()) return;
        
        // Cargamos loader
        contLoader.loaderAjax(true);
        
        var url, user, pw, remember, con_error, val_error;
       
       // Cargamos variables 
        url=$('#gsn-login-form').attr("action");
        user=$('#gsn-user-login').val();
        pw=$('#gsn-pw-login').val();
        remember=$('#gsn-rememberme-login').prop("checked");
        con_error, val_error;

        /*
         * Se valida la sesion del usuario en caso de error se retorna mensaje.
         */
        $.ajax({
            type: "POST",
            url: url,
            dataType: "json",
            data: {'_username': user, '_password': pw, '_remember_me': remember},
            success: function(data) {
                if(!data.success) val_error=data.message;
                
            }

        })
        // Cargamos errores de conexion
        .error(function(error_msg){ 
            con_error=error_msg.statusText;  
        })
        /*
        * Se evalua lo que se debe hacer a continuación
        * Si la variable con_error no esta declarada todo ha ido bien,
        * de lo contrario se muestra mensaje de error.
         */
        .always(function(){
 
            if(con_error===undefined && val_error===undefined) {
                
                /*
                 *  En caso de estar en la web de login cargamos el home 
                 *  al iniciar la sesion correctamente
                 */
                if($('.gsn-intro-form-login').length>0) {
                
                    var rootPath=obtenerRuta('home_horario');
                    
                    // Redireccionamos al home
                    document.location.href=rootPath;
                    return;             
                /*
                 * Cuando nos encontramos en una web diferente a la de login refrescamos la pagina
                 */
                } else {
                                                          
//                    // Obtenemos la dependencia actual
//                    var id_dep=$('#gsn-cb-dependencias>.active').data('depid');
//                    
//                    // Obtenemos fecha
//                    var fecha_ms=parseInt($('#gsn-calendario-dtp').val());         
//                    
//                    // Tranformamos la fecha a segundos
//                    var fecha_seg=moment(fecha_ms).format("X");
//                    
//                    var horarioPath=sprintf('0000',obtenerRuta('horario'),id_dep,fecha_seg);
                     
                    // Refrescamos la pagina actual
                    document.location.href=genRutaActual();

                    return;
                }

            } 
            else {

                var tipo_msg, titulo, msg;
                
                titulo="Error al iniciar la sesión";
                
                if(con_error===undefined) {
                    // Errores de validación de la sesion
                    msg=val_error;
                    tipo_msg="warning";
                } 
                else {
                    // errores de conexion
                    msg=con_error;
                    tipo_msg="danger";                 
                }
                
                   // Mostramos errores
                $('#gsn-login-form-contenedor').msgBoxShow(
                        tipo_msg, 
                        true, 
                        msg, 
                        titulo
                    );
            
                // Borramos loader
                contLoader.loaderAjax(false);

            }
        });

    });    


    /*
     * Funcion para cerrar la sesion
     */
    $('body').on('click', '.gsn-cerrar-sesion', function(ev){
        
        ev.preventDefault();
        
        var contLoader=$("#gsn-calendario-body");

        // Si ya se encuentra un inicio de sesión en progreso abandonamos la acción.
        if(contLoader.loaderAjax()) contLoader.loaderAjax(false);
        
        // Cargamos loader
        contLoader.loaderAjax(true);        
        
        var url=$(this).find('a').attr('href');
        
        var con_error, val_error;

        /*
         * Se valida la sesion del usuario en caso de error se retorna mensaje.
         */
        $.ajax({
            type: "GET",
            url: url,
            dataType: "json",
            success: function(data) {
                
                if(!data.success) val_error=data.message;
                
            }
        })
        // Cargamos errores de conexion
        .error(function(error_msg){
            
            con_error=error_msg.statusText;  
    
        })
        .always(function(){
 
            if(con_error===undefined && val_error===undefined) {
                
//                // Obtenemos la dependencia actual
//                var id_dep=$('#gsn-cb-dependencias>.active').data('depid');
//
//                // Obtenemos fecha
//                var fecha_ms=parseInt($('#gsn-calendario-dtp').val());         
//
//                // Tranformamos la fecha a segundos
//                var fecha_seg=moment(fecha_ms).format("X");
//
//                var horarioPath=sprintf('0000',obtenerRuta('horario'),id_dep,fecha_seg);

                // Refrescamos la pagina actual
                document.location.href=genRutaActual();

                return;
                    
            }
            else 
            {
                var tipo_msg, titulo, msg;
                
                titulo="Error al cerrar la sesión";
                tipo_msg="danger";
                
                if(con_error===undefined) {
                    // Errores de validación de la sesion
                    msg=val_error;
                } 
                else {
                    // errores de conexion
                    msg=con_error;           
                }
                
                // Mostramos errores
                $('#gsn-calendario').msgBoxShow(
                        tipo_msg, 
                        false, 
                        msg, 
                        titulo,
                        '<button class="btn btn-danger" onclick="document.location.href=obtenerRuta(\'logout\');"><strong>Reintentar</strong></button>'
                );
            
                // Borramos loader
                contLoader.loaderAjax(false);
                
            }
    
        });

    });


    }); 