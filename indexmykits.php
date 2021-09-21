<?php session_start();?>
<?php 
 
if (!$_SESSION["idlogin"]){
 
	  Header("Location: login/indexlog.php");
 
}else{
    
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
    <link href="assets/img/logo.png" rel="apple-touch-icon">

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

<body>
    <div class="loader-bg">

    </div>
    <div class="loader">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-spinner-teal lighten-1">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>

    <?php include('include/header.php');?>

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-4.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>
                                    <font color="ed502e">MYKITS</font>
                                </span></h2>
                            <p class="animate__animated animate__fadeInUp">ที่มาของคำว่า MYKITS มีคำว่า MY
                                ที่แปลว่าของฉันหรือการแสดงเป็นเจ้าของสิ่งๆนั้น และคำว่า KITS
                                ที่แปลว่าชุดหรืออุปกรณ์หรือเครื่องมือต่างๆ เมื่อรวมกันแล้วก็เลยเกิดเป็นความหมายว่า
                                "ชุดของฉัน" ที่เวลาสวมใส่ชุดๆนั้นแล้วจะรู้สึกเป็นเอกลักษณ์ของตัวเองที่ไม่เหมือนใคร.</p>
                            <a href="about.php"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">START
                                DESIGN</a>
                            <a href="productall.php"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">PRODUCT</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-5.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">ออกแบบเสื้อในเอกลักษณ์ของคุณเอง</h2>
                            <p class="animate__animated animate__fadeInUp">
                                เรียกได้ว่าในไทยตอนนี้ยังไม่มีเว็บไหนที่รองรับการออกเสื้อฟุตบอลออนไลน์เลยก็ว่าได้
                                เพราะส่วนใหญ่การออกแบบเสื้อฟุตบอลนั้นต้องใช้เอกลักษณ์เพื่อเสริมความมั่นใจและความโดดเด่นเมื่ออยู่ในสนาม.
                            </p>
                            <a href="about.php"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">START
                                DESIGN</a>
                            <a href="productall.php"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">PRODUCT</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-6.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">มีสินค้าหลายแบบหลายราคา</h2>
                            <p class="animate__animated animate__fadeInUp">
                                มีสินค้าหลาหลายแบบหลากหลายราคาให้คุณได้เลือกในแบบที่คุณนั้นชื่นชอบและนำลวดลายมาว่างใว้บนลายเสื้อของคุณเอง.
                            </p>
                            <a href="about.php"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">START
                                DESIGN</a>
                            <a href="productall.php"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">PRODUCT</a>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->


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


                    <div id="app" class="col-lg-3 col-md-9 footer-newsletter" v-cloak>
                        <h4>Request</h4>
                        <p>คุณสามารถส่งคำขอหรือแนะนำแอดมินได้เลย</p>
                        <a align="center">
                            <input class="btn btn-success btn-xs" data-bs-toggle="modal" data-bs-target="#myModal"
                                @click="openModal" value="ส่งคำขอหรือแนะนำ">
                        </a>

                        <div v-if="myModal" class="modal fade" id="myModal" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3>
                                            <font color="#F27102">{{ dyynamicTitle }}</font>
                                        </h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close" @click="myModal=false"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="namesentaddmin">
                                                <font color="#F27102">ส่งคำขอหรือแนะนำ
                                            </label>
                                            <input class="form-control" type="text" v-model="namesentaddmin">
                                        </div>
                                        <br>
                                        <div class="modal-footer">
                                            <input type="hidden" v-model="hiddenId">
                                            <input type="button" v-model="actionButton" @click="submitData"
                                                class="btn btn-success btn-xs">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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



    <!-- <script>
        let app = new Vue({
  el: '#app',
  data: {
      allData: '',
      myModal: false,
      hiddenId: null,
      actionButton: 'SENT',
      dyynamicTitle: 'Add data'
  },
  methods: {
      fetchAllData() {
          axios.post('action.php', {
              action: 'fetchall'
          }).then(res => {
              app.allData = res.data;
          })
      },
      openModal() {
          app.namesentaddmin = '';
          app.actionButton = 'SENT';
          app.dyynamicTitle = 'Reques';
          app.myModal = true;
      },
      submitData() {
          if (app.namesentaddmin != '' ) {
              if (app.actionButton == 'SENT') {
                  axios.post('action.php', {
                      action: 'sentaddmin',
                      namesentaddmin: app.namesentaddmin
                  }).then(res => {
                      app.myModal = false;
                      app.fetchAllData();
                      app.namesentaddmin = '';
                      alert(res.data.message);
                      window.location.reload();
                  });
              }
          }
      },
  },
  created() {
      this.fetchAllData();
  }
})
    </script> -->
</body>

</html>

<?php }?>