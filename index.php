<?php

require 'vendor/autoload.php';

use Demo\UrbanDictionary\Dictonary;
use Demo\UrbanDictionary\RankWord;
use Demo\UrbanDictionary\UrbanWords;
use Demo\UrbanDictionary\DictionaryEngine;
use Demo\UrbanDictionary\UserException;

	 
	  $newWord = new DictionaryEngine;

	  //  $result = $newWord->add("ginger", "when someone has energy", "You need ginger in your cp1");
	  // var_dump($result);

	  // $result = $newWord->add("demo", "short version of Ademola", "Demo is a rockstar programmer");
	  // var_dump($result);

	  // $result = $newWord->add("kush", "getting high on weed", "Doyin went to kush");
	  // print_r($result);


	  // try{
	  // 	$result = $newWord->update('tight', 'when something is wonderful', 'Prosper is Tight');
		 // print_r($result);
	  // } catch(UserException $e) {
	  // 	print($e->getMessage());
	  // }
	



	  // try{
	 	
	  // 	$result = $newWord->retrieve('tightS');
	  // 	print_r($result);
	  // } catch(UserException $e) {
	  // 	print($e->getMessage());
	  // }
	 // $result = $newWord->delete('Baller');
	 // print_r($result);
	  $result = $newWord->delete('BaLLER');
	 print_r($result);
?> 