<?php
class User
{
    private Word $word;
    private $text;
    private array $commands;
    private int $currentCommandNumber = 0;

    public function __construct($text)
    {
        $this->text = $text;
        $this->word = new Word($this->text);
    }

    public function copy($start, $end)
    {
        echo '---Копирование текста---<br>';
        $command = new CopyCommand($start, $end, $this->word);
        $command->execute();
        $this->commands[] = $command;
        $this->currentCommandNumber++;
        echo '<br>';
    }

    public function cut($start, $end)
    {
        echo '---Вырезание текста---<br>';
        $command = new CutCommand($start, $end, $this->word);
        $command->execute();
        $this->commands[] = $command;
        $this->currentCommandNumber++;
        echo '<br>';
    }

    public function paste($start)
    {
        echo '---Вставка текста---<br>';
        $command = new PasteCommand($start, $this->word);
        $command->execute();
        $this->commands[] = $command;
        $this->currentCommandNumber++;
        echo '<br>';
    }

    public function up(int $levels)
    { {
            for ($i = 0; $i < $levels; $i++) {
                if ($this->currentCommandNumber < count($this->commands)) {
                    $this->commands[$this->currentCommandNumber++]->execute();
                }
            }
        }
    }

    public function down(int $levels)
    {
        for ($i = 0; $i < $levels; $i++) {
            if ($this->currentCommandNumber > 0) {
                $this->commands[--$this->currentCommandNumber]->unExecute();
            }
        }
    }
}
