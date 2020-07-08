<?php
if (!$_POST['impegno'] || !$_POST['giorno']|| !$_POST['nome']|| !$_POST['cognome']) {
  echo json_encode(-2);
  return;
}

include 'connection.php';

$sql = "
INSERT INTO impegni (nome, cognome, impegno, data)
VALUES ('". $_POST['nome']."', '". $_POST['cognome']."', '". $_POST['impegno']."', '". $_POST['giorno']."');
";

if (mysqli_query($conn, $sql)) {
  header("location: index.php");
  exit;
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

$conn->close();
