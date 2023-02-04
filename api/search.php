<?php
include('./includes/con.php');
extract($_GET);
$search = $con->query("SELECT * FROM $campus WHERE id = $id");
$count = $search->rowCount();

if ($count) {
  $person = $search->fetch(PDO::FETCH_OBJ);
  echo json_encode($person);
} else {
  echo false;
}
