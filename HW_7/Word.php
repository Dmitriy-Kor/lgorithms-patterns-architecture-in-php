<?php

class Word
{
    private $text;
    private $newText; // сохраненый текст (буфер)

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getNewText()
    {
        return $this->newText;
    }
  
    public function setText($value)
    {
        $this->text = $value;
    }

    public function setNewText($value)
    {
        $this->newText = $value;
    }
}
