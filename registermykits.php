

<?php

  include_once('functions.php');
  $insertdata = new db_con();

  if(isset($_POST['insertus'])){
    $nameuser = $_POST['nameuser'];
    $addressuser = $_POST['addressuser'];
    $phoneuser = $_POST['phoneuser'];
    $idprefix = $_POST['idprefix'];
    $idsex = $_POST['idsex'];
    $idposition = $_POST['idposition'];

    $sql = $insertdata->insertus($nameuser,$addressuser,$phoneuser,$idprefix,$idsex,$idposition);

    if($sql){
        echo "<script>alert('Record Inserted Successfully !!');</script>";
        echo "<script>window.location.href='indexregister.php'</script>";
    } else{
        echo "<script>alert('Something went wrong !!');</script>";
        echo "<script>window.location.href='registermykits.php'</script>";
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
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Multi - v4.3.0
  * Template URL: https://bootstrapmade.com/multi-responsive-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body background="assets/img/back1.png">
    <!-- <body> -->


    <?php include('include/header.php');?>


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <br><br>
            <div class="section-title">
                <h2>สมัครสมาชิก</h2>
                <p>REGISTER</p>
            </div>

            <div class="alert alert-secondary">
                <div class="row content">
                    <div class="container">
                        <P ALIGN=CENTER class="animate__animated animate__fadeInDown"><img
                                src="assets/img/register1.png"></P>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="idprefix">คำนำหน้า</label>
                                <select name="idprefix" class="form-control" id="idprefix" required>
                                    <option value="">คำนำหน้า</option>
                                    <?php
                                    include_once('connectdb.php');
                                    $usql = "SELECT idprefix,nameprefix FROM dbprefix
                                    where nameprefix IS NOT NULL ORDER BY nameprefix;";
                                    $res =$conn->query($usql);
                                    if($res->num_rows>0){
                                        while($row = $res->fetch_assoc()){
                                            echo "<option value=" . '"' . $row['idprefix'] . '"' . ">" 
                                            . $row['nameprefix'] . "</option>";
                                        }
                                    }
                                ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="nameuser" class="form-label">ชื่อและนามสกุลผู้ใช้</label>
                                <input type="text" class="form-control" name="nameuser" required>
                            </div>

                            <div class="mb-3">
                                <label for="addressuser">ที่อยู่ผู้ใช้</label>
                                <input type="text" class="form-control" name="addressuser" required>
                            </div>

                            <div class="mb-3">
                                <label for="phoneuser">เบอร์โทรผู้ใช้</label>
                                <input type="text" class="form-control" name="phoneuser" required>
                            </div>

                            <div class="mb-3">
                                <label for="idsex">เพศ</label>
                                <select name="idsex" class="form-control" id="idsex" required>
                                    <option value="">เพศ</option>
                                    <?php
                            include_once('connectdb.php');
                            $usql = "SELECT idsex,namesex FROM dbsex
                            where namesex IS NOT NULL ORDER BY namesex;";
                            $res =$conn->query($usql);
                            if($res->num_rows>0){
                                while($row = $res->fetch_assoc()){
                                    echo "<option value=" . '"' . $row['idsex'] . '"' . ">" 
                                    . $row['namesex'] . "</option>";
                                }
                            }
                        ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="idposition">สถานะ</label>
                                <select name="idposition" class="form-control" id="idposition" required>
                                    <option value="">สถานะ</option>
                                    <option value="1">ผู้ใช้</option>
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
    </section><!-- End About Section -->


    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>MYKITS</h3>
                            <p class="pb-3"><em> MY ที่แปลว่าของฉันหรือการแสดงเป็นเจ้าของสิ่งๆนั้น และคำว่า KITS
                                    ที่แปลว่าชุดหรืออุปกรณ์หรือเครื่องมือต่างๆ เมื่อรวมกันแล้วก็เลยเกิดเป็นความหมายว่า
                                    "ชุดของฉัน"
                                    ที่เวลาสวมใส่ชุดๆนั้นแล้วจะรู้สึกเป็นเอกลักษณ์ของตัวเองที่ไม่เหมือนใคร.</em></p>
                            <p>
                                เรามาสร้างเอกลักษณ์ของตัวเองกันเถอะ<br>
                                THAILAND<br><br>
                                <strong>Phone:</strong> +99 93 616 4981<br>
                                <strong>Email:</strong> mykits@gmail.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="https://www.facebook.com/mykits" class="facebook"><i
                                        class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>MENU</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="indexmykits.php">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Product</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Limited</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Sale Items</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Art Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-9 footer-newsletter">
                        <h4>Request</h4>
                        <p>คุณสามารถส่งคำขอหรือแนะนำแอดมินได้เลย</p>
                        <form action="" method="post">
                            <input type="text" name="namesentaddmin"><input type="submit" name="sentaddmin"
                                value="SENT">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/multi-responsive-bootstrap-template/ -->
                Designed by <a href="https://www.facebook.com/suraimee.yk/">Suhaimee Yakoh</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>