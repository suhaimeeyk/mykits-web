<?php 
session_start();
if(isset($_POST['username'])){
                include("condb.php");
                  $username = $_POST['username'];
                  $password = $_POST['password'];

                  $sql="SELECT * FROM dblogin 
                  WHERE  username='".$username."' 
                  AND  password='".$password."' ";
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["idlogin"] = $row["idlogin"];
                      $_SESSION["name"] = $row["name"];
                      $_SESSION["level"] = $row["level"];

                      if($_SESSION["level"]=="admin"){ 

                        Header("Location: ../indexmykits.php");
                      }
                      if ($_SESSION["level"]=="member"){ 

                        Header("Location: indexmember.php");
                      }
                  }else{
                    
                    echo'
                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    <srcript src="https://code.jquery.com/jquery-3.6.0.min.js"></srcript>
                    
                ';
                   echo "
                    <script>
                    swal('เกิดข้อผิดพลาดโปรดลองใหม่!','กดปุ่มเพื่อลองใหม่!','warning');
                    </script>";
                    
                  }
                }else{
 
 
                  Header("Location: indexlog.php"); //user & password incorrect back to login again
      
             }
?>

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
                            <button type="submit" class="btn btn-success" id="btn">
                                <span class="glyphicon glyphicon-log-in"> </span>
                                Login
                            </button>
                           
                        </div>
                    </div>
                </form>
            </div>
            <a href="insertlogin.php" class="btn btn-warning">สมัครสมาชิก</a>
        </div>

    </div>
    <a href="insertlogin.php" class="btn btn-warning">สมัครสมาชิก</a> <a href="indexmykits.php"
        class="btn btn-primary">เข้าสู่หน้าเว็บไซต์</a>

</body>