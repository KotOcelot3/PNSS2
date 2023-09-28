<?php

namespace Src;

use Error;
use Illuminate\Container\Container;
use Illuminate\Events\Dispatcher;
use Illuminate\Database\Capsule\Manager as Capsule;
use Src\Auth\Auth;

class Application
{
    private Setting $setting;
    private Route $route;
    private Capsule $dbManager;
    private Auth $auth;

    public function __construct(Setting $setting)
    {
        //Привязываем класс со всеми настройками приложения
        $this->setting = $setting;
        //Привязываем класс маршрутизации с установкой префикса
        $this->route = Route::single()->setPrefix($this->setting->getRootPath());
        //Создаем класс менеджера для базы данных
        $this->dbManager = new Capsule();
        //Создаем класс для аутентификации на основе настроек приложения
        $this->auth = new $this->setting->app['auth'];

        //Настройка для работы с базой данных
        $this->dbRun();
        //Инициализация класса пользователя на основе настроек приложения
        $this->auth::init(new $this->setting->app['identity']);
    }


    public function __get($key)
    {
        switch ($key) {
            case 'settings':
                return $this->setting;
            case 'route':
                return $this->route;
            case 'auth':
                return $this->auth;
        }
        throw new Error('Accessing a non-existent property');
    }

    private function dbRun()
    {
        $this->dbManager->addConnection($this->setting->getDbSetting());
        $this->dbManager->setEventDispatcher(new Dispatcher(new Container));
        $this->dbManager->setAsGlobal();
        $this->dbManager->bootEloquent();
    }

    public function run(): void
    {
        //Запуск маршрутизации
        $this->route->start();
    }
}
