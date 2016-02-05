<?php

namespace Demo\UrbanDictionary;
use Demo\UrbanDictionary\UrbanWords;

class Crud implement dictionary
{
     public function add ($word, $description, $sample_sentence) 
     {
         return array_push ($data, [$this-> word => $this -> description $this ->sample_sentence])
     }   

     public function retrieve ($word, $description, $sample_sentence)
     {
         foreach ($data as  $key =>$val) 
         {

            
             /*if $data["slang"] == $word 
             {
                 return $data["slang"] . ":" . $data["description"] . "usage:" . $data["sample-sentence"];
             } 
             else 
             {
                throw new exception("word not found in the dictioanry");
             }  */ 
         }    
     }

     public function update ($old_value, $new_value,)
     {
         foreach ($data as $key => $value)
         {
             if $data["slang"] == $old_value
             {
                 return $data["slang"]   
             } 
         }   
         return 
     }

     public function delete ($word)
     {
         foreach ($data as $key => value)
         {
             if $data["slang"] == "$word"
             return unset ($data["slang"])   
            
         }
         return    
     }
}
