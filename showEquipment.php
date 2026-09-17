<?php
require('dbconnect.php');

$sql = "SELECT * FROM comsci_equipment ORDER BY equip_id ASC";
$result = mysqli_query($connect, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลครุภัณฑ์</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">ข้อมูลครุภัณฑ์ในฐานข้อมูล</a>
            <li class="nav-item">
                <a class="nav-link" href="equipmentData.php">เพิ่ม แก้ไข-ลบ ข้อมูลครุภัณฑ์</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="equipBorrowForm.php">ยืม - คืนครุภัณฑ์</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="alertEquipment.php">แจ้งสถานะครุภัณฑ์</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="equipmentHistory.php">ประวัติการยืม - คืนครุภัณฑ์</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="showDurable.php">ดูข้อมูลวัสดุคงทน</a>
            </li>
                <form class="d-flex" action="searchData.php" class="form-group" method="post">
                    <input type="text" placeholder="ป้อนชื่อครุภัณฑ์" name="equip_name" class="form-control">
                    <button class="btn btn-secondary" type="submit">Search</button>
                </form>
                    <a href="login.php" class="btn btn-warning">ออกจากระบบ</a>
        </div>
    </nav>

    <div class="container">
        <br>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ลำดับ</th>
                <th>ชื่อครุภัณฑ์</th>
                <th>หมายเลขครุภัณฑ์</th>
                <th>วันที่ซื้อ</th>
                <th>ราคา</th>
                <th>จำนวน</th>
                <th>สถานะครุภัณฑ์</th>
                <th>ตำแหน่งที่อยู่</th>
                <th>หมายเหตุ</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = mysqli_fetch_assoc($result)){?>        
            <tr>
                <td><?php echo $row['equip_id']; ?></td>
                <td><?php echo $row['equip_name']; ?></td>
                <td><?php echo $row['equip_number']; ?></td>
                <td><?php echo $row['purchase_date']; ?></td>
                <td><?php echo $row['equip_price']; ?></td>
                <td><?php echo $row['equip_quantity']; ?></td>
                <td><?php echo $row['equip_status']; ?></td>
                <td><?php echo $row['equip_location']; ?></td>
                <td><?php echo $row['equip_noted']; ?></td> 
            </tr>
          <?php } ?>  
        </tbody>
    </table>
    </div>
</body>
</html>
