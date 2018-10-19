<?php

session_start();
session_destroy();


//change page to login
header('Location: carlogout.php');

?>