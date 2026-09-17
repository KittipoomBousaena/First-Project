<?php
require('dbconnect.php');
$sql = "SELECT * FROM equipment_history";
$result = mysqli_query($connect, $sql);

while($row = mysqli_fetch_assoc($result)){
    echo "ลำดับ: " . $row['equip_id'] . "<br>";
    echo "ชื่อผู้ยืม: " . $row['borrow_username'] . "<br>";
    echo "รหัสประจำตัวผู้ยืม: " . $row['borrow_userid'] . "<br>";
    echo "ชื่อครุภัณฑ์: " . $row['borrow_equip_name'] . "<br>";
    echo "หมายเลขครุภัณฑ์: " . $row['borrow_equip_number'] . "<br>";
    echo "จำนวนที่ยืม: " . $row['borrow_quantity'] . "<br>";
    echo "เหตุผลที่ยืม: " . $row['borrow_reason'] . "<br>";
    echo "วันที่ยืม: " . $row['borrow_date'] . "<br>";
    echo "วันที่คืน: " . $row['return_date'] . "<br>";
    echo "<hr>";
} 
?>