<?php

namespace Demo\UrbanDictionary;

class Urban-words
{
   public static  $data = array();
        
}

class Crud implement dictionary
{
    use Demo\UrbanDictionary\Urban-words;
    
     public function add ($word, $description, $sample_sentence) 
     {
         //return array_push ($data, [$this-> key => $this -> value])
         return array_push ($data, [$this-> word => $this -> description $this ->sample_sentence])
     }   

     public function retrieve ($word)
     {

         foreach ($data as $key => $value) 
         {
             if $data["slang"] == $word 
             {
                 return $data["slang"] . ":" . $data["description"] . "usage:" . $data["sample-sentence"];
             } 
             else 
             {
                throw new exception("word not found in the dictioanry");
             }   
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




