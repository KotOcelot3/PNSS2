<link rel="stylesheet" href="/project/public/css/subvision.css">
<div class="sub">
    <div class="sub_all">
        <div class="sub_obj">
            <h2>Название: <?= $record->title?></h2>
            <a href="<?= app()->route->getUrl('/DiagnosisDetail') ?>?id=<?= $record->diagnosis ?>"> диагноз:
                <?= $record->diagnosis ?></a>
            <a>Пациент: <?= $record->patient?></a>
            <a href="<?= app()->route->getUrl('/DoctorDetail') ?>?id=<?= $record->doctor ?>"> Доктор:
                <?= $record->doctor?></a>
            <a href="<?= app()->route->getUrl('/RecordList') ?>">К списку записей</a>
        </div>
    </div>
</div>