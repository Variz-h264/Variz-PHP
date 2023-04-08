<?php

$db_host = 'localhost';
$db_name = 'variz';
$db_user = 'root';
$db_pass = '';
$conn = null;

$part_error = __FILE__;

// header('Content-Type: application/json');
date_default_timezone_set("Asia/Bangkok");

try {
    $conn = new PDO("mysql:host=$db_host; dbname=$db_name", $db_user, $db_pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    require_once __DIR__ . "../../views/error-db.php";
    exit;
}



require_once __DIR__ . "/sql.php";
require_once __DIR__ . "/status.php";
