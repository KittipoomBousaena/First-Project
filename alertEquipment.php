<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">ข้อมูลวัสดุคงทนในฐานข้อมูล</a>
        </div>
    </nav>
    <br>
    <div class="container">
        <form action="#" method="post">
            <div class="form-group">
                    <label>ชื่อวัสดุคงทน:</label> <br>
                    <input type="text" name="durable_name" id="" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label>หมายเลขวัสดุคงทน:</label> <br>
                    <input type="text" name="durable_number" id="" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label>สถานะวัสดุคงทน:</label> <br>
                        <select name="durable_status" id="" class="form-control">
                            <option value="ใช้งานได้">ใช้งานได้</option>
                            <option value="ใช้งานได้บางส่วน">ใช้งานได้บางส่วน</option>
                            <option value="เสื่อมสภาพ">เสื่อมสภาพ</option>
                    </select>
                </div>
                <br>
                <input type="submit" value="บันทึกข้อมูล" class="btn btn-success">
                <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
        </form>
                <br>
                    <a href="showEquipment.php" class="btn btn-warning">กลับไปที่หน้าหลัก</a> 
    </div>
        
        
</body>
</html>
