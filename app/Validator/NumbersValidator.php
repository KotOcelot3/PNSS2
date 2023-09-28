<?php

namespace Validator;

use Src\Validator\AbstractValidator;

class NumbersValidator extends AbstractValidator
{

    protected string $message = 'Field :field consists of numbers';

    public function rule(): bool
    {
        return preg_match('/^[0-9]++$/ui',$this->value);
    }
}