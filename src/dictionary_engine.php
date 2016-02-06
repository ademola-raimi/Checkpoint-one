<?php

namespace Demo\UrbanDictionary;
use Demo\UrbanDictionary\UrbanWords;

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
             foreach ($data[$key] as $k => $v) 
             {
                 if ($key === $word)
                 {
                     $k["v"][0] = $description
                     $k["v"][1] = $sample_sentence
                 }
                 /*else
                 {
                     throw exeption("word not found in the dictionary")
                 } */ 
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
