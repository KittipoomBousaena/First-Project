<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>เข้าสู่ระบบ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .login-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .login-container h2 {
            text-align: center;
        }
        .input-group {
            margin-bottom: 15px;
        }
        .input-group label {
            display: block;
            margin-bottom: 5px;
        }
        .input-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>เข้าสู่ระบบ</h1>
        <form action="loginData.php" method="post">
            <div class="form-group">
                    <label>ชื่อ:</label> <br>
                    <input type="text" name="UserName" id="" class="form-control" required>
            </div>
            <br>
            <div class="form-group">
                    <label>รหัสประจำตัว:</label> <br>
                    <input type="text" name="UserID" id="" class="form-control" required>
            </div>
            <br>
            <div class="form-group">
                    <label>รหัสผ่าน:</label> <br>
                    <input type="password" name="UserPassword" id="" class="form-control" required>
            </div>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
            </div>
        </form>
    </div>
</body>
</html>