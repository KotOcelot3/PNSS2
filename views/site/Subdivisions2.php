<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/subvision.css">
    <title>pnssss</title>
</head>
<header>
    <nav class="nav_sub">
        <a href="<?= app()->route->getUrl('/Subdivisions') ?>">Главный корпус</a>
        <a href="<?= app()->route->getUrl('/Subdivisions2') ?>">Второй корпус</a>
        <a href="<?= app()->route->getUrl('/Subdivisions3') ?>">Третий корпус</a>
    </nav>
</header>
<main>
    <div class="sub">
        <div class="sub_all">
            <?php
            foreach ($room as $rooom) {
            ?>
                <?php
                    if ($rooom->type_sub == 2):
                        ?>
                            <div class="sub_obj">
                                <a href="<?= app()->route->getUrl('/roomView') ?>?id=<?= $rooom->id ?>"><?= $rooom->name?></a>

                            </div>
                    <?php
                    endif;
                ?>
                <?php
            }
            ?>
        </div>
    </div>



</main>
<footer>
    <div class="fot_back">
    </div>
</footer>