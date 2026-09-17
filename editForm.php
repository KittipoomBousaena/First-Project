<?php 
require("dbconnect.php");
$id=$_GET["id"];

$sql="SELECT * FROM comsci_equipment WHERE equip_id = $id";
$result=mysqli_query($connect,$sql);

$row=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลครุภัณฑ์</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container my-3">
        <h2 class="text-center">แบบฟอร์มแก้ไขข้อมูลครุภัณฑ์</h2>
            <form action="updateData.php" method="post">
                <input type="hidden" value="<?php echo $row['equip_id']; ?>" name="equip_id">
                <div class="form-group">
                    <label>ชื่อครุภัณฑ์:</label> <br>
                    <input type="text" name="equip_name" id="" class="form-control" value="<?php echo $row['equip_name']; ?>">
                </div>
                <br>
                <div class="form-group">
                    <label>หมายเลขครุภัณฑ์:</label> <br>
                    <input type="text" name="equip_number" id="" class="form-control" value="<?php echo $row['equip_number']; ?>">
                </div>
                <br>
                <div class="form-group">
                    <label>วันที่ซื้อ:</label> <br>
                    <input type="date" name="purchase_date" id="" class="form-control" value="<?php echo $row['purchase_date']; ?>">
                </div>
                <br>
                <div class="form-group">
                    <label>ราคา:</label> <br>
                    <input type="text" name="equip_price" id="" class="form-control" value="<?php echo $row['equip_price']; ?>">
                </div>
                <br>            
                <div class="form-group">
                    <label>จำนวน:</label> <br>
                    <input type="text" name="equip_quantity" id="" class="form-control" value="<?php echo $row['equip_quantity']; ?>">
                </div>
                <br>
                <div class="form-group">
                    <label>สถานะครุภัณฑ์:</label> <br>
                        <select name="equip_status" id="" class="form-control" value="<?php echo $row['equip_status']; ?>">
                            <option value="ใช้งานได้">ใช้งานได้</option>
                            <option value="ใช้งานได้บางส่วน">ใช้งานได้บางส่วน</option>
                            <option value="เสื่อมสภาพ">เสื่อมสภาพ</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label>ตำแหน่งที่อยู่:</label> <br>
                    <input type="text" name="equip_location" id="" class="form-control" value="<?php echo $row['equip_location']; ?>">
                </div>
                <br>
                <div class="form-group">
                    <label>หมายเหตุ:</label> <br>
                    <input type="text" name="equip_noted" id="" class="form-control" value="<?php echo $row['equip_noted']; ?>">
                </div>
                <br>
                <input type="submit" value="แก้ไขข้อมูล" class="btn btn-warning">
                <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
            </form>
        <br>
        <a href="showEquipment.php" class="btn btn-warning">กลับไปที่หน้าหลัก</a> 
    </div>
</body>
</html>