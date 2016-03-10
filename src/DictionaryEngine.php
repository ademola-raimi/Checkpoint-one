<?php

/**
 * Class Crud:  .
 * This class performs the basic CRUD operations which involve
 * various methods such as add, retrieve, update, and delete.
 * The class make use of the urban dictionary found in the
 * UrbanWords class. The class also have an interface class
 * implementation called dictionary.
 *
 * @author: Raimi Ademola <ademola.raimi@andela.com>
 * @copyright: 2016 Andela
 */
namespace Demo\UrbanDictionary;

class DictionaryEngine implements Dictionary
{
    private $data;

    /**
     * @method constructor
     * The constructor method gets the array data from UrbanWords class
     */
    public function __construct()
    {
        $this->data = UrbanWords::getData();
    }

    /**
     * @method getFormatWord
     * This method takes a word (string) as parameter. Firstly, It convert
     * the word into lowercase and then secondly convert the first letter
     * into uppercase
     *
     * @param string $word The string get formated by the method
     *
     * @return string
     */
    public function getFormatWord($word)
    {
        return ucfirst(strtolower($word));
    }

    /**
     *  @method add
     *
     * This method takes three parameters, creates
     * an associative array and add them
     * into the dictionary
     *
     * @param string $word           The array key to add
     * @param string $description    The array description to add
     * @param string $sampleSentence The array sample sentence to add
     *
     * @return array
     */
    public function add($word, $description, $sampleSentence)
    {
        $this->data[self::getFormatWord($word)] = [
            'description'    => $description,
            'sampleSentence' => $sampleSentence,
        ];

        return true;
    }

    /**
     *  @method retrieve
     *
     * This method takes a string parameter, it uses the parameter to search
     * through the associative array for the key. If the key is found, it retrieves and displays
     * the array. If the key is not found, WordNotFoundException is thrown.
     *
     * @param string $word The array key to retrieve
     *
     * @throws WordNotFoundException
     *
     * @return array
     */
    public function retrieve($word)
    {
        if (array_key_exists(self::getFormatWord($word), $this->data)) {
            return [self::getFormatWord($word) => $this->data[self::getFormatWord($word)]];
        } else {
            throw new WordNotFoundException("The word '".self::getFormatWord($word)."' cannot be found in the dictionary");
        }
    }

    /**
     *  @method retrieveAll
     *
     * This method takes no parameter. When called it returns the whole dictionary
     *
     * @return array
     */
    public function retrieveAll()
    {
        return $this->data;
    }

    /**
     *  @method update
     *
     * This method takes two parameters: @newDescription and @sampleSentence.
     * It uses the @word to search through the associative array for the word.
     * If the word is found, it replaces @newDescription with "description" and
     * @newSampleSentence with "sampleSentence". If the word is not, WordNotFoundException is thrown.
     *
     * @param string $word              The array key to update
     * @param string $newDescription    The array description to update
     * @param string $newSampleSentence The array sample sentence to update
     *
     * @throws WordNotFoundException
     *
     * @return array
     */
    public function update($word, $newDescription, $newSampleSentence)
    {
        if (array_key_exists(self::getFormatWord($word), $this->data)) {
            $this->data[self::getFormatWord($word)] = [
                'description'    => $newDescription,
                'sampleSentence' => $newSampleSentence,
            ];

            return [self::getFormatWord($word) => $this->data[self::getFormatWord($word)]];
        } else {
            throw new WordNotFoundException('The word '.self::getFormatWord($word).' cannot be found in the dictionary');
        }
    }

    /**
     *  @method delete
     *
     * This method takes no parameter. It searches for the word in the
     * associative array. If found, It deletes the word, description and sample sentence
     * in the dictionary. If the word is not found, WordNotFoundException is thrown.
     *
     * @param string $word The array key to delete
     *
     * @throws UserException
     *
     * @return array
     */
    public function delete($word)
    {
        if (array_key_exists(self::getFormatWord($word), $this->data)) {
            unset($this->data[self::getFormatWord($word)]);

            return true;
        } else {
            throw new WordNotFoundException('The word '.self::getFormatWord($word).' cannot be found in the dictionary');
        }
    }
}
