<?php

$host = "db";
$user = "root";
$password = "root123";
$database = "techcart";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Database connection failed");
}