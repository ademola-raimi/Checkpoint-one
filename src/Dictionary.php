<?php

/**
 * Interface dictionary
 * 
 * The purpose of this is to make my code readable
 * It has all the major functions I used in the 
 * dictionary engine. It also have the parameters of 
 * each functions. 
 *
 * @author: Raimi Ademola <ademola.raimi@andela.com>
 * @copyright: 2016 Andela
 */

namespace Demo\UrbanDictionary;

interface Dictionary {
    public function add($description, $sampleSentence);
    public function retrieve();
    public function retrieveAll();
    public function update($newDescription, $newSampleSentence);
    public function delete();
}
