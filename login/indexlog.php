<?php
include('h.php');
?>
<style type="text/css">
#btn {
    width: 100%;
}
</style>

<body class="indexbody">

<!-- <body> -->
    <br> <br> <br> <br> <br> <br> <br>
    <div class="container">
        <div class="col-lg-12 col-md-6">
            <form name=" formlogin" action="checklogin.php" method="POST" id="login" class="form-horizontal">

                    <div class="imgcontainer">
                        <img src="logo.png">
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" name="username" placeholder="Enter Username" required
                                placeholder="Username" />
                        </div>
                    </div>
        
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="password" name="password" placeholder="Enter password" required
                                placeholder="Password" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success" id="btn">
                                <span class="glyphicon glyphicon-log-in"> </span>
                                Login </button>
                            <label>
                                <input type="checkbox" checked="checked" name="remember"> Remember me
                            </label>
                        </div>
                        <h3 align="center"><a href="insertdatalog.php" class="btn btn-primary">สมัครสมาชิก</a></h3>
                    </div>
            </form>
        </div>
    </div>
</body>