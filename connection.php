<?php

$server = "localhost";
$username = "root";
$password = "root";
$dbname = "db_impegni";

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_errno) {
  echo json_encode(-1);
  return;
}