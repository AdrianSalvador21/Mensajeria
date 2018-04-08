<?php
  require_once 'db/query_fns.php';
  $consulta = "SELECT mensaje FROM messages WHERE id_user = 1 ORDER BY id DESC LIMIT 10";
  $arreglo = get_items($consulta);

  echo json_encode($arreglo);
 ?>
