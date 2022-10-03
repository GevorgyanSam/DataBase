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
                            <a href="#">
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
                            <a href="#">
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
                            <a href="#">
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
                            <a href="#">
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
                            <a href="#">
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
                            <a href="#">
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
                            <a href="#">
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
                            <a href="#">
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
                    <a href="#">
                        <div class="newsChild">
                            <div class="newsHeader">
                                <h1>Mexico</h1>
                                <p>Mexico News</p>
                            </div>
                            <div class="newsContent">
                                <p>President López Obrador has confirmed that an international group of hackers stole thousands of emails from the IT system of the Ministry of National Defense (Sedena).</p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="newsChild">
                            <div class="newsHeader">
                                <h1>USA</h1>
                                <p>New York News</p>
                            </div>
                            <div class="newsContent">
                                <p>During the building search, a hotel room was found to contain manuals related to the making of explosive devices, as well as materials with the potential to be ...</p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="newsChild">
                            <div class="newsHeader">
                                <h1>Canada</h1>
                                <p>Canada News</p>
                            </div>
                            <div class="newsContent">
                                <p>Patricia Li's year began with the theft of a Lexus NX 300 from her Toronto home — but that was just the beginning of her troubles. Five months later ...</p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="newsChild">
                            <div class="newsHeader">
                                <h1>London</h1>
                                <p>London News</p>
                            </div>
                            <div class="newsContent">
                                <p>The first time that long-distance rower Lebby Eyres tried exercising in the gym while wearing a whole-body electrical muscle stimulation (EMS) suit, she says "it felt strange".</p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="newsChild">
                            <div class="newsHeader">
                                <h1>France</h1>
                                <p>France News</p>
                            </div>
                            <div class="newsContent">
                                <p>UK Chancellor backtracks on controversial plan to cut top tax rate UK government made a U-turn over unpopular proposal to abolish highest tax band after growing backlash over mini-budget.</p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="newsChild">
                            <div class="newsHeader">
                                <h1>Russia</h1>
                                <p>Russia News</p>
                            </div>
                            <div class="newsContent">
                                <p>NATO chief says alliance to give united response to any attack on critical infrastructure Any deliberate attack on critical NATO infrastructure will be met with ...</p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="newsChild">
                            <div class="newsHeader">
                                <h1>Korea</h1>
                                <p>Korea News</p>
                            </div>
                            <div class="newsContent">
                                <p>After flurry of missile launches, N.Korean media dismiss allies’ moves to sharpen deterrence Propaganda outlets ratchet up attacks on S.Korea’s defense strategy to reinforce alliance’s </p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="newsChild">
                            <div class="newsHeader">
                                <h1>China</h1>
                                <p>China News</p>
                            </div>
                            <div class="newsContent">
                                <p>CHENGDU, China, Oct. 2 (Xinhua) -- Chinese men's and women's paddlers both registered their second victories in as many group matches at the World Team Championships here on Sunday.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </section>
        </main>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/welcome.js"></script>
</body>
</html>