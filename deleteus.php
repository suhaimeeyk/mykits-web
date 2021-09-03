<?php 

    include_once('functions.php');


    if (isset($_GET['deluser_id'])) {
        $userid = $_GET['deluser_id'];
        $deletedata = new db_con();
        $sql = $deletedata->delete($userid) ;

        if($sql){
            echo "<script>alert('Delete Successfully !!');</script>";
            echo "<script>window.location.href='indexregister.php'</script>";
               } 
    }



?>