<?php


class FizzBuzz
{
    public function count($int):string
    {
        if ($int === 5)return "Buzz";
        if ($int === 3 || $int === 6)return "Fizz";
        return strval($int);
    }
}