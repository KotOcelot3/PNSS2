<link rel="stylesheet" href="/project/public/css/subvision.css">
<div class="sub">
    <div class="sub_all">
        <div class="sub_obj">
            <h2>Имя: <?= $doctor->name?></h2>
            <h2>Фамилия: <?= $doctor->surname?></h2>
            <a href="<?= app()->route->getUrl('/SpecializationDetail') ?>?id=<?= $doctor->spec ?>"> Специальнсть:
                <?= $doctor->spec ?></a>
            <a href="<?= app()->route->getUrl('/DoctorList') ?>">К списку докторов</a>
        </div>
    </div>
</div>