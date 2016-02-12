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
}