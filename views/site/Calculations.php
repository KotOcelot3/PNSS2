<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/calc.css">
    <title>pnssss</title>
</head>
<main>
    <div class="calc_all">
        <div class="calc">
            <form class="forml" method="get">
                <div class="back_calc">
                    <h2>Подсчитать общее количество посадочных мест для сотрудников по подразделениям.</h2>
                    <a  class="but_log"  href="<?= app()->route->getUrl('/CalculationsAnswer1') ?>">Ответ</a>
                </div>
            </form>
        </div>
        <div class="calc">
            <form class="forml" method="get">
                <div class="back_calc">
                    <h2>Подсчитать общую площадь учебных аудиторий по помещениям и в целом по учебному заведению</h2>
                    <a  class="but_log"  href="<?= app()->route->getUrl('/CalculationsAnswer2') ?>">Ответ</a>
                </div>
            </form>
        </div>
    </div>
</main>
<footer>
    <div class="fot_back">
        <h2 class="fot_Author">Prod Dany</h2>
    </div>
</footer>