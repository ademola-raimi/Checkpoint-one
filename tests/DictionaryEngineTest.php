<?php

/**
 * @author : Raimi Ademola
 */

namespace Demo\Tests;

use PHPUnit_Framework_TestCase;
use Demo\UrbanDictionary\UrbanWords;
use Demo\UrbanDictionary\DictionaryEngine;


Class DictionaryEngineTest extends PHPUnit_Framework_TestCase
{

	/*
     * Test to see if an entry can be added.
     */
	public function testAdd()
	{
		$array_add = new DictionaryEngine;
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
		$array_retrieve = new DictionaryEngine;
		
		$result = $array_retrieve->retrieve("Tight");
		$this->assertEquals("Tight: When someone performs an awesome task. Usage: Prosper has finished the curriculum, Tight.", $result);

		//$array_retrieve = new DictionaryEngine;
		$result = $array_retrieve->retrieve("tight");
		$this->assertEquals("Tight: When someone performs an awesome task. Usage: Prosper has finished the curriculum, Tight.", $result);

		//$array_retrieve = new DictionaryEngine;
		$result = $array_retrieve->retrieve("TIGHT");
		$this->assertEquals("Tight: When someone performs an awesome task. Usage: Prosper has finished the curriculum, Tight.", $result);
	}

	/*
     * Test to see if an entry can be edited or updated.
     */
	public function testUpdate()
	{
		$array_update = new DictionaryEngine;

		$data = $array_update->update("Tight", "when something is wonderful", "He is tight");
		$this->assertEquals(["description" => "when something is wonderful",
                        	"sample-sentence" => "He is tight"
                    		], $data['Tight']);

		//$array_update = new DictionaryEngine;
		$data = $array_update->update("tight", "when something is wonderful", "He is tight");
		$this->assertEquals(["description" => "when something is wonderful",
                        	"sample-sentence" => "He is tight"
                    		], $data['Tight']);

		//$array_update = new DictionaryEngine;
		$data         = $array_update->update("TIGHT", "when something is wonderful", "He is tight");
		$this->assertEquals(["description" => "when something is wonderful",
                        	"sample-sentence" => "He is tight"
                    		], $data['Tight']);
	}

	/*
     * Test to see if an entry can be removed or deleted.
     */
	public function testDelete()
	{
		$array_delete = new DictionaryEngine;

		$result       = $array_delete->delete("Tight");
		$this->assertEquals($result['Tight'], null);

		//$array_delete = new DictionaryEngine;
		$result       = $array_delete->delete("tight");
		$this->assertEquals($result['Tight'], null);

		//$array_delete = new DictionaryEngine;
		$result       = $array_delete->delete("TIGHT");
		$this->assertEquals($result['Tight'], null);
	}
}

