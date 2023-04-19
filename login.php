<?php

require_once("config.php");

session_start();

if($polaczenie->connect_errno!=0)
{
    echo "Error:".$polaczenie->connect_errno . "Opis:" . $polaczenie->connect_errno;
}
else
{
    $login = $_POST['podaj login'];
    $haslo = $_POST['podaj haslo'];

    $polaczenie->close();
}
header('location: index.php');