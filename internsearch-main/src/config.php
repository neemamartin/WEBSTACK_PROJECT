<?php

$servername = "localhost";
$usernamee = "work";
$passwordd = "kouneeman";
$dbname = "internsearch";

// Creating connection
$conn = new mysqli(
    $servername,
    $usernamee,
    $passwordd,
    $dbname
);

// Checking connection
if ($conn == false) {
    dir("Connection failed: ");
}
