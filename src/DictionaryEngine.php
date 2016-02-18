<?php

/**
 * Class Crud:  .
 * This class performs the basic CRUD operations which involve 
 * various methods such as add, retrieve, update, and delete.
 * The class make use of the urban dictionary found in the 
 * UrbanWords class. The class also have an interface class 
 * implementation called dictionary
 *
 * @author: Raimi Ademola <ademola.raimi@andela.com>
 * @copyright: 2016 Andela
 */

namespace Demo\UrbanDictionary;

use Demo\UrbanDictionary\UrbanWords;
use Demo\UrbanDictionary\Dictionary;
use Demo\UrbanDictionary\WordNotFoundException;

class DictionaryEngine implements Dictionary
{
    private $data;
    private $dataArray;
    private $word;

    /**
     * @method constructor
     * It takes a parameter and asign it to a class variable 
     * so that it can be visible across the class. 
     * 
     * @param $word
     * @return string
     */
    public function __construct($word)
    {
        $this->word = $word;
        $this->data = new UrbanWords();
        $this->dataArray = $this->data->allData();
        $this->formatedWord = $this->formatWord($this->word);
    }

    /**
     * @method formatWord
     * It returns the conversion of the word. The first letter is converted to uppercase
     * while the other letters are converted to lowercase
     * 
     * @param $word
     * @return string
     */
    public function formatWord($word)
    {
        return ucfirst(strtolower($word));
    }
    
    /**
     *  @method add
     *
     * This method takes three parameters, creates
     * an associative array and add them
     * into the dictionary
     *
     * @param  $description 
     * @param  $sampleSentence
     * @return array
     */
    public function add($description, $sampleSentence) 
    {
        $this->dataArray[$this->formatedWord] = [
            'description' => $description,
            'sampleSentence' => $sampleSentence,
        ];           
        
        return true;
    }   

    /**
     *  @method retrieve
     *
     * This method takes a string parameter, it uses the parameter to search
     * through the associative array for the key. If the key is found, it retrieves and displays
     * the array. If the key is not found, WordNotFoundException is thrown.
     *
     * @param  Empty
     * @return Array
     * @throws WordNotFoundException
     */
    public function retrieve()
    {
        if (array_key_exists($this->formatedWord, $this->dataArray)) {

            return [$this->formatedWord =>$this->dataArray[$this->formatedWord]];

        } else {
            throw new WordNotFoundException("The word '" . $this->word . "' cannot be found in the dictionary"); 
        }
    }
    
    /**
     *  @method retrieveAll
     *
     * This method takes no parameter. When called it returns the whole dictionary
     *
     * @param Empty
     * @return Array
     */
    public function retrieveAll()
    { 
        return $this->dataArray;   
    }   

    /**
     *  @method update
     *
     * This method takes two parameters: @newDescription and @sampleSentence.
     * It uses the @word to search through the associative array for the word. 
     * If the word is found, it replaces @newDescription with "description" and 
     * @newSampleSentence with "sampleSentence". If the word is not, WordNotFoundException is thrown.
     *
     * @param  @description 
     * @param  @sampleSentence
     * @return Array
     * @throws WordNotFoundException
     */
    public function update($newDescription, $newSampleSentence)
    {
        if (array_key_exists($this->formatedWord, $this->dataArray)) {
            $this->dataArray[$this->formatedWord] = [
                'description' => $newDescription,
                'sampleSentence' => $newSampleSentence
            ];

            return [$this->formatedWord => $this->dataArray[$this->formatedWord]];

        } else {
            throw new WordNotFoundException("The word " . $this->formatedWord . " cannot be found in the dictionary"); 
        }  
    }

    /**
     *  @method delete
     *
     * This method takes no parameter. It searches for the word in the 
     * associative array. If found, It deletes the word, description and sample sentence
     * in the dictionary. If the word is not found, WordNotFoundException is thrown.
     *
     * @return Array
     * @throws UserException 
     */
    public function delete()
    {
        if (array_key_exists($this->formatedWord, $this->dataArray)) {
            unset($this->dataArray[$this->formatedWord]);

            return true;

        } else {
            throw new WordNotFoundException("The word " . $this->formatedWord . " cannot be found in the dictionary");
        }
    }
}
               