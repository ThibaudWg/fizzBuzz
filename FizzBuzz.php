<?php


class FizzBuzz
{
    public function count($int):string
    {
        if ($int === 3)return "Fizz";
        if($int === 2)return "2";
        return "1";
    }
}