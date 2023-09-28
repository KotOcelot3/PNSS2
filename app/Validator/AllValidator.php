<?php

namespace Validator;

use Src\Validator\AbstractValidator;

class AllValidator extends AbstractValidator
{

    protected string $message = 'Field :field consists of Cyrillic';

    public function rule(): bool
    {
        return preg_match('/^[а-яa-z0-9]++$/ui',$this->value);
    }
}