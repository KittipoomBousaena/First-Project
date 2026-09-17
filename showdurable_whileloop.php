<?php
require('dbconnect.php');
$sql = "SELECT * FROM comsci_durable";
$result = mysqli_query($connect, $sql);

while($row = mysqli_fetch_assoc($result)){
    echo "ลำดับ: " . $row['durable_id'] . "<br>";
    echo "ชื่อวัสดุคงทน: " . $row['durable_name'] . "<br>";
    echo "หมายเลขวัสดุคงทน: " . $row['durable_number'] . "<br>";
    echo "ราคา: " . $row['durable_price'] . "<br>";
    echo "จำนวน: " . $row['durable_quantity'] . "<br>";
    echo "สถานะวัสดุคงทน: " . $row['durable_status'] . "<br>";
    echo "ตำแหน่งที่อยู่: " . $row['durable_location'] . "<br>";
    echo "หมายเหตุ: " . $row['durable_noted'] . "<br>";
    echo "<hr>";
}
?>