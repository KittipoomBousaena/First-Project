<?php
require('dbconnect.php');

$sql = "SELECT * FROM comsci_durable ORDER BY durable_id ASC";
$result = mysqli_query($connect, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลวัสดุคงทน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">ข้อมูลวัสดุคงทนในฐานข้อมูล</a>
            <li class="nav-item">
                <a class="nav-link" href="durableData.php">เพิ่ม แก้ไข-ลบ ข้อมูลวัสดุคงทน</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="durableBorrowForm.php">ยืมวัสดุคงทน</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="alertDurable.php">แจ้งสถานะวัสดุคงทน</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="durableHistory.php">ประวัติการยืม - คืนวัสดุคงทน</a>
            </li>
            <form class="d-flex" action="searchDurableData.php" class="form-group" method="post">
                    <input type="text" placeholder="ป้อนชื่อวัสดุคงทน" name="durable_name" class="form-control">
                    <button class="btn btn-secondary" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="container">
        <br>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ลำดับ</th>
                <th>ชื่อวัสดุคงทน</th>
                <th>หมายเลขวัสดุคงทน</th>
                <th>ราคา</th>
                <th>จำนวน</th>
                <th>สถานะวัสดุคงทน</th>
                <th>ตำแหน่งที่อยู่</th>
                <th>หมายเหตุ</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = mysqli_fetch_assoc($result)){?>        
            <tr>
                <td><?php echo $row['durable_id']; ?></td>
                <td><?php echo $row['durable_name']; ?></td>
                <td><?php echo $row['durable_number']; ?></td>
                <td><?php echo $row['durable_price']; ?></td>
                <td><?php echo $row['durable_quantity']; ?></td>
                <td><?php echo $row['durable_status']; ?></td>
                <td><?php echo $row['durable_location']; ?></td>
                <td><?php echo $row['durable_noted']; ?></td> 
            </tr>
          <?php } ?>  
        </tbody>
    </table>
        <a href="showEquipment.php" class="btn btn-warning">กลับไปที่หน้าหลัก</a> 
    </div>
</body>
</html>
