<?php
// เชื่อมต่อฐานข้อมูล
require('dbconnect.php');

// รับค่าที่ส่งมาจากฟอร์มลงในตัวแปร
$durable_name=$_POST["durable_name"];
$durable_number=$_POST["durable_number"];
$durable_price=$_POST["durable_price"];
$durable_quantity=$_POST["durable_quantity"];
$durable_status=$_POST["durable_status"];
$durable_location=$_POST["durable_location"];
$durable_noted=$_POST["durable_noted"];

// บันทึกข้อมูล
$sql="INSERT INTO comsci_durable (durable_name,durable_number,durable_price,durable_quantity,durable_status,durable_location,durable_noted) VALUES ('$durable_name','$durable_number','$durable_price','$durable_quantity','$durable_status','$durable_location','$durable_noted')";

$result=mysqli_query($connect, $sql); // สั่งรันคำสั่ง SQL 

if($result){
    echo"บันทึกข้อมูลเรียบร้อย <br>";
   // echo "<br><a href='showEquipment.php'>กลับไปหน้าแรก</a>"; // showEquipment.php
}else{
    echo myqli_errors($connect);
}

?>
