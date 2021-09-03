<?php 

    include_once('functions.php');


    if (isset($_GET['del_id'])) {
        $sentaddminid = $_GET['del_id'];
        $deletedata = new db_con();
        $sql = $deletedata->deletesentaddmin($sentaddminid);

        if($sql){
            echo "<script>alert('Delete Successfully !!');</script>";
            echo "<script>window.location.href='sentaddmin.php'</script>";
               } 
    }



?>