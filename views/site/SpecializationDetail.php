<link rel="stylesheet" href="/public/css/subvision.css">
<div class="sub">
    <div class="sub_all">
                <div class="sub_obj">
                    <h2><?= $spec->title?></h2>
                    <h2>Врачи с этой специальностью:<?= $spec->doctors?></h2>
                    <a href="<?= app()->route->getUrl('/DoctorDetail') ?>?id=<?= $doctor->first()->id ?>"> Доктора:
                        <?= $doctor->name?></a>
                    <a href="<?= app()->route->getUrl('/SpecializationList') ?>">К списку специальностей</a>
                </div>
    </div>
</div>