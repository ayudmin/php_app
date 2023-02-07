<?php

class Validator
{
    public function string($value)
    {
        return strlen($value) === 0;
    }
}
