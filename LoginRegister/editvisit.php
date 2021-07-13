<?php
//edit visit videocall option for specific patient
##not usee
require "DataBase.php";
$db = new DataBase();
//if (isset($_POST['patientid']) && isset($_POST['day']) && isset($_POST['time']) && isset($_POST['isvideocall'])) {
    if ($db->dbConnect()) {
        if ($db->editvisit(1 ,'2021-07-13' ,'12:00:00' , '0')) {
            echo "Visit edited successfully";
        } else echo "editting Failed";
    } else echo "Error: Database connection";
//} else echo "All fields are required";
?>