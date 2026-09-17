<?php
require("dbconnect.php");

$durable_id = $_POST["durable_id"];

$durable_name = $_POST["durable_name"];
$durable_number = $_POST["durable_number"];
$durable_price = $_POST["durable_price"];
$durable_quantity = $_POST["durable_quantity"];
$durable_status = $_POST["durable_status"];
$durable_location = $_POST["durable_location"];
$durable_noted = $_POST["durable_noted"];

$sql = "UPDATE comsci_durable SET durable_name='$durable_name', durable_number='$durable_number',  durable_price='$durable_price', durable_quantity='$durable_quantity', durable_status='$durable_status', durable_location='$durable_location', durable_noted='$durable_noted' WHERE durable_id=$durable_id";

//echo $sql; // แสดงคำสั่ง SQL ที่สร้างขึ้น
$result = mysqli_query($connect, $sql);

if($result){
    header("Location: showDurable.php");
    exit;
}else{
    echo "เกิดข้อผิดพลาดเกิดขึ้น" . mysqli_error($connect);
}
?>