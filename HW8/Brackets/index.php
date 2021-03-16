<?php
/*
2. Проверить баланс скобок в выражении, игнорируя любые внуренние символы. В решении по возможности испольщовать SplStack.
Примеры:

"Это тестовый вариант проверки (задачи со скобками). И вот еще скобки: {[][()]}" - true
((a + b)/ c) - 2 - true
"([ошибка)" - false
"(") - false

2.1* В задаче выше учитывать, что двойные и одинарные кавычки работают как в файле .php, т.е. контент внутри рассматривается исключительно как текст (даже скобки)
*/


class Bracket
{
    public array $text; 
    public $stackLeft; //стек для открывающихся скобок 
    public $stackRight; //стек для закрывающихся скобок 
    public $left = true; // если в стеки остались скобки меняеться false
    public $right = true; // если в стеки остались скобки меняеться false
    public function __construct($text)
    {
        $this->text = $this->adaptationText($text); // обрезается текст в кавычках и преобразуется в массив
        $this->stackLeft = new SplStack(); 
        $this->stackRight = new SplStack();
    }
    public function addToStackLeft()
    {
        foreach ($this->text as $symbol) {
            switch ($symbol) {
                case '(':
                    $this->stackLeft->push('(');
                    break;
                case '{':
                    $this->stackLeft->push('{');
                    break;
                case '[':
                    $this->stackLeft->push('[');
                    break;
                case ')':
                    if ($this->stackLeft->top() == '(') {
                        $this->stackLeft->pop();
                    }
                    break;
                case '}':
                    if ($this->stackLeft->top() == '{') {
                        $this->stackLeft->pop();
                    }
                    break;
                case ']':
                    if ($this->stackLeft->top() == '[') {
                        $this->stackLeft->pop();
                    }
                    break;
            }
        }
    }

    public function addToStackRight()
    {
        
        foreach (array_reverse($this->text) as $symbol) {
            switch ($symbol) {
                case ')':
                    $this->stackRight->push(')');
                    break;
                case '}':
                    $this->stackRight->push('}');
                    break;
                case ']':
                    $this->stackRight->push(']');
                    break;
                case '(':
                    if ($this->stackRight->top() == ')') {
                        $this->stackRight->pop();
                    }
                    break;
                case '{':
                    if ($this->stackRight->top() == '}') {
                        $this->stackRight->pop();
                    }
                    break;
                case '[':
                    if ($this->stackRight->top() == ']') {
                        $this->stackRight->pop();
                    }
                    break;        
            }
        }
    }

    public function adaptationText($text){
        $newText = preg_replace('~"([^"]*)"~u','', $text);
        $newArray = str_split($newText);
        return $newArray;
    }

    public function action()
    {   
        echo 'Обрабатываемое выражение :' . implode($this->text) . '<br>';
        $this->addToStackLeft();
        if ($this->stackLeft->count() > 0) {
            echo 'Ошибка в открывающихся скобках <br>';
            $this->left = false;
        }
        // var_dump($this->stackLeft);
        // var_dump($this->left);

        $this->addToStackRight();
        if ($this->stackRight->count() > 0) {
             echo 'Ошибка в закрывающихся скобках <br>';
             $this->right = false;
        }
        // var_dump($this->stackRight);
        // var_dump($this->right);
        
        if ($this->right == true && $this->left == true) {
            echo 'Со скобками все ОК <br>';
        }
    }
}

$text = '((a + b)/"{[fdf}" c) - 2';
//$text = '(({a + b)]/ c) - 2';
echo "Исходное выражение: " . $text . "<br>";

$test = new Bracket($text);
$test->action();
