<?php

/**
 * @author : Raimi Ademola
 */

namespace Demo\Tests;

use PHPUnit_Framework_TestCase;
use Demo\UrbanDictionary\UrbanWords;
use Demo\UrbanDictionary\Crud;
use Demo\UrbanDictionary\RankWordTest;

Class CrudTest extends PHPUnit_Framework_TestCase
{

	/*
     * Test to see if an entry can be added.
     */
	public function testAdd()
	{
		$array_add = new Crud;

		$data = $array_add->add("Gay", "homosexual male", "He is a gay");

		$this->assertEquals(["description" => "homosexual male",
                        	"sample-sentence" => "He is a gay"
                    		], $data['Gay']);
	}

	/*
     * Test to see if an entry can be retrieved.
     */

	public function testRetrieve()
	{
		$array_retrieve = new Crud;

		$result = $array_retrieve->retrieve("Tight");

		$this->assertEquals("Tight: When someone performs an awesome task. Usage: Prosper has finished the curriculum, Tight.", $result);

		$array_retrieve = new Crud;

		$result = $array_retrieve->retrieve("tight");

		$this->assertEquals("Tight: When someone performs an awesome task. Usage: Prosper has finished the curriculum, Tight.", $result);

		$array_retrieve = new Crud;

		$result = $array_retrieve->retrieve("TIGHT");

		$this->assertEquals("Tight: When someone performs an awesome task. Usage: Prosper has finished the curriculum, Tight.", $result);
	}

	/*
     * Test to see if an entry can be edited or updated.
     */

	public function testUpdate()
	{
		$array_update = new Crud;

		$data = $array_update->update("Tight", "when something is wonderful", "He is tight");

		$this->assertEquals(["description" => "when something is wonderful",
                        	"sample-sentence" => "He is tight"
                    		], $data['Tight']);

		$array_update = new Crud;

		$data = $array_update->update("tight", "when something is wonderful", "He is tight");

		$this->assertEquals(["description" => "when something is wonderful",
                        	"sample-sentence" => "He is tight"
                    		], $data['Tight']);

		$array_update = new Crud;

		$data = $array_update->update("TIGHT", "when something is wonderful", "He is tight");

		$this->assertEquals(["description" => "when something is wonderful",
                        	"sample-sentence" => "He is tight"
                    		], $data['Tight']);
	}

	/*
     * Test to see if an entry can be removed or deleted.
     */

	public function testDelete()
	{
		$array_delete = new Crud;

		$result = $array_delete->delete("Tight");

		$this->assertEquals($result['Tight'], null);

		$array_delete = new Crud;

		$result = $array_delete->delete("tight");

		$this->assertEquals($result['Tight'], null);

		$array_delete = new Crud;

		$result = $array_delete->delete("TIGHT");

		$this->assertEquals($result['Tight'], null);

	}
}

Class RankWordTest extends PHPUnit_Framework_TestCase
{
	public function testRank_word()
	{
		$word_occurence = new RankWord;

		$result = $word_occurence->rank_word("Prosper has finished the curriculum and he will submit it to Nadayar. Tight Tight Tight");

		$this->assertEquals(["Tight" => 3, "Prosper" => 1, "has" => 1, "Have" => 1, "you" => 1, 
								"finished" => 1, "the" => 1, "curriculum" => 1, "and" => 1, "he" => 1, "will" => 1, 
								"submit" => 1, "it" => 1, "to" => 1, "Nadayar" => 1], $result);
	}
}




