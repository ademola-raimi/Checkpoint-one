<?php
/**
 *
 * @author : Raimi Ademola
 */
namespace Demo\Tests;

use PHPUnit_Framework_TestCase;
use Demo\UrbanDictionary\RankWord;



Class RankWordTest extends PHPUnit_Framework_TestCase
{
	/*
    * Test to see if an entry can be retrieved.
    */
	public function testRank_word()
	{
		$word_occurence = new RankWord;

		$result = $word_occurence->rank_word("Prosper has finished it Tight Tight Tight");

		$this->assertEquals(array("Tight" => 3, "Prosper" => 1, "has" => 1, "finished" => 1, "it" => 1), $result);
	}
}
