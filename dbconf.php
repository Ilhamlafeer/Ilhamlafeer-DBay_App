<?php
//This is separate file to connect the database
//constant variable
define('SERVERNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DBNAME', 'dbay');

//Use Try-Catch to find errors
try{
    //connect with database
    $connect = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);

    if(!$connect) {
        die("connection failed");
    }   else {
        echo "";
    }
}
catch (Exception $e) {
    die($e->getMessage());
}