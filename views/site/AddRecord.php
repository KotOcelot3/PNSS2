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
                    <h2>Создание записи</h2>
                </div>
                <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
                <label class="inreg" > <input type="text" name="title" placeholder="Название"></label>
                <p class="Error"><?= $message['title'][0] ?? ''; ?></p>
                <label class="inreg" > <input type="text" name="patient" placeholder="Пациент"></label>
                <p class="Error"><?= $message['patient'][0] ?? ''; ?></p>
                <label class="inreg" > <input type="text" name="doctor" placeholder="Доктор"></label>
                <p class="Error"><?= $message['doctor'][0] ?? ''; ?></p>
                <label class="inreg" > <input type="text" name="diagnosis" placeholder="Диагноз"></label>
                <p class="Error"><?= $message['diagnosis'][0] ?? ''; ?></p>
                <button class="but_log">Создать</button>
            </div>
        </form>
    </div>
</main>