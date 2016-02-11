<?php

/**
 * Interface dictionary
 * 
 * The purpose of this is to make my code readable
 * It has the all the major functions I used in the 
 * dictionary engine. It also have the parameters of 
 * each function. 
 *
 * @author : Raimi Ademola
 */

namespace Demo\UrbanDictionary;

interface Dictionary {
    public function add ($word, $description, $sampleSentence);
    public function retrieve ($word);
    public function update ($word, $newDescription, $newSampleSentence);
    public function delete ($word);
}
