<?php
/*
 * ระบบนี้จัดทำโดย !VARIZ#7721  ห้ามจำหน่ายโดยเด็ดขาด
 * หากแก้ไข ถือว่าเป็นการละเมิดลิขสิทธิ์ซอฟท์แวร์ มีโทษปรับตั้งแต่ 10,000 บาท จนถึง 200,000 บาท จำคุก 3-6 เดือน หรือทั้งจำทั้งปรับ
 */
session_start();

use AltoRouter as Router;

require_once __DIR__ . '/vendor/autoload.php';
$router = new Router();
$router->map("GET", "/", function () {
    require "views/home.php";
});
$router->map("GET", "/test", function () {

    require "views/test.php";
});
$match = $router->match();
if (is_array($match) && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    require "view/error.php";
}
