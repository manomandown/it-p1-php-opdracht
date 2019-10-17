<?php
$dBServername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "leerlingenlijst";


$rel = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);


if (!$rel) {
    die("Connection failed: " . mysqli_connect_error());
}