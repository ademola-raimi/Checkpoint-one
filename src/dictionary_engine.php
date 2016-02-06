<?php

namespace Demo\UrbanDictionary;
use Demo\UrbanDictionaryUrbanWords\;

class Crud implement dictionary
{
     public function add ($word, $description, $sample_sentence) 
     {
         return array_push ($data, [$this-> word => $this -> description $this -> sample_sentence])
     }   

     public function retrieve ($word)
     {
         foreach ($data as $key => $value) 
         {
             foreach ($data[$key] as $k => $v) 
             {
                 if ($key === $word)
                 {
                     return $key . ":" . $k . "Usage: " . $v 
                 }
                 /*else
                 {
                     throw exeption("word not found in the dictionary")
                 } */ 
             }  
         }
   }
     }

     public function update ($word, $description, $sample_sentence)
     {
         foreach ($data as $key => $value) 
         {
             if ($word == $key)
             {
                $data[$key]['description'] = $description;
                $data[$key]['sample-sentence'] = $sample_sentence;
                return ($data;
             }   
         }
     }

     public function delete ($word)
     {
         foreach ($data as $key => $value)
         {
             if ($data == $word)
             {   
             return unset ($data);
             }   
         }   
   
     }
}
