<?php

/**
 * @author: Raimi Ademola <ademola.raimi@andela.com>
 * @copyright: 2016 Andela
 */

namespace Demo\Tests;

use PHPUnit_Framework_TestCase;
use Demo\UrbanDictionary\UrbanWords;
use Demo\UrbanDictionary\DictionaryEngine;

Class DictionaryEngineTest extends PHPUnit_Framework_TestCase
{
    public $crudOperation;
    public $dictionaryRetrieveAll;
    
    /*
     * This function setup is used to create an object of DictionaryEngine and 
     * UrbanWords 
     */
    public function setUp()
    {
        $this->crudOperation = new DictionaryEngine();
        $this->data = UrbanWords::getData();
    }
    
    /*
     * To test if an entry can be added.
     */
	public function testAdd()
	{
        $dictionaryEntryAdd = $this->crudOperation->add("Ginger", "When someone is energetic", "Prosper is a ginger developer");
	    $this->assertEquals(true, $dictionaryEntryAdd);

	    $dictionaryEntryAdd = $this->crudOperation->add("ginger", "When someone is energetic", "Prosper is a ginger developer");
	    $this->assertEquals(true, $dictionaryEntryAdd);

	    $dictionaryEntryAdd = $this->crudOperation->add("GINGER", "When someone is energetic", "Prosper is a ginger developer");
	    $this->assertEquals(true, $dictionaryEntryAdd);
	}

	/*
     * To test if an entry can be retrieved.
     */
	 public function testRetrieve()
	 {	
        $this->crudOperation->add("Ginger", "When someone is energetic", "Prosper is a ginger developer");

        $dictionaryEntryRetrieve         = $this->crudOperation->retrieve("Ginger");
        $this->assertEquals(['Ginger'            => [ 
                                "description"    => "When someone is energetic",
                                "sampleSentence" => "Prosper is a ginger developer"]
                            ], $dictionaryEntryRetrieve);

        $dictionaryEntryRetrieve         = $this->crudOperation->retrieve("ginger");
        $this->assertEquals(['Ginger'            => [ 
                                "description"    => "When someone is energetic",
                                "sampleSentence" => "Prosper is a ginger developer"]
                            ], $dictionaryEntryRetrieve);

        $dictionaryEntryRetrieve         = $this->crudOperation->retrieve("GINGER");
        $this->assertEquals(['Ginger'            => [ 
                                "description"    => "When someone is energetic",
                                "sampleSentence" => "Prosper is a ginger developer"]
                            ], $dictionaryEntryRetrieve);
    }

    public function testRetrieveAll()
    {
	    $dictionaryRetrieveAll = $this->crudOperation->retrieveAll();
	    $this->assertEquals($this->data, $dictionaryRetrieveAll);
    }

    /* 
     *Test to see if an entry can be edited or updated.
     */
    public function testUpdate()
    {
        $this->crudOperation->add("Ginger", "When someone is energetic", "Prosper is a ginger developer");

        $dictionaryEntryUpdate      = $this->crudOperation->update("Ginger", "when someone is hyper-active", "Laztopaz is a ginger developer");
        $this->assertEquals(['Ginger'            => [
			                    'description'    => 'when someone is hyper-active',
							    'sampleSentence' =>   'Laztopaz is a ginger developer']
							], $dictionaryEntryUpdate);

        $dictionaryEntryUpdate      = $this->crudOperation->update("ginger", "when someone is hyper-active", "Laztopaz is a ginger developer");
        $this->assertEquals(['Ginger'            => [
			                    'description'    => 'when someone is hyper-active',
							    'sampleSentence' =>   'Laztopaz is a ginger developer']
							], $dictionaryEntryUpdate);

        $dictionaryEntryUpdate      = $this->crudOperation->update("GINGER", "when someone is hyper-active", "Laztopaz is a ginger developer");
        $this->assertEquals(['Ginger'            => [
			                    'description'    => 'when someone is hyper-active',
							    'sampleSentence' =>   'Laztopaz is a ginger developer']
							], $dictionaryEntryUpdate);
    }

    /*
     * Test to see if an entry can be removed or deleted.
     */
    public function testDelete()
    {
        $this->crudOperation->delete("Baller");
        $this->assertNotContains('Baller', $this->data);

        $dictionaryEntryDelete = $this->crudOperation->delete("tight");
        $this->assertNotContains('Tight', $this->data);

        $dictionaryEntryDelete = $this->crudOperation->delete("BEER ME");
        $this->assertNotContains('Beer me', $this->data);
    }
}
