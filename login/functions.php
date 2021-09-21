<?php

    define('db_server','localhost');
    define('db_user','root');
    define('db_pass','');
    define('db_name','loginphp_tsanti');

    class db_con{

        function __construct() {
            $conn = mysqli_connect(db_server,db_user,db_pass,db_name);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()){
                echo "Failed toconnect to Mysqli : " . mysqli_connect_error();
            }
        }

////login
            public function insertloguse($username,$password,$name,$level){
                $result = mysqli_query($this->dbcon,"INSERT INTO dblogin( username, password, name, level)
                                                    values('$username','$password','$name','$level') ;
                                                    ");
                return $result;
            }

        public function insertloguseaddmin($ID,$username,$password,$name,$level){
            $result = mysqli_query($this->dbcon,"INSERT INTO dblogin( idlogin,username, password, name, level)
                                                values('$ID','$username','$password','$name','$level') ;
                                                ");
            return $result;
        }

        public function fetchdataloguse(){
            $result = mysqli_query($this->dbcon,"SELECT l.idlogin, l.username , l.password , l.name , l.level
                                                FROM dblogin as l
                                                where l.idlogin IS NOT NULL ORDER BY l.idlogin
                                                    ");
                                                return $result;
        }

        public function fetchdatalogusename(){
            $result = mysqli_query($this->dbcon,"SELECT l.name 

                                                FROM dblogin as l
                                            
                                                where l.name  IS NOT NULL ORDER BY l.name 
                                                    ");
                                                return $result;
        }

        public function fetchonerecordloguse($loguseid){
            $result = mysqli_query($this->dbcon,"SELECT * FROM dblogin WHERE idlogin = '$loguseid'");
            return $result ;
        }

        public function updateloguse($idlogin,$username,$password,$name,$level,$loguseid) {
            $result = mysqli_query($this->dbcon,"UPDATE dblogin SET
                idlogin ='$idlogin',
                username ='$username',
                password ='$password',
                name ='$name' ,              
                level ='$level'
                WHERE idlogin = '$loguseid'
            ");
            return $result ;
        }

        public function deleteloguse($loguseid){
        $deleterecord = mysqli_query($this->dbcon, "DELETE FROM dblogin WHERE idlogin = '$loguseid'");
        return $deleterecord;
        }

    }
?>