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

    $edit_state = false;

    $header = "";
    $description = "";
    $id = 0;

    $headerErr = $descriptionErr = $fileErr = $imageLabelName = "";

    if(isset($_POST["create"])) {

        $imageLabelName = "Select";

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
                move_uploaded_file($_FILES["file"]["tmp_name"], "img/$image");
                header("Location: welcome.php");
            }
            
        }
        
    }

    if(isset($_GET["del"])) {
        $id = $_GET["del"];

        mysqli_query($conn, "DELETE FROM `news` WHERE `id`=$id");
        header("Location: welcome.php");
    }

    $result = mysqli_query($conn, "SELECT * FROM `news`");
    
?>