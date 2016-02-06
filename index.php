<?php
	
    
    function update($word, $description, $sample_sentence )    
    {
    	$data = [
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
        foreach($data as $key => $value)
        {
            if ($word == $key)
            {    

            	$data[$key]['description'] = $description;
                $data[$key]['sample-sentence'] = $sample_sentence;
                print_r($data);

            }

        }

    }
    update("Baller", "person that can play ball", "GMT is a baller")



?>