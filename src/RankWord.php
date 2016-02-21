<?php

/**
 * class RankWord:
 * This class creates an array of words and
 * ranks them according to the number of
 * occurrences of each word in
 * descending order of
 * magnitude.
 *
 * @author: Raimi Ademola <ademola.raimi@andela.com>
 * @copyright: 2016 Andela
 */

namespace Demo\UrbanDictionary;

Class RankWord
{
    /**
     * @method rankWord
     *
     * This method takes in a string and returns
     * the ranking in frequency of the
     * individual words
     *
     * The function takes a string parameter.
     * At first, the string is converted into 
     * an array of words through the explode function. 
     *
     * It then proceeds to reduce the words
     * using the array_count_values function
     * into an array of distinct words and
     * frequency of occurrence.
     *
     * @param string $word The string to rank
     * @return array
     */
    public function rankWord($word)
    {
        $array = explode(" ",$word);
        $array = array_count_values($array);
        arsort($array);
        
        return $array;
    }
}
