<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "personal_website_sam";

    $conn = mysqli_connect($server, $user, $pass, $db);

    if(!$conn) {
        die("<script>alert('Connection Failed')</script>");
    }
    
?>