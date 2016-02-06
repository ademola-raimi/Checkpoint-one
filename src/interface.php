<?php

namespace Demo\UrbanDictionary;

interface dictionary {

    public function add ($word, $description, $sample_sentence);

    public function retrieve ($word);

    //public function update ($word, $new_description, $new_sample_sentence,);

    //public function delete ($word);
}



