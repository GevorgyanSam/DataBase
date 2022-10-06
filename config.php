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

    $headerErr = $descriptionErr = $fileErr = "";

    if(isset($_POST["create"])) {

        if(empty($_POST["header"])) {
            $headerErr = "Please Enter The Header";
        } else {
            $header = $_POST["header"];
        }

        if(empty($_POST["description"])) {
            $descriptionErr = "Please Enter A Description";
        } else {
            $description = $_POST["description"];
        }

        if(empty($_FILES["file"]["name"])) {
            $fileErr = "Please Select An Image";
        } else {
            $image = $_FILES["file"]["name"];
        }

        if($header != "" && $description != "" && isset($image)) {

            $result = mysqli_query($conn, "INSERT INTO `news` (`id`, `header`, `description`, `file`) VALUES (NULL, '$header', '$description', '$image')");

            if($result) {
                move_uploaded_file($_FILES["file"]["tmp_name"], "$image");
            }
            
        }
        
    }
    
?>