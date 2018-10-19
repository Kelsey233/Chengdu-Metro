<?php

// 1. Open database connection
$dbhost = "localhost";
$dbuser = "zhang-enwei";
$dbpass = "6cAFWonVn8nI";
$dbname = "2201613130227";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// 1. Test if connection is ok
if (mysqli_connect_errno()) {
    die("Database connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")" 
    );
}

// 2. Do a query(Select all cars)
$query  = "SELECT id, owner, name, color "; 
$query .= "FROM car ";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

?>

<html>
    <head>
        <title>car system</title>
        <link rel="stylesheet" type="text/css" href="carstyle.css" />
    </head>
    <body>
        <header>
            <a href="car.php">HOME</a>
            <a href="addcar.php">ADDCAR</a>
            <a href="deletecar.php">DELETECAR</a>
            <a href="updatecar.php">UPDATECAR</a>
            <a href="member.php">MEMBER</a>
            <a href="carlogout">LOGOUT</a>
        </header>
        
<!-- Show first row of the table -->
<div>
        <table>
           <tr>
               <td>owner</td>
               <td>name</td>
               <td>color</td>
               <td>update</td>
               <td>delete</td>
            </tr>
            
            <?php
    
    // 3. use/show data, as rows of the table (PHP & HTML mixed) -->
    while ($row = mysqli_fetch_array($result)) {
    echo"<tr>";
    echo"<td>" . $row["owner"] . "</td>";
    echo"<td>" . $row["name"] . "</td>";
    echo"<td>" . $row["color"] . "</td>";
    echo"<td><a href='updatecar.php?id=" . $row["id"] . "'>update</a></td>";
    echo"<td><a href='deletecar.php?id=" . $row["id"] . "'>delete</a></td>";
    echo "<hr>";
}
            
?>

<!-- Close the HTML table-->
    </table>
        </div>
<?php
        
  // 4. free results
mysqli_free_result($result);

 // 5. close db connection
mysqli_close($connection);

?>
