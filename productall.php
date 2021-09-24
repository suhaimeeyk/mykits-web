<?php session_start();
include('conddb.php');
$name = $_SESSION['name'];
?>

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
</head>

<!-- <body background="assets/img/back1.png"> -->

<body>


<?php include('include/header.php');?>


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <br><br>
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>รายการสินค้า</h2>
                <p>PRODUCT DESIGN</p>
                <P ALIGN=CENTER class="animate__animated animate__fadeInDown"><img src="assets/img/register1.png"></P>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">Limited</li>
                        <li data-filter=".filter-card">Sale Items</li>
                        <li data-filter=".filter-web">Art Design</li>

                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/product/Vector Smart Object-3.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="text-center">
                            <a href="design.php">
                                <font color="ed502e">GET START CLICK</font>
                            </a>
                        </div>
                        <h4 href="about.php">Limited 001</h4>
                        <p>ลายเสื้อรุ่น Limited ไม่เหมือนใครของมหาวิทยาลัยฟาฏอนี</p>
                        <a href="assets/img/product/Vector Smart Object-3.png" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="assets/img/product/Vector Smart Object-8.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="text-center">
                            <a href="design.php">
                                <font color="ed502e">GET START CLICK</font>
                            </a>
                        </div>
                        <h4>Art Design 001</h4>
                        <p>Art Design 001 E-SPORT</p>
                        <a href="assets/img/product/Vector Smart Object-8.png" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/product/Vector Smart Object-9.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="text-center">
                            <a href="design.php">
                                <font color="ed502e">GET START CLICK</font>
                            </a>
                        </div>
                        <h4>Limited 002</h4>
                        <p>ลายเสื้อทีมฟุตบอลรุ่น Limited ของทีม Argentina</p>
                        <a href="assets/img/product/Vector Smart Object-9.png" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="assets/img/product/Vector Smart Object-7.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="text-center">
                            <a href="design.php">
                                <font color="ed502e">GET START CLICK</font>
                            </a>
                        </div>
                        <h4>Sale Items 001</h4>
                        <p>เสื้อ Liverpool BY MYKITS</p>
                        <a href="assets/img/product/Vector Smart Object-7.png" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="assets/img/product/Vector Smart Object-2.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="text-center">
                            <a href="design.php">
                                <font color="ed502e">GET START CLICK</font>
                            </a>
                        </div>
                        <h4>Art Design 002</h4>
                        <p>เสื้อ Liverpool BY MYKITS</p>
                        <a href="assets/img/product/Vector Smart Object-2.png" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/product/Vector Smart Object-6.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="text-center">
                            <a href="design.php">
                                <font color="ed502e">GET START CLICK</font>
                            </a>
                        </div>
                        <h4>Limited 003</h4>
                        <p>เสื้อ Aresanal BY MYKITS</p>
                        <a href="assets/img/product/Vector Smart Object-6.png" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="assets/img/product/Vector Smart Object.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="text-center">
                            <a href="design.php">
                                <font color="ed502e">GET START CLICK</font>
                            </a>
                        </div>
                        <h4>Sale Items 002</h4>
                        <p>เสื้อ Manchester BY MYKITS</p>
                        <a href="assets/img/product/Vector Smart Object.png" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="assets/img/product/Vector Smart Object-5.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="text-center">
                            <a href="design.php">
                                <font color="ed502e">GET START CLICK</font>
                            </a>
                        </div>
                        <h4>Sale Items 003</h4>
                        <p>เสื้อ Sper BY MYKITS</p>
                        <a href="assets/img/product/Vector Smart Object-5.png" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="assets/img/product/Vector Smart Object-4.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="text-center">
                            <a href="design.php">
                                <font color="ed502e">GET START CLICK</font>
                            </a>
                        </div>
                        <h4>Art Design 003</h4>
                        <p>ลายเสื้อทีมฟุตบอลรุ่น Limited ของ RUAMPEUAN FC</p>
                        <a href="assets/img/product/Vector Smart Object-4.png" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->



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

<?php }?>
