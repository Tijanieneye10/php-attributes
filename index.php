<?php

use App\DTO;

require_once "vendor/autoload.php";


$registration = new DTO\UserRegistration('Tijani', 'tijani@gmail.com');


$validator = new \App\Validation\Validator();


dd($validator->validate($registration));