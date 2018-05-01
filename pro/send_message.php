<?php
/**
 * Created by IntelliJ IDEA.
 * User: Harout
 * Date: 2016-01-24
 * Time: 10:31
 */

//session_start();

$name = $_GET["name"];
$mobile = $_GET["mobile"];
$email = $_GET["email"];
$message = $_GET["message"];


$tableBody = '<table width="200" cellpadding="2">';

$tableBody .= "<tr>";
$tableBody .= "<td>Full Name:</td>";
$tableBody .= "<td>$name</td>";
$tableBody .= "</tr>";

$tableBody .= "<tr>";
$tableBody .= "<td>Mobile:</td>";
$tableBody .= "<td>$mobile</td>";
$tableBody .= "</tr>";

$tableBody .= "<tr>";
$tableBody .= "<td>E-Mail:</td>";
$tableBody .= "<td>$email</td>";
$tableBody .= "</tr>";

$tableBody .= "</table>";

$tableBody .= "<br/>";
$tableBody .= "<br/>";

$tableBody .= "<table width=600>";
$tableBody .= "<tr>";
$tableBody .= "<td width=70 valign=top>Message:</td>";
$tableBody .= "<td width='500'><textarea rows='10' style='width:500px' readonly='readonly'>$message</textarea></td>";
$tableBody .= "</tr>";
$tableBody .= "</table>";

//$_SESSION["body"] = $tableBody;

     //echo $tableBody;
	 $header = "From: permanentsmink.com \r\n"."MIME-Version : 1.0 \r\n"."Content-type: text/html ; charset=windows-1250 \r\n";
	 $header .= "Bcc: bezdjian-370z@hotmail.com \r\n";
	 mail('naztakuhi@hotmail.com', $subject, $tableBody, $header);
