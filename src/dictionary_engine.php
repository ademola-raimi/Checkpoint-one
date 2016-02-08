<?php

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

    public function add($word, $description, $sample_sentence) 
    {
        $data = UrbanWords::data();

        $data[$word] = [
          'description' => $description,
          'sample-sentence' => $sample_sentence,
        ];
        return $data;
    }   

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
               