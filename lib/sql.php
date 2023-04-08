<?php

$sql = "SELECT * FROM setting WHERE id = 1";
$result = $conn->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
