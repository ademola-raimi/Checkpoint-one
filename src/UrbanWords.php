<?php

/**
 * Class Dictionary: 
 * This class contains an associative arrray
 * of words, descriptions and sample sentences.
 * It contains one method. 
 * 
 * @author: Raimi Ademola
 */

namespace Demo\UrbanDictionary;

class UrbanWords
{
    public static $data = [
        'Tight' => [ 
                        "description" => "When someone performs an awesome task",
                        "sampleSentence" => "Prosper has finished the curriculum, Tight."
                    ],
        'Baller' => [
                        "descrition" => "A thug that has made it to the big time",
                        "sampleSentence" => "pain is a part of the game when you are a baller."
                    ],

        'Beer me' => [
                        "description" => "Besides the obvious give me a beer, it is used to ask    someone to pass or hand an object to you.",
                        "sampleSentence" => "Lord, beer me strength"
                     ]
    ];

    /**
     * @method data
     * It returns the dictionary
     * 
     * @return array
     */
     public static function data()
     {
        return self::$data;
     }

     /**
     * @method data
     * It returns the conversion of the key
     * 
     * @return string
     */
     public static function formatWord($word)
     {
        return ucfirst(strtolower($word));
     }
}
