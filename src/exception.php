<?php


/**
 * class UserException
 * @extends Exception
 *
 * Throws an error if the index for
 * the key is not found in the
 * array
 *
 * @author : Raimi Ademola
 */
namespace Demo\UrbanDictionary;
use Demo\UrbanDictionary\UrbanWords;
use Demo\UrbanDictionary\Crud;
use Exception;

class UserException extends Exception  
{

	/**
	 * @method compare_word_key
	 *
	 * returns an error message to the calling
	 * method. check if the $key and $word are not equal,
	 * If they are not it throws an exception
	 *
	 * usage $e->getErrorMessage();
	 *
	 * @return string
	 */

	public function compare_word_key($word,$key)
	{
		if(strtolower($key) != strtolower($word))
		{
			throw new Exception($word . " is not found in the dictionary, try another word (ps: input word only)");
		}	

	}
}



