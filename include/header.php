  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center justify-content-between">

          <h1 class="logo"><a href="indexmykits.php"><img src="assets/img/logo.png"></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar">
              <ul>
                  <li><a class="nav-link scrollto active" href="indexmykits.php">Home</a></li>
                  <li><a class="nav-link scrollto" href="#services">Design</a></li>
                  <li><a class="nav-link scrollto" href="productall.php">Product</a></li>
                  <!-- <li class="dropdown"><a href="#"><span>Product</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="productall.php">All</a></li>
                            <li><a href="#">Limited</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Sale Items</a></li>
                            <li><a href="#">Art Design</a></li>
                            <li><a href="#">Graphic Design</a></li>
                        </ul>
                    </li> -->
                  <li><a class="nav-link scrollto " href="about.php">About</a></li>
                  <li><a class="nav-link scrollto " href="indexregister.php">รายชื่อผู้ลงทะเบียน</a></li>
                  <li><a class="nav-link scrollto " href="sentaddmin.php">ผู้ใช้ที่ติดต่อ</a></li>
                  <li><a class="nav-link scrollto" href="#footer">Contact</a></li>
                  <!-- <li><a class="getstarted scrollto" href="login/indexlog.php">LOGIN</a></li> -->

                  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                  <srcript src="https://code.jquery.com/jquery-3.6.0.min.js"></srcript>

                  <li><a class="getstarted scrollto" onclick="return confirm('แน่ใจหรือไหมที่จะออกจากระบบ ?');"
                          href="login/logout.php">LOGOUT | สวัสดีคุณแอดมิน (<?php echo $name; ?>)</a></li>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

      </div>
  </header><!-- End Header -->