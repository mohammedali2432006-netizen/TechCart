<?php

$host = "sql307.infinityfree.com";
$user = "if0_42188254";
$password = "Qu2432006Mo";
$database = "if0_42188254_setup";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Database connection failed");
}