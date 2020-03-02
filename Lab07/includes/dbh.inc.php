<?php
$servername ="csdm-webdev";
$dBUsername="1909248";
$dBPassword="1909248";
$dBName="db1909248_loginsystemtut";

$conn =mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

if (!$conn){
    die("Connection failed:".mysqli_connect_error());
}