<?php

/**
 * Class Crud:  .
 * This class performs the basic CRUD operations which involve 
 * various methods such as add, retrieve, update, and delete.
 * The class make use of the urban dictionary found in the 
 * UrbanWords class. The class also have an interface class 
 * implementation called dictionary
 *
 * @property $Urban_dictionary array;
 *
 * @author : Raimi Ademola
 */

namespace Demo\UrbanDictionary;

use Demo\UrbanDictionary\UrbanWords;
use Demo\UrbanDictionary\dictionary;
use Demo\UrbanDictionary\UserException;

class Crud implements dictionary
{
    public function __construct()
    {
        $this->exception = new UserException();
    }

    /**
     *  @method add
     *
     * This method takes three parameters, creates
     * an associative array and add them
     * into the dictionary
     *
     * @param $word 
     * @param @description 
     * @param @sample_sentence
     * @return array
     */

    public function add($word, $description, $sample_sentence) 
    {
        $data = UrbanWords::data();

        $data[$word] = [
          'description' => $description,
          'sample-sentence' => $sample_sentence,
        ];
        return $data;
    }   

    /**
     *  @method retrieve
     *
     * This method takes a string parameter, it uses the parameter to search
     * through the associative array for the key. If the key is found, it retrieves and displays
     * the array. If the key is not found, An error message is thrown.
     *
     * @param $word
     * @return array
     * @throws UserException
     */

    public function retrieve($word)
    {
        $data = UrbanWords::data();

        foreach ($data as $key => $value) 
        {
            try {
                    $this->exception->compare_word_key($word, $key);
                    return $key . ": " . $data[$key]["description"] . ". " . "Usage: " . $data[$key]["sample-sentence"];

            } catch (Exception $e) {
                echo $e->getMessage();
            }
        } 
    }   

    /**
     *  @method update
     *
     * This method takes three parameters: @word, @new_description and @sample_sentence.
     * It uses the @word to search through the associative array for the key. 
     * If the key is found, it replaces @new_description with "description" and 
     * @new_sample_sentence with "sample_sentence". If the key is not, an error message is thrown
     *
     * @param $word
     * @param @description 
     * @param @sample_sentence
     * @return array
     * @throws UserException
     */

    public function update($word, $new_description, $new_sample_sentence)
    {
        $data = UrbanWords::data();

        foreach ($data as $key => $value)
        {
            try {
                $this->exception->compare_word_key($word, $key);
                $data[$key]["description"] = $new_description;
                $data[$key]["sample-sentence"] = $new_sample_sentence;
                return $data;

            } catch (Exception $e) {
                echo $e->getMessage();
            }
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
     * @return Null
     */

     public function delete($word)
     {
        $data = UrbanWords::data();

        foreach ($data as $key => $value)
        {
            try {
                    if($word == $key)
                    {
                        $this->exception->compare_word_key($word, $key);
                        unset($data[$key]); 
                    }

            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
     }
}
               