<?php
include('./includes/con.php');

extract($_POST);

$table = 'time_' . $type;

$insert = $con->exec("INSERT INTO $table (id) VALUES ('$id')");
echo $insert;
