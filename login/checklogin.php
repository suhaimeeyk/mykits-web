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