<?php
require('dbconnect.php');
$sql = "SELECT * FROM comsci_equipment";
$result = mysqli_query($connect, $sql);

$count = mysqli_num_rows($result); // จำนวนแถวที่ไปดึงจากฐานข้อมูล

for($i = 0; $i < $count; $i++){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    echo "ลำดับ: " . $row['equip_id'] . "<br>";
    echo "ชื่อครุภัณฑ์: " . $row['equip_name'] . "<br>";
    echo "หมายเลขครุภัณฑ์: " . $row['equip_number'] . "<br>";
    echo "วันที่ซื้อ: " . $row['purchase_date'] . "<br>";
    echo "ราคา: " . $row['equip_price'] . "<br>";
    echo "จำนวน: " . $row['equip_quantity'] . "<br>";
    echo "สถานะครุภัณฑ์: " . $row['equip_status'] . "<br>";
    echo "ตำแหน่งที่อยู่: " . $row['equip_location'] . "<br>";
    echo "หมายเหตุ: " . $row['equip_noted'] . "<br>";
    echo "<hr>";
}
?>
