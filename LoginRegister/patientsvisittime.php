<?php
date_default_timezone_set('EET');
// retrive  patient id that are being treated by dr username and have comming visits date
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['username']) && isset($_POST['id'])) {
    if ($db->dbConnect()) {
        if ($response = $db->retrivepatientcomingvisits($_POST['username'] , $_POST['id'])) {
            echo  $response;
        } else echo $response;
    } else echo "Error: Database connection";
} else echo "All Fields Are Required"
?>