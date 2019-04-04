<?php
 function OpenCon()
    {
        error_reporting(E_ALL);
        ini_set('display_errors', 'On');
        $host = "localhost";
        $username = "csc318";
        $password = "n2E9g9VGbVRv";
        $dbname = "csc318";

        $conn = new mysqli($host, $username, $password, $dbname);

        if($conn->connect_error) {
        	die("Connection failed: ". $conn->connect_error);
        }

         return $conn;
    }
 
    function CloseCon($conn)
    {
        $conn -> close();
    }
?>