**Urban Dictionary**
================


----------


The Urban dictionary is the collation of urban (slangs) words. It is a platform that stores the words and their meanings and their usage in a multi associative array. The platform allows for addition, editing, updating and retrieving.

The package also has a ranking system where words in a sentence are ranked based on the number of occurrences of each word. 

**Design**
------


----------

Classes

 - UrbanWords: Contains an array where urban words are stored.
 
 - Crud: Contain methods to add new words, retrieve words, update
   existing words, and delete words in the urban dictionary.
 - RankWord: Contain methods that rank words based on the number of     times they occurred in the sentence.

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
	
	    $sample_sentence = "sample sentence";

	    Crud::add("word to add", "description", "sample sentence");

 - Retrieve a word from the dictionary

	    $word = "word to retrieve";
	    
	     Crud::retrieve($word);

 - Update a word, its meaning and its sample sentence
 
		 $word = "word to update or edit";
		 
		 $new_description = "the new description";
		
		 $new_sample_sentence = "the new sample sentence";
		
		Crud::update("word", "new description", "new sample sentence");

 - Delete a word in the urban dictionary

		$word = "word to delete";
		Crud::delete("word");

 - Rank words in a sentence

		 $word = "word to rank";

          print_r(RankWord::rank_word($word));

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