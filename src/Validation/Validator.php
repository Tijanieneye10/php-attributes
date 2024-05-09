<?php

namespace App\Validation;

use App\Validation\Rules\ValidationRuleInterface;
use ReflectionAttribute;

class Validator
{
    private array $errors = [];
    public function validate(object $object):void
    {
        $reflector = new \ReflectionClass($object);

        foreach ($reflector->getProperties() as $property){
            $attributes = $property->getAttributes(
                ValidationRuleInterface::class,
                ReflectionAttribute::IS_INSTANCEOF
            );

            foreach ($attributes as $attribute){
                $validator = $attribute->newInstance()->getValidator();

                if(! $validator->validate($property->getValue($object))){}
            }
        }
    }

    public function getErrors(){}
}