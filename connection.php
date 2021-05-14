<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_samples_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

    
    die("failed to connect!");

}