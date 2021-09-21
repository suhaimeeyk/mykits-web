<?php
  include_once('functions.php');
  $insertdata = new db_con();

  if(isset($_POST['insertloguse'])){
    $idlogin = $_POST['idlogin'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $level = $_POST['level'];

    $sql = $insertdata->insertloguseaddmin($idlogin,$username,$password,$name,$level);

    if($sql){
        echo "<script>alert('คุณได้ทำการลงทะเบียนเรียบร้อย');</script>";
        echo "<script>window.location.href='datalog.php'</script>";
    } else{
        echo "<script>alert('เกิดข้อผิดพลาด!!');</script>";
        echo "<script>window.location.href='insertdatalog.php'</script>";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ห้องสมุด</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body background="bg1.jpg">
        <div class="container">
          <a href="datalog.php" class="btn btn-primary mt-3">GO BACK</a>
          <hr>
            <h1 class="nt-5">ลงทะเบียน</h1>
            <hr>
            <form action="" method="post">

            <div class="mb-3">
                <label for="idlogin" class="form-label">ลำดับ</label>
                <input type="text" class="form-control" name="idlogin">
            </div>
                        <div class="mb-3">
                <label for="username" class="form-label">USERNAME</label>
                <input type="text" class="form-control" name="username" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">PASSWORD</label>
                <input type="password" class="form-control" name="password"required>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">ชื่อและนามสกุลผู้ใช้</label>
                <input type="text" class="form-control" name="name"required>
            </div>

            <div class="mb-3">
            <label for="level">สถานะ</label>
            <select name="level" class="form-control" id="level"required>
            <option value="">เลือกสถานะ</option>
            <option value="member">ผู้ใช้ระบบ</option>
            <option value="admin">ผู้ดูแลระบบ</option>
            </select>
            </div>

            <button type="submit" name="insertloguse" class="btn btn-success">INSERT</button>
            </form>
        </div>
      


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>