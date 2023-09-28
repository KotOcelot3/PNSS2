<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/project/public/css/subvision.css">
    <title>pnssss</title>
</head>
<header>
    <nav class="nav_sub">
<!--            <a href="--><?php //= app()->route->getUrl('/Subdivisions') ?><!--">Главный корпус</a>-->
<!--            <a href="--><?php //= app()->route->getUrl('/Subdivisions2') ?><!--">Второй корпус</a>-->
<!--            <a href="--><?php //= app()->route->getUrl('/Subdivisions3') ?><!--">Третий корпус</a>-->
    </nav>
</header>
<main>
    <div class="sub">
        <div class="sub_all">
            <?php
            foreach ($spec as $spec) {
            ?>
                            <div class="sub_obj">
                                <a href="<?= app()->route->getUrl('/SpecializationDetail') ?>?id=<?= $spec->id ?>"><?= $spec->title?></a>

                            </div>
                <?php
            }
            ?>
        </div>
    </div>



</main>