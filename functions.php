<?php

    define('db_server','localhost');
    define('db_user','root');
    define('db_pass','');
    define('db_name','expmykits');
    

    class db_con{

        function __construct() {
            $conn = mysqli_connect(db_server,db_user,db_pass,db_name);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()){
                echo "Failed toconnect to Mysqli : " . mysqli_connect_error();
            }
        }

////////////tbuser
        public function insertus($nameuser,$addressuser,$phoneuser,$idprefix,$idsex,$idposition){
            $result = mysqli_query($this->dbcon,"INSERT INTO dbuser( nameuser, addressuser,phoneuser, idprefix, idsex, idposition)
            values('$nameuser','$addressuser','$phoneuser','$idprefix','$idsex','$idposition' )");
            return $result;
        }
        

        // SELECT * FROM dbuser
        public function fetchdatauser(){
                $result = mysqli_query($this->dbcon,"SELECT u.iduser, u.nameuser ,u.addressuser,u.phoneuser, p.nameprefix,s.namesex, f.namepossition
                
                                                     FROM dbprefix as p

                                                     INNER JOIN dbuser as u ON p.idprefix = u.idprefix
                                                     INNER JOIN dbsex as s ON s.idsex = u.idsex
                                                     INNER JOIN dbposition as f ON f.idposition = u.idposition
                                                     where u.iduser IS NOT NULL ORDER BY u.iduser");
                                                     return $result;
        }
    
        public function fetchonerecord($userid){
            $result = mysqli_query($this->dbcon,"SELECT * FROM dbuser WHERE iduser = '$userid'");
            return $result ;
        }

        public function updateus($iduser,$nameuser,$addressuser,$phoneuser,$idprefix,$idsex,$idposition,$userid) {
                $result = mysqli_query($this->dbcon,"UPDATE dbuser SET
                     iduser ='$iduser',
                     nameuser ='$nameuser',
                     addressuser ='$addressuser',
                     phoneuser ='$phoneuser',
                     idprefix ='$idprefix',
                     idsex ='$idsex',
                     idposition ='$idposition'
                     WHERE iduser = '$userid'
                ");
                return $result ;
        }

        public function delete($userid){
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM dbuser WHERE iduser = '$userid'");
            return $deleterecord;
        }


        ////////////tbsentaddmin
        public function insertsentaddmin($namesentaddmin){
            $result = mysqli_query($this->dbcon,"INSERT INTO dbsentaddmin( namesentaddmin )
                                                values('$namesentaddmin') ;
                                                ");
                                                
            return $result;
        }

        public function fetchdatasentaddmin(){
            $result = mysqli_query($this->dbcon,"SELECT sa.idsentaddmin,sa.namesentaddmin

                                                FROM dbsentaddmin as sa
                                            
                                                where sa.idsentaddmin  IS NOT NULL ORDER BY sa.idsentaddmin
                                                    ");
                                                return $result;
        }

        public function deletesentaddmin($sentaddminid){
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM dbsentaddmin WHERE idsentaddmin = '$sentaddminid'");
            return $deleterecord;
            }




    }