<?php
require_once __DIR__ . "../../lib/connect.php";

$url = "http://$_SERVER[HTTP_HOST]";
$REQUEST_URI = "$_SERVER[REQUEST_URI]";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php if ($title == true) { ?>
        <title><?= $title ?> | Variz</title>
    <?php } else if (http_response_code() == 404) { ?>
        <title><?= $response_code ?> | ไม่พบหน้าที่ต้องการ</title>
    <?php } else if (http_response_code() == 500) { ?>
        <title><?= $response_code ?> | เซิฟเวอร์มีปัญหา</title>
    <?php } else if (http_response_code() == $response_code) { ?>
        <title>Error: <?= $response_code ?> | เว็บเกิดข้อผิดพลาด</title>
    <?php } else { ?>
        <title>Variz</title>
    <?php } ?>

    <link rel="icon" href="<?= $url ?>/assets/images/logo.png?v=1" type="ismage/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@200;300;400;500;600;700&family=IBM+Plex+Sans:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?= $url ?>/assets/styles/variz.css" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" />

    <?php require __DIR__ . '../../assets/styles/css.php'; ?>

</head>

<body>
    <?php require "components/Navbar.php"; ?>
    <div class="container">