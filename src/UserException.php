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

use Exception;

class UserException extends Exception  
{
    public $message;

	/**
     * @param string $errorMessage
	 */
	public function __construct($errorMessage)
	{
		$this->message = $errorMessage;
	}

    /**
	 * @method getErrorMessage
	 *
	 * returns an error message to the calling
	 * method. check if the $key and $word are not equal,
	 * If they are not it throws an exception
	 *
	 * usage $e->getErrorMessage();
	 *
	 * @return string
	 */
	public function getErrorMessage()
	{
		return $this->message;
	}
}