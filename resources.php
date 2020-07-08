<?php

  header('Content-Type: application/json');

include 'connection.php';

  $sql = "
        SELECT id, CONCAT(nome, ' ', cognome) AS title
        FROM impegni
  ";
  $res = $conn -> query($sql);
  $conn -> close();

  if ($res -> num_rows < 1) {

    echo json_encode(-2);
    return;
  }

  $configurazioni = [];
  while($configurazione = $res -> fetch_assoc()) {

    $configurazioni[] = $configurazione;
  }

  echo json_encode($configurazioni);