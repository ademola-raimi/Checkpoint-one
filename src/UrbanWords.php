<?php

/**
 * Class UrbanWords: 
 * This class contains an associative arrray
 * of words, descriptions and sample sentences.
 * It contains one method. 
 * 
 * @author: Raimi Ademola <ademola.raimi@andela.com>
 * @copyright: 2016 Andela
 */

namespace Demo\UrbanDictionary;

class UrbanWords
{
    public static $data = [
        'Tight'   => [ 
                        "description"    => "When someone performs an awesome task",
                        "sampleSentence" => "Prosper has finished the curriculum, Tight."
                     ],

        'Baller'  => [
                        "description"    => "A thug that has made it to the big time",
                        "sampleSentence" => "pain is a part of the game when you are a baller."
                     ],

        'Beer me' => [
                        "description"    => "Besides the obvious give me a beer, it is used to ask    someone to pass or hand an object to you.",
                        "sampleSentence" => "Lord, beer me strength"
                     ]
    ];
    
    /**
     * @method getData
     * It gets the array property 
     * 
     * @param Empty
     * @return Array
     */
    public static function getData()
    {
        return self::$data;
    }
}
