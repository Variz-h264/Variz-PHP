<?php

if ($web['status'] === 'update') {
    require_once __DIR__ . "../../views/status.php";
    exit;
} else if ($web['status'] === 'offline') {
    require_once __DIR__ . "../../views/status.php";
    exit;
}
