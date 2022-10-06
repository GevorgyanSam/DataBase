<?php

    session_start();

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "personal_website_sam";

    $conn = mysqli_connect($server, $user, $pass, $db);

    if(!$conn) {
        die("<script>alert('Connection Failed')</script>");
    }

    $header = "";
    $description = "";
    $id = 0;

    if(isset($_POST["create"])) {
        $header = $_POST["header"];
        $description = $_POST["description"];
        $image = $_FILES["file"]["name"];

        $result = mysqli_query($conn, "INSERT INTO `news` (`id`, `header`, `description`, `file`) VALUES (NULL, '$header', '$description', '$image')");

        if($result) {
            move_uploaded_file($_FILES["file"]["tmp_name"], "$image");
        }

        
    }
    
?>