<?php

namespace Demo\UrbanDictionary;
use Demo\UrbanDictionary\UrbanWords;
use Demo\UrbanDictionary\Crud;
use Exception;

class UserException extends Exception  
{
	public function compare_word_key($word,$key)
	{
		if(strtolower($key) != strtolower($word))
		{
			throw new Exception($word . " is not found in the dictionary, try another word (ps: input word only)");
		}	

	}
	
}



