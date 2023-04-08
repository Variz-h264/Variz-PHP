<?php
$title = "Register";
$response_code = "";

require "components/Header.php";
require "components/Announce.php";
?>

<hr class="my-1">
<div class="row justify-content-center">
    <div class="col-lg-5">
        <div class="card border-0 rounded-1 mt-3" style="background-color: #09797810;">
            <div class="card-body">
                <h3 class="text-center"><?= $title ?></h3>
                <div class="mb-3">
                    <input type="text" class="form-control" id="username" placeholder="Username">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="Email" placeholder="Email">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="Check">
                    <label class="form-check-label" for="exampleCheck1">ยินยอมกับข้อตกลงของเรา</label>
                </div>
                <button type="submit" class="btn btn-auth w-100 mb-2"><i class="far fa-sign-in-alt"></i> Register</button>
                <hr class="my-1">
                <p class="text-center text-muted mb-0">Made with <i class="fa fa-heart text-danger"></i> By !VARIZ#7721</p>
                <p class="text-center text-muted mb-0">
                    <a class="text-dark text-uppercase text-decoration-none fw-semibold" href="#" target="_blank">Privacy Policy</a> | <a class="text-dark text-uppercase text-decoration-none fw-semibold" href="#" target="_blank">Terms of Service</a>
                </p>
            </div>
        </div>
    </div>
</div>

<?php require "components/Footer.php"; ?>