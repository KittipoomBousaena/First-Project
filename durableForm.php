<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บันทึกข้อมูลวัสดุคงทน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="container my-3">
        <h2 class="text-center">แบบฟอร์มบันทึกข้อมูลวัสดุคงทน</h2>
            <form action="insertDurable.php" method="post">
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
                    <label>ราคา:</label> <br>
                    <input type="text" name="durable_price" id="" class="form-control">
                </div>
                <br>            
                <div class="form-group">
                    <label>จำนวน:</label> <br>
                    <input type="text" name="durable_quantity" id="" class="form-control">
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
                <div class="form-group">
                    <label>ตำแหน่งที่อยู่:</label> <br>
                    <input type="text" name="durable_location" id="" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label>หมายเหตุ:</label> <br>
                    <input type="text" name="durable_noted" id="" class="form-control">
                </div>
                <br>
                <input type="submit" value="บันทึกข้อมูล" class="btn btn-success">
                <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
                <a href="durableData.php" class="btn btn-warning">ย้อนกลับ</a>
            </form>
    </div>
</body>
</html>