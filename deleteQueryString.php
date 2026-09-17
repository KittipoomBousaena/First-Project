<?php 
require('dbconnect.php');

$equip_id=$_GET["idemp"];

$sql="DELETE FROM comsci_equipment WHERE equip_id =$equip_id";

$result=mysqli_query($connect,$sql);

if($result){
    header("location:showEquipment.php"); // showEquipment.php
    exit(0);
}else{
    echo "เกิดข้อผิดพลาดเกิดขึ้น";
}

?>