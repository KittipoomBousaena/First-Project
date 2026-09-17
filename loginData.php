<?php
// เชื่อมต่อฐานข้อมูล
require('dbconnect.php');

// รับค่าที่ส่งมาจากฟอร์มลงในตัวแปร
$UserName=$_POST["UserName"];
$UserID=$_POST["UserID"];
$UserPassword=$_POST["UserPassword"];

// บันทึกข้อมูล
$sql="INSERT INTO user_record (UserName,UserID,UserPassword) VALUES ('$UserName','$UserID','$UserPassword')";

$result=mysqli_query($connect, $sql); // สั่งรันคำสั่ง SQL 

if($result){
    echo"บันทึกข้อมูลเรียบร้อย <br>";
    echo "<br><a href='showEquipment.php'>เข้าสู่หน้าแรก</a>"; // showEquipment.php
}else{
    echo myqli_errors($connect);
}

?>