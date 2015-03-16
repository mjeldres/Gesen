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

    }
    
    var gsnMsgbox=function(objCont, tipoMsg, enCerrar, body, header, footer){
        
        $('#gsn-msgbox-show').remove();
        
        var msgBox = '<div id="gsn-msgbox-show" class="alert alert-'+tipoMsg+' alert-dimissible fade in" role="alert">';
        
        if(enCerrar!==undefined && enCerrar) {
            msgBox+='<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times</span></button>';
        }               
        
        if(header!==undefined && header.length>0) msgBox+='<h4>'+header+'</h4>';
        if(body!==undefined && body.length>0) msgBox+='<p>'+body+'</p>';
        if(footer!==undefined && footer.length>0) msgBox+='<p>'+footer+'</p>';
        
        msgBox+='</div>';
        
        $(objCont).prepend(msgBox);
    }    
          
 
 /*
  * Script para el login de los usuarios
  * Algunas peticiones se envian via ajax
  */   
$(document).ready(function(){

// Reseteo campos del formulario
$(".gsn-dropdown-login2").on('show.bs.dropdown', function(){
    if($("#gsn-form-login").length>0) $("#gsn-form-login")[0].reset();
});

// Prevenir accion por defecto para boton cerrar en alertas de bootstrap
$('.gsn-dropdown-login22').on('click', '.close', function(ev) {  ev.stopPropagation(); $(this).parent().remove(); });

    // Función para logear al usuario mediante ajax
    $("#gsn-btn-login").click(function(ev){

        ev.preventDefault();

        var url=$('#gsn-login-form').attr("action");
        var user=$('#gsn-user-login').val();
        var pw=$('#gsn-pw-login').val();
        var remember=$('#remember_me').prop("checked");
        var con_error, val_error;
        
        console.log(url);

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
                if($('.gsn-login-form-contenedor').length>0) {
                
                    var rootPath=obtenerRuta('home_horario');
                    
                    // Redireccionamos al home
                    document.location.href=rootPath;
                    return;             
                /*
                 * Cuando nos encontramos en una web diferente a la de login refrescamos la pagina
                 */
                } else {
                    
                    console.log('validaste tu user con ajax');
                    
                   // Obtenemos la dependencia actual
                    var id_dep=$('#gsn-cb-dependencias>.active').data('depid');
                    
                    // Obtenemos fecha
                    var fecha_ms=parseInt($('#gsn-calendario-dtp').val());         
                    
                    // Tranformamos la fecha a segundos
                    var fecha_seg=moment(fecha_ms).format("X");
                    
                    var horarioPath=sprintf('0000',obtenerRuta('horario'),id_dep,fecha_seg);
                    
                    console.log(horarioPath);
                    
                    
                    document.location.href=horarioPath;
                    
                    
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
                    gsnMsgbox(
                        '#gsn-login-form-contenedor', 
                        tipo_msg, 
                        true, 
                        msg, 
                        titulo
                    );

            }
        });

    });    

});   


