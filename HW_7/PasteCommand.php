<?php

class PasteCommand extends Command
{
    private $start;
    private Word $word;

    public function __construct( $start, Word $word)
    {
        $this->start = $start;
        $this->word =$word;
    }    
    public  function execute()
    {
        echo 'Cкопированный текст: ' . $this->word->getNewText() . '<br>'; 
        $pasteText = substr_replace($this->word->getText(), $this->word->getNewText(), $this->start) . mb_substr($this->word->getText(), $this->start, $this->end) ;
        $this->word->setText($pasteText);
        echo 'Текст со вставкой: ' . $this->word->getText() . '<br>';
        
    }

    public function unExecute(){
        echo '---Отмена вставки текста---<br>';
        $renText = substr_replace($this->word->getText(),'', $this->start, strlen($this->word->getNewText()));
        $this->word->setText($renText);
        echo 'Востановленный текст: ' . $this->word->getText();
    }
}
