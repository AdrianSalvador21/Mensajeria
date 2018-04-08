<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h3>Mensajes enviados</h3>

    <div class="mensajes_enviados" id="mensajes_enviados">
        <?php

        require_once 'db/query_fns.php';
        $consulta = "SELECT mensaje FROM messages WHERE id_user = 1 ORDER BY id DESC LIMIT 10";
        $arreglo = get_items($consulta);
        ?>
        <ul>
          <?php for ($i=count($arreglo)-1; $i>=0; $i--): ?>
              <li><?php echo $arreglo[$i]['mensaje']; ?></li>
          <?php endfor; ?>

        </ul>

    </div>


    <div class="enviar_mensaje" id="enviar_mensaje">

      <form class="" method="post" id="formulario">
        <label for="destinatario">Para:</label>
        <input type="text" name="destinatario" value="">
        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="3" cols="20"></textarea>
        <button name="button" id="btnEnviar">Enviar</button>
      </form>


    </div>
    <?php

    /*

          if(isset($_POST['mensaje'])){

            $mensaje = $_POST['mensaje'];

            require_once 'db/query_fns.php';
            $consulta = "INSERT INTO messages(id, mensaje, id_user) VALUES(NULL, '$mensaje', 1)";
            $_POST['mensaje'] = '';
            set_items($consulta);

          }

          */
     ?>


  </body>
  <script type="text/javascript" src="js/carga.js"></script>
  <script type="text/javascript" src="js/envia.js"></script>
  <script type="text/javascript" src="js/jquery-3.3.1.min.js">

  </script>
</html>
