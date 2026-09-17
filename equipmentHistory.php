<?php
require('dbconnect.php');

$sql = "SELECT * FROM equipment_history ORDER BY equipment_history_id ASC";
$result = mysqli_query($connect, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประวัติการยืม - คืนครุภัณฑ์</title>
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
                <th>ชื่อผู้ยืม</th>
                <th>รหัสประจำตัวผู้ยืม</th>
                <th>ชื่อครุภัณฑ์</th>
                <th>หมายเลขครุภัณฑ์</th>
                <th>จำนวนที่ยืม</th>
                <th>เหตุผลที่ยืม</th>
                <th>วันที่ยืม</th>
                <th>วันที่คืน</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = mysqli_fetch_assoc($result)){?>        
            <tr>
                <td><?php echo $row['equipment_history_id']; ?></td>
                <td><?php echo $row['borrow_username']; ?></td>
                <td><?php echo $row['borrow_userid']; ?></td>
                <td><?php echo $row['borrow_equip_name']; ?></td>
                <td><?php echo $row['borrow_equip_number']; ?></td>
                <td><?php echo $row['borrow_quantity']; ?></td>
                <td><?php echo $row['borrow_reason']; ?></td>
                <td><?php echo $row['borrow_date']; ?></td>
                <td><?php echo $row['return_date']; ?></td>
            </tr>
          <?php } ?>  
        </tbody>
    </table>
    </div>
</body>
</html>
