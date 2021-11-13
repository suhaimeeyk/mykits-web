


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

<body background="assets/img/back1.png">
    <!-- <body> -->


    <?php include('include/header.php');?>

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
        <br><br><br>
        <!-- <div class="container" data-aos="fade-up">
            <br><br>
            <div class="section-title">
                <h2>ตารางรายชื่อผู้ลงทะเบียน</h2>
                <p>List user</p>
            </div>
        </div> -->

        <div class="container-fluid" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-5 align-items-stretch video-box"
                    style='background-image: url("assets/img/about.jpg");' data-aos="zoom-in" data-aos-delay="100">
                    <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4"
                        data-vbtype="video" data-autoplay="true"></a> -->
                </div>

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

                    <div class="content">
                        <h3>HISTORY<strong>
                                <font color="#e1711d"> MYKITS</font>
                            </strong></h3>

                        <p>
                            สำหรับความเป็นนี้นั้นเป็นประวัติสั้นๆทีเราได้ทำการเขียนเพื่อให้ผู้ใช้นั้นได้รับรู้ข้อมูลเกี่ยวกับประวัติความเป็นมาของ
                            MYKITS
                        </p>
                    </div>

                    <div class="accordion-list">
                        <ul>
                            <li>
                                <a data-bs-toggle="collapse" class="collapse"
                                    data-bs-target="#accordion-list-1"><span>WHY</span> ทำไมต้องเป็นเว็บไซต์ออกแบบเสื้อ
                                    ? <i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                    <p>
                                        เรียกได้ว่าในไทยตอนนี้ยังไม่มีเว็บไหนที่รองรับการออกเสื้อฟุตบอลออนไลน์เลยก็ว่าได้
                                        เพราะส่วนใหญ่การออกแบบเสื้อฟุตบอลนั้นต้องใช้เอกลักษณ์เพื่อเสริมความมั่นใจและความโดดเด่นเมื่ออยู่ในสนาม
                                        และเนื่องจากด้วยเหตุทีว่านี้ผมจึงอยากสร้าง
                                        มันขึ้นมาด้วยฝีมือของผมเองและอีกอย่างนึงก็คือมันเป็นความฝันเล็กๆ
                                        ที่อยากนำลวดลายของผมนั้นขึ้นไปอยู่บนเสื้อฟุตบอลโดยที่เป็นลายที่ผมนั้นออกแบบเอง.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
                                    class="collapsed"><span>WHAT</span>อะไรคือ Mykits ? <i
                                        class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        ที่มาของคำว่า MYKITS มีคำว่า MY ที่แปลว่าของฉันหรือการแสดงเป็นเจ้าของสิ่งๆนั้น
                                        และคำว่า KITS ที่แปลว่าชุดหรืออุปกรณ์หรือเครื่องมือต่างๆ
                                        เมื่อรวมกันแล้วก็เลยเกิดเป็นความหมายว่า "ชุดของฉัน"
                                        ที่เวลาสวมใส่ชุดๆนั้นแล้วจะรู้สึกเป็นเอกลักษณ์ของตัวเองที่ไม่เหมือนใคร.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                    class="collapsed"><span>SCOPE</span>ขอบเขต ?<i
                                        class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        สำหรับ MYKITS แล้วจะจัดทำเกี่ยวกับการออกแบบเสื้อฟุตบอล
                                        หรือในอนาคตจะพัฒนามากกว่านั้นซึ่งทางผมนั้นได้
                                        ทำการรวบร่วมช้อมูลและจัดสรรลวดลายต่างๆเพื่อให้ผู้ใช้นั้นได้รับในสิ่งที่ผมนั้นอยากให้ผู้ใช้ใช้งาน.
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>

            </div>

        </div>

    </section><!-- End Why Us Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>ผู้ดูแล</h2>
                <p>BOARD MYKITS</p>
                <P ALIGN=CENTER class="animate__animated animate__fadeInDown"><img src="assets/img/register1.png"></P>
            </div>
            <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/arqom.jpg" class="testimonial-img" alt="">
                                <h3>Arqom Jehdimae</h3>
                                <h4>Shirts Design</h4>
                                <p class="text-center">
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Respect yourself enough to know that you <br> deserve the very best.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                <p class="text-center">จงนับถือตัวเองให้มากพอที่จะรู้ว่า คุณคู่ควรกับสิ่งที่ดีที่สุด</p>
                                </p>
                                <hr>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/sam.jpg" class="testimonial-img" alt="">
                                <h3>Suhaimee Yakoh</h3>
                                <h4>Web Developer</h4>
                                <p class="text-center">
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Your future is created by what you do today,<br> not tomorrow.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                <p class="text-center">อนาคตของคุณขึ้นอยู่กับสิ่งที่คุณทำในวันนี้ ไม่ใช่วันพรุ่งนี้</p>
                                </p>
                                <hr>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->


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
