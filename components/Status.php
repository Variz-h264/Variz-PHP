<?php if ($status['s_status'] === 'update') { ?>
    <h1 class="text-warning mt-5"><i class="far fa-exclamation"></i> Status: <?= $status['title']; ?></h1>

    <h6><?= $status['text_1']; ?></h6>
    <h6><?= $status['text_2']; ?></h6>
    <h6 class="text-decoration-underline"><?= $status['text_3']; ?></h6>

    <h5 class="text-danger"><?= $status['last_msg']; ?></h5>
    <img class="img-fluid rounded mx-auto d-block w-50" src="https://i.pinimg.com/originals/a5/56/09/a55609061c5f24331405610fbf59203d.gif" alt="<?= $status['s_status'] ?>" title="<?= $status['s_status'] ?>">
<?php } else if ($status['s_status'] === 'offline') { ?>
    <h1 class="text-warning mt-5"><i class="far fa-exclamation"></i> Status: <?= $status['title']; ?></h1>

    <h6><?= $status['text_1']; ?></h6>
    <h6><?= $status['text_2']; ?></h6>
    <h6><span class="text-decoration-underline"><?= $status['text_3']; ?></h6>

    <h5 class="text-danger"><?= $status['last_msg']; ?></h5>
    <img class="img-fluid rounded mx-auto d-block mt-5 w-50" src="https://i.gifer.com/CXkM.gif" alt="<?= $status['s_status'] ?>" title="<?= $status['s_status'] ?>">
<?php } else { ?>
    <h1 class="text-warning mt-5"><i class="far fa-exclamation"></i> Status: Error</h1>

    <h6>ที่แสดงในส่วนนี้คือมันเกิด Error ขึ้นจริงๆไม่ได้ตั้งใจจะกวนตีน</h6>
    <h6>ใครที่เจอหน้านี้ถือว่าโชคดีมากๆเลยนะถึงมันจะเป็น Error ก็เถอะ</h6>
    <h6 class="text-decoration-underline">ถ้าเจอหน้านี้จริงๆก็มาขอ point กับผู้ดูแลเว็บได้นะ55555+</h6>

    <h5 class="text-danger">จะขอกับผู้ดูแลคนไหนก็ได้ ถ้าอยากได้เยอะๆมาขอกับคนนี้ !VARIZ#7721</h5>
    <img class="img-fluid rounded mx-auto d-block mt-5 w-25" src="https://i.gifer.com/Vur.gif" alt="Error" title="Error">
<?php } ?>