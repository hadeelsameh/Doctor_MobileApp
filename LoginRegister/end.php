<?php

// retrive all available patients ids
require "DataBase.php";
$db = new DataBase();
//if (isset($_POST['username']) && isset($_POST['id'])) {
    if ($db->dbConnect()) {
        if ($response = $db->End()) {
            echo  $response;
        } else echo $response;
    } else echo "Error: Database connection";
//} else echo "All Fields Are Required"
?>