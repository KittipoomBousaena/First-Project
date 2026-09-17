<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบฟอร์มยืมครุภัณฑ์</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="container my-3">
        <h2 class="text-center">แบบฟอร์มขอยืมวัสดุคงทน</h2>
            <form action="insertDurableBorrowData.php" method="post">
                <div class="form-group">
                    <label>ชื่อผู้ยืม:</label> <br>
                    <input type="text" name="borrow_durable_username" id="" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label>รหัสประจำตัวผู้ยืม:</label> <br>
                    <input type="text" name="borrow_durable_userid" id="" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label>ชื่อวัสดุคงทน:</label> <br>
                    <input type="text" name="borrow_durable_name" id="" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label>หมายเลขวัสดุคงทน:</label> <br>
                    <input type="text" name="borrow_durable_number" id="" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label>จำนวนที่ยืม:</label> <br>
                    <input type="text" name="borrow_durable_quantity" id="" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label>เหตุผลที่ยืม:</label> <br>
                    <input type="text" name="borrow_durable_reason" id="" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label>วันที่ยืม:</label> <br>
                    <input type="date" name="borrow_durable_date" id="" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label>วันที่คืน:</label> <br>
                    <input type="date" name="return_durable_date" id="" class="form-control">
                </div>
                <br>            
                
                <input type="submit" value="ยืนยันการยืม" class="btn btn-success">
                <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
            </form>
                <br>
        <a href="showEquipment.php" class="btn btn-warning">กลับไปที่หน้าหลัก</a> 
    </div>
</body>
</html>
