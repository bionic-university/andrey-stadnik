<?php

class PalindromeDetector
{
    private $stringForCheck;
    private $revertedString;

    public function __construct($inputString)
    {
        if (is_string($inputString)) {
            $this->stringForCheck = trim($inputString);
        } else {
            echo 'Entered data is not a string';
        }
    }

    private function revertString(){
        $this->revertedString = strrev($this->stringForCheck);
    }

    private function isPalindrome(){
        if($this->stringForCheck == $this->revertedString){
            echo 'THIS WORD IS A PALINDROME' . PHP_EOL;

        }
        else{
            echo 'THIS word IS NOT A PALINDROME' . PHP_EOL;
        }
    }

    public function getResult(){
        $this->revertString();
        $this->isPalindrome();
    }
}

