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
    <title>Canada</title>
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
                            <h1>Canada</h1>
                            <h3>Canada News</h3>
                        </div>
                    </div>
                </div>
                <div class="main">
                    <h2>Why Torontonians are facing a 'staggering' spike in auto thefts — and what police are doing about it</h2>
                    <p>Patricia Li's year began with the theft of a Lexus NX 300 from her Toronto home — but that was just the beginning of her troubles. Five months later, thieves returned in the middle of the night for her other vehicle, a Lexus RX 450, but this time they weren't as lucky.</p>
                    <p>After the first theft in February, Li installed a video camera that captured footage of three people attempting to break into the car. "It's really scary because they were so close," Li told CBC News. "Who knows what could have happened ... if I had woken in the middle of the night and saw them and then I approached them?"</p>
                    <p>The footage appears to show one person trying to break open the door handle while two others place some sort of towel over the front headlights. Within minutes, Li says, the vehicle's alarm connected to the engine immobilizer went off. The video shows the three running off as the lights on the car begin to flash.</p>
                    <p>Li is one of thousands of Torontonians who have been impacted by a dramatic increase in auto thefts this year. As of Sept. 26, there have been 6,497 thefts reported to Toronto police. When compared with all of 2021, which saw 4,498 reports, that's nearly a 45 per cent increase with three months of the year remaining.</p>
                    <p>Carjackings, which are counted separately and investigated by a different team, are up 209 per cent, rising from 58 to 179. CBC News is investigating why an increasing number of Torontonians are falling victim to thefts and what community groups, politicians and police are trying to do to stem the rising wave of crimes.</p>
                    <h2>Frustrations running high</h2>
                    <p>The issue of auto theft has become so pervasive that some neighbourhood groups have been working to collect and share data themselves and spread awareness within their communities to help protect each other.</p>
                    <p>"We do the neighbourhood watch program ... to try and communicate prevention techniques, but there's just only so much people can do — and that's really the problem," said Pam Main, of the Upper Avenue Community Association in Toronto's North York neighbourhood.</p>
                    <p>Main said members of the  group have watched auto thefts creep up significantly since 2019, and alongside the neighbouring group — the  South Armour Heights Residents' Association — they've been pushing for more police resources to be allocated to address the issue.</p>
                    <p>Prior to the inception of the Organized Crime Investigative Support Team, some police divisions — including 32 Division, which covers the area of both neighbourhood groups — had their own teams dedicated to tackling auto theft in those areas. However, those personnel have since been reallocated to support the Organized Crime Investigative Support Team, which now leads all complex auto theft investigations across the police service.</p>
                    <h2>Government support</h2>
                    <p>Given how multi-jurisdictional the problem is, some local politicians say more support is needed from both the province and the federal government.</p>
                    <p>"This is not just local crime; this is international organized crime worth billions of dollars where cars are going to ports in Montreal, Halifax," said Mike Colle, a Toronto councillor who introduced a motion last December — which passed — calling on the Ontario government to create a task force to combat the rise in auto theft.</p>
                    <p>No provincial task force has been set up, but in a statement to CBC News, Ontario's Ministry of the Solicitor General said it's already working with the federal government on the issue, investing $203 million to combat gun and gang crime, which it claims is linked to many auto thefts. It also touted money allocated for police services to purchase technology to help identify stolen vehicles.</p>
                    <p>A spokesperson for federal Public Safety Minister Marco Mendicino told CBC News the department is working to bring all levels of government and law enforcement together to create a task force to address this "alarming" issue.</p>
                </div>
            </div>
        </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/mexico.js"></script>
</body>
</html>