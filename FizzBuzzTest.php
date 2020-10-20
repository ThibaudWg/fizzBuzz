<?php

require "vendor/autoload.php";
require "FizzBuzz.php";

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{

    public function test_count_given1_shouldReturn1(){
        //A
        $fizzBuzz = new FizzBuzz();
        //Act
        $actual = $fizzBuzz->count(1);
        //Assert
        $this->assertEquals("1",$actual);
    }

    public function test_count_given2_shouldReturn2(){
        $fizzBuzz = new FizzBuzz();

        $actual = $fizzBuzz->count(2);

        $this->assertEquals("2",$actual);

    }
}