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
                        "sample-sentence" => "Prosper has finished the curriculum, Tight."
                    ],
        
        'Baller' => [
                        "descrition" => "A thug that has made it to the big time",
                        "sample-sentence" => "pain is a part of the game when you are a baller."
                    ],
        

        'Beer me' => [
                        "description" => "Besides the obvious give me a beer, it is used to ask someone to pass or hand an object to you.",
                        "sample-sentence" => "Lord, beer me strength"
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
}


