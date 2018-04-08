const mensajesDiv = document.getElementById('mensajes_enviados');

function cargaMensajes(){
  $.ajax({
              url: 'carga_mensajes.php',

              dataType: 'json',


              success: function(response){

                console.log(response);

                var html = '';
                html += '<ul>';

                for(var i=response.length-1; i>=0; i--){
                var mensaje = response[i].mensaje;
                html += `<li>${mensaje}</li>`;
                }
                html += '</ul>';
                console.log(html);
                mensajesDiv.innerHTML = html;


              },


              error: function(){
                console.log(response);
              }
            });
}


const intervalo = setInterval(cargaMensajes, 500);
