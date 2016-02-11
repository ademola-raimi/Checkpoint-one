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
		$arrayAdd = new DictionaryEngine;
		$result   = $arrayAdd->add("Gay", "homosexual male", "He is a gay");
	    $this->assertEquals(["Gay" => [
                           "0" => [
                           "description" => "homosexual male",
                           "sample-sentence" => "He is a gay"
                                        ]
                                           ]
		                 ], $result);

	    $result   = $arrayAdd->add("GAY", "homosexual male", "He is a gay");
	    $this->assertEquals(["Gay" => [
                           "0" => [
                           "description" => "homosexual male",
                           "sample-sentence" => "He is a gay"
                                        ]
                                           ]
		                 ], $result);

	    $result   = $arrayAdd->add("gay", "homosexual male", "He is a gay");
	    $this->assertEquals(["Gay" => [
                           "0" => [
                           "description" => "homosexual male",
                           "sample-sentence" => "He is a gay"
                                        ]
                                           ]
		                 ], $result);
	}

	/*
     * Test to see if an entry can be retrieved.
     */
	public function testRetrieve()
	{
		$arrayRetrieve  = new DictionaryEngine;
		
		$result         = $arrayRetrieve->retrieve("Tight");
		$this->assertEquals([ 'Tight' => [ 
                        "description" => "When someone performs an awesome task",
                        "sampleSentence" => "Prosper has finished the curriculum, Tight."
                    ]], $result);

		$result         = $arrayRetrieve->retrieve("tight");
		$this->assertEquals([ 'Tight' => [ 
                        "description" => "When someone performs an awesome task",
                        "sampleSentence" => "Prosper has finished the curriculum, Tight."
                    ]], $result);

		$result         = $arrayRetrieve->retrieve("TIGHT");
		$this->assertEquals([ 'Tight' => [ 
                        "description" => "When someone performs an awesome task",
                        "sampleSentence" => "Prosper has finished the curriculum, Tight."
                    ]], $result);
	}

	/*
     * Test to see if an entry can be edited or updated.
     */
	public function testUpdate()
	{
		$arrayUpdate = new DictionaryEngine;

		$result      = $arrayUpdate->update("Tight", "when something is wonderful", "He is tight");
		$this->assertEquals(['Tight' => ['description' => 'when something is wonderful',
										  'sampleSentence'=>   'He is tight' 
							              ]], $result);

		$result      = $arrayUpdate->update("tight", "when something is wonderful", "He is tight");
		$this->assertEquals(['Tight' => ['description' => 'when something is wonderful',
										  'sampleSentence'=>   'He is tight' 
							              ]], $result);

		$result      = $arrayUpdate->update("TIGHT", "when something is wonderful", "He is tight");
		$this->assertEquals(['Tight' => ['description' => 'when something is wonderful',
										  'sampleSentence'=>   'He is tight' 
							              ]], $result);
	}

	/*
     * Test to see if an entry can be removed or deleted.
     */
	  public function testDelete()
	  {
	      $data         = UrbanWords::data();
	      $arrayDelete  = new DictionaryEngine;

    	  $result       = $arrayDelete->delete('Tight');
		  $this->assertNotContains('Tight', $result);

		  $result       = $arrayDelete->delete("tight");
		  $this->assertNotContains('Tight', $result);

		  $result       = $arrayDelete->delete("TIGHT");
		  $this->assertNotContains('Tight', $result);

		  $result       = $arrayDelete->delete("Beer me");
		  $this->assertNotContains('Beer me', $result);
	}
}

