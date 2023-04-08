<?php
if ($e->getMessage()) {
    $title = "เกิดข้อผิดพลาด";
} else {
    $title = "เชื่อมต่อฐานข้อมูลสำเร็จ";
}
$response_code = "";
require "components/Header.php";
?>

<style>
    * {
        font-family: "IBM Plex Sans", sans-serif;
        font-family: "IBM Plex Sans Thai", sans-serif;
    }
</style>

<?php if ($e->getMessage()) { ?>
    <h1 class="text-warning mt-5"><i class="far fa-exclamation"></i> มีข้อผิดพลาดกับการเชื่อมต่อ</h1>
    <p>เกิดอะไรขึ้น: <span class="text-danger"><i class="fas fa-database"></i> <?= $e->getMessage() ?></span></p>
    <p>เข้าไปแก้ไฟล์ได้ที่: <span class="text-danger"><i class="fas fa-file-edit"></i> <?= $part_error ?></span></p>
    <hr class="mb-3">
    <h5>หากแก้ไม่ได้หรือทำไม่เป็นกรุณาติดต่อผู้ขายให้แก้ปัญหาให้</h5>
    <p>ลิ้งค์ติดต่อผู้พัฒนา: <a href="https://web.facebook.com/profile.php?id=100026863880624" target="_blank">ติดต่อ!</a></p>
    <h6>ผู้พัฒนาระบบ: Panit Thapwon || !VARIZ#7721</h6>
<?php } else { ?>
    <h1 class="mt-5">เชื่อมต่อฐานข้อมูลสำเร็จ!!</h1>
    <p>ชื่อฐานข้อมูลที่เชื่อมต่อ: <?= $db_name ?></p>
    <p>ชื่อผู้ใช้: <?= $db_user ?></p>
    <?php if ($db_pass == '') { ?>
        <p>รหัสผ่าน: คุณไม่ได้ตั้งรหัสผ่าน</p>
    <?php } else { ?>
        <p>รหัสผ่าน: <?= $db_pass ?></p>
    <?php } ?>
    <p>เซิฟเวอร์ที่เชื่อมต่อ: <?= $db_host ?></p>
<?php } ?>

<?php require "components/Footer.php"; ?>