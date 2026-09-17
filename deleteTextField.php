<?php
require("dbconnect.php");

$id=$_POST["equip_number"];

$sql="DELETE FROM comsci_equipment WHERE equip_number=$id";

$result = mysqli_query($connect, $sql);

if($result){
    echo "ลบข้อมูลเรียบร้อย <br>";
    echo "<br><a href='showEquipment.php'>กลับไปหน้าแรก</a>"; // showEquipment.php
}else{
    echo mysqli_errors($connect);
}

?>