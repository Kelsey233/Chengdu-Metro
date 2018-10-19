<?php

require_once('logincheck.php');
require_once('db.php');

if(isset($_POST[submit])) {
    $id = $_POST[id];
    $owner = $_POST[owner];
    $name = $_POST[name];
    $color = $_POST[color];
    
    //2. Do a query (Select all numbers)
    $query ="UPDATE cars SET owner = '$owner' , name = '$name', color = '$color'";
    $query .="WHERE id = $id";
    
    //echo query;
    
    mysqli_query($connection, $query);
    
    header('location: car.php');
}

$id = $_GET[id];

$query = "SELECT * FROM car";
$query .="WHERE id = $id";

$result = mysqli_query($connection, $query);


?>


<form action="updatecar.php" method="post">
     <input type="hidden" name="id" value="<?php echo $id; ?>">
     <input type="text" name="owner" value="<?php echo $row[owner]; ?>">
     <input type="text" name="name" value="<?php echo $row[name]; ?>">
     <input type="text" name="color" value="<?php echo $row[color]; ?>">
     <input type="submit" name="submit">
</form>

<?php

// 5. close db connection
mysqli_close($connection);

?>