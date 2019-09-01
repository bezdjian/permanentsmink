<?php
/**
 * Created by PhpStorm.
 * User: bezdj
 * Date: 07/05/2017
 * Time: 15:35
 */

header('Content-Type: text/html; charset=utf-8');
ini_set('display_errors', 1);
define('DEBUG', true);

// get what user typed in autocomplete input
$term = trim($_GET['term']);

$con = mysqli_connect('localhost','root', 'root', 'smink_journals');

$sql = "SELECT CONCAT_WS(\" \", `fornamn`, `efternamn`) AS `fullname`, id FROM journal WHERE fornamn LIKE  '%". $term . "%'";

$result = mysqli_query($con, $sql);

if($result) {
    $json=array();
    while ($row = mysqli_fetch_array($result)) {
        $json[]=array('value'=> $row["fullname"], 'id'=>$row['id']);
    }
    echo json_encode($json);
}else{
    echo " --error term: ".$term;
}