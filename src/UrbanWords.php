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
    public $dataArray;
    public  $data = [
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
     * @method constuctor
     * It sets the array property 
     * 
     * @param Empty
     * @return Array
     */
    public function __construct()
    {
        $this->dataArray = $this->data;
    }
    
    /**
     * @method allData
     * It returns the array property
     * 
     * @param Empty
     * @return Array
     */
    public function allData()
    {
        return $this->dataArray;
    }
}
