<?php
require('dbconnect.php');
$sql = "SELECT * FROM durable_history";
$result = mysqli_query($connect, $sql);

while($row = mysqli_fetch_assoc($result)){
    echo "ลำดับ: " . $row['durable_history_id'] . "<br>";
    echo "ชื่อผู้ยืม: " . $row['borrow_durable_username'] . "<br>";
    echo "รหัสประจำตัวผู้ยืม: " . $row['borrow_durable_userid'] . "<br>";
    echo "ชื่อวัสดุคงทน: " . $row['borrow_durable_name'] . "<br>";
    echo "หมายเลขวัสดุคงทน: " . $row['borrow_durable_equip_number'] . "<br>";
    echo "จำนวนที่ยืม: " . $row['borrow_durable_quantity'] . "<br>";
    echo "เหตุผลที่ยืม: " . $row['borrow_durable_reason'] . "<br>";
    echo "วันที่ยืม: " . $row['borrow_durable_date'] . "<br>";
    echo "วันที่คืน: " . $row['return_durable_date'] . "<br>";
    echo "<hr>";
} 
?>