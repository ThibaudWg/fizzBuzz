<?php


class FizzBuzz
{
    public function count($int):string
    {
        if ($int === 5)return "Buzz";
        if ($this->isMultipleOf3($int))return "Fizz";
        return strval($int);
    }

    public function isMultipleOf3($int): bool
    {
        return $int % 3 === 0;
    }
}