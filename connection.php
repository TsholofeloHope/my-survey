<?php

$dbhost ="localhost";
$dbuser = "root";
$dbpass = "";
$dabname = "survay";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dabname))
{
    die("Failed to connect!");
}