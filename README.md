**Urban Dictionary**
================
[![Coverage Status](https://coveralls.io/repos/github/andela-araimi/Checkpoint-one/badge.svg?branch=master)](https://coveralls.io/github/andela-araimi/Checkpoint-one?branch=master) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/andela-araimi/Checkpoint-one/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/andela-araimi/Checkpoint-one/?branch=master) [![Build Status](https://travis-ci.org/andela-araimi/Checkpoint-one.svg?branch=master)](https://travis-ci.org/andela-araimi/Checkpoint-one)


----------


The Urban dictionary is the collation of urban words. It is a package that stores meaning and usage of words in a multi associative array. The package allows for addition, editing, updating and retrieving of words in the dictionary. 

**Design**
------


----------

Classes

 - UrbanWords: Contains an array where urban words are stored.
 
 - DictionaryEngine: Contain methods that add new word, retrieve the whole dictionary, retrieve 
   word, update existing word, and delete word in the urban dictionary.

 - RankWord: Contain methods that rank words based on the number of times they occurred in the 
   sentence.

**Installation**
-------


----------


To install this package, PHP 5.5+ and composer are required. After these requirements have been met, type the following code 

        $ composer require demo/urbandictionary

**Usage**
-----


----------


The dictionary contains urban words with their meaning and usage

 - Add urban words to the dictionary

	    $word = "word to add";
	
	    $description = "description";
	
	    $sampleSentence = "sample sentence";

	    UrbanWords::add("word to add", "description", "sample sentence");

 - Retrieve a word from the dictionary

	    $word = "word to retrieve";
	    
	    UrbanWords::retrieve($word);

 - Update a word, its meaning and its sample sentence
 
		$word = "word to update or edit";
		 
		$newDescription = "the new description";
		
		$newSampleSentence = "the new sample sentence";
		
		UrbanWords::update("word", "new description", "new sample sentence");

 - Delete a word in the urban dictionary

		$word = "word to delete";
		UrbanWords::delete("word");

 - Rank words in a sentence

		$word = "word to rank";

        RankWord::rankWord($word));

**Testing**
-------


----------


Run the following command in your root directory:

        composer/vendor/bin/phpunit phpunit


**Change log**
----------


----------


Please check out [CHANGELOG](https://github.com/andela-araimi/Checkpoint-one/blob/master/CHANGELOG.md/%22CHANGELOG%22) file for information on what has changed recently.

**Contributing**
------------


----------


Please check out [CONTRIBUTING](https://github.com/andela-araimi/Checkpoint-one/edit/master/CONTRIBUTING.md/%22CONTRIBUTING%22) file for detailed contribution guidelines.

**Security**
--------


----------
If you discover any issue, kindly contact ademola.raimi@andela.com

**Credits**
-------


----------


Urban Dictionary is maintained by Raimi Ademola.

**License**
-------


----------


UrbanDictionary is released under the [MIT Licence](https://github.com/andela-araimi/Checkpoint-one/blob/master/LICENSE.md/%22MIT%20License%22). See the bundled LICENSE file for more details.
