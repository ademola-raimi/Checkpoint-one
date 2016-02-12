<?php

require 'vendor/autoload.php';

use Demo\UrbanDictionary\Dictonary;
use Demo\UrbanDictionary\RankWord;
use Demo\UrbanDictionary\UrbanWords;
use Demo\UrbanDictionary\DictionaryEngine;
use Demo\UrbanDictionary\UserException;

	 
	  $newWord = new DictionaryEngine;

	    //$result = $newWord->add("ginger", "when someone has energy", "You need ginger in your cp1");
	   //var_dump($result);

	  // $result = $newWord->add("demo", "short version of Ademola", "Demo is a rockstar programmer");
	  // var_dump($result);

	  // $result = $newWord->add("kush", "getting high on weed", "Doyin went to kush");
	  // print_r($result);


	   try{
	   	$result = $newWord->update('tght', 'when something is wonderful', 'Prosper is Tight');
		  print_r($result);
	   } catch(UserException $e) {
	   	print($e->getMessage());
	   }

	  // $result = $newWord->retrieveAll();
	  // print_r($result);
	



	   //try {
	 	
	   	
	   //} catch(UserException $e) {
	   	//print($e->getMessage());
	   //}
	   // $result = $newWord->delete('Baller');
	   //  $result = $newWord->delete('tight');
	   // print_r($result);
// $wordFormat = "I love playing ball";
// echo lcfirst(strtoupper($wordFormat));
	  
    // print sha1("hello") . "<br>";
    // print sha1("Hello") . "<br>";
    // print sha1("hello") . "<br>";
    // print sha1("This is a very, very, very, very, very, very, very long test");








?> 









