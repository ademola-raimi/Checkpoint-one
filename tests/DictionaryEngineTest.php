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
    public $dictionaryManager;
    public $dictionaryRetrieveAll;
    
    /*
     * This function setup is used to create an object of DictionaryEngine and 
     * UrbanWords 
     */
    public function setUp()
    {
        $this->dictionaryManager = new DictionaryEngine();
        $this->data = UrbanWords::getData();
    }
    
    /*
     * To test if an entry can be added.
     */
	public function testAdd()
	{
        $dictionaryEntryAdd = $this->dictionaryManager->add("Ginger", "When someone is energetic", "Prosper is a ginger developer");
	    $this->assertEquals(true, $dictionaryEntryAdd);

	    $dictionaryEntryAdd = $this->dictionaryManager->add("ginger", "When someone is energetic", "Prosper is a ginger developer");
	    $this->assertEquals(true, $dictionaryEntryAdd);

	    $dictionaryEntryAdd = $this->dictionaryManager->add("GINGER", "When someone is energetic", "Prosper is a ginger developer");
	    $this->assertEquals(true, $dictionaryEntryAdd);
	}

	/*
     * To test if an entry can be retrieved.
     */
	public function testRetrieve()
	{	
        $this->dictionaryManager->add("Ginger", "When someone is energetic", "Prosper is a ginger developer");

        $dictionaryEntryRetrieve         = $this->dictionaryManager->retrieve("Ginger");
        $this->assertEquals(['Ginger'            => [ 
                                "description"    => "When someone is energetic",
                                "sampleSentence" => "Prosper is a ginger developer"]
                            ], $dictionaryEntryRetrieve);

        $dictionaryEntryRetrieve         = $this->dictionaryManager->retrieve("ginger");
        $this->assertEquals(['Ginger'            => [ 
                                "description"    => "When someone is energetic",
                                "sampleSentence" => "Prosper is a ginger developer"]
                            ], $dictionaryEntryRetrieve);

        $dictionaryEntryRetrieve         = $this->dictionaryManager->retrieve("GINGER");
        $this->assertEquals(['Ginger'            => [ 
                                "description"    => "When someone is energetic",
                                "sampleSentence" => "Prosper is a ginger developer"]
                            ], $dictionaryEntryRetrieve);
    }

    public function testRetrieveAll()
    {
	    $dictionaryRetrieveAll = $this->dictionaryManager->retrieveAll();
	    $this->assertEquals($this->data, $dictionaryRetrieveAll);
    }

    /* 
     *Test to see if an entry can be edited or updated.
     */
    public function testUpdate()
    {
        $this->dictionaryManager->add("Ginger", "When someone is energetic", "Prosper is a ginger developer");

        $dictionaryEntryUpdate      = $this->dictionaryManager->update("Ginger", "when someone is hyper-active", "Laztopaz is a ginger developer");
        $this->assertEquals(['Ginger'            => [
			                    'description'    => 'when someone is hyper-active',
							    'sampleSentence' =>   'Laztopaz is a ginger developer']
							], $dictionaryEntryUpdate);

        $dictionaryEntryUpdate      = $this->dictionaryManager->update("ginger", "when someone is hyper-active", "Laztopaz is a ginger developer");
        $this->assertEquals(['Ginger'            => [
			                    'description'    => 'when someone is hyper-active',
							    'sampleSentence' =>   'Laztopaz is a ginger developer']
							], $dictionaryEntryUpdate);

        $dictionaryEntryUpdate      = $this->dictionaryManager->update("GINGER", "when someone is hyper-active", "Laztopaz is a ginger developer");
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
        $this->dictionaryManager->delete("Baller");
        $this->assertNotContains('Baller', $this->data);
    }

     /*
     * Test to see if an entry can be removed or deleted.
     */
    public function testDeleteException()
    {
        $this->dictionaryManager->delete("Baller");
        $this->assertNotContains('Baller', $this->data);
    }
}
