<?php

namespace ArmanValidation;

class Validation
{
    public function required(array $array, string $filed): bool
    {
        if (isset($array[$filed])) {
            return true;
        }

        return false;
    }

}