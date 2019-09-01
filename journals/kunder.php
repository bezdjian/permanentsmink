<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	Modified by Harout Bezdjian
-->
<html>
<head>
    <title>Tattoo By Naz | Journals > Kunder</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- Scripts -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/journals.js"></script>
    <script src="assets/js/jquery-dataTable.js"></script>

    <link rel="shortcut icon" type="image/png" href="../favicon.ico"/>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/css/ie8.css"/>
    <link rel="stylesheet" href="assets/css/ie9.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="assets/css/journals.css"/>
    <link rel="stylesheet" href="assets/css/jquery-dataTable.css"/>
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
    <?php
    $con = mysqli_connect('localhost', 'root', 'root', 'smink_journals');
    $sql = "SELECT * FROM journal";
    $result = mysqli_query($con, $sql);
    ?>

    <!-- Kunder -->
    <section id="journals" class="two" style="text-align: left">
            <div class="container" style="background: #fff;border-radius: 8px">
                <header>
                    <h2>Kunder</h2>
                </header>

                <div id="journalTable">
                    <table class="table" id="kunder_table">
                        <thead>
                        <tr>
                            <td>Fornamn</td>
                            <td><label for="efternamn">Efternamn</label></td>
                            <td><label for="email">Email</label></td>
                            <td><label for="birthdate">Födelsedatum</label></td>
                            <td><label for="telhem">Tel hem</label></td>
                            <td><label for="telarb">Tel Arbete</label></td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php while($kunder = mysqli_fetch_array($result)){  ?>
                        <tr>
                            <td><label for="fornamn"><?php echo $kunder['fornamn']; ?></label></td>
                            <td><label for="efternamn"><?php echo $kunder['efternamn']; ?></label></td>
                            <td><label for="email"><?php echo $kunder['email']; ?></label></td>
                            <td><label for="birthdate"><?php echo $kunder['birthdate']; ?></label></td>
                            <td><label for="telhem"><?php echo $kunder['telhem']; ?></label></td>
                            <td><label for="telarb"><?php echo $kunder['telarb']; ?></label></td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
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
<script type="application/javascript">
    //dataTable for kunder
    $("#kunder_table").dataTable();
</script>
</body>
</html>