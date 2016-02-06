<?php

namespace Demo\Tests;

use PHPUnit_Framework_TestCase;
use Demo\UrbanDictionary\RankWord;



Class RankWordTest extends PHPUnit_Framework_TestCase
{
     public function testRank_word()
     {
         $word_count= new RankWord;
         $result = $word_count->rank_word("prosper prosper i am i am");	
         $this->assertEquals(["prosper" => 2, "i" => 2, "am" => 2], $result);
     }
}
