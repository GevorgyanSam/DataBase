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
    <title>France</title>
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
                            <h1>France</h1>
                            <h3>France News</h3>
                        </div>
                    </div>
                </div>
                <div class="main">
                    <h2>UK Chancellor backtracks on controversial plan to cut top tax rate</h2>
                    <p>UK government made a U-turn over unpopular proposal to abolish highest tax band after growing backlash over mini-budget.</p>
                    <p>Britain's Chancellor of the Exchequer Kwasi Kwarteng (L) and Britain's Prime Minister Liz Truss (R) attend the opening day of the annual Conservative Party Conference in Birmingham, central England, on October 2, 2022. OLI SCARFF / AFP</p>
                    <p>The British government has dropped plans to cut income tax for top earners, part of a package of unfunded cuts that sparked turmoil on financial markets and sent the pound to record lows.</p>
                    <p>In a dramatic about-face, Treasury chief Kwasi Kwarteng said on Monday, October 3, that he will not scrap the top 45% rate of income tax paid on earnings above £150,000 ($167,000) a year.</p>
                    <p>"We get it, and we have listened," he said in a statement. He said "it is clear that the abolition of the 45p tax rate has become a distraction from our overriding mission to tackle the challenges facing our country."</p>
                    <p>The U-turn came after a growing number of lawmakers from the governing Conservative Party turned on government tax plans announced 10 days ago.</p>
                    <p>It also came hours after the Conservatives released advance extracts of a speech Kwarteng is due to give later Monday at the party's annual conference in the central England city of Birmingham. He had been due to say: "We must stay the course. I am confident our plan is the right one." Prime Minister Liz Truss defended the measures on Sunday, but said she could have "done a better job laying the ground" for the announcements.</p>
                    <h2>Pound sent tumbling</h2>
                    <p>Ms. Truss took office less than a month ago, promising to radically reshape Britain’s economy to end years of sluggish growth. But the government’s September 23 announcement of a stimulus package that includes £45 billion ($50 billion) in tax cuts, to be paid for by government borrowing, sent the pound tumbling to a record low against the dollar.</p>
                    <p>The Bank of England was forced to intervene to prop up the bond market, and fears that the bank will soon hike interest rates caused mortgage lenders to withdraw their cheapest deals, causing turmoil for homebuyers.</p>
                    <p>The cuts were unpopular, even among Conservatives. Reducing taxes for top earners and scrapping a cap on bankers’ bonuses while millions face a cost-of-living crisis driven by soaring energy bills was widely seen as politically toxic.</p>
                    <p>Ms. Truss and Mr. Kwarteng insist that their plan will deliver a growing economy and eventually bring in more tax revenue, offsetting the cost of borrowing to fund the current cuts. But they also have signaled that public spending will need to be slashed.</p>
                    <p>Mr. Kwarteng said the government was sticking to its other tax policies, including a cut next year in the basic rate of income tax and a reversal of a corporation tax hike planned by the previous government.</p>
                </div>
            </div>
        </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/mexico.js"></script>
</body>
</html>