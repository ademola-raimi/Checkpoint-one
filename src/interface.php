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

interface dictionary {

    public function add ($word, $description, $sample_sentence);

    public function retrieve ($word);

    public function update ($word, $new_description, $new_sample_sentence);

    public function delete ($word);
}



