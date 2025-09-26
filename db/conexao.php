<?php

$server = "localhost";
$user = "root";
$senha = "";
$db = "db_php";

$con = new mysqli($server, $user, $senha, $db);

if ($con->connect_error) 
{
    die("Conect Error". $con->connect_error);
}