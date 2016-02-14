<?php

/**
 * Class Crud:  .
 * This class performs the basic CRUD operations which involve 
 * various methods such as add, retrieve, update, and delete.
 * The class make use of the urban dictionary found in the 
 * UrbanWords class. The class also have an interface class 
 * implementation called dictionary
 *
 * @property $UrbanDictionary array;
 *
 * @author: Raimi Ademola <ademola.raimi@andela.com>
 * @copyright: 2016 Andela
 */

namespace Demo\UrbanDictionary;

use Demo\UrbanDictionary\UrbanWords;
use Demo\UrbanDictionary\Dictionary;
use Demo\UrbanDictionary\UserException;

class DictionaryEngine implements Dictionary
{

    /**
     *  @method add
     *
     * This method takes three parameters, creates
     * an associative array and add them
     * into the dictionary
     *
     * @param  $word 
     * @param  $description 
     * @param  $sampleSentence
     * @return array
     */
    public function add($word, $description, $sampleSentence) 
    {
        $data = UrbanWords::data();

        $word = UrbanWords::formatWord($word);

        $data[$word] = [
                          'description' => $description,
                          'sample-sentence' => $sampleSentence,
                    ];           

        return [$word => [$data[$word]]];
    }   

    /**
     *  @method retrieve
     *
     * This method takes a string parameter, it uses the parameter to search
     * through the associative array for the key. If the key is found, it retrieves and displays
     * the array. If the key is not found, An error message is thrown.
     *
     * @param  $word
     * @return array
     * @throws UserException
     */
    public function retrieve($word)
    {
        $data = UrbanWords::data();

        $word = UrbanWords::formatWord($word);

        if (array_key_exists($word, $data)) {
            return [$word =>$data[$word]];
        } else {
            throw new UserException("The word '" . $word . "' cannot be found in the dictionary"); 
        }
    }
    
    /**
     *  @method retrieveAll
     *
     * This method takes no parameter. When called it returns the whole dictionary
     *
     * @param void
     * @return array
     */
    public function retrieveAll()
    {
        $data = UrbanWords::data();
        
        return $data;    
    }   

    /**
     *  @method update
     *
     * This method takes three parameters: @word, @DictionaryEngineand @sample_sentence.
     * It uses the @word to search through the associative array for the key. 
     * If the key is found, it replaces @DictionaryEnginewith "description" and 
     * @new_sample_sentence with "sample_sentence". If the key is not, an error message is thrown
     *
     * @param $word
     * @param @description 
     * @param @sampleSentence
     * @return array
     * @throws UserException
     */
    public function update($word, $newDescription, $newSampleSentence)
    {
        $data = UrbanWords::data();

        $word = UrbanWords::formatWord($word);

        if (array_key_exists($word, $data)) {
            $data[$word] = [
                'description' => $newDescription,
                'sampleSentence' => $newSampleSentence
            ];
            return [$word => $data[$word]];
        } else {
            throw new UserException("The word " . $word . " cannot be found in the dictionary"); 
        }  
    }

    /**
     *  @method delete
     *
     * This method takes a string parameter. It uses the parameter to search
     * the associative arrayfor the key. If found, It deletes the entire array
     * in the dictionary. If the key is not found, an error message is thrown.
     *
     * @param $word
     * @throws UserException
     * @return Array
     */
     public function delete($word)
     {
        $data = UrbanWords::data();

        $word = UrbanWords::formatWord($word);

        if (array_key_exists($word, $data)) {
            unset($data[$word]);
            return $data;
        }else {
            throw new Exception($word . "cannot be found in the dictionary");
        }
     }
}
               