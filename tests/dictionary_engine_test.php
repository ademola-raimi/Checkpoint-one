<?php

namespace Demo\Tests;

use PHPUnit_Framework_TestCase;
use Demo\UrbanDictionary\UrbanWords;
use Demo\UrbanDictionary\Crud;

Class CrudTest extends PHPUnit_Framework_TestCase
{
	public function testAdd()
	{
		$array_add = new Crud;

		$data = $array_add->add("Gay", "homosexual male", "He is a gay");

		$this->assertEquals(["description" => "homosexual male",
                        	"sample-sentence" => "He is a gay"
                    		], $data['Gay']);
	}

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




