<?php

namespace Demo/Tests;

use PHPUnit_Framework_TestCase;
use Demo\UrbanDictionary\urban_dictionary; 

Class CrudTest extends PHPUnit_Framework_TestCase
{
     public function testAdd()
     {
         $data = new Crud;
         $result = $data ->add()	
         $c = New Calculator;
        $result = $c ->add(5, 10);
        $this ->assertEquals(15, $result);
     }
}



