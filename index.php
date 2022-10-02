<?php require "config.php"; ?>

<?php

    session_start();

    error_reporting(0);

    if(isset($_SESSION["name"]) && isset($_SESSION["lastname"])) {
        header("Location: welcome.php");
    }

    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $Login = $_POST["login"];
        $Password = md5($_POST["password"]);

        $result = mysqli_query($conn, "SELECT * FROM `users` WHERE `username` = '$Login' AND `password` = '$Password'");

        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION["name"] = $row["name"];
            $_SESSION["lastname"] = $row["lastname"];
            $_SESSION["login"] = $row["username"];
            header("Location: welcome.php");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <title>Login</title>
</head>
<body>
    <div class="loginParent">
        <div class="parent">
            <div>
                <h1>Login</h1>
            </div>
            <div>
                <form action="" method="post" autocomplete="off">
                    <div class="login">
                        <i class="fa-regular fa-user" id="loginIcon"></i>
                        <input type="text" placeholder="Login" id="login" name="login" value="<?php echo $Login ?>">
                    </div>
                    <div class="password">
                        <i class="fa-solid fa-lock" id="passwordIcon"></i>
                        <input type="password" placeholder="Password" id="password" name="password" value="<?php echo $_POST["password"] ?>">
                        <i class="fa-regular fa-eye-slash" id="eye"></i>
                    </div>
                    <div class="submit">
                        <button type="submit">Continue</button>
                    </div>
                </form>
            </div>
            <div class="anotherWay">
                <span>OR</span>
            </div>
            <div class="register">
                <span>
                    Don't Have An Account Yet ? <br> 
                    <a href="registration.php">Register</a>
                </span>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>