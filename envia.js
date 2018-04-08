const boton = document.getElementById('btnEnviar');


boton.addEventListener('click', function(){


     var datos = $('#formulario').serialize();
     $.ajax({
       type: "POST",
       url: "envia_mesajes.php",
       data: datos,
       success:function(r){
         if (r==1) {
            alert('Correcto');
         }else{
            console.log('no se pudo agregar');
         }
       }
     });

     return false;


});
