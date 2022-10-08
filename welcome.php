<?php
    include("config.php") ;

    if(!isset($_SESSION["name"]) && !isset($_SESSION["lastname"])) {
        header("Location: index.php");
    }

    $Name = $_SESSION["name"];
    $LastName = $_SESSION["lastname"];
    $Login = $_SESSION["login"];

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





                                        <!-- Navigation -->





            <?php require "section/nav.php"; ?>





                                        <!-- Home -->




                                        
            <div class="homeParent">
                <div class="homeContent">
                    <a href="#portfolio">
                        <div class="homeScroll">
                            <h1>Scroll Down</h1>
                        </div>
                    </a>
                </div>
            </div>
        </header>
        <main>





                                        <!-- Portfolio -->




                                        
            <section id="portfolio">
                <div class="portfolioParent">
                    <div class="portfolioHeaderParent">
                        <h1>News</h1>
                    </div>
                    <div class="gridParent">
                        <div class="gridChild news1">
                            <a href="mexico.php" target="_blank">
                                <img class="gridImg" src="img/portfolio1.jpg" alt="">
                                <span>
                                    <div class="gridContent">
                                        <h2>Mexico</h2>
                                        <p>Mexico News</p>
                                    </div>
                                </span>
                            </a>
                        </div>
                        <div class="gridChild news2">
                            <a href="usa.php" target="_blank">
                                <img class="gridImg" src="img/portfolio2.webp" alt="">
                                <span>
                                    <div class="gridContent">
                                        <h2>USA New York</h2>
                                        <p>New York News</p>
                                    </div>
                                </span>
                            </a>
                        </div>
                        <div class="gridChild news3">
                            <a href="canada.php" target="_blank">
                                <img class="gridImg" src="img/portfolio3.jpg" alt="">
                                <span>
                                    <div class="gridContent">
                                        <h2>Canada</h2>
                                        <p>Canada News</p>
                                    </div>
                                </span>
                            </a>
                        </div>
                        <div class="gridChild news4">
                            <a href="london.php" target="_blank">
                                <img class="gridImg" src="img/portfolio4.jpg" alt="">
                                <span>
                                    <div class="gridContent">
                                        <h2>London</h2>
                                        <p>London News</p>
                                    </div>
                                </span>
                            </a>
                        </div>
                        <div class="gridChild news5">
                            <a href="france.php" target="_blank">
                                <img class="gridImg" src="img/portfolio5.jpg" alt="">
                                <span>
                                    <div class="gridContent">
                                        <h2>France</h2>
                                        <p>France News</p>
                                    </div>
                                </span>
                            </a>
                        </div>
                        <div class="gridChild news6">
                            <a href="russia.php" target="_blank">
                                <img class="gridImg" src="img/portfolio6.jpg" alt="">
                                <span>
                                    <div class="gridContent">
                                        <h2>Russia</h2>
                                        <p>Russia News</p>
                                    </div>
                                </span>
                            </a>
                        </div>
                        <div class="gridChild news7">
                            <a href="korea.php" target="_blank">
                                <img class="gridImg" src="img/portfolio7.jpg" alt="">
                                <span>
                                    <div class="gridContent">
                                        <h2>Korea</h2>
                                        <p>Korea News</p>
                                    </div>
                                </span>
                            </a>
                        </div>
                        <div class="gridChild news8">
                            <a href="china.php" target="_blank">
                                <img class="gridImg" src="img/portfolio8.jpg" alt="">
                                <span>
                                    <div class="gridContent">
                                        <h2>China</h2>
                                        <p>China News</p>
                                    </div>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>





                                        <!-- News -->





            <section id="news">
                <div class="newsParent">
                    <?php while($row = mysqli_fetch_array($result)) {  ?>
                        <div class="newsChild">
                            <div class="contentImage">
                                <img src="img/<?php echo $row["file"] ?>">
                            </div>
                            <div class="contentMain">
                                <div>
                                    <h2><?php echo $row["header"] ?></h2>
                                </div>
                                <div>
                                    <p><?php echo $row["description"] ?></p>
                                </div>
                            </div>
                            <div class="settings">
                                <i class="fa-solid fa-gear"></i>
                            </div>
                            <div class="contentEdit">
                                <a href="create.php?edit=<?php echo $row["id"]?>" class="edit">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>
                                <a href="create.php?del=<?php echo $row["id"]?>" class="delete">
                                    <i class="fa-regular fa-trash-can"></i>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </section>
        </main>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/welcome.js"></script>
</body>
</html>