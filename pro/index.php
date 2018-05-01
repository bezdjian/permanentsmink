<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	Modified by Harout Bezdjian
-->
<html>
<head>
    <META NAME="description"
          CONTENT="DIODE Laser Kliniken, Eye brows,Lip Line, Eye Liner Tattoos , &ouml;gonbryn Tatuering,Eyeliner Tatuering, L&auml;ppar Tatueringar, Kajal Tatuering, Borttagning av Tatueringar, Address: Torsv&auml;g 2, 145 71 Norsborg (Botkyrka)">
    <META NAME="keywords"
          CONTENT="3D tattoos, 3d tatuering, naz 3d, 3d &ouml;gonbryn tattoo, 3d &ouml;gonbryn tatuering, DIODE Laser Kliniken, kosmetisk tatuering,&ouml;gonbryn Tatuering,eyeliner Tatuering, l&auml;ppar Tatueringar, kajal Tatuering, Borttagning av tatueringar,permanent smink,permanent make up,Address: Torsv&auml;g 2, 145 71 Norsborg(Botkyrka), eye brows tattoos,eye brow tattoo,lips tattoos, lip tattoo, harout bezdjian,nazeli bezdjian,nazeli yanekian">

    <title>Tattoo By Naz</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.lightbox-0.5.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollzer.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/ie/respond.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/ie/html5shiv.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/main.css"/>
    <link rel="stylesheet" href="assets/css/ie8.css"/>
    <link rel="stylesheet" href="assets/css/ie9.css"/>
    <link rel="stylesheet" href="assets/css/jquery.lightbox-0.5.css" type="text/css"/>

    <script>
        $(function () {
            $('#thumbnails .show-brochure').lightBox();
        });

        $(function () {
            $('a[rel=lightbox]').lightBox();
        });
    </script>
</head>
<body>

<!-- Header -->
<div id="header">

    <div class="top">

        <!-- Logo -->
        <div id="logo">
            <span class="image avatar48"><img src="images/avatar.jpg" alt=""/></span>

            <h1 id="title">Nazeli Bezdjian Yanekian</h1>

            <p>Tattoo Artist</p>
        </div>

        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span
                            class="icon fa-home">Hem</span></a></li>
                <li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">3D tatuering</span></a>
                </li>
                <li><a href="#diode" id="portfolio-link" class="skel-layers-ignoreHref"><span
                            class="icon fa-tachometer">DIODE laserh&aring;rborttagning</span></a></li>
                <li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">Om</span></a>
                </li>
                <li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Kontakt</span></a>
                </li>
            </ul>
        </nav>

    </div>

    <div class="bottom">
        <div>
            <!-- Social Icons -->
            <ul class="icons">
                <li><a href="https://www.instagram.com/tattoobynaz/" target="_blank" class="icon fa-instagram"><span
                            class="label">Twitter</span></a></li>
                <li><a href="https://www.facebook.com/tattoobynaz/" target="_blank" class="icon fa-facebook"><span
                            class="label">Facebook</span></a></li>
                <!--li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                <li><a href="" class="icon fa-envelope"><span class="label">Email</span></a></li-->
            </ul>
            <div class="icons">
                <p>
                    Permanent Smink &reg; 2001<br>
                    Web by Harout Bezdjian
                </p>
            </div>

            <div class="icons">
                <p style="color: #888;font-size: 12px;">
                    Boka tid på <a style="font-weight: bold;color: #fff;" href="http://tattoobynaz.bokadirekt.se">tattoobynaz.bokadirekt.se</a>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Main -->
