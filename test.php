<?php
/*
 * Bangla_Date - English to Bangla date converter
 * @package BanglaDate
 * @modified and updated accoding to the Bangla Academy by A. H. M. Azimul Haque
 * @main author Tareq Hasan
 * @copyright 2020 A. H. M. Azimul Haque
 * @url https://orbachinujbuk.com/bangla_date/test.php
 * @ Update at May 01, 2020
 */

include('dateClass.php');
header('content-type: application/json; charset=utf-8');

$mydate = (object) null;
$mydate->en_date = date('Y-m-d H:i:s');
$mydate->bn_date = bangla_date(date('Y-m-d H:i:s'));

$myJSON = json_encode($mydate);

echo 'Encoded: ' . $myJSON;

echo "\r\n";
echo "\r\n";

echo 'Decoded: ' . $mydate->bn_date;


function bangla_date($date) {
    $bn = new BanglaDate(strtotime($date));

    $output = $bn->get_date();

    return $output[1] . ' ' . $output[0]  . ', ' . $output[2] . ' বঙ্গাব্দ';
}