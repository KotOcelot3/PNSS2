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
        if (app()->auth::check()  && app()->auth::user()->role != 2):
            ?>
            <a href="<?= app()->route->getUrl('/login') ?>">Вход</a>
            <a href="<?= app()->route->getUrl('/RegisterUser') ?>">Регистрация</a>
            <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
            <img class="img_user" src="/pnss/public/assets/img/<?= app()->auth::user()->photo ?>" alt="">
            <a href="<?= app()->route->getUrl('/SpecializationList') ?>">Список специальностей</a>
            <a href="<?= app()->route->getUrl('/RegisterDoctor') ?>">Добавление Врача</a>
            <a href="<?= app()->route->getUrl('/AddRecord') ?>">Добавление Записи</a>
            <a href="<?= app()->route->getUrl('/DiagnosisList') ?>">Список диагнозов</a>
            <a href="<?= app()->route->getUrl('/RecordList') ?>">Список записей к врачам</a>
        <?php
        else:
            ?>
            <a href="<?= app()->route->getUrl('/DoctorList') ?>">Список врачей</a>
            <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
            <form  method="get" action="<?= app()->route->getUrl('/searchdb') ?>"  id="searchform">
                <input  type="text" name="search">
                <input class="search" type="submit" name="submit" value="Search">
            </form>
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