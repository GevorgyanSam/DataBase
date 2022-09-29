<?php
    require "config.php";
?>

<?php

    $ErrName = $ErrLastName = $ErrEmail = $ErrUserName = $ErrPassword = $ErrPasswordConfirm = "";
    $Name = $LastName = $Email = $UserName = $Password = $PasswordConfirm = "";

    if($_SERVER["REQUEST_METHOD"] === "POST") {

        if(empty($_POST["name"])) {
            $ErrName = "Please Enter Your Name";
        } else {
            $Name = test($_POST["name"]);
        }

        if(empty($_POST["lastName"])) {
            $ErrLastName = "Please Enter Your Last Name";
        } else {
            $LastName = test($_POST["lastName"]);
        }

        if(empty($_POST["email"])) {
            $ErrEmail = "Please Enter Your Email";
        } else {
            if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $ErrEmail = "Please Enter Valide Email Address";
            } else {
                $Email = test($_POST["email"]);
            }
        }

        if(empty($_POST["userName"])) {
            $ErrUserName = "Please Enter Your User Name";
        } else {
            if(strlen($_POST["userName"]) >= 3) {
                $UserName = test($_POST["userName"]);
            } else {
                $ErrUserName = "User Name Must Contain More <br> Than 3 Symbols";
            }
        }

        if(empty($_POST["password"])) {
            $ErrPassword = "Please Enter Your Password";
        } else {
            if(strlen($_POST["password"]) >= 8) {
                $Password = test($_POST["password"]);
                $Password = md5($Password);
            } else {
                $ErrPassword = "Password Must Contain More <br> Than 8 Symbols";
            }
        }

        if(empty($_POST["passwordConfirm"])) {
            $ErrPasswordConfirm = "Enter Your Password";
        } else {
            if($_POST["passwordConfirm"] === $_POST["password"]) {
                $PasswordConfirm = test($_POST["passwordConfirm"]);
                $PasswordConfirm = md5($PasswordConfirm);
            } else {
                $ErrPasswordConfirm = "Enter Your Password";
            }
        }

    }

    function test($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if($Name !== "" && $LastName !== "" && $Email !== "" && $UserName !== "" && $Password !== "") {

        $result = mysqli_query($conn, "SELECT * FROM `users` WHERE `username` = '$UserName' AND `email` = '$Email'");
        
        if(!mysqli_num_rows($result) > 0) {
            mysqli_query($conn, "INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `username`, `password`) VALUES (NULL, '$Name', '$LastName', '$Email', '$UserName', '$Password')");
            header("Location: index.php");
        }

    }

?>