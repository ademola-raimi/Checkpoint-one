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
    public $crudOperation1;
    public $crudOperation2;
    public $crudOperation3;
    public $dictionaryRetrieveAll;
    
    /*
     * This function setup is used to create objects. Three objects testing for uppercase and 
     * lowercase and the forth is an instance of the dictionary
     */
    public function setUp()
    {
        $this->crudOperation1 = new DictionaryEngine("Ginger");
        $this->crudOperation2 = new DictionaryEngine("GINGER");
        $this->crudOperation3 = new DictionaryEngine("ginger");
        $this->data = new UrbanWords();
    }
    
    /*
     * To test if an entry can be added.
     */
	public function testAdd()
	{
        $dictionaryEntryAdd = $this->crudOperation1->add("When someone is energetic", "Prosper is a ginger developer");
	    $this->assertEquals(true, $dictionaryEntryAdd);

	    $dictionaryEntryAdd = $this->crudOperation2->add("When someone is energetic", "Prosper is a ginger developer");
	    $this->assertEquals(true, $dictionaryEntryAdd);

	    $dictionaryEntryAdd = $this->crudOperation3->add("When someone is energetic", "Prosper is a ginger developer");
	    $this->assertEquals(true, $dictionaryEntryAdd);
	}

	/*
     * To test if an entry can be retrieved.
     */
	public function testRetrieve()
	{	
        $this->crudOperation1->add("When someone is energetic", "Prosper is a ginger developer");
        $dictionaryEntryRetrieve         = $this->crudOperation1->retrieve();
        $this->assertEquals(['Ginger'            => [ 
                                "description"    => "When someone is energetic",
                                "sampleSentence" => "Prosper is a ginger developer"]
                            ], $dictionaryEntryRetrieve);

        $this->crudOperation2->add("When someone is energetic", "Prosper is a ginger developer");
        $dictionaryEntryRetrieve         = $this->crudOperation1->retrieve();
        $this->assertEquals(['Ginger'            => [ 
                                "description"    => "When someone is energetic",
                                "sampleSentence" => "Prosper is a ginger developer"]
                            ], $dictionaryEntryRetrieve);

        $this->crudOperation3->add("When someone is energetic", "Prosper is a ginger developer");
        $dictionaryEntryRetrieve         = $this->crudOperation1->retrieve();
        $this->assertEquals(['Ginger'            => [ 
                                "description"    => "When someone is energetic",
                                "sampleSentence" => "Prosper is a ginger developer"]
                            ], $dictionaryEntryRetrieve);
    }

    public function testRetrieveAll()
    {
        $dictionaryRetrieveAll = $this->data->allData();
	    $dictionaryRetrieve = $this->crudOperation1->retrieveAll();
	    $this->assertEquals($dictionaryRetrieveAll, $dictionaryRetrieve);
    }

    /* 
     *Test to see if an entry can be edited or updated.
     */
    public function testUpdate()
    {
        $this->crudOperation1->add("When someone is energetic", "Prosper is a ginger developer");
        $dictionaryEntryUpdate      = $this->crudOperation1->update("when someone is hyper-active", "Laztopaz is a ginger developer");
        $this->assertEquals(['Ginger'            => [
			                    'description'    => 'when someone is hyper-active',
							    'sampleSentence' =>   'Laztopaz is a ginger developer']
							], $dictionaryEntryUpdate);

        $this->crudOperation2->add("When someone is energetic", "Prosper is a ginger developer");
        $dictionaryEntryUpdate      = $this->crudOperation2->update("when someone is hyper-active", "Laztopaz is a ginger developer");
        $this->assertEquals(['Ginger'            => [
			                    'description'    => 'when someone is hyper-active',
							    'sampleSentence' =>   'Laztopaz is a ginger developer']
							], $dictionaryEntryUpdate);

        $this->crudOperation3->add("When someone is energetic", "Prosper is a ginger developer");
        $dictionaryEntryUpdate      = $this->crudOperation3->update("when someone is hyper-active", "Laztopaz is a ginger developer");
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
        $this->crudOperation1->add("When someone is energetic", "Prosper is a ginger developer");
        $dictionaryEntryDelete = $this->crudOperation1->delete();
        $this->assertEquals(true, $dictionaryEntryDelete);

        $this->crudOperation2->add("When someone is energetic", "Prosper is a ginger developer");
        $dictionaryEntryDelete = $this->crudOperation2->delete();
        $this->assertEquals(true, $dictionaryEntryDelete);

        $this->crudOperation3->add("When someone is energetic", "Prosper is a ginger developer");
        $dictionaryEntryDelete = $this->crudOperation3->delete();
        $this->assertEquals(true, $dictionaryEntryDelete);
    }
}
