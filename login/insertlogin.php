<?php
  include_once('../functions.php');
  $insertdata = new db_con();

  if(isset($_POST['insertus'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    $name = $_POST['name'];

    $sql = $insertdata->insertlogin($username,$password,$level,$name);

    if($sql){
        echo "<script>alert('คุณได้ทำการสมัครสมาชิกเรียบร้อยแล้ว !!');</script>";
        echo "<script>window.location.href='indexlog.php'</script>";
    } else{
        echo "<script>alert('เกิดข้อผิดพลาดกรุณาตรวจสอบ !!');</script>";
        echo "<script>window.location.href='insertlogin.php'</script>";
    }
  }

  if(isset($_POST['sentaddmin'])){
    $namesentaddmin = $_POST['namesentaddmin'];

    $sql = $insertdata->insertsentaddmin($namesentaddmin);

    if($sql){
        echo "<script>alert('Record Inserted Successfully !!');</script>";
        echo "<script>window.location.href='sentaddmin.php'</script>";
    } else{
        echo "<script>alert('Something went wrong !!');</script>";
        echo "<script>window.location.href='sentaddmin.php'</script>";
    }
  }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MYKITS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Multi - v4.3.0
  * Template URL: https://bootstrapmade.com/multi-responsive-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body background="../assets/img/back1.png">
    <!-- <body> -->


    <?php include('include/header.php');?>
<br><br>
     <!-- ======= About Section ======= -->
     <div class="container" data-aos="fade-up">
            <br><br>
            <div class="section-title">
                <h2>ลงทะเบียนล็อคอิน</h2>
                <p>LOGIN</p>
            </div>

            <div class="alert alert-secondary">
                <div class="row content">
                    <div class="container">
                        <P ALIGN=CENTER class="animate__animated animate__fadeInDown"><img
                                src="../assets/img/register1.png"></P>
                        <form action="" method="post">

                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" required>
                            </div>

                            <div class="mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>

                            <div class="mb-3">
                                <label for="name">ชื่อและนามสกุลผู้ใช้</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="level">สถานะ</label>
                                <select name="level" class="form-control" id="level" required>
                                    <option value="member">ผู้ใช้</option>
                                </select>
                            </div>
                            <P ALIGN=RIGHT><button type="submit" name="insertus" class="btn btn-dark">INSERT</button>
                            </P>
                        </form>
                    </div>
                    <!-- <div class="col-lg-6 pt-4 pt-lg-0">
                    <br> <br> <br> <br> <br><br> <br> <br> <br> <br><br> <br> <br> <br> 
                <P ALIGN=CENTER><img src="assets/img/anime.png"></P>
                    <a href="#" class="btn-learn-more">Learn More</a>
                </div> -->
                </div>
            </div>
        </div>
        <br><br><br>

    <?php include('include/footer.php');?>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/vendor/purecounter/purecounter.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>