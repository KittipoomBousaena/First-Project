<?php
// เชื่อมต่อฐานข้อมูล
require('dbconnect.php');

// รับค่าที่ส่งมาจากฟอร์มลงในตัวแปร
$borrow_username=$_POST["borrow_username"];
$borrow_userid=$_POST["borrow_userid"];
$borrow_equip_name=$_POST["borrow_equip_name"];
$borrow_equip_number=$_POST["borrow_equip_number"];
$borrow_quantity=$_POST["borrow_quantity"];
$borrow_reason=$_POST["borrow_reason"];
$borrow_date=$_POST["borrow_date"];
$return_date=$_POST["return_date"];

// บันทึกข้อมูล
$sql="INSERT INTO borrow_record (borrow_username,borrow_userid,borrow_equip_name,borrow_equip_number,borrow_quantity,borrow_reason,borrow_date,return_date) VALUES ('$borrow_username','$borrow_userid','$borrow_equip_name','$borrow_equip_number','$borrow_quantity','$borrow_reason','$borrow_date','$return_date')";

$result=mysqli_query($connect, $sql); // สั่งรันคำสั่ง SQL 

if($result){
    echo"ยืนยันการยืมเรียบร้อย <br>";
    //echo "<br><a href='showEquipment.php'>กลับไปหน้าแรก</a>"; // showEquipment.php
}else{
    echo myqli_errors($connect);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <a href="showEquipment.php" class="btn btn-primary">กลับไปที่หน้าหลัก</a>
</body>
</html>
