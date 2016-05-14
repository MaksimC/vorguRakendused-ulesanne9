<?php
/**
 * Created by PhpStorm.
 * User: emaktse
 * Date: 15.05.2016
 * Time: 0:38
 */
?>

<?php
require_once ("head.html");

$files = array_slice(scandir('pildid'), 2);
$mode = "pealeht.html";

if (isset($_GET["mode"]) && !empty($_GET["mode"])){
    $mode = htmlspecialchars($_GET["mode"]);}

    switch($mode){
        case "galerii":
            include "galerii.html";
            break;
        case "vote":
            include "vote.html";
            break;
        case "tulemus":
            include "tulemus.html";
            break;
        default:
            include "pealeht.html";
            break;
    }
require_once ("foot.html");
?>