<?php
//upadate vital signs

require "DataBase.php";
$db = new DataBase();

$data = json_decode(file_get_contents('php://input'), true);

    if ($db->dbConnect()) {
        if ($db->update_vs($data['patientid'] ,$data['temprature'],$data['spo'],$data['heartrate'])) {
            echo 'successfully updated';
        } else echo "editting Failed";
    } else echo "Error: Database connection";

?>