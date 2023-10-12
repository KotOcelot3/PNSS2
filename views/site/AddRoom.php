<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>pnssss</title>
</head>
<main>
    <div class="login">
        <form class="forml" method="post" enctype="multipart/form-data">
            <div class="back_log">
                <div class="log">
                    <h2>Добавление комнаты</h2>
                </div>
                <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
                <label class="inreg" > <input type="text" name="name" placeholder="Название"></label>
                <p class="Error"><?= $message['name'][0] ?? ''; ?></p>
                <label class="inreg" > <input type="text" name="slots" placeholder="Количество мест"></label>
                <p class="Error"><?= $message['slots'][0] ?? ''; ?></p>
                <label class="inreg" > <input type="text" name="slot_prepod"
                                              placeholder="Количество мест для преподователя"></label>
                <p class="Error"><?= $message['slot_prepod'][0] ?? ''; ?></p>
                <label class="inreg" > <input type="text" name="type_room_id"
                                              placeholder="Тип комнаты"></label>
                <p class="Error"><?= $message['type_room_id'][0] ?? ''; ?></p>
                <label class="inreg" > <input type="text" name="type_sub"
                                              placeholder="Чет еще"></label>
                <p class="Error"><?= $message['type_sub'][0] ?? ''; ?></p>
                <label for="photo">Изображение</label>
                <input id="photo" name="photo" type="file">
                <p class="Error"><?= $message['photo'][0] ?? ''; ?></p>
                <button class="but_log">Добавить</button>
            </div>
        </form>
    </div>
</main>
<footer>
    <div class="fot_back">
        <h2 class="fot_Author">Prod Dany</h2>
    </div>
</footer><?php
