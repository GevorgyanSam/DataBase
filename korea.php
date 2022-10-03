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
    <title>Korea</title>
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
                            <h1>Korea</h1>
                            <h3>Korea News</h3>
                        </div>
                    </div>
                </div>
                <div class="main">
                    <h2>After flurry of missile launches, N.Korean media dismiss allies’ moves to sharpen deterrence</h2>
                    <p>Propaganda outlets ratchet up attacks on S.Korea’s defense strategy to reinforce alliance’s defense posture</p>
                    <p>North Korea’s propaganda outlets have continued to dismiss South Korea and the US’ move to reinforce their deterrence and military readiness as “bravado” against a “nuclear weapons state,” arguing that North Korea merely sees a US aircraft carrier as a “lump of scrap metal.”</p>
                    <p>Multiple propaganda outlets have simultaneously launched a flurry of attacks on the Yoon Suk-yeol government’s defense strategy to reinforce the South Korea-US combined defense posture and enhance the viability of the US extended deterrence against mounting threats from North Korea.</p>
                    <p>The recent spate of blistering criticisms came after South Korea and the US conducted large-scale combined naval drills from Sept. 26 to 29 in the East Sea operational area, called the Korea Theater of Operations.</p>
                    <p>The US Navy’s nuclear-powered aircraft carrier USS Ronald Reagan and its carrier strike group joined the exercises. The bilateral naval drills involving a US aircraft carrier were staged in South Korean waters for the first time since November 2017.</p>
                    <p>North Korea’s Uriminzokkiri, which mainly targets South Korean audiences, claimed Monday that the Yoon Suk-yeol government is “bringing the Korean Peninsula to a nuclear war crisis.”</p>
                    <p>Uriminzokkiri denounced the Yoon government for being “frantic about the reckless rehearsal for war against the DPRK while clinging tenaciously to the nuclear devil,” referring to the US. The DPRK is North Korea’s official name.</p>
                    <p>“The warmongers, who have frantically waged a reckless war rehearsal racket against the DPRK, are clamoring about the ‘power of the alliance,’ but in fact, it is only the pitiful bravado of those who are frightened by our military might.”</p>
                    <p>Meari, another North Korean mouthpiece, argued Monday that the Yoon government has been “going completely insane about confronting a nuclear weapon state while having the ‘crumbling empire’ at its back.” The media outlet called the Yoon government “moronic.”</p>
                    <h2>[From the Scene] Korea's 1st homegrown COVID-19 vaccine maker underlines global partnership</h2>
                    <p>With SKYCovione, SK Bioscience CEO pins hopes on introducing Korean biotechnology to global market</p>
                    <p>As SK Bioscience is poised to contribute to the world’s prolonged battle against the COVID-19 pandemic with its SKYCovione vaccine, the South Korean vaccine maker has underlined the importance of global partnerships in developing the country’s first homemade COVID-19 vaccine.</p>
                    <p>SK Bioscience joined hands with the Institute for Protein Design at the University of Washington School of Medicine to develop SKYCovione, a self-assembled nanoparticle vaccine. The development process was also supported by multinational pharmaceutical giant GSK’s pandemic adjuvant. An adjuvant added to a vaccine can improve the immune system’s response to the vaccine.</p>
                    <p>The Bill and Melinda Gates Foundation, the Coalition for Epidemic Preparedness Innovations and the European Union’s Horizon 2020 Program have backed up the funding required for the research and development efforts of SKYCovione, according to SK Bioscience.</p>
                    <p>The Seoul-based International Vaccine Institute helped conduct the Korean vaccine’s clinical trials across six countries: Thailand, Vietnam, New Zealand, Ukraine, the Philippines and South Korea.</p>
                    <p>“SKYCovione, selected as the first vaccine candidate for the project Wave 2 operated by the CEPI from the beginning of development, is now ready to be distributed to developing countries for equitable vaccine access. We hope to introduce Korea's technology to the global vaccine market and achieve our global health aspirations,” said Ahn Jae-yong, CEO of SK Bioscience.</p>
                </div>
            </div>
        </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/mexico.js"></script>
</body>
</html>