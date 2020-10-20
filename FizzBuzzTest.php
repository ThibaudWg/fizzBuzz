<?php

require "vendor/autoload.php";
require "FizzBuzz.php";

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    private $fizzBuzz;

    protected function setUp():void
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function test_count_given1_shouldReturn1(){
        //A

        //Act
        $actual = $this->fizzBuzz->count(1);
        //Assert
        $this->assertEquals("1",$actual);
    }

    public function test_count_given2_shouldReturn2(){

        $actual = $this->fizzBuzz->count(2);

        $this->assertEquals("2",$actual);

    }

    public function test_count_given3_shouldReturnFizz(){
        $actual=$this->fizzBuzz->count(3);
        $this->assertEquals("Fizz", $actual);
    }

    public function test_count_given4_shouldReturn4(){
        $actual=$this->fizzBuzz->count(4);
        $this->assertEquals("4", $actual);
    }



}