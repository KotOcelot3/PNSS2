<link rel="stylesheet" href="/project/public/css/subvision.css">
<div class="sub">
            <p>
            <div class="sub">
                <div class="sub_all">
                    <?php
                    foreach ($room as $rooom) {
                        ?>
                            <div class="sub_obj">
                                <a href="<?= app()->route->getUrl('/roomView') ?>?id=<?= $rooom->id ?>"><?= $rooom->name?></a>

                            </div>
                        <?php
                    }
                    ?>
        </div>
    </div>
</div>