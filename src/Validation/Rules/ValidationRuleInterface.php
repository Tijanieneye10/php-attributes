<?php

namespace App\Validation\Rules;

use App\Validation\Rules\Validators\ValidatorInterface;

interface ValidationRuleInterface
{
    public function getValidator(): ValidatorInterface;
}