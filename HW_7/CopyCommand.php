<?php

class CopyCommand extends CommandUnExecute
{
    private $start;
    private $end;
    private Word $word;

    public function __construct( $start, $end, Word $word)
    {
        $this->start = $start;
        $this->end = $end;
        $this->word =$word;
    }    
    public  function execute()
    {
        $newText = mb_substr($this->word->getText(), $this->start, $this->end - $this->start);
        $this->word->setNewText($newText);
        echo 'Скопирован текст: ' . $this->word->getNewText() . '<br>';
        
        //return $this->word->getNewText(); 

    }

}
