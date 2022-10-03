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
    <title>Russia</title>
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
                            <h1>Russia</h1>
                            <h3>Russia News</h3>
                        </div>
                    </div>
                </div>
                <div class="main">
                    <h2>NATO chief says alliance to give united response to any attack on critical infrastructure</h2>
                    <p>Any deliberate attack on critical NATO infrastructure will be met with a firm and united response from NATO, Jens Stoltenberg said</p>
                    <p>NEW YORK, October 3. /TASS/. NATO will give a firm and united response to any attack on its critical infrastructure, NATO Secretary General Jens Stoltenberg said in an interview to NBC that was aired on Sunday.</p>
                    <p>"Any deliberate attack on critical NATO infrastructure will be met with a firm and united response from NATO," he said.</p>
                    <h2>Russian delegation arrives in Belarus for talks with Ukrainians</h2>
                    <p>Russian delegation is ready to start talks with Ukraine in Gomel, Kremlin Spokesman Dmitry Peskov says</p>
                    <p>MOSCOW, February 27. /TASS/. Russia’s delegation has arrived in Belarus for talks with the Ukrainian side, Kremlin Spokesman Dmitry Peskov said on Sunday.</p>
                    <p>"In line with the agreement, the Russian delegation consisting of representatives of the Foreign Ministry, the Defense Ministry and other agencies, including the presidential administration, has arrived in Belarus for talks with the Ukrainians," Peskov said.</p>
                    <p>"We will be ready to start these talks in Gomel," he stated.</p>
                    <p>The Belarusian Foreign Ministry confirmed the arrival of the Russian delegation in Gomel for talks with Ukraine, noting that Minsk has made the necessary arrangements.</p>
                    <p>"Yes, we confirm this information. The Belarusian side has already prepared everything necessary for talks, it is ensuring in full the solution of all protocol, logistic and other issues," Belarusian Foreign Ministry Spokesperson Anatoly Glaz said.</p>
                    <p>Russia launched its special military operation aimed at demilitarization and denazification of Ukraine on February 24. On Friday, the troop movement was suspended amid expectation of possible talks with Kiev, but resumed on Saturday as Ukraine refused to participate.</p>
                    <p>Earlier, the office of Ukrainian President Vladimir Zelensky said he might discuss Ukraine’s neutral status as well as the package of guarantees for its security.</p>
                    <p>Belarusian President Alexander Lukashenko announced on February 26 that Minsk was ready to provide a venue for holding the negotiations. Late on Saturday, Zelensky said the proposal to arrange talks had been put forward by the presidents of Turkey and Azerbaijan, Recep Tayyip Erdogan and Ilham Aliyev.</p>
                    <h2>Russia-EU contacts not officially severed - diplomat</h2>
                    <p>On Friday, the Committee of Ministers of the Council of Europe decided to suspend Russia from its rights of representation in the Committee of Ministers and in the PACE</p>
                    <p>MOSCOW, February 26. /TASS/. The contacts between Russia and the European Union have not officially stopped, Russian Foreign Ministry Spokeswoman Maria Zakharova said on the YouTube channel Soloviev Live on Saturday.</p>
                    <p>"Officially, we do not have them severed. We have received a decision on the Council of Europe, but it is not a national quality, but the organization where we no longer belong to," she said in response to a question.</p>
                    <p>On Friday, the Committee of Ministers of the Council of Europe decided to suspend Russia from its rights of representation in the Committee of Ministers and in the Parliamentary Assembly of the Council of Europe (PACE).</p>
                    <p>It is the second time when the Council of Europe suspends Russia’s rights. In April 2014, following Crimea’s reunification with Russia, the Russian delegation to the PACE was deprived of the right to vote, to take part in PACE monitoring missions and to be elected to the Assembly’s steering bodies. Russia resumed full-fledged work within the PACE in 2019.</p>
                </div>
            </div>
        </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/mexico.js"></script>
</body>
</html>