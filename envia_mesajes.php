<?php

        $mensaje = $_POST['mensaje'];

        require_once 'db/query_fns.php';
        $consulta = "INSERT INTO messages(id, mensaje, id_user) VALUES(NULL, '$mensaje', 1)";
        set_items($consulta);

        echo "Completado";
 ?>
