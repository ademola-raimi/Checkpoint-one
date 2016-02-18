<?php

require 'vendor/autoload.php';

use Demo\UrbanDictionary\Dictonary;
use Demo\UrbanDictionary\RankWord;
use Demo\UrbanDictionary\UrbanWords;
use Demo\UrbanDictionary\DictionaryEngine;
use Demo\UrbanDictionary\WordNotFoundException;

	 
	  $newWord = new DictionaryEngine();

	     //echo $newWord->add("when someone has energy", "You need ginger in your cp1");
	     
	  //$newWord->add("demo", "short version of Ademola", "Demo is a rockstar programmer");
	  //var_dump($result);

	  // $newWord->add("kusH", "getting high on weed", "Doyin went to kush");
	  // //print_r($result);
	  // print_r($newWord->retrieveAll());

	 
	  // $result = $newWord->retrieveAll();
	  // print_r($result);
	
	  try {
	   echo $newWord->delete('Tight');
	}catch(WordNotFoundException $e) {
		print($e->getMessage());
	}
	     


	   // try {
	 		// $result = $newWord->delete('Baller');
	   	
	   // } catch(WordNotFoundException $e) {
	   // 	print($e->getMessage());
	   // }
	   
	    //print_r($newWord->delete());
	  
// $wordFormat = "I love playing ball";
// echo lcfirst(strtoupper($wordFormat));
	  
    // print sha1("hello") . "<br>";
    // print sha1("Hello") . "<br>";
    // print sha1("hello") . "<br>";
    // print sha1("This is a very, very, very, very, very, very, very long test");








?> 









