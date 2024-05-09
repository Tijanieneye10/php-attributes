<?php

namespace App\DTO;

use App\Validation\Rules\Min;
use App\Validation\Rules\Required;

readonly class UserRegistration
{
    public function __construct(
        #[Min,Required]
        public string $name,
        #[Required]
        public string $email
    ){}

}