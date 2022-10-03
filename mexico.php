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
    <link rel="stylesheet" href="css/mexico.css">
    <link rel="stylesheet" href="css/mexicoMedia.css">
    <title>Mexico</title>
</head>
<body>





                                    <!-- Navigation -->





    <header>
        <?php require "section/nav.php"; ?>
    </header>





                                    <!-- Home -->





    <main>
        <div id="parent">
            <div class="parent">
                <div class="header">
                    <div>
                        <div class="scroll">
                            <h1>Mexico</h1>
                            <h3>Mexico News</h3>
                        </div>
                    </div>
                </div>
                <div class="main">
                    <h2>Hackers leak thousands of Defense Ministry documents</h2>
                    <p>The leak also revealed details of past security debacles</p>
                    <p>President López Obrador has confirmed that an international group of hackers stole thousands of emails from the IT system of the Ministry of National Defense (Sedena).</p>
                    <p>The messages and attached documents – some of which contain information about President López Obrador’s medical issues including a serious heart problem he suffered earlier this year – were leaked to the media outlet Latinus by the Guacamaya group of Central American hackers.</p>
                    <p>Carlos Loret de Mola, a Latinus journalist, presented details about the leaked information during his online program on Thursday.</p>
                    <h2>No more skyscrapers planned for controversial CDMX development, mayor says</h2>
                    <p>Required public consultations on the project never happened, the protesters said</p>
                    <p>Mexico City’s Mítikah commercial complex, which includes what is now the tallest tower in the metropolis, opened on Friday after 14 years of construction. But protesters in the Xoco neighborhood where the complex is located said the area lacks the infrastructure to support such a large development.</p>
                    <p>On Friday, protesters took to the streets around the complex, which includes a shopping mall, residences and office space on the border between the Benito Juárez and Coyoacán boroughs. They blocked traffic to fight for their cause, wearing signing that said “Claudia, understand, Xoco is not for sale,” referring to</p>
                    <p>Mexico City Mayor Claudia Sheinbaum.</p>
                    <h2>This New Yorker helped Puebla find a lost cultural tradition</h2>
                    <p>Cayuqui Estage Noel was central to founding Atlixco's Atlixcáyotl festival in 1965</p>
                    <p>By Joseph Sorrentino</p>
                    <p>The Huei Atlixcáyotl festival, Puebla’s huge event of traditional dance that takes place every September in Atlixco, has roots in the pre-Hispanic Nahuatl peoples of the area, but it wouldn’t exist today if not for a New Yorker.</p>
                    <p>To say Cayuqui Estage Noel has had an interesting and peripatetic life would be a gross understatement. Born Raymond Harvey Estage Noel in Buffalo, he has lived in Mexico since 1954, and except for a couple of trips to New York to earn money and a few others to Guatemala, he’s never left, bouncing between Atlixco and Oaxaca, Campeche and other parts of Puebla.</p>
                </div>
            </div>
        </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/mexico.js"></script>
</body>
</html>