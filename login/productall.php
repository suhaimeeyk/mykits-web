

<?php
  include_once('../functions.php');
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
    <link rel="stylesheet" type="text/css" href="../assets/css/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/css/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    <!--===============================================================================================-->
    <!-- no template -->
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

<!-- <body background="assets/img/back1.png"> -->

<body>


<?php include('include/header.php');?>


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <br><br>
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>????????????????????????????????????</h2>
                <p>PRODUCT DESIGN</p>
                <P ALIGN=CENTER class="animate__animated animate__fadeInDown"><img src="../assets/img/register1.png"></P>
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
                    <img src="../assets/img/product/Vector Smart Object-3.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="text-center">
                            <a href="indexlog.php">
                                <font color="ed502e">GET START CLICK</font>
                            </a>
                        </div>
                        <h4 href="about.php">Limited 001</h4>
                        <p>???????????????????????????????????? Limited ????????????????????????????????????????????????????????????????????????????????????????????????</p>
                        <a href="../assets/img/product/Vector Smart Object-3.png" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="../assets/img/product/Vector Smart Object-8.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="text-center">
                            <a href="indexlog.php">
                                <font color="ed502e">GET START CLICK</font>
                            </a>
                        </div>
                        <h4>Art Design 001</h4>
                        <p>Art Design 001 E-SPORT</p>
                        <a href="../assets/img/product/Vector Smart Object-8.png" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="../assets/img/product/Vector Smart Object-9.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="text-center">
                            <a href="indexlog.php">
                                <font color="ed502e">GET START CLICK</font>
                            </a>
                        </div>
                        <h4>Limited 002</h4>
                        <p>??????????????????????????????????????????????????????????????? Limited ?????????????????? Argentina</p>
                        <a href="../assets/img/product/Vector Smart Object-9.png" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="../assets/img/product/Vector Smart Object-7.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="text-center">
                            <a href="indexlog.php">
                                <font color="ed502e">GET START CLICK</font>
                            </a>
                        </div>
                        <h4>Sale Items 001</h4>
                        <p>??????????????? Liverpool BY MYKITS</p>
                        <a href="../assets/img/product/Vector Smart Object-7.png" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="../assets/img/product/Vector Smart Object-2.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="text-center">
                            <a href="indexlog.php">
                                <font color="ed502e">GET START CLICK</font>
                            </a>
                        </div>
                        <h4>Art Design 002</h4>
                        <p>??????????????? Liverpool BY MYKITS</p>
                        <a href="../assets/img/product/Vector Smart Object-2.png" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="../assets/img/product/Vector Smart Object-6.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="text-center">
                            <a href="indexlog.php">
                                <font color="ed502e">GET START CLICK</font>
                            </a>
                        </div>
                        <h4>Limited 003</h4>
                        <p>??????????????? Aresanal BY MYKITS</p>
                        <a href="../assets/img/product/Vector Smart Object-6.png" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
  
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="../assets/img/product/Vector Smart Object.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="text-center">
                            <a href="indexlog.php">
                                <font color="ed502e">GET START CLICK</font>
                            </a>
                        </div>
                        <h4>Sale Items 002</h4>
                        <p>??????????????? Manchester BY MYKITS</p>
                        <a href="../assets/img/product/Vector Smart Object.png" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="../assets/img/product/Vector Smart Object-5.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="text-center">
                            <a href="indexlog.php">
                                <font color="ed502e">GET START CLICK</font>
                            </a>
                        </div>
                        <h4>Sale Items 003</h4>
                        <p>??????????????? Sper BY MYKITS</p>
                        <a href="../assets/img/product/Vector Smart Object-5.png" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="../assets/img/product/Vector Smart Object-4.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="text-center">
                            <a href="indexlog.php">
                                <font color="ed502e">GET START CLICK</font>
                            </a>
                        </div>
                        <h4>Art Design 003</h4>
                        <p>??????????????????????????????????????????????????????????????? Limited ????????? RUAMPEUAN FC</p>
                        <a href="../assets/img/product/Vector Smart Object-4.png" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>

                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->



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

