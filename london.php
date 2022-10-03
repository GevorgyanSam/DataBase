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
    <title>London</title>
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
                            <h1>London</h1>
                            <h3>London News</h3>
                        </div>
                    </div>
                </div>
                <div class="main">
                    <h2>Can electrical stimulation improve your gym workout?</h2>
                    <p>The first time that long-distance rower Lebby Eyres tried exercising in the gym while wearing a whole-body electrical muscle stimulation (EMS) suit, she says "it felt strange".</p>
                    <p>"I got into the suit, and then trainers sprayed me with water, and strapped these things around my arms, legs and glutes (buttocks)," says the 51-year-old. "I thought to myself, 'am I really going to be able to exercise wearing these?'</p>
                    <p>"Then the [electrical] stimulus of the machine gave me the most unusual sensations."</p>
                    <p>When she woke up the following morning at home in London, Mrs Eyres says her muscles had the level of soreness that she typically got from working out for a few hours, yet she had only exercised for 20 minutes.</p>
                    <p>Using low currents of electricity to stimulate muscles and nerves, it is also often used by mothers during childbirth, in the form of a piece of equipment called a tens machine, to try to alleviate the pain. This sees the woman fix sticky pads to her lower back, and then use a hand-held controller to adjust the level of electrical charge that the pads emit.</p>
                    <p>While those health usages typically focus on one area of the body, whole-body EMS suits (which typically comprise a short-sleeved top and shorts) are now a fast-growing trend in the fitness and gym world.</p>
                    <h2>Drax: UK power station owner cuts down primary forests in Canada</h2>
                    <p>By Joe Crowley and Tim Robinson BBC Panorama</p>
                    <p>A company that has received billions of pounds in green energy subsidies from UK taxpayers is cutting down environmentally-important forests, a BBC Panorama investigation has found.</p>
                    <p>Drax runs Britain's biggest power station, which burns millions of tonnes of imported wood pellets - which is classed as renewable energy. The BBC has discovered some of the wood comes from primary forests in Canada.</p>
                    <p>The company says it only uses sawdust and waste wood.</p>
                    <p>Panorama analysed satellite images, traced logging licences and used drone filming to prove its findings. Reporter Joe Crowley also followed a truck from a Drax mill to verify it was picking up whole logs from an area of precious forest.</p>
                    <p>Ecologist Michelle Connolly told Panorama the company was destroying forests that had taken thousands of years to develop.</p>
                    <p>"It's really a shame that British taxpayers are funding this destruction with their money. Logging natural forests and converting them into pellets to be burned for electricity, that is absolutely insane," she said.</p>
                    <p>The Drax power station in Yorkshire is a converted coal plant, which now produces 12% of the UK's renewable electricity.</p>
                    <p>It has already received £6bn in green energy subsidies. Burning wood is considered green, but it is controversial among environmentalists.</p>
                </div>
            </div>
        </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/mexico.js"></script>
</body>
</html>