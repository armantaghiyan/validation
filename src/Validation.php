<?php

namespace ArmanValidation;

class Validation
{
    public function has(array $array, string $filed): bool
    {
        if (isset($array[$filed])) {
            return true;
        }

        return false;
    }

    public function get()
    {

    }
}