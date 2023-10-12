<link rel="stylesheet" href="/public/css/subvision.css">
<div class="sub">
    <div class="sub_all">
        <div class="sub_obj">
            <h2>Название: <?= $diagnosis->title?></h2>
            <a href="<?= app()->route->getUrl('/DiagnosisList') ?>">К списку диагнозов</a>
        </div>
    </div>
</div>