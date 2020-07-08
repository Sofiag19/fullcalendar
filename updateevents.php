<?php
if (!$_POST['start'] || !$_POST['id']) {
  echo json_encode(-2);
  return;
}

include 'connection.php';

$sql = "
UPDATE impegni
SET data = '". $_POST['start']."'
WHERE id = ". $_POST['id']."
";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

$conn->close();
