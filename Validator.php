<?php

class Validator
{
    public function string($value)
    {
        return strlen(trim($value)) === 0;
    }
}
