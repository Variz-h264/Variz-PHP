<?php

$sql = "SELECT * FROM css_settings WHERE id = 1";
$result = $conn->query($sql);
$css = $result->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM web_settings WHERE id = 1";
$result = $conn->query($sql);
$web = $result->fetch(PDO::FETCH_ASSOC);

$web_status = $web['status'];

$sql = "SELECT * FROM web_status WHERE s_status = '$web_status'";
$result = $conn->query($sql);
$status = $result->fetch(PDO::FETCH_ASSOC);
