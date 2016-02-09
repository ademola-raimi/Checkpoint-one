<?php

/**
 * class UserException
 * @extends Exception
 *
 * Throws an error if the index for
 * the key is not found in the
 * array
 *
 * @author: Raimi Ademola
 */
namespace Demo\UrbanDictionary;
use Demo\UrbanDictionary\Crud;
use Exception;

class UserException extends Exception  
{
	public $error_message;

	/**
     * @param string $error_message
	 */
	public function __construct($error_message)
	{
		$this->message->$error_message;
	}

    /**
	 * @method get_error_message
	 *
	 * returns an error message to the calling
	 * method. check if the $key and $word are not equal,
	 * If they are not it throws an exception
	 *
	 * usage $e->getErrorMessage();
	 *
	 * @return string
	 */
	public function get_error_message()
	{
		return $this->message;
	}
}



