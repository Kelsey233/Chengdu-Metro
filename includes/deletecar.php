<?php

require_once('logincheck.php');
require_once('db.php');

$id = $_GET[id];

//. Do a query (Seclect all numbers)
$quuery = "DELETE FROM car ";
$query .= "WHERE id = $id";

echo $query;

mysqli_query($connection, $query);

//5. Close db connection
mysqli_close($connection);

?>