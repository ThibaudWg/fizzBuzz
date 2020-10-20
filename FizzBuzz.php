<?php


class FizzBuzz
{
    public function count($int):string
    {
        if ($int === 3)return "Fizz";
        return strval($int);
    }
}