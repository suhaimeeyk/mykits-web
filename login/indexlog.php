<?php
include('h.php');
?>

<style type="text/css">
#btn {
    width: 100%;
}
</style>

<!-- <body class="indexboy"> -->

<body background="noclass4.png">
    <!-- <body> -->
    <br> <br> <br> <br> <br> <br> <br>

    <div class="container">

        <div class="form">
            <div class="col-lg-12 col-md-6">

                <form name=" formlogin" action="checklogin.php" method="POST" id="login" class="form-horizontal">
                    <br>
                    <div class="brand-logo"></div>
                    <div class="brand-title">Welcome to Website</div>
                    <br>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" name="username" placeholder="Username" required placeholder="Username" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="password" name="password" placeholder="Password" required
                                placeholder="Password" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit"  name="Login" class="btn btn-success" id="btn">
                                <span class="glyphicon glyphicon-log-in"> </span>
                                Login
                            </button>

                            <button class="btn btn-warning" onclick="window.location.href='insertlogin.php';">
                            สมัครสมาชิก
                            </button>

                            <!-- <button class="btn btn-primary" onclick="window.location.href='indexmykits.php';">
                            เข้าสู่หน้าเว็บไซต์
                            </button> -->
                        </div>
                    </div>
                </form>
            </div>
            <!-- <a href="insertlogin.php" class="btn btn-warning">สมัครสมาชิก</a> -->
        </div>

    </div>
    <a href="indexmykits.php" class="btn btn-primary">เข้าสู่หน้าเว็บไซต์</a>


    


</body>
