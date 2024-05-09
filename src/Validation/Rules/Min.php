<?php

namespace App\Validation\Rules;

use App\Validation\Rules\Validators\ValidatorInterface;
use Attribute;

#[Attribute]
class Min implements ValidationRuleInterface
{
    public function getValidator(): ValidatorInterface
    {
        dd('min');
    }
}