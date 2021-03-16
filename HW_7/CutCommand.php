<?php

class CutCommand extends Command
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
        $copyText = mb_substr($this->word->getText(), $this->start, $this->end - $this->start);
        $this->word->setNewText($copyText);
        echo 'Вырезанный текст: ' . $this->word->getNewText() . '<br>';

        $cutText = substr_replace($this->word->getText(),'', $this->start, strlen($this->word->getNewText()));
        $this->word->setText($cutText);
        echo 'Оставшийся текст: ' . $cutText . '<br>';

        //return $this->word->getNewText(); 

    }

    public function unExecute(){
        echo '---Отмена вырезания текста---<br>';
        echo 'Имеющийся текст: ' . $this->word->getText() . '<br>';
        $renText = substr_replace($this->word->getText(),$this->word->getNewText(), $this->start, strlen($this->word->getNewText()));
        $this->word->setText($renText);
        echo 'Востановленный текст: ' . $this->word->getText() . '<br>';;
    }
}
