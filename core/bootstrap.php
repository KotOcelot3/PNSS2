<?php
//Путь до директории с конфигурационными файлами
const DIR_CONFIG = '/../config';

//Подключение автозагрузчика composer
require_once __DIR__ . '/../vendor/autoload.php';

//Функция, возвращающая массив всех настроек приложения
function getConfigs(string $path = DIR_CONFIG): array
{
    $setting = [];
    foreach (scandir(__DIR__ . $path) as $file) {
        $name = explode('.', $file)[0];
        if (!empty($name)) {
            $setting[$name] = include __DIR__ . "$path/$file";
        }
    }
    return $setting;
}

require_once __DIR__ . '/../routes/web.php';

$app = new Src\Application(new Src\Setting(getConfigs()));

function app() {
    global $app;
    return $app;
}

return $app;