<?php

namespace Demo\UrbanDictionary;
use Demo\UrbanDictionary\UrbanWords;
use Demo\UrbanDictionary\dictionary;

class Crud implements dictionary
{
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
            foreach ($data[$key] as $k => $v) 
            {
                if ($key === $word)
                {
                    return $key . ": " . $v . ". " . "Usage: " . $data[$key]["sample-sentence"];
                }
            }
        } 
    }   

    public function update($word, $new_description, $new_sample_sentence)
    {
        $data = UrbanWords::data();

        foreach ($data as $key => $value)
        {
            if ($key == $word)
            {
                $data[$key]["description"] = $new_description;
                $data[$key]["sample-sentence"] = $new_sample_sentence;

                return $data;
            } 
        }   
    }

     public function delete($word)
     {
        $data = UrbanWords::data();

        foreach ($data as $key => $value)
        {
            if ($data[$key] == $word)
            {
              unset($data[$key]); 
            }
        }
     }

}           
               