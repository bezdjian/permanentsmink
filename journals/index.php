<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	Modified by Harout Bezdjian
-->
<html>
<head>
    <title>Tattoo By Naz | Journals</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- Scripts -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/journals.js"></script>
    <link rel="stylesheet" href="assets/css/jquery-ui.css">

    <link rel="shortcut icon" type="image/png" href="../favicon.ico"/>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/css/ie8.css"/>
    <link rel="stylesheet" href="assets/css/ie9.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="assets/css/journals.css"/>
</head>
<body>

<!-- Header -->
<div id="header">
    <div class="top">
        <!-- Nav -->
        <br>
        <nav id="nav">
            <ul>
                <li>
                    <a href="index.php" id="top-link" class="skel-layers-ignoreHref">
                        <span class="icon fa-database">Journaler</span>
                    </a>
                </li>
                <li>
                    <a href="kunder.php" id="portfolio-link" class="skel-layers-ignoreHref">
                        <span class="icon fa-users">Kunder</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<!-- Main -->
<div id="main">

    <!-- DIODE -->
    <section id="journals" class="two" style="text-align: left">

            <div class="container" style="background: #fff;border-radius: 8px">

                <header>
                    <h2>

                        <label for="searchname">Sök </label>
                        <input type="text" id="searchname" name="searchname" data-journalid=""/>
                        <button id="searchname-btn" class="btn-sm" type="button">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </h2>
                </header>

                <div id="journalTable">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td id="remissfromtd"><label for="remissfrom">Remiss från:</label> <br><input name="remissfrom" id="remissfrom" type="text" /></td>
                            <td id="efternamntd"><label for="efternamn">Efternamn:</label> <br><input name="efternamn" id="efternamn" type="text" /></td>
                            <td id="fornamntd"><label for="fornamn">Fornamn:</label> <br><input name="fornamn" id="fornamn" type="text" /></td>
                            <td><label for="birthdate">Födelsedatum:</label> <br><input name="birthdate" id="birthdate" type="date" /></td>
                            <td><label for="telhem">Tel hem:</label> <br><input name="telhem" id="telhem" type="text" /></td>
                        </tr>
                        <tr>
                            <td><label for="remissdatum">Remissdatum:</label> <br><input name="remissdatum" id="remissdatum" type="date" /></td>
                            <td><label for="adress">Adress:</label> <br><input name="adress" id="adress" type="text" /></td>
                            <td><label for="email">E-mail:</label> <br><input name="email" id="email" type="text" /></td>
                            <td><label for="sysselsattning">Sysselsättning:</label> <br><input name="sysselsattning" id="sysselsattning" type="text" /></td>
                            <td><label for="telarb">Tel arbete:</label> <br><input name="telarb" id="telarb" type="text" /></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <table class="table diagnos_table">
                                    <tr>
                                        <td><label for="vesterlandsk_diagnos">Västerlandsk diagnos:</label>
                                            <br>
                                            <input name="vesterlandsk_diagnos" id="vesterlandsk_diagnos" type="text" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="tcmdiagnos">TCM diagnos:</label>
                                            <br>
                                            <textarea name="tcmdiagnos" id="tcmdiagnos" ></textarea>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td colspan="2">
                                <table class="table humanbody_table">
                                    <tr>
                                        <td>
                                            <div class="checkbox-div">
                                                <label>Hela Ansiktet
                                                    <input name="helaansiktet" type="checkbox" value="helaansiktet" />
                                                </label>
                                                <label>Överläpp, Haka
                                                    <input name="overlap_haka" value="overlap_haka" type="checkbox" />
                                                </label>
                                                <label>Nacke, Hårfäste
                                                    <input name="nacke_harfaste" value="nacke_harfaste" type="checkbox" />
                                                </label>
                                                <label>Armhålor<input name="armhalor" value="armhalor" type="checkbox" /></label>
                                                <label>Hela Armar<input name="helaarmar" value="helaarmar" type="checkbox" /></label>
                                                <label>Bröst – Kvinna<input name="brost_kvinna" value="brost_kvinna" type="checkbox" /></label>
                                                <label>Magsträng<input name="magstrang" value="magstrang" type="checkbox" /></label>
                                                <label>Hela Bikini<input name="helabikini" value="helabikini" type="checkbox" /></label>
                                                <label>Svank-Fläck Neder Svank<input name="svank_neder" value="svank_neder" type="checkbox" /></label>
                                                <label>Bikini + Insida Av Lår<input name="bikini_insidalar" value="bikini_insidalar" type="checkbox" /></label>
                                                <label>Hela Lår<input name="helalar" value="helalar" type="checkbox" /></label>
                                                <label>Underbenen<input name="underbenen" value="underbenen" type="checkbox" /></label>
                                                <label>Hela Ben (Båda)<input name="helaben" value="helaben" type="checkbox" /></label>
                                                <label>Armar, Ansikte, Armhålor<input name="armar_ansikte_armhalor" value="armar_ansikte_armhalor" type="checkbox" /></label>
                                                <label>Ben, Bikini, Armhålor<input name="ben_bikini_armhalor" value="ben_bikini_armhalor" type="checkbox" /></label>
                                                <label>Stuss - Rumpa<input name="struss_rumpa" value="struss_rumpa" type="checkbox" /></label>
                                                <label>Skulderblad, Axlar<input name="skulderblad_axlar" value="skulderblad_axlar" type="checkbox" /></label>
                                                <label>Hela Rygg - Man<input name="helarygg_man" value="helarygg_man" type="checkbox" /></label>
                                                <label>Rygg, Hårfäste<input name="rygg_harfeste" value="rygg_harfeste" type="checkbox" /></label>
                                                <label>Bröst - Man<input name="brost_man" value="brost_man" type="checkbox" /></label>
                                                <label>Mage - Man<input name="mage_man" value="mage_man" type="checkbox" /></label>
                                                <label>Bröst, Mage - Man<input name="brost_mage_man" value="brost_mage_man" type="checkbox" /></label>
                                                <label>Kinder – Man<input name="kinder_man" value="kinder_man" type="checkbox" /></label>
                                                <label>Ögonbryn Skägglinje + Kinder<input name="ogonbryn_kinder" value="ogonbryn_kinder" type="checkbox" /></label>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div id="buttons">
                    <button id="sparajournal" type="button" class="btn btn-primary">Spara journal</button>
                    <button id="skapajournal" type="button" class="btn btn-primary" onclick="location.reload(); return false;">Skapa ny journal</button>
                    <p id="savemsg">

                    </p>
                </div>
            </div>
    </section>

</div>

<!-- Footer -->
<div id="footer">

    <!-- Copyright -->
    <ul class="copyright">
        <li>Permanent Smink &copy; 2001.</li>
        <li>Web By Harout Bezdjian</li>
    </ul>

</div>
<div class="modal"><!-- Place at bottom of page --></div>
</body>
</html>