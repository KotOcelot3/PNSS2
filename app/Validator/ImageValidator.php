<?php

namespace Validator;

use Src\Validator\AbstractValidator;

class ImageValidator extends AbstractValidator
{

    protected string $message = 'Field :field must be png and jpeg images';

    public function rule(): bool
    {
        return in_array($this->value['type'], ['image/png','image/jpeg', 'image/webp']);;
    }
}