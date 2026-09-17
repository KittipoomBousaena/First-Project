<?php
require('dbconnect.php');
$name = $_POST["durable_name"];

$sql = "SELECT * FROM comsci_durable WHERE durable_name LIKE '%$name%'";
$result = mysqli_query($connect, $sql);
$count = mysqli_num_rows($result); // จำนวนแถวที่ไปดึงจากฐานข้อมูล
$order=1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลครุวัสดุคงทน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">ข้อมูลวัสดุคงทนในฐานข้อมูล</a>
                <form class="d-flex" action="searchDurableData.php" class="form-group" method="post">
                    <input type="text" placeholder="ป้อนชื่อครุภัณฑ์" name="durable_name" class="form-control">
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
                <th>แก้ไขข้อมูล</th>
                <th>ลบข้อมูล</th>
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
                <td>
                    <a href="editDurable.php?id=<?php echo $row["durable_id"]?>" class="btn btn-warning">แก้ไขข้อมูล</a>
                </td>
                <td>
                    <a href="deleteDurable.php?idemp=<?php echo $row["durable_id"]; ?>" 
                    class="btn btn-danger"
                    onclick="return confirm('คุณต้องการลบข้อมูลควัสดุคงทนนี้หรือไม่?')"
                    >ลบข้อมูล</a>
                </td>  
            </tr>
          <?php } ?>  
        </tbody>
    </table>
    <div class="alert alert-danger">
        <?php
            if($count==0){
                echo "ไม่พบข้อมูลที่ค้นหา!!!";
            }else{
                echo "พบข้อมูลวัสดุคงทนจำนวน ".$count." รายการ";
            }
        ?>
    </div>
    <a href="showDurable.php" class="btn btn-warning">กลับไปที่หน้าหลัก</a> 
    </div>
</body>
</html>