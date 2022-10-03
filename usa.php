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
    <title>USA New York</title>
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
                            <h1>USA</h1>
                            <h3>New York News</h3>
                        </div>
                    </div>
                </div>
                <div class="main">
                    <h2>Man shot dead in New York hotel</h2>
                    <p>bomb making materials found in room</p>
                    <p>NEW YORK - Police in Poughkeepsie say a man was shot to death early Sunday in a hotel. A 911 call came in at about 7:30 a.m. of a disturbance at the Courtyard by Marriott on South Road.</p>
                    <p>When police arrived they found a victim who was taken to a nearby hospital but it was too late to save his life. No other injuries were reported.</p>
                    <p>During the building search, a hotel room was found to contain manuals related to the making of explosive devices, as well as materials with the potential to be used as explosives.</p>
                    <p>The New York State Police Bomb Squad responded and secured the material. The ATF was notified. The investigation is continuing.</p>
                    <p>Two men were taken into custody at the scene by officers with the Poughkeepsie Police Department.</p>
                    <h2>Man fatally stabbed on subway train in Brooklyn: NYPD</h2>
                    <p>According to the NYPD, officers responded to a 9-1-1 call about a man being assaulted at the Atlantic Avenue subway station at around 9 p.m. on Friday.</p>
                    <p>Upon arrival, they discovered 43-year-old Tommy Bailey with a slash wound to his neck, apparently sustained during a dispute with an unidentified man on a southbound L train. Bailey was rushed to Brookdale Hospital, where he was pronounced dead.</p>
                    <p>The suspect fled the scene after the attack. Currently, there are no arrests and an investigation into the killing is ongoing. </p>
                    <p>"We have already identified dozens of cameras that the NYPD believes may assist in the investigation of this senseless crime and we will continue to assist investigators with video and in any other way possible to ensure the perpetrator is caught," MTA Communications Director Tim Minton said in a statement.</p>
                    <h2>iPhone alerts police to deadly crash</h2>
                    <p>LINCOLN, Neb. - A passenger's cellphone automatically alerted responders after a car hit a tree early Sunday in a Nebraska crash that killed all six of its young occupants, authorities said.</p>
                    <p>Five men in the Honda Accord died at the scene of the crash around 2:15 a.m. in Lincoln, about 3 miles east of the state Capitol, police said. A 24-year-old woman died later at a hospital where she was taken in critical condition.</p>
                    <p>The five men who died included the 22-year-old driver. The other victims were one 21-year-old, one 23-year-old and two 22-year-olds.</p>
                    <p>Police said the cause of the crash remains under investigation, and they said the crash was reported by an iPhone that detected the impact and called responders automatically when the phone's owner didn't respond.</p>
                    <p>"This is the worst crash in Lincoln in recent memory," Lincoln Police Assistant Chief Michon Morrow said. "We’ve been trying to think of another accident this bad and we haven’t come up with anything."</p>
                    <p>Investigators hadn't been able to find any witnesses to the crash by Sunday afternoon, which could make it harder to determine what happened. "The cause of this accident is going to take us some time to pin down," Morrow said. "We are looking at all possibilities, including alcohol, speed or distracted driving."</p>
                </div>
            </div>
        </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/mexico.js"></script>
</body>
</html>