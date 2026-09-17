<?php
require("dbconnect.php");

$equip_id = $_POST["equip_id"];

$equip_name = $_POST["equip_name"];
$equip_number = $_POST["equip_number"];
$purchase_date = $_POST["purchase_date"];
$equip_price = $_POST["equip_price"];
$equip_quantity = $_POST["equip_quantity"];
$equip_status = $_POST["equip_status"];
$equip_location = $_POST["equip_location"];
$equip_noted = $_POST["equip_noted"];

$sql = "UPDATE comsci_equipment SET equip_name='$equip_name', equip_number='$equip_number', purchase_date='$purchase_date', equip_price='$equip_price', equip_quantity='$equip_quantity', equip_status='$equip_status', equip_location='$equip_location', equip_noted='$equip_noted' WHERE equip_id=$equip_id";

//echo $sql; // แสดงคำสั่ง SQL ที่สร้างขึ้น
$result = mysqli_query($connect, $sql);

if($result){
    header("Location: showEquipment.php"); // showEquipment.php
    exit;
}else{
    echo "เกิดข้อผิดพลาดเกิดขึ้น" . mysqli_error($connect);
}
?>