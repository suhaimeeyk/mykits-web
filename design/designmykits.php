<?php session_start();
include('../conddb.php');
$name = $_SESSION['name'];
?>

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

        // echo "<script>alert('คุณได้ทำการสั่งเสื้อแล้ว !!');</script>";
        // echo "<script>window.location.href='designmykits.php'</script>";
        
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

    <title>START DESIGN MYKITS</title>
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
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: MyResume - v4.6.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


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
                <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a>
                </li>
                <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                        <span>Portfolio</span></a></li>
                <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a>
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

                    <!-- <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>

                        </div>

                    </div> -->

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
                            <!-- <section id="portfolio" class="portfolio">
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
                                                <div class="text-center">
                                                    <a href="design/designmykits.php">
                                                        <font color="ed502e">GET START CLICK</font>
                                                    </a>
                                                </div>
                                                <h4 href="about.php">Limited 001</h4>
                                                <p>ลายเสื้อรุ่น Limited ไม่เหมือนใครของมหาวิทยาลัยฟาฏอนี</p>
                                                <a href="../assets/img/product/Vector Smart Object-3.png"
                                                    data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox preview-link"><i
                                                        class="bx bx-plus"></i></a>
                                                <a href="portfolio-details.html" class="details-link"
                                                    title="More Details"><i class="bx bx-link"></i></a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                            <img src="../assets/img/product/Vector Smart Object-8.png" class="img-fluid"
                                                alt="">
                                            <div class="portfolio-info">
                                                <div class="text-center">
                                                    <a href="design/designmykits.php">
                                                        <font color="ed502e">GET START CLICK</font>
                                                    </a>
                                                </div>
                                                <h4>Art Design 001</h4>
                                                <p>Art Design 001 E-SPORT</p>
                                                <a href="../assets/img/product/Vector Smart Object-8.png"
                                                    data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox preview-link"><i
                                                        class="bx bx-plus"></i></a>
                                                <a href="portfolio-details.html" class="details-link"
                                                    title="More Details"><i class="bx bx-link"></i></a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                            <img src="../assets/img/product/Vector Smart Object-9.png" class="img-fluid"
                                                alt="">
                                            <div class="portfolio-info">
                                                <div class="text-center">
                                                    <a href="design/designmykits.php">
                                                        <font color="ed502e">GET START CLICK</font>
                                                    </a>
                                                </div>
                                                <h4>Limited 002</h4>
                                                <p>ลายเสื้อทีมฟุตบอลรุ่น Limited ของทีม Argentina</p>
                                                <a href="../assets/img/product/Vector Smart Object-9.png"
                                                    data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox preview-link"><i
                                                        class="bx bx-plus"></i></a>
                                                <a href="portfolio-details.html" class="details-link"
                                                    title="More Details"><i class="bx bx-link"></i></a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                            <img src="../assets/img/product/Vector Smart Object-7.png" class="img-fluid"
                                                alt="">
                                            <div class="portfolio-info">
                                                <div class="text-center">
                                                    <a href="design/designmykits.php">
                                                        <font color="ed502e">GET START CLICK</font>
                                                    </a>
                                                </div>
                                                <h4>Sale Items 001</h4>
                                                <p>เสื้อ Liverpool BY MYKITS</p>
                                                <a href="../assets/img/product/Vector Smart Object-7.png"
                                                    data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox preview-link"><i
                                                        class="bx bx-plus"></i></a>
                                                <a href="portfolio-details.html" class="details-link"
                                                    title="More Details"><i class="bx bx-link"></i></a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                            <img src="../assets/img/product/Vector Smart Object-2.png" class="img-fluid"
                                                alt="">
                                            <div class="portfolio-info">
                                                <div class="text-center">
                                                    <a href="design/designmykits.php">
                                                        <font color="ed502e">GET START CLICK</font>
                                                    </a>
                                                </div>
                                                <h4>Art Design 002</h4>
                                                <p>เสื้อ Liverpool BY MYKITS</p>
                                                <a href="../assets/img/product/Vector Smart Object-2.png"
                                                    data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox preview-link"><i
                                                        class="bx bx-plus"></i></a>
                                                <a href="portfolio-details.html" class="details-link"
                                                    title="More Details"><i class="bx bx-link"></i></a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                            <img src="../assets/img/product/Vector Smart Object-6.png" class="img-fluid"
                                                alt="">
                                            <div class="portfolio-info">
                                                <div class="text-center">
                                                    <a href="design/designmykits.php">
                                                        <font color="ed502e">GET START CLICK</font>
                                                    </a>
                                                </div>
                                                <h4>Limited 003</h4>
                                                <p>เสื้อ Aresanal BY MYKITS</p>
                                                <a href="../assets/img/product/Vector Smart Object-6.png"
                                                    data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox preview-link"><i
                                                        class="bx bx-plus"></i></a>
                                                <a href="portfolio-details.html" class="details-link"
                                                    title="More Details"><i class="bx bx-link"></i></a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                            <img src="../assets/img/product/Vector Smart Object.png" class="img-fluid"
                                                alt="">
                                            <div class="portfolio-info">
                                                <div class="text-center">
                                                    <a href="design/designmykits.php">
                                                        <font color="ed502e">GET START CLICK</font>
                                                    </a>
                                                </div>
                                                <h4>Sale Items 002</h4>
                                                <p>เสื้อ Manchester BY MYKITS</p>
                                                <a href="../assets/img/product/Vector Smart Object.png"
                                                    data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox preview-link"><i
                                                        class="bx bx-plus"></i></a>
                                                <a href="portfolio-details.html" class="details-link"
                                                    title="More Details"><i class="bx bx-link"></i></a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                            <img src="../assets/img/product/Vector Smart Object-5.png" class="img-fluid"
                                                alt="">
                                            <div class="portfolio-info">
                                                <div class="text-center">
                                                    <a href="design/designmykits.php">
                                                        <font color="ed502e">GET START CLICK</font>
                                                    </a>
                                                </div>
                                                <h4>Sale Items 003</h4>
                                                <p>เสื้อ Sper BY MYKITS</p>
                                                <a href="../assets/img/product/Vector Smart Object-5.png"
                                                    data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox preview-link"><i
                                                        class="bx bx-plus"></i></a>
                                                <a href="portfolio-details.html" class="details-link"
                                                    title="More Details"><i class="bx bx-link"></i></a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                            <img src="../assets/img/product/Vector Smart Object-4.png" class="img-fluid"
                                                alt="">
                                            <div class="portfolio-info">
                                                <div class="text-center">
                                                    <a href="design/designmykits.php">
                                                        <font color="ed502e">GET START CLICK</font>
                                                    </a>
                                                </div>
                                                <h4>Art Design 003</h4>
                                                <p>ลายเสื้อทีมฟุตบอลรุ่น Limited ของ RUAMPEUAN FC</p>
                                                <a href="../assets/img/product/Vector Smart Object-4.png"
                                                    data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox preview-link"><i
                                                        class="bx bx-plus"></i></a>
                                                <a href="portfolio-details.html" class="details-link"
                                                    title="More Details"><i class="bx bx-link"></i></a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </section> -->
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
                                <button type="submit" name="profiledesign" class="btn btn-warning" >SUBMIT</button>
                            </div>

                            <!-- <P ALIGN=CENTER><button type="submit" name="profiledesign" class="btn btn-dark">INSERT</button>
                            </P> -->

                        </form>
                        <br>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

        <!-- ======= About Section ======= -->
        <!-- <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content">
                        <h3>UI/UX Designer &amp; Web Developer.</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>1 May
                                            1995</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                        <span>www.example.com</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+123 456
                                            7890</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>New York,
                                            USA</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>30</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong>
                                        <span>email@example.com</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                        <span>Available</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt
                            adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                            Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus
                            itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis
                            culpa magni laudantium dolores.
                        </p>
                    </div>
                </div>

            </div>
        </section> -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Resume</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="resume-title">Sumary</h3>
                        <div class="resume-item pb-0">
                            <h4>Brandon Johnson</h4>
                            <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing
                                    and developing user-centered digital/print marketing material from initial concept
                                    to final, polished deliverable.</em></p>
                            <ul>
                                <li>Portland par 127,Orlando, FL</li>
                                <li>(123) 456-7891</li>
                                <li>alice.barkley@example.com</li>
                            </ul>
                        </div>

                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>Master of Fine Arts &amp; Graphic Design</h4>
                            <h5>2015 - 2016</h5>
                            <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                            <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero
                                voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
                        </div>
                        <div class="resume-item">
                            <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
                            <h5>2010 - 2014</h5>
                            <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                            <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel
                                ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae
                                consequatur neque etlon sader mart dila</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="resume-title">Professional Experience</h3>
                        <div class="resume-item">
                            <h4>Senior graphic design specialist</h4>
                            <h5>2019 - Present</h5>
                            <p><em>Experion, New York, NY </em></p>
                            <ul>
                                <li>Lead in the design, development, and implementation of the graphic, layout, and
                                    production communication materials</li>
                                <li>Delegate tasks to the 7 members of the design team and provide counsel on all
                                    aspects of the project. </li>
                                <li>Supervise the assessment of all graphic materials in order to ensure quality and
                                    accuracy of the design</li>
                                <li>Oversee the efficient use of production project budgets ranging from $2,000 -
                                    $25,000</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Graphic design specialist</h4>
                            <h5>2017 - 2018</h5>
                            <p><em>Stepping Stone Advertising, New York, NY</em></p>
                            <ul>
                                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations,
                                    and advertisements).</li>
                                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                                <li>Created 4+ design presentations and proposals a month for clients and account
                                    managers</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 2</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 1</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 3</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                    </path>
                                </svg>
                                <i class="bx bxl-dribbble"></i>
                            </div>
                            <h4><a href="">Lorem Ipsum</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box iconbox-orange ">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                                    </path>
                                </svg>
                                <i class="bx bx-file"></i>
                            </div>
                            <h4><a href="">Sed Perspiciatis</a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-pink">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                                    </path>
                                </svg>
                                <i class="bx bx-tachometer"></i>
                            </div>
                            <h4><a href="">Magni Dolores</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box iconbox-yellow">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813">
                                    </path>
                                </svg>
                                <i class="bx bx-layer"></i>
                            </div>
                            <h4><a href="">Nemo Enim</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box iconbox-red">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572">
                                    </path>
                                </svg>
                                <i class="bx bx-slideshow"></i>
                            </div>
                            <h4><a href="">Dele Cardo</a></h4>
                            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-teal">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762">
                                    </path>
                                </svg>
                                <i class="bx bx-arch"></i>
                            </div>
                            <h4><a href="">Divera Don</a></h4>
                            <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Testimonials</h2>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                    minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                    dolore labore illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
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
        <div class="container">
            <h3>Brandon Johnson</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi
                placeat.</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: [license-url] -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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