<div id="main">

    <!-- Intro -->
    <section id="top" class="one dark cover">
        <div class="container">

            <header>
                <h2 class="alt">Hej! Jag &auml;r <strong>Nazeli</strong>, en ambiti&ouml;s kvinna med 16 &aring;rs
                    erfaranhet i branschen.</h2>

                <p>
                    Hos mig hittar du alltid goda råd och ärliga svar. Du som har tröttnat på din morgon look?<br/>
                    Du som målar ögonbrynen varje dag? Visst är det jobbigt att hålla på dag ut dag in?
                </p>
            </header>

            <footer>
                <a href="#portfolio" class="button scrolly">Se min portfolio</a>
            </footer>

        </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="two">
        <div class="container">

            <header>
                <h2>3D tatueringar</h2>
            </header>

            <p>3D tatuering, 3000:- (2 besök)</p>

            <div class="row">
                <?php // includes/thumbnail.php?filename=<?=TOUR_DIR.$cat[$i]["IMAGE"]
                $c = 1;
                $images = scandir("images/3dtattoo");
                for ($i = count($images) - 2; $i > 0; $i--) { ?>
                    <div class="4u 12u$(mobile)">
                        <article class="item">
                            <a href="images/3dtattoo/t<?php echo $i; ?>.jpg" rel="lightbox">
                                <img src="images/3dtattoo/t<?php echo $i; ?>.jpg" width="200"/>
                            </a>
                            <!--header>
                            <h3>Magna Nullam <?php echo $i ?></h3>
                        </header-->
                        </article>
                    </div>
                    <?php
                    if ($c == 3) {
                        //    echo "</div>"; // End div class='row'.
                        $c = 0;
                    }
                    $c++;
                } ?>
            </div>
    </section>


    <!-- DIODE -->
    <section id="diode" class="two">
        <div class="container">

            <header>
                <h2>DIODE Laserh&aring;rborttagning</h2>
            </header>

            <div id="thumbnails">
                <p>
                    <a class="show-brochure" href="images/fullbroch.jpg">Visa Hela Broschyren</a>
                    | <a href="images/fullbroch.jpg" download>Ladda ned</a>
                </p>
            </div>

            <div class="row prisetable-container">
                <table cellpadding="5" cellspacing="5" id="priseTable">
                    <tr>
                        <th><h5>Behandlingsomr&aring;de</h5>
                        <th><h5>Pris</h5></th>
                    </tr>
                    <tr>
                        <td>
                            Hela ansiktet
                        </td>
                        <td>
                            400:-
                        </td>
                    <tr>
                        <td>
                            &ouml;verl&auml;pp, Haka
                        </td>
                        <td>
                            200:-
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nacke, h&aring;rfäste
                        </td>
                        <td>
                            200:-
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Armh&aring;lor
                        </td>
                        <td>
                            250:-
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Underarmar
                        </td>
                        <td>
                            350:-
                        </td>

                    <tr>
                        <td>
                            Hela armar
                        </td>
                        <td>
                            500:-
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Bröst - kvinna
                        </td>
                        <td>
                            200:-
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Magsträng
                        </td>
                        <td>
                            200:-
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Hela Bikini
                        </td>
                        <td>
                            500:-
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Svank-fläck neder svank
                        </td>
                        <td>
                            200:-
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Bikini + insida av l&aring;r
                        </td>
                        <td>
                            650:-
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Hela l&aring;r
                        </td>
                        <td>
                            500:-
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Underbenen
                        </td>
                        <td>
                            500:-
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Hela ben (B&aring;da)
                        </td>
                        <td>
                            1000:-
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Armar, ansikte, armh&aring;lor
                        </td>
                        <td>
                            800:-
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Ben, Bikini, Armh&aring;lor
                        </td>
                        <td>
                            1400:-
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Hela Kroppen (kvinna)
                        </td>
                        <td>
                            2000:-
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Stuss - Rumpa
                        </td>
                        <td>
                            400:-
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Skulderblad, Axlar
                        </td>
                        <td>
                            600:-
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Hela Rrygg - Man
                        </td>
                        <td>
                            800:-
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Rygg, Axlar, H&aring;rfäste
                        </td>
                        <td>
                            1000:-
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Bröst - Man
                        </td>
                        <td>
                            500:-
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Mage - Man
                        </td>
                        <td>
                            500:-
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Bröst, Mage - Man
                        </td>
                        <td>
                            900:-
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Kinder – Man
                        </td>
                        <td>
                            300:-
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Ögonbryn Skägglinje + Kinder
                        </td>
                        <td>
                            350:-
                        </td>

                    </tr>
                </table>
            </div>
    </section>


    <!-- About Me -->
    <section id="about" class="three">
        <div class="container">

            <header>
                <h2>OM</h2>
            </header>

            <a href="#" class="image featured"><img src="images/klinik.png" alt="kliniken"/></a>
            <a href="#" class="image featured"><img src="images/klinik1.png" alt="kliniken"/></a>

            <p>
                Kosmetisk tatuering och permanent smink är två begrepp som har samma betydelse, nämligen att man med
                hjälp av tatuering
                åstadkommer en förstärkt framhävning av ögonbryn, läpplinjer, eyeliner och kajal. Om du vill se fräsch
                ut utan att behöva att ägna dyrbar tid åt sminkandet varje morgon så är kosmetisk tatuering ett
                alternativ fär dig. Tveka aldrig!
                <br><br>
                Denna tatuering används för kvinnor som inte har markerade läppar eller har små/tunna överläppar. Man
                kan med hjalp av permanent smink förstora läpparna med läppfärgat pigment som ser väldigt naturliga ut.
                Självklart finns det möjlighet att ha pigment runt läpparna, färger som röd, rosa, vinröd är ofta
                förekommande.
                <br><br>
                Du som har tänkt länge men inte vågat att ta steget, kontakta mig så bokar vi tid för en noggrann
                genomgång om vad det innebär att ha permanent smink.
            </p>

        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="four">
        <div class="container">

            <header>
                <h2>Kontakt</h2>
            </header>
            <p style="text-align: left;margin-bottom: 2px">
                Boka tid på <a style="font-weight: bold;color: red" href="http://tattoobynaz.bokadirekt.se">tattoobynaz.bokadirekt.se</a>
            </p>

            <p style="text-align: left;font-size: 16px">
                Har du frågor eller hittar du ingen tid som passar?<br>
                Kontakta mig via sms på 0734488369 eller Instagram Direct, @tattoobynaz
            </p>

            <p style="color: red;font-size: 16px;font-weight: bold;margin-bottom: 0;float: left;">Viktigt!</p>
            <br>
            <ul style="text-align: left;font-size: 16px;">
                <li>Läs alltid igenom villkoren och beskrivningen till din önskade behandling.</li>
                <li>Avbokning måste ske minst 24h innan behandlingstillfället. Avbokning sker endast via Bokadirekt.
                </li>
                <li>Vid sen avbokning debiteras 50% av ordinarie behandlingsbelopp, vid uteblivet besök debiteras 100%
                    av ordinarie behandlingsbelopp. Detta gäller oavsett anledning för avbokning.
                </li>
            </ul>
            <!--p>Elementum sem parturient nulla quam placerat viverra
            mauris non cum elit tempus ullamcorper dolor. Libero rutrum ut lacinia
            donec curae mus. Eleifend id porttitor ac ultricies lobortis sem nunc
            orci ridiculus faucibus a consectetur. Porttitor curae mauris urna mi dolor.</p-->

            <form method="post" action="http://permanentsmink.com/pro/send_message.php">
                <div class="row">
                    <div class="6u 12u$(mobile)"><input type="text" name="name" placeholder="Namn"/></div>
                    <div class="6u 12u$(mobile)"><input type="text" name="mobile" placeholder="Mobil"/></div>
                    <div class="6u$ 12u$(mobile)"><input type="text" name="email" placeholder="Emejl"/></div>
                    <div class="12u$">
                        <textarea name="message" placeholder="Meddelande"></textarea>
                    </div>
                    <div class="12u$">
                        <input type="submit" value="Skicka"/>
                    </div>
                </div>
            </form>

        </div>
    </section>

</div>

<!-- Footer -->
<div id="footer">

    <!-- Copyright -->
    <ul class="copyright">
        <li>Permanent Smink &copy; 2001.</li>
        <li>Web By: Harout Bezdjian</li>
    </ul>

</div>

</body>
</html>