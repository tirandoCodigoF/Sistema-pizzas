
$(document).on("submit", ".formulario_registro", function(event){
    event.preventDefault();
    var $form = $(this);
  // $telf="/^[953]+[0-9]{7}$/";
    var data_form = {
        nombre: $("#nombre",$form).val(),
        apellido:$("#apellido", $form).val(),
        edad: $("#edad",$form).val(),
        sexo:$("#sexo", $form).val(),
        telefono:$("#telefono",$form).val(),
        direccion: $("#direccion",$form).val(),
        ciudad: $("#ciudad",$form).val(),
        estado: $("#estado",$form).val(),
        priv: $("#priv",$form).val(),
        email: $("input[type='email']",$form).val(),
        password: $("input[type='password']", $form).val() 
    }
    if(data_form.email.length < 6 ){
        $("#msg_error").text("Necesitamos un email valido.").show();
        return false;        
    }else if(data_form.password.length < 8){
        $("#msg_error").text("Tu password debe ser minimo de 8 caracteres.").show();
        return false;   
    }
    else if (data_form.nombre.length < 4 || data_form.nombre.length > 30) {
        $("#msg_error").text("Ingresa tu nombre correcto minimo 4 maximo 30").show();
        return false;
    }
    
    /*else if(data_form.edad.length == null || data_form.edad.length < 1 || data_form.edad.length > 2)
    {
        $("#msg_error").text("Ingresa tu edad").show();
        return false;
    }*/


    $("#msg_error").hide();
    var url_php = 'http://localhost:8080/Sistema-pizzas/PIZZAS/Controlador/RegistroControlador.php';

    $.ajax({
        type:'POST',
        url: url_php,
        data: data_form,
        dataType: 'json',
        async: true,
    })
    .done(function ajaxDone(res){
       console.log(res); 
       if(res.error !== undefined){
            $("#msg_error").text(res.error).show();
            return false;
       } 

       if(res.redirect !== undefined){
        window.location = res.redirect;
    }
    })
    .fail(function ajaxError(e){
        console.log(e);
    })
    .always(function ajaxSiempre(){
        console.log('Final de la llamada ajax.');
    })
    return false;
});



$(document).on("submit", ".formulario_pizzas", function(event){
    event.preventDefault();
    var $form = $(this);
  
  // $telf="/^[953]+[0-9]{7}$/";
    var data_form = {
        imagen:$("#imagen", $form).val(),
        nombre: $("#nombrep",$form).val(),
       
    ingredientes: $("#ingredientes",$form).val(),
        descripcion:$("#descripcion", $form).val(),
        tamaño:$("#tamaño",$form).val(),
        precio: $("#precio",$form).val(),
         }
    
    $("#msg_error").hide();
    var url_php = 'http://localhost:8080/Sistema-pizzas/PIZZAS/Controlador/PizzaControlador.php';

    $.ajax({
        type:'POST',
        url: url_php,
        data: data_form,
        data: FormData,
        dataType: 'json',
        async: true,
    })
    .done(function ajaxDone(res){
       console.log(res); 
       if(res.error !== undefined){
            $("#msg_error").text(res.error).show();
            return false;
       } 

       if(res.redirect !== undefined){
        window.location = res.redirect;
    }
    })
    .fail(function ajaxError(e){
        console.log(e);
    })
    .always(function ajaxSiempre(){
        console.log('Final de la llamada ajax.');
    })
    return false;
});





$(document).on("submit", ".formulario_acceso", function(event){
    event.preventDefault();
    var $form = $(this);
   
    var data_form = {
        email: $("input[type='email']",$form).val(),
        password: $("input[type='password']", $form).val() 
    }
    if(data_form.email.length < 6 ){
        $("#msg_error").text("Necesitamos un email valido.").show();
        return false;        
    }else if(data_form.password.length < 8){
        $("#msg_error").text("Tu password debe ser minimo de 8 caracteres.").show();
        return false;   
    }
    $("#msg_error").hide();
    var url_php = 'http://localhost:8080/Sistema-pizzas/PIZZAS/Controlador/AccesoControlador.php';

    $.ajax({
        type:'POST',
        url: url_php,
        data: data_form,
        dataType: 'json',
        async: true,
    })
    .done(function ajaxDone(res){
       console.log(res); 
       if(res.error !== undefined){
            $("#msg_error").html(res.error).show();
            return false;
       } 
       if(res.redirect !== undefined){
           window.location = res.redirect;
       }
    })
    .fail(function ajaxError(e){
        console.log(e);
    })
    .always(function ajaxSiempre(){
        console.log('Final de la llamada ajax.');
    })
    return false;
});

