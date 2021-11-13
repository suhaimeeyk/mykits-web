
<?php
  include_once('../functions.php');
  $insertdata = new db_con();

  if(isset($_POST['profiledesign'])){

    $namedesign = $_POST['namedesign'];//1
    $idcategory = $_POST['idcategory'];//2
    $idbodyshirt = $_POST['idbodyshirt'];//3
    $idcovershirt = $_POST['idcovershirt'];//4
    $idfloorshirt = $_POST['idfloorshirt']; //5
    $idproduct = $_POST['idproduct']; //6
    $iduser = $_POST['iduser']; //7
    $idcolorshirt = $_POST['idcolorshirt']; //8
    $idsize = $_POST['idsize']; //9

    $sql = $insertdata->profiledesign($namedesign,$idcategory,$idbodyshirt,$idcovershirt,$idproduct,$iduser,$idcolorshirt,$idsize,$idfloorshirt);

    if($sql){
        
        echo'
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <srcript src="https://code.jquery.com/jquery-3.6.0.min.js"></srcript>
        
    ';
       echo "
        <script>
        swal('คุณได้ทำการสั่งเสื้อแล้ว !!','กดปุ่มเพื่อลองใหม่!','success');
        </script>";


    } 
    
    else{
        echo "<script>alert('Something went wrong !!');</script>";
        echo "<script>window.location.href='designmykits.php'</script>";
    }
  }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>START DESIGN MYKITS</title>
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
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- รับรองมือถือ -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bg.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- จบรับรองมอถือ -->

    <!-- =======================================================
  * Template Name: MyResume - v4.6.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
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

    <!-- ======= Mobile nav toggle button ======= -->
    <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">

        <nav id="navbar" class="navbar nav-menu">
            <ul>
                <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a>
                </li>
                <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Order</span></a>
                </li>
                <!-- <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                        <span>Portfolio</span></a></li> -->
                <li><a href="#testimonials" class="nav-link scrollto"><i class="bx bx-server"></i>
                        <span>Contact</span></a>
                </li>
                <!-- <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a>
                </li> -->
            </ul>
        </nav><!-- .nav-menu -->

    </header><!-- End Header -->

    <!-- =======  Hero Section  ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>START DESIGN<font color="f06f54"> MYKITS</font>
            </h1>
            <p>อยากให้เสื้อเป็นมากกว่า<span class="typed"
                    data-typed-items="การจินตนาการ. , ความคิด., ความต้องการ."></span></p>
            <div class="social-links">
                <a href="#contact">
                    <font color="#f06f54">START NOW</font></i>
                </a>
                <a href="../indexmykits.php">
                    <font color="#f06f54">BACK</font></i>
                </a>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>PROFILE FOR DESIGN</h2>
                </div>

                <div class="row mt-1">

                    <div class="container">
                        <P ALIGN=CENTER class="animate__animated animate__fadeInDown"><img
                                src="../assets/img/register1.png"></P>

                        <form action="" method="post">

                            <div class="form-group mt-3">
                                <label for="iduser">ชื่อและนามสกุลผู้ใช้ (<a class="cta-btn"
                                        href="../registermykits.php">ลงทะเบียน</a>) :</label>
                                <select name="iduser" class="form-control" id="iduser" required>
                                    <option value="">ชื่อผู้ใช้</option>
                                    <?php
                                    include_once('../connectdb.php');
                                    $usql = "SELECT iduser,nameuser FROM dbuser
                                    where nameuser IS NOT NULL ORDER BY iduser;";
                                    $res =$conn->query($usql);
                                    if($res->num_rows>0){
                                        while($row = $res->fetch_assoc()){
                                            echo "<option value=" . '"' . $row['iduser'] . '"' . ">" 
                                            . $row['nameuser'] . "</option>";
                                        }
                                    }
                                ?>
                                </select>
                            </div>

                            <div class="form-group mt-3">
                                <label for="idsize">Size :</label>
                                <P ALIGN=CENTER class="animate__animated animate__fadeInDown"><img
                                        src="assets/img/size.jpg"></P>
                                <select name="idsize" class="form-control" id="idsize" required>
                                    <option value="">Size</option>
                                    <?php
                                    include_once('../connectdb.php');
                                    $usql = "SELECT idsize,namesize FROM dbsize
                                    where namesize IS NOT NULL ORDER BY idsize;";
                                    $res =$conn->query($usql);
                                    if($res->num_rows>0){
                                        while($row = $res->fetch_assoc()){
                                            echo "<option value=" . '"' . $row['idsize'] . '"' . ">" 
                                            . $row['namesize'] . "</option>";
                                             }
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="idcolorshirt">Color Shirt :</label>
                                    <P ALIGN=CENTER class="animate__animated animate__fadeInDown"><img
                                            src="assets/img/color.png"></P>
                                    <select name="idcolorshirt" class="form-control" id="idcolorshirt" required>
                                        <option value="">สี</option>
                                        <?php
                                    include_once('../connectdb.php');
                                    $usql = "SELECT idcolorshirt,namecolorshirt FROM dbcolorshirt
                                    where namecolorshirt IS NOT NULL ORDER BY idcolorshirt;";
                                    $res =$conn->query($usql);
                                    if($res->num_rows>0){
                                        while($row = $res->fetch_assoc()){
                                            echo "<option value=" . '"' . $row['idcolorshirt'] . '"' . ">" 
                                            . $row['namecolorshirt'] . "</option>";
                                        }
                                    }
                                ?>
                                    </select>
                                </div>


                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label for="idfloorshirt">Floor Shirt :</label>
                                    <P ALIGN=CENTER class="animate__animated animate__fadeInDown"><img
                                            src="assets/img/floor.png"></P>
                                    <select name="idfloorshirt" class="form-control" id="idfloorshirt" required>
                                        <option value="">พื้นเสื้อ</option>
                                        <?php
                                    include_once('../connectdb.php');
                                    $usql = "SELECT idfloorshirt,namefloorshirt FROM dbfloorshirt
                                    where namefloorshirt IS NOT NULL ORDER BY idfloorshirt;";
                                    $res =$conn->query($usql);
                                    if($res->num_rows>0){
                                        while($row = $res->fetch_assoc()){
                                            echo "<option value=" . '"' . $row['idfloorshirt'] . '"' . ">" 
                                            . $row['namefloorshirt'] . "</option>";
                                            }
                                        }
                                    ?>
                                    </select>
                                </div>
                            </div>


                            <div class="mb-3">
                                <label for="namedesign" class="form-label">กรุณาตั้งชื่อเสื้อที่จะสั่ง</label>
                                <input type="text" class="form-control" name="namedesign" required>
                            </div>



                            <!-- ======= Portfolio Section ======= -->
                            <section id="portfolio" class="portfolio">
                                <br><br>
                                <div class="container" data-aos="fade-up">

                                    <div class="section-title">
                                        <h2>PRODUCT DESIGN</h2>
                                        <P ALIGN=CENTER class="animate__animated animate__fadeInDown"><img
                                                src="../assets/img/register1.png"></P>
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
                                            <img src="../assets/img/product/Vector Smart Object-3.png" class="img-fluid"
                                                alt="">
                                            <div class="portfolio-info">

                                                <h4 href="about.php">Limited 001</h4>
                                                <p>ลายเสื้อรุ่น Limited ไม่เหมือนใครของมหาวิทยาลัยฟาฏอนี</p>
                                                <a href="../assets/img/product/Vector Smart Object-3.png"
                                                    data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox preview-link"><i
                                                        class="bx bx-plus"></i></a>

                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                            <img src="../assets/img/product/Vector Smart Object-8.png" class="img-fluid"
                                                alt="">
                                            <div class="portfolio-info">

                                                <h4>Art Design 001</h4>
                                                <p>Art Design 001 E-SPORT</p>
                                                <a href="../assets/img/product/Vector Smart Object-8.png"
                                                    data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox preview-link"><i
                                                        class="bx bx-plus"></i></a>

                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                            <img src="../assets/img/product/Vector Smart Object-9.png" class="img-fluid"
                                                alt="">
                                            <div class="portfolio-info">

                                                <h4>Limited 002</h4>
                                                <p>ลายเสื้อทีมฟุตบอลรุ่น Limited ของทีม Argentina</p>
                                                <a href="../assets/img/product/Vector Smart Object-9.png"
                                                    data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox preview-link"><i
                                                        class="bx bx-plus"></i></a>

                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                            <img src="../assets/img/product/Vector Smart Object-7.png" class="img-fluid"
                                                alt="">
                                            <div class="portfolio-info">

                                                <h4>Sale Items 001</h4>
                                                <p>เสื้อ Liverpool BY MYKITS</p>
                                                <a href="../assets/img/product/Vector Smart Object-7.png"
                                                    data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox preview-link"><i
                                                        class="bx bx-plus"></i></a>

                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                            <img src="../assets/img/product/Vector Smart Object-2.png" class="img-fluid"
                                                alt="">
                                            <div class="portfolio-info">

                                                <h4>Art Design 002</h4>
                                                <p>เสื้อ Liverpool BY MYKITS</p>
                                                <a href="../assets/img/product/Vector Smart Object-2.png"
                                                    data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox preview-link"><i
                                                        class="bx bx-plus"></i></a>

                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                            <img src="../assets/img/product/Vector Smart Object-6.png" class="img-fluid"
                                                alt="">
                                            <div class="portfolio-info">

                                                <h4>Limited 003</h4>
                                                <p>เสื้อ Aresanal BY MYKITS</p>
                                                <a href="../assets/img/product/Vector Smart Object-6.png"
                                                    data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox preview-link"><i
                                                        class="bx bx-plus"></i></a>

                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                            <img src="../assets/img/product/Vector Smart Object.png" class="img-fluid"
                                                alt="">
                                            <div class="portfolio-info">

                                                <h4>Sale Items 002</h4>
                                                <p>เสื้อ Manchester BY MYKITS</p>
                                                <a href="../assets/img/product/Vector Smart Object.png"
                                                    data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox preview-link"><i
                                                        class="bx bx-plus"></i></a>

                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                            <img src="../assets/img/product/Vector Smart Object-5.png" class="img-fluid"
                                                alt="">
                                            <div class="portfolio-info">

                                                <h4>Sale Items 003</h4>
                                                <p>เสื้อ Sper BY MYKITS</p>
                                                <a href="../assets/img/product/Vector Smart Object-5.png"
                                                    data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox preview-link"><i
                                                        class="bx bx-plus"></i></a>

                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                            <img src="../assets/img/product/Vector Smart Object-4.png" class="img-fluid"
                                                alt="">
                                            <div class="portfolio-info">

                                                <h4>Art Design 003</h4>
                                                <p>ลายเสื้อทีมฟุตบอลรุ่น Limited ของ RUAMPEUAN FC</p>
                                                <a href="../assets/img/product/Vector Smart Object-4.png"
                                                    data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox preview-link"><i
                                                        class="bx bx-plus"></i></a>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </section>
                            <!-- End Portfolio Section -->


                            <div class="form-group mt-3">
                                <label for="idproduct">เลือกสินค้าที่สนใจ :</label>
                                <select name="idproduct" class="form-control" id="idproduct" required>
                                    <option value="">กรุณาเลือกสินค้า</option>
                                    <?php
                                    include_once('../connectdb.php');
                                    $usql = "SELECT idproduct,nameproduct FROM dbproduct
                                    where nameproduct IS NOT NULL ORDER BY idproduct;";
                                    $res =$conn->query($usql);
                                    if($res->num_rows>0){
                                        while($row = $res->fetch_assoc()){
                                            echo "<option value=" . '"' . $row['idproduct'] . '"' . ">" 
                                            . $row['nameproduct'] . "</option>";
                                        }
                                    }
                                ?>
                                </select>
                            </div>


                            <div class="form-group mt-3">
                                <label for="idbodyshirt">BODY :</label>
                                <select name="idbodyshirt" class="form-control" id="idbodyshirt" required>
                                    <option value="">กรุณาเลือกแบบหน้าหลัง</option>
                                    <?php
                                    include_once('../connectdb.php');
                                    $usql = "SELECT idbodyshirt,fronbody,behindbody FROM dbbodyshirt
                                    where fronbody IS NOT NULL ORDER BY idbodyshirt;";
                                    $res =$conn->query($usql);
                                    if($res->num_rows>0){
                                        while($row = $res->fetch_assoc()){
                                            echo "<option value=" . '"' . $row['idbodyshirt'] . '"' . ">" 
                                            . $row['fronbody']  . '-' . $row['behindbody'] . "</option>";
                                        }
                                    }
                                ?>
                                </select>
                            </div>

                            <div class="form-group mt-3">
                                <label for="idcovershirt">ปกเสื้อ :</label>
                                <select name="idcovershirt" class="form-control" id="idcovershirt" required>
                                    <option value="">กรุณาเลือกแบบปกเสื้อ</option>
                                    <?php
                                    include_once('../connectdb.php');
                                    $usql = "SELECT idcovershirt,namecovershirt FROM dbcovershirt
                                    where namecovershirt IS NOT NULL ORDER BY idcovershirt;";
                                    $res =$conn->query($usql);
                                    if($res->num_rows>0){
                                        while($row = $res->fetch_assoc()){
                                            echo "<option value=" . '"' . $row['idcovershirt'] . '"' . ">" 
                                            . $row['namecovershirt'] . "</option>";
                                        }
                                    }
                                ?>
                                </select>
                            </div>

                            <div class="form-group mt-3">
                                <label for="idcategory">ประเภทเสื้อการสั่งซื้อ :</label>
                                <select name="idcategory" class="form-control" id="idcategory" required>
                                    <option value="">กรุณาเลือกแบบปกเสื้อ</option>
                                    <?php
                                    include_once('../connectdb.php');
                                    $usql = "SELECT idcategory,namecategory FROM dbcategory
                                    where namecategory IS NOT NULL ORDER BY idcategory;";
                                    $res =$conn->query($usql);
                                    if($res->num_rows>0){
                                        while($row = $res->fetch_assoc()){
                                            echo "<option value=" . '"' . $row['idcategory'] . '"' . ">" 
                                            . $row['namecategory'] . "</option>";
                                        }
                                    }
                                ?>
                                </select>
                            </div>




                            <br><br>
                            <div class="text-center">
                                <button type="submit" name="profiledesign" class="btn btn-warning">SUBMIT</button>
                            </div>

                            <!-- <P ALIGN=CENTER><button type="submit" name="profiledesign" class="btn btn-dark">INSERT</button>
                            </P> -->

                        </form>
                        <br>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->





        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Order</h2>
                    <p>ทุกๆรายการที่ลูกค้าสั่งมาเราล้วนแต่เอาใจใส่ให้เสมอ.</p>
                </div>
            </div>

            <center>
                <div style='overflow-x:auto'>
                    <!-- <div> -->
                    <div data-aos="fade-up">
                        <div class="wrap-table100">
                            <div class="table100 ver1 " style='overflow-x:auto'>
                                <table data-vertable="ver1">
                                    <thead>
                                        <tr class="row100 head">
                                            <th class="column100 column2" data-column="column2">
                                                <h6 class="text-center">ลำดับ</h6>
                                            </th>
                                            <th class="column100 column4" data-column="column4">
                                                <h6 class="text-center">ชื่อผู้ใช้ที่สั่ง</h6>
                                            </th>
                                            <th class="column100 column5" data-column="column5">
                                                <h6 class="text-center">ประเภทเสื้อการสั่งซื้อ</h6>
                                            </th>
                                            <th class="column100 column6" data-column="column6">
                                                <h6 class="text-center">ข้างหน้า</h6>
                                            </th>
                                            <th class="column100 column7" data-column="column7">
                                                <h6 class="text-center">ข้างหลัง</h6>
                                            </th>
                                            <th class="column100 column8" data-column="column8">
                                                <h6 class="text-center">ปกเสื้อ</h6>
                                            </th>
                                            <th class="column100 column9" data-column="column9">
                                                <h6 class="text-center">พื้นเสื้อ</h6>
                                            </th>
                                            <th class="column100 column10" data-column="column10">
                                                <h6 class="text-center">รหัสเสื้อ</h6>
                                            </th>
                                            <th class="column100 column10" data-column="column10">
                                                <h6 class="text-center">ชื่อผลงาน</h6>
                                            </th>
                                            <th class="column100 column11" data-column="column11">
                                                <h6 class="text-center">ขนาดเสื้อ</h6>
                                            </th>
                                            <th class="column100 column12" data-column="column12">
                                                <h6 class="text-center">สีเสื้อ</h6>
                                            </th>

                                            <!-- <th class="column100 column13" data-column="column13">
                                                <h6 class="text-center">
                                                    แก้ไข</h6>
                                            </th>
                                            <th class="column100 column14" data-column="column14">
                                                <h6 class="text-center">
                                                    ลบ</h6>
                                            </th> -->
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        include_once('../functions.php');
                                        $fetchdataprofiledesign = new db_con();
                                        $sql = $fetchdataprofiledesign->fetchdataprofiledesign();
                                        while($row = mysqli_fetch_assoc($sql)) {
                                        
                                        ?>

                                        <tr class="row100">
                                            <td class="text-center"><?php echo $row ['iddesign']; ?></td>
                                            <td class="text-center"><?php echo $row ['nameuser']; ?></td>
                                            <td class="text-center"><?php echo $row ['namedesign']; ?></td>
                                            <td class="text-center"><?php echo $row ['namecategory']; ?></td>
                                            <td class="text-center"><?php echo $row ['fronbody']; ?></td>
                                            <td class="text-center"><?php echo $row ['behindbody']; ?></td>
                                            <td class="text-center"><?php echo $row ['namecovershirt']; ?></td>
                                            <td class="text-center"><?php echo $row ['namefloorshirt']; ?></td>
                                            <td class="text-center"><?php echo $row ['nameproduct']; ?></td>
                                            <td class="text-center"><?php echo $row ['namesize']; ?></td>
                                            <td class="text-center"><?php echo $row ['namecolorshirt']; ?></td>

                                            <!-- <td class="text-center"><a
                                                    href="updatebook.php?book_id=<?php echo $row['id_book']; ?>"
                                                    class="btn btn-primary">Edit</a></td>
                                            <td class="text-center"><a
                                                    href="deletebook.php?delbook_id=<?php echo $row['id_book']; ?>"
                                                    class="btn btn-danger">Delete</a></td> -->
                                        </tr>

                                        <?php 
                                                    }
                                                ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </section><!-- End Resume Section -->


        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="../assets/img/testimonials/sam.jpg" class="testimonial-img" alt="">
                                <h3>Suhaimee Yakoh</h3>
                                <h4>Web Developer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Your future is created by what you do today,<br> not tomorrow.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                <p class="text-center">อนาคตของคุณขึ้นอยู่กับสิ่งที่คุณทำในวันนี้ ไม่ใช่วันพรุ่งนี้</p>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="../assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Arqom Jehdimae</h3>
                                <h4>Shirts Design</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Respect yourself enough to know that you <br> deserve the very best.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                <p class="text-center">จงนับถือตัวเองให้มากพอที่จะรู้ว่า คุณคู่ควรกับสิ่งที่ดีที่สุด</p>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Testimonials Section -->


    </main><!-- End #main -->

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
                            <li><i class="bx bx-chevron-right"></i> <a href="../indexmykits.php">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="../about.php">About</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Product</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#contact">Limited</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#contact">Sale Items</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#contact">Art Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#contact">Graphic Design</a></li>
                        </ul>
                    </div>

                    <!-- <div class="col-lg-3 col-md-9 footer-newsletter">
                        <h4>Request</h4>
                        <p>คุณสามารถส่งคำขอหรือแนะนำแอดมินได้เลย</p>
                        <form action="" method="post">
                            <input type="text" name="namesentaddmin"><input type="submit" name="sentaddmin"
                                value="SENT">
                        </form>

                    </div> -->

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

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>