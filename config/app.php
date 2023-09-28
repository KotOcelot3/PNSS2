<?php
return [
//Класс аутентификации
    'auth' => \Src\Auth\Auth::class,
//Клас пользователя
    'identity' => \Model\User::class,
//Классы для middleware

    'routeAppMiddleware' => [
        'trim' => \Middlewares\TrimMiddleware::class,
        'specialChars' => \Middlewares\SpecialCharsMiddleware::class,
        'csrf' => \Middlewares\CSRFMiddleware::class,
    ],

    'routeMiddleware' => [
        'auth' => \Middlewares\AuthMiddleware::class,
        'user' => \Middlewares\UserMiddleware::class,
        'admin' => \Middlewares\AdminMiddleware::class,
    ],

    'validators' => [
        'required' => \Validator\RequireValidator::class,
        'unique' => \Validator\UniqueValidator::class,
        'number' => \Validator\NumbersValidator::class,
        'cyrillic' => \Validator\CyrillicValidator::class,
        'all' => \Validator\AllValidator::class,
        'image' => \Validator\ImageValidator::class,
        'latinNumber' => \Validator\LatinNumberValidator::class,
    ],
];
