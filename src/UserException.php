<?php

/**
 * class UserException
 * @extends Exception
 *
 * Throws an error if the index for
 * the key is not found in the
 * array
 *
 * @author: Raimi Ademola <ademola.raimi@andela.com>
 * @copyright: 2016 Andela
 */

namespace Demo\UrbanDictionary;

use Exception;

class UserException extends Exception  
{
    public $message;

	/**
     * @param string $errorMessage
     * @return void
	 */
	public function __construct($errorMessage)
	{
		$this->message = $errorMessage;
	}
}
