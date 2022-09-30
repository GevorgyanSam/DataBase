<?php
    session_start();

    if(!isset($_SESSION["name"]) && !isset($_SESSION["lastname"])) {
        header("Location: index.php");
    }

    $Name = $_SESSION["name"];
    $LastName = $_SESSION["lastname"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/welcome.css">
    <link rel="stylesheet" href="css/welcomeMedia.css">
    <title>Welcome</title>
</head>
<body>
    <div class="animationParent">
        <div>
            <h2>Welcome</h2>
            <h3><?php echo "$Name $LastName";?></h3>
        </div>
    </div>
    <div class="documentParent">
        <header>
            <nav>
                <div class="navParent">
                    <div class="navChild">
                        <h2>Website Logo</h2>
                    </div>
                    <div class="navChild">
                        <a href="logout.php">
                        <div class="logout">
                            <h3>Log Out</h3>
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        </div>
                        </a>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/welcome.js"></script>
</body>
</html>