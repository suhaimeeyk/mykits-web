<?php session_start();?>
<?php 
 
if (!$_SESSION["idlogin"]){
 
	  Header("Location: login/indexlog.php");
 
}else{
    
    ?>

<?php
  include_once('functions.php');
  $insertdata = new db_con();
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

    <!-- table template -->
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/css/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!--===============================================================================================-->
    <!-- no template -->
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

  <style>
/* #ไม่ให้รันขึ้นตัวแปร */
[v-cloak] {
    display: none;
}
</style>
</head>

<body background="assets/img/back1.png">
    <!-- <body> -->


    <?php include('include/header.php');?>



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <br><br><br>
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>ผู้ใช้ที่ติดต่อ</h2>
                <p>Contact Us</p>
            </div>
        </div>
        <h3 class="text-center" data-aos="fade-up">รายการที่มีการติดต่อ</h3>
        <div style='overflow-x:auto'>
            <div class="container" data-aos="fade-up">
                <div class="wrap-table100">
                    <div class="table100 ver1 " id="app"  v-cloak>
                        <table data-vertable="ver1">
                            <thead>
                                <tr class="row100 head">
                                    <th class="column100 column2" data-column="column2">
                                        <h6 class="text-center">NUMBER</h6>
                                    </th>
                                    <th class="column100 column3" data-column="column3">
                                        <h6 class="text-center">Request</h6>
                                    </th>
                                    <th class="column100 column4" data-column="column4">
                                        <h6 class="text-center">Delete</h6>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="row100" v-for="sentaddmin in allData">
                                    <td class="column100 column2" data-column="column2">
                                        <h6 class="text-center">
                                        {{ sentaddmin.idsentaddmin }}</h6>
                                    </td>
                                    <td class="column100 column3" data-column="column3">
                                        <h6 class="text-center">
                                        {{ sentaddmin.namesentaddmin }}</h6>
                                    </td>
                                    <td class="column100 column4" data-column="column4">
                                        <h6 class="text-center">
                                        <button type="button" name="delete" class="btn btn-danger btn-xs delete"
                                                data-bs-toggle="modal" data-bs-target="#myModal"
                                                @click="deleteData(sentaddmin.idsentaddmin)">
                                                Delete
                                            </button>
                                        </h6>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </section><!-- End Contact Section -->


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

      
       <!-- Axios and vue.js-->
       <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="app.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>

<?php }?>