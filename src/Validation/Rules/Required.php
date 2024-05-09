<?php

namespace App\Validation\Rules;

use App\Validation\Rules\Validators\ValidatorInterface;
use Attribute;

#[Attribute]
class Required implements ValidationRuleInterface
{
    public function getValidator(): ValidatorInterface
    {
        dd('required');
    }
}