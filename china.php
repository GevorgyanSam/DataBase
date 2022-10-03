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
    <title>China</title>
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
                            <h1>China</h1>
                            <h3>China News</h3>
                        </div>
                    </div>
                </div>
                <div class="main">
                    <h2>China stays on top on two fronts at table tennis team worlds</h2>
                    <p>Chinese men's and women's teams both won their second matches at the World Team Championships.</p>
                    <p>CHENGDU, China, Oct. 2 (Xinhua) -- Chinese men's and women's paddlers both registered their second victories in as many group matches at the World Team Championships here on Sunday.</p>
                    <p>Despite not dispatching men's world No. 1 Fan Zhendong, China was too strong to be upset by the United States.</p>
                    <p>Ma Long bounced back from losing the first set 11-7 to move China ahead 11-6, 11-4, 11-2 in the following three sets.</p>
                    <p>"There are some opponents that you are not familiar with. He showed characteristics and I had some unforced errors in the first set, but I made adjustments from the second set," said Ma.</p>
                    <p>After world No. 3 Liang Jingkun accounted for Liang Jishan of the United States in straight sets, China sealed the win as Lin Gaoyuan beat Earl James Alto with the same score.</p>
                    <p>A 21-time winner of the Swaythling Cup, China will face Slovenia, who also has two wins from two matches, on Monday. Sathiyan Gnanasekaran produced a heroic performance with victories over Benedikt Duda and Qiu Dang, as India stunned world No. 2 Germany 3-1.</p>
                    <p>Japan was made to sweat in a 3-2 win over Romania, with Shunsuke Togami having the final say. On the women's side, Wang Manyu came through a tight first set to get the better of Adriana Diaz 12-10, 11-4, 11-5. "Adriana is stronger than my opponent yesterday. I just played point by point when I trailed in the first set and winning the opening set helped me a lot afterward," said Wang.</p>
                    <h2>Across China: E-commerce brings peachy life for Beijing's peach farmers</h2>
                    <p>BEIJING, Oct. 2 (Xinhua) -- For Zhang Guorong, selling peaches is an easy job that needs only a smartphone. In the early morning, with her phone ready to live stream, Zhang started picking peaches in her orchard in Beijing's Pinggu District. Her online hawking will soon draw many consumers nationwide.</p>
                    <p>"Live streaming helped me sell around 70 kg of peaches on average per day during this year's peach season from July to October," Zhang said. Surrounded by mountains on three sides, Pinggu District in Beijing's northeastern suburb has a natural fertile ground for peach trees. Thanks to policy and technology support, the district has become known as the "hometown of peaches."</p>
                    <p>As online shopping has become increasingly popular, the district launched a project in 2017. A professional team was set up to teach farmers to sell their peaches with mobile phones and transform the local peach industry into a modernized internet-plus business.</p>
                    <p>Peach sales via e-commerce across Pinggu stood at 25 million kg in 2021, compared with nearly zero in 2012, according to Wang Na with the district's bureau of commerce.</p>
                    <p>The peach supply falls short of demand, and now my products are sold to other provinces across the country, including Sichuan, Guangdong and Shandong," said Wang Zilong, a local farmer who owns a peach orchard of about 13 hectares.</p>
                    <p>The swelling online demand for peaches has also boosted the development of the local logistics industry. Many logistics giants, such as SF Express and China Post, have been brought in, thus slashing the delivery fees.</p>
                    <p>Delivering a box of peaches from Pinggu to other districts in Beijing costs only about 9 yuan (about 1.26 U.S. dollars) now. It is much lower than 40-plus yuan in 2012 when local e-commerce was just in its infancy, said Xiong Yujin, director of Pinggu's e-commerce service center.</p>
                </div>
            </div>
        </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/mexico.js"></script>
</body>
</html>