<?php

class StringProcessor {
    private $strings;
    public function __construct($strings) {
        $this->strings = $strings;
    }
    private function countVowels($str) {
        $vowelCount = preg_match_all('/[aeiouAEIOU]/', $str);
        return $vowelCount;
    }
    private function reverseString($str) {
        return strrev($str);
    }
    public function processStrings() {
        foreach ($this->strings as $string) {
            $vowelCount = $this->countVowels($string);
            $reversedString = $this->reverseString($string);
            echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
        }
    }
}
$strings = ["Hello", "World", "PHP", "Programming"];
$stringProcessor = new StringProcessor($strings);
$stringProcessor->processStrings();
