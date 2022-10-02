<?php
    session_start();

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
            <nav>
                <div class="navParent">
                    <div class="navChild">
                        <h2><?=$Login?></h2>
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
            <section id="portfolio">
                <div class="portfolioParent">
                    <div class="portfolioHeaderParent">
                        <h1>News</h1>
                    </div>
                    <div class="gridParent">
                        <div class="gridChild news1">
                            <a href="#">
                                <img class="gridImg" src="https://travellersworldwide.com/wp-content/uploads/2022/04/shutterstock_245778223.jpg" alt="">
                                <span>
                                    <div class="gridContent">
                                        <h2>Mexico</h2>
                                        <p>Mexico News</p>
                                    </div>
                                </span>
                            </a>
                        </div>
                        <div class="gridChild news2">
                            <a href="#">
                                <img class="gridImg" src="https://gdb.voanews.com/148CB728-5E6B-4A7A-86DF-22E4F0597D0F_w1200_r1.jpg" alt="">
                                <span>
                                    <div class="gridContent">
                                        <h2>USA New York</h2>
                                        <p>New York News</p>
                                    </div>
                                </span>
                            </a>
                        </div>
                        <div class="gridChild news3">
                            <a href="#">
                                <img class="gridImg" src="https://www.commonwealthfund.org/sites/default/files/styles/countries_hero_desktop/public/country_image_Canada.jpg?h=f2fcf546&itok=tfGdKLUg" alt="">
                                <span>
                                    <div class="gridContent">
                                        <h2>Canada</h2>
                                        <p>Canada News</p>
                                    </div>
                                </span>
                            </a>
                        </div>
                        <div class="gridChild news4">
                            <a href="#">
                                <img class="gridImg" src="http://london.com/wp-content/uploads/2017/04/London-Bridge-and-Big-Ben-at-Night-1-1-2.jpg" alt="">
                                <span>
                                    <div class="gridContent">
                                        <h2>London</h2>
                                        <p>London News</p>
                                    </div>
                                </span>
                            </a>
                        </div>
                        <div class="gridChild news5">
                            <a href="#">
                                <img class="gridImg" src="https://worldstrides.com/wp-content/uploads/2017/06/France_Mediterranean_Spain-min.jpg" alt="">
                                <span>
                                    <div class="gridContent">
                                        <h2>France</h2>
                                        <p>France News</p>
                                    </div>
                                </span>
                            </a>
                        </div>
                        <div class="gridChild news6">
                            <a href="#">
                                <img class="gridImg" src="https://www.tripsavvy.com/thmb/pXawGeVMnK5IvMUEQ2z9_8mDiF0=/2121x1414/filters:fill(auto,1)/the-church-of-the-savior-on-spilled-blood-503257072-7640c6e055374240b7e6cb9033a6ec81.jpg" alt="">
                                <span>
                                    <div class="gridContent">
                                        <h2>Russia</h2>
                                        <p>Russia News</p>
                                    </div>
                                </span>
                            </a>
                        </div>
                        <div class="gridChild news7">
                            <a href="#">
                                <img class="gridImg" src="https://media.nomadicmatt.com/2022/koreaguide1.jpg" alt="">
                                <span>
                                    <div class="gridContent">
                                        <h2>Korea</h2>
                                        <p>Korea News</p>
                                    </div>
                                </span>
                            </a>
                        </div>
                        <div class="gridChild news8">
                            <a href="#">
                                <img class="gridImg" src="https://i.ytimg.com/vi/Hx1MpIwZHRQ/maxresdefault.jpg" alt="">
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
        </main>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/welcome.js"></script>
</body>
</html>