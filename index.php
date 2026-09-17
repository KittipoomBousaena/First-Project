<?php
require('dbconnect.php');

$sql = "SELECT * FROM comsci_equipment"; 
$result = mysqli_query($connect, $sql);

session_start(); 
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

?>