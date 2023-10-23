<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>pnssss</title>
</head>
<body>
<header>
    <nav class="nav">
        <a href="<?= app()->route->getUrl('/index') ?>">Главная</a>
        <?php
        if (app()->auth::check() && app()->auth::user()->role !== 1):
            ?>
            <a href="<?= app()->route->getUrl('/SpecializationList') ?>">Список специальностей</a>
            <a href="<?= app()->route->getUrl('/AddRecordUser') ?>">Добавление Записи</a>
            <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
        <?php
        elseif (!app()->auth::check()):
            ?>
            <a href="<?= app()->route->getUrl('/login') ?>">Вход</a>
            <a href="<?= app()->route->getUrl('/RegisterUser') ?>">Регистрация</a>
        <?php
        else:
            ?>
            <a href="<?= app()->route->getUrl('/RecordList') ?>">Список записей к врачам</a>
            <a href="<?= app()->route->getUrl('/DiagnosisList') ?>">Список диагнозов</a>
            <a href="<?= app()->route->getUrl('/RegisterDoctor') ?>">Добавление Врача</a>
            <a href="<?= app()->route->getUrl('/SpecializationList') ?>">Список специальностей</a>
            <a href="<?= app()->route->getUrl('/AddRecordAdmin') ?>">Добавление Записи</a>
            <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
        <?php
        endif;
        ?>
    </nav>
</header>
<main>
    <?= $content ?? '' ?>
</main>
</body>
</html>
