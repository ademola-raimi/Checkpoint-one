<?php 

namespace Demo\Tests;

use PHPUnit_Framework_TestCase;
use Demo\UrbanDictionary\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $c = New Calculator;
        $result = $c ->add(5, 10);
        $this ->assertEquals(15, $result);
    }
}
