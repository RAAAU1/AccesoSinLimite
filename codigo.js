$('#formlogin').submit(function(e){
    e.preventDefault();
    var usuario = $.trim($("#usuario").val());
    var contrasena = $.trim($("#contrasena").val());
    
    // console.log(usuario.length);

    if(usuario.length == "" || contrasena == ""){
        Swal.fire({
            type:'warning', title: 'Debe escribir su usuario y contraseña.'            
        });
        return false;
    }else{
        $.ajax({
            url:"bd/login.php",
            type:"POST",
            datatype: "json",
            data: {usuario:usuario,contrasena:contrasena},
            success:function(data){
                if(data == "null"){

                }else{}
            }
        })
    }

});