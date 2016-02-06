<?php

namespace Demo\UrbanDictionary;

class RankWord
{
    public function rank_word($word)
	{
	    $array = explode(" ",$word);
		return (array_count_values($array));
	}
}

