<?php


class FizzBuzz
{
    public function count($int):string
    {
        if ($int === 5)return "Buzz";
        if ($int%3 === 0)return "Fizz";
        return strval($int);
    }
}