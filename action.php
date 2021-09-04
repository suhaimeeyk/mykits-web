<?php 

    $connect = new PDO("mysql:host=localhost;dbname=expmykits", "root", "" );
    $receiced_data = json_decode(file_get_contents("php://input"));
    $data = array(); 

    if ($receiced_data->action == "fetchall") {
        $query = "SELECT * FROM dbsentaddmin";
        $statement = $connect->prepare($query);
        $statement->execute();
        while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
        echo json_encode($data);
    }

    if ($receiced_data->action == 'sentaddmin') {
        $data = array(
            ':namesentaddmin' => $receiced_data->namesentaddmin,
        );

        $query = " INSERT INTO dbsentaddmin(namesentaddmin)
                    VALUES (:namesentaddmin)";
        
        $statement = $connect->prepare($query);
        $statement -> execute($data);
        $output = array(
            'message' => 'คุณได้ทำการส่งคำขอไปแล้ว'
        );
        
        echo json_encode($output);
    }

    if ($receiced_data->action =='delete') {
        $query = "DELETE FROM dbsentaddmin WHERE idsentaddmin = '".$receiced_data->idsentaddmin."' ";

        $statement = $connect->prepare($query);
        $statement ->execute();

        $output = array(
            'message' => 'Delete data'
        );
        echo json_encode($output);
    }

//dbuser
    if ($receiced_data->action == "fetchregister") {
        $query = "SELECT u.iduser, u.nameuser ,u.addressuser,u.phoneuser, p.nameprefix,s.namesex, f.namepossition
                
                    FROM dbprefix as p

                    INNER JOIN dbuser as u ON p.idprefix = u.idprefix
                    INNER JOIN dbsex as s ON s.idsex = u.idsex
                    INNER JOIN dbposition as f ON f.idposition = u.idposition
                    where u.iduser IS NOT NULL ORDER BY u.iduser";

        $statement = $connect->prepare($query);
        $statement->execute();
        while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
        echo json_encode($data);
    }
    if ($receiced_data->action == 'insertuser') {
        $data = array(
            ':idprefix' => $receiced_data->idprefix,
            ':nameuser' => $receiced_data->nameuser,
            ':addressuser' => $receiced_data->addressuser,
            ':phoneuser' => $receiced_data->phoneuser,
            ':idsex' => $receiced_data-> idsex,
            ':idposition' => $receiced_data-> idposition,
        );

        $query = " INSERT INTO dbuser(idprefix, nameuser, addressuser , phoneuser , idsex , idposition)
                    VALUES (:idprefix, :nameuser ,:addressuser , :phoneuser , :idsex , :idposition)";
        
        $statement = $connect->prepare($query);
        $statement -> execute($data);
        $output = array(
            'message' => 'Data Inserted'
        );
        
        echo json_encode($output);
    }

    if ($receiced_data->action == 'fetchUser') {
        $query = "SELECT * FROM dbuser WHERE iduser = '".$receiced_data->iduser."' " ;
        $statement = $connect->prepare($query);
        $statement -> execute();
        $result = $statement->fetchAll();

        foreach($result as $row) {
            $data['iduser'] = $row['iduser'];
            $data['nameuser'] = $row['nameuser'];
            $data['addressuser'] = $row['addressuser'];
            $data['phoneuser'] = $row['phoneuser'];
            $data['idprefix'] = $row['idprefix'];
            $data['idsex'] = $row['idsex'];
            $data['idposition'] = $row['idposition'];
        }
        echo json_encode($data);
    }

    if($receiced_data->action == 'updateuser') {
        $data = array(
            ':idprefix' => $receiced_data->idprefix,
            ':nameuser' => $receiced_data->nameuser,
            ':addressuser' => $receiced_data->addressuser,
            ':phoneuser' => $receiced_data->phoneuser,
            ':idsex' => $receiced_data->idsex,
            ':idposition' => $receiced_data->idposition,
            ':iduser' => $receiced_data->hiddenId,
        );

        $query = "UPDATE dbuser SET idprefix = :idprefix,nameuser = :nameuser, addressuser = :addressuser,
                  phoneuser = :phoneuser, idsex = :idsex, idposition = :idposition WHERE iduser = :iduser ";

        $statement = $connect->prepare($query);
        $statement -> execute($data);
        $output = array(
            'message' => 'Data updated'
        );
        echo json_encode($output);
    }

    if ($receiced_data->action =='deleteUser') {
        $query = "DELETE FROM dbuser WHERE iduser = '".$receiced_data->iduser."' ";

        $statement = $connect->prepare($query);
        $statement ->execute();

        $output = array(
            'message' => 'Delete data'
        );
        echo json_encode($output);
    }


?>