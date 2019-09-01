<?php
/**
 * Created by PhpStorm.
 * User: bezdj
 * Date: 07/05/2017
 * Time: 21:38
 */


header('Content-Type: text/html; charset=utf-8');
ini_set('display_errors', 1);
define('DEBUG', true);

if(!empty($_GET['journalID'])) {
    $ID = $_GET['journalID'];
    $con = mysqli_connect('localhost', 'root', 'root', 'smink_journals');

//$sql = "SELECT * FROM journal WHERE CONCAT(fornamn, ' ', efternamn) = '". $ID. "'";
    $sql = "SELECT * FROM journal WHERE ID = " . $ID;

    $result = mysqli_query($con, $sql);
    $journal = mysqli_fetch_array($result, MYSQLI_BOTH);


    $helaansiktet = "";
    if ($journal['helaansiktet'] == 1) {
        $helaansiktet = "checked";
    }
    $overlap_haka = "";
    if ($journal['overlap_haka'] == 1) {
        $overlap_haka = "checked";
    }
    $nacke_harfaste = "";
    if ($journal['nacke_harfaste'] == 1) {
        $nacke_harfaste = "checked";
    }
    $armhalor = "";
    if ($journal['armhalor'] == 1) {
        $armhalor = "checked";
    }
    $helaarmar = "";
    if ($journal['helaarmar'] == 1) {
        $helaarmar = "checked";
    }
    $brost_kvinna = "";
    if ($journal['brost_kvinna'] == 1) {
        $brost_kvinna = "checked";
    }
    $magstrang = "";
    if ($journal['magstrang'] == 1) {
        $magstrang = "checked";
    }
    $helabikini = "";
    if ($journal['helabikini'] == 1) {
        $helabikini = "checked";
    }
    $svank_neder = "";
    if ($journal['svank_neder'] == 1) {
        $svank_neder = "checked";
    }
    $bikini_insidalar = "";
    if ($journal['bikini_insidalar'] == 1) {
        $bikini_insidalar = "checked";
    }
    $helalar = "";
    if ($journal['helalar'] == 1) {
        $helalar = "checked";
    }
    $underbenen = "";
    if ($journal['underbenen'] == 1) {
        $underbenen = "checked";
    }
    $helaben = "";
    if ($journal['helaben'] == 1) {
        $helaben = "checked";
    }
    $armar_ansikte_armhalor = "";
    if ($journal['armar_ansikte_armhalor'] == 1) {
        $armar_ansikte_armhalor = "checked";
    }
    $ben_bikini_armhalor = "";
    if ($journal['ben_bikini_armhalor'] == 1) {
        $ben_bikini_armhalor = "checked";
    }
    $struss_rumpa = "";
    if ($journal['struss_rumpa'] == 1) {
        $struss_rumpa = "checked";
    }
    $skulderblad_axlar = "";
    if ($journal['skulderblad_axlar'] == 1) {
        $skulderblad_axlar = "checked";
    }
    $helarygg_man = "";
    if ($journal['helarygg_man'] == 1) {
        $helarygg_man = "checked";
    }
    $rygg_harfeste = "";
    if ($journal['rygg_harfeste'] == 1) {
        $rygg_harfeste = "checked";
    }
    $brost_man = "";
    if ($journal['brost_man'] == 1) {
        $brost_man = "checked";
    }
    $mage_man = "";
    if ($journal['mage_man'] == 1) {
        $mage_man = "checked";
    }
    $brost_mage_man = "";
    if ($journal['brost_mage_man'] == 1) {
        $brost_mage_man = "checked";
    }
    $kinder_man = "";
    if ($journal['kinder_man'] == 1) {
        $kinder_man = "checked";
    }
    $ogonbryn_kinder = "";
    if ($journal['ogonbryn_kinder'] == 1) {
        $ogonbryn_kinder = "checked";
    }

    $output = "";

    $output .= '<table class="table">';
    $output .= '<tbody>';
    $output .= '<tr>';
    $output .= '<td id="remissfromtd"><label for="remissfrom">Remiss från:</label> <br><input name="remissfrom" id="remissfrom" type="text" value="' . $journal['remissfrom'] . '" /></td>';
    $output .= '<td id="efternamntd"><label for="efternamn">Efternamn:</label> <br><input name="efternamn" id="efternamn" type="text" value="' . $journal['efternamn'] . '" /></td>';
    $output .= '<td id="fornamntd"><label for="fornamn">Fornamn:</label> <br><input name="fornamn" id="fornamn" type="text" value="' . $journal['fornamn'] . '"/></td>';
    $output .= '<td><label for="birthdate">Födelsedatum:</label> <br><input name="birthdate" id="birthdate" type="date" value="' . $journal['birthdate'] . '"/></td>';
    $output .= '<td><label for="telhem">Tel hem:</label> <br><input name="telhem" id="telhem" type="text" value="' . $journal['telhem'] . '"/></td>';
    $output .= '</tr>';
    $output .= '<tr>';
    $output .= '<td><label for="remissdatum">Remissdatum:</label> <br><input name="remissdatum" id="remissdatum" type="date" value="' . $journal['remissdatum'] . '"/></td>';
    $output .= '<td><label for="adress">Adress:</label> <br><input name="adress" id="adress" type="text" value="' . $journal['adress'] . '"/></td>';
    $output .= '<td><label for="email">E-mail:</label> <br><input name="email" id="email" type="text" value="' . $journal['email'] . '"/></td>';
    $output .= '<td><label for="sysselsattning">Sysselsättning:</label> <br><input name="sysselsattning" id="sysselsattning" type="text" value="' . $journal['sysselsattning'] . '"/></td>';
    $output .= '<td><label for="telarb">Tel arbete:</label> <br><input name="telarb" id="telarb" type="text" value="' . $journal['telarb'] . '"/></td>';
    $output .= '</tr>';
    $output .= '<tr>';
    $output .= '<td colspan="3">';
    $output .= '<table class="table diagnos_table">';
    $output .= '<tr>';
    $output .= '<td><label for="vesterlandsk_diagnos">Västerlandsk diagnos:</label><br>';
    $output .= '<input name="vesterlandsk_diagnos" id="vesterlandsk_diagnos" type="text" value="' . $journal['vesterlandsk_diagnos'] . '"/>';
    $output .= '</td>';
    $output .= '</tr>';
    $output .= '<tr>';
    $output .= '<td><label for="tcmdiagnos">TCM diagnos:</label><br>';
    $output .= '<textarea name="tcmdiagnos" id="tcmdiagnos" >' . $journal['tcm_diagnos'] . '</textarea>';
    $output .= '</td>';
    $output .= '</tr>';
    $output .= '</table>';
    $output .= '</td>';
    $output .= '<td colspan="2">';
    $output .= '<table class="table humanbody_table">';
    $output .= '<tr>';
    $output .= '<td>';
    $output .= '<div class="checkbox-div">';
    $output .= '<label>Hela Ansiktet';
    $output .= '<input name="helaansiktet" type="checkbox" value="helaansiktet" ' . $helaansiktet . '/>';
    $output .= '</label>';
    $output .= '<label>Överläpp, Haka';
    $output .= '<input name="overlap_haka" value="overlap_haka" type="checkbox" ' . $overlap_haka . ' />';
    $output .= '</label>';
    $output .= '<label>Nacke, Hårfäste';
    $output .= '<input name="nacke_harfaste" value="nacke_harfaste" type="checkbox" ' . $nacke_harfaste . ' />';
    $output .= '</label>';
    $output .= '<label>Armhålor<input name="armhalor" value="armhalor" type="checkbox" ' . $armhalor . '/></label>';
    $output .= '<label>Hela Armar<input name="helaarmar" value="helaarmar" type="checkbox" ' . $helaarmar . ' /></label>';
    $output .= '<label>Bröst – Kvinna<input name="brost_kvinna" value="brost_kvinna" type="checkbox" ' . $brost_kvinna . ' /></label>';
    $output .= '<label>Magsträng<input name="magstrang" value="magstrang" type="checkbox" ' . $magstrang . ' /></label>';
    $output .= '<label>Hela Bikini<input name="helabikini" value="helabikini" type="checkbox" ' . $helabikini . ' /></label>';
    $output .= '<label>Svank-Fläck Neder Svank<input name="svank_neder" value="svank_neder" type="checkbox" ' . $svank_neder . ' /></label>';
    $output .= '<label>Bikini + Insida Av Lår<input name="bikini_insidalar" value="bikini_insidalar" type="checkbox" ' . $bikini_insidalar . ' /></label>';
    $output .= '<label>Hela Lår<input name="helalar" value="helalar" type="checkbox" ' . $helalar . ' /></label>';
    $output .= '<label>Underbenen<input name="underbenen" value="underbenen" type="checkbox" ' . $underbenen . ' /></label>';
    $output .= '<label>Hela Ben (Båda)<input name="helaben" value="helaben" type="checkbox" ' . $helaben . ' /></label>';
    $output .= '<label>Armar, Ansikte, Armhålor<input name="armar_ansikte_armhalor" value="armar_ansikte_armhalor" type="checkbox" ' . $armar_ansikte_armhalor . ' /></label>';
    $output .= '<label>Ben, Bikini, Armhålor<input name="ben_bikini_armhalor" value="ben_bikini_armhalor" type="checkbox" ' . $ben_bikini_armhalor . ' /></label>';
    $output .= '<label>Stuss - Rumpa<input name="struss_rumpa" value="struss_rumpa" type="checkbox" ' . $struss_rumpa . ' /></label>';
    $output .= '<label>Skulderblad, Axlar<input name="skulderblad_axlar" value="skulderblad_axlar" type="checkbox" ' . $skulderblad_axlar . ' /></label>';
    $output .= '<label>Hela Rygg - Man<input name="helarygg_man" value="helarygg_man" type="checkbox" ' . $helarygg_man . ' /></label>';
    $output .= '<label>Rygg, Hårfäste<input name="rygg_harfeste" value="rygg_harfeste" type="checkbox" ' . $rygg_harfeste . ' /></label>';
    $output .= '<label>Bröst - Man<input name="brost_man" value="brost_man" type="checkbox" ' . $brost_man . ' /></label>';
    $output .= '<label>Mage - Man<input name="mage_man" value="mage_man" type="checkbox" ' . $mage_man . ' /></label>';
    $output .= '<label>Bröst, Mage - Man<input name="brost_mage_man" value="brost_mage_man" type="checkbox" ' . $brost_mage_man . ' /></label>';
    $output .= '<label>Kinder – Man<input name="kinder_man" value="kinder_man" type="checkbox" ' . $kinder_man . ' /></label>';
    $output .= '<label>Ögonbryn Skägglinje + Kinder<input name="ogonbryn_kinder" value="ogonbryn_kinder" type="checkbox" ' . $ogonbryn_kinder . ' /></label>';
    $output .= '</div>';
    $output .= '</td></tr></table></td></tr></tbody></table>';

    echo $output;
}else{
    echo "error";
}
//echo json_encode($array);