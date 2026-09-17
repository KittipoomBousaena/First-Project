<?php
// เชื่อมต่อฐานข้อมูล
require('dbconnect.php');

// รับค่าที่ส่งมาจากฟอร์มลงในตัวแปร
$equip_name=$_POST["equip_name"];
$equip_number=$_POST["equip_number"];
$purchase_date=$_POST["purchase_date"];
$equip_price=$_POST["equip_price"];
$equip_quantity=$_POST["equip_quantity"];
$equip_status=$_POST["equip_status"];
$equip_location=$_POST["equip_location"];
$equip_noted=$_POST["equip_noted"];

// บันทึกข้อมูล
$sql="INSERT INTO comsci_equipment (equip_name,equip_number,purchase_date,equip_price,equip_quantity,equip_status,equip_location,equip_noted) VALUES ('$equip_name','$equip_number','$purchase_date','$equip_price','$equip_quantity','$equip_status','$equip_location','$equip_noted')";

$result=mysqli_query($connect, $sql); // สั่งรันคำสั่ง SQL 

if($result){
    echo"บันทึกข้อมูลเรียบร้อย <br>";
    echo "<br><a href='showEquipment.php'>กลับไปหน้าแรก</a>"; // showEquipment.php
}else{
    echo myqli_errors($connect);
}

?>
