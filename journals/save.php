<?php
/**
 * Created by PhpStorm.
 * User: bezdj
 * Date: 06/05/2017
 * Time: 14:17
 */

$journal = $_GET['journals'];
$chekboxes = $_GET['checkboxes'];

$con = mysqli_connect('localhost','root', 'root', 'smink_journals');


if($journal['journalID']){
    $sql = "UPDATE journal set fornamn = '".$journal['fornamn']."', efternamn = '".$journal['efternamn']."', telhem = '".$journal['telhem']."', 
    telarb = '".$journal['telarb']."', adress = '".$journal['adress']."' ,birthdate = '".$journal['birthdate']."', remissfrom = '".$journal['remissfrom']."', 
        remissdatum = '".$journal['remissdatum']."', email = '".$journal['email']."', vesterlandsk_diagnos = '".$journal['vesterlandsk_diagnos']."', 
        tcm_diagnos = '".$journal['tcmdiagnos']."', sysselsattning = '".$journal['sysselsattning']."',
        helaansiktet = ".$chekboxes['helaansiktet'].", overlap_haka = ".$chekboxes['overlap_haka'].", nacke_harfaste = ".$chekboxes['nacke_harfaste'].", 
        armhalor = ".$chekboxes['armhalor'].", helaarmar = ".$chekboxes['helaarmar'].", brost_kvinna = ".$chekboxes['brost_kvinna'].", 
        magstrang = ".$chekboxes['magstrang'].", helabikini = ".$chekboxes['helabikini'].", svank_neder = ".$chekboxes['svank_neder'].",
        bikini_insidalar = ".$chekboxes['bikini_insidalar'].", helalar = ".$chekboxes['helalar'].", underbenen = ".$chekboxes['underbenen'].", 
        helaben = ".$chekboxes['helaben'].", armar_ansikte_armhalor = ".$chekboxes['armar_ansikte_armhalor'].", 
        ben_bikini_armhalor = ".$chekboxes['ben_bikini_armhalor'].", struss_rumpa = ".$chekboxes['struss_rumpa'].", 
        skulderblad_axlar = ".$chekboxes['skulderblad_axlar'].", helarygg_man = ".$chekboxes['helarygg_man'].", rygg_harfeste = ".$chekboxes['rygg_harfeste'].", 
        brost_man = ".$chekboxes['brost_man'].", mage_man = ".$chekboxes['mage_man'].", brost_mage_man = ".$chekboxes['brost_mage_man'].", 
        kinder_man = ".$chekboxes['kinder_man'].", ogonbryn_kinder = ".$chekboxes['ogonbryn_kinder'] .
        " WHERE ID = ". $journal['journalID'];
}else {
    $sql = "INSERT INTO journal (fornamn, efternamn, telhem, telarb ,adress ,birthdate, remissfrom, 
        remissdatum, email, vesterlandsk_diagnos, tcm_diagnos, sysselsattning,
        helaansiktet, overlap_haka, nacke_harfaste, armhalor, 
        helaarmar, brost_kvinna, magstrang, helabikini, 
        svank_neder,bikini_insidalar, helalar, underbenen, 
        helaben, armar_ansikte_armhalor, ben_bikini_armhalor, struss_rumpa, 
        skulderblad_axlar, helarygg_man, rygg_harfeste, brost_man, 
        mage_man, brost_mage_man, kinder_man, ogonbryn_kinder) 
        VALUES ('" . $journal['fornamn'] . "', '" . $journal['efternamn'] . "', '" . $journal['telhem'] . "',  '" . $journal['telarb'] . "', '" . $journal['adress'] . "', 
        '" . $journal['birthdate'] . "', '" . $journal['remissfrom'] . "', '" . $journal['remissdatum'] . "', '" . $journal['email'] . "', '" . $journal['vesterlandsk_diagnos'] . "',
        '" . $journal['tcmdiagnos'] . "', '" . $journal['sysselsattning'] . "',
         " . $chekboxes['helaansiktet'] . ", " . $chekboxes['overlap_haka'] . ", " . $chekboxes['nacke_harfaste'] . ", " . $chekboxes['armhalor'] . ",
         " . $chekboxes['helaarmar'] . ", " . $chekboxes['brost_kvinna'] . ", " . $chekboxes['magstrang'] . ", " . $chekboxes['helabikini'] . ",
         " . $chekboxes['svank_neder'] . ", " . $chekboxes['bikini_insidalar'] . ", " . $chekboxes['helalar'] . ", " . $chekboxes['underbenen'] . ",
         " . $chekboxes['helaben'] . ", " . $chekboxes['armar_ansikte_armhalor'] . ", " . $chekboxes['ben_bikini_armhalor'] . ", " . $chekboxes['struss_rumpa'] . ",
         " . $chekboxes['skulderblad_axlar'] . ", " . $chekboxes['helarygg_man'] . ", " . $chekboxes['rygg_harfeste'] . ", " . $chekboxes['brost_man'] . ",
         " . $chekboxes['mage_man'] . ", " . $chekboxes['brost_mage_man'] . ", " . $chekboxes['kinder_man'] . ", " . $chekboxes['ogonbryn_kinder'] . ")";
}
//echo $sql;
$result = mysqli_query($con, $sql);

if($result){
    echo "done";
}else{
    echo "error";
}