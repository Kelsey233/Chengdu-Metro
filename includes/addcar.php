<?php

require_once('logincheck.php');
require_once('db.php');

$owner = $_POST[owner];
$car = $_POST[car];
$color = $_POST[color];

//2.Do a query (Select all cars)
$query = "INSERT INTO car (owner, car, color )";
$query .= "VALUES ('$owner', '$car', '$color')";

echo $query;

mysqli_query($connection, $query);

?>

<form action="includes/addcar.php" method="post">
    <input type="text" name="owner">
    <input type="text" name="car">
    <input type="text" name="color">
    <input type="submit" name="submit">
</form>

<?php

//5. close db connection
mysqli_close($connection);

?>