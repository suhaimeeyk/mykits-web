<?php 

    $connect = new PDO("mysql:host=localhost;dbname=expmykits", "root", "" );
    $receiced_data = json_decode(file_get_contents("php://input"));
    $data = array(); ////ssssssss

    if ($receiced_data->action == "fetchall") {
        $query = "SELECT * FROM dbsentaddmin";
        $statement = $connect->prepare($query);
        $statement->execute();
        while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
        echo json_encode($data);
    }

    if ($receiced_data->action == "fetchregister") {
        $query = "SELECT * FROM dbuser";
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

?>