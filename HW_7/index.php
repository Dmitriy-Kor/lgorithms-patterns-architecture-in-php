<?php
/*
3. Команда: вы — разработчик продукта Macrosoft World. 
Это текстовый редактор с возможностями копирования, 
вырезания и вставки текста (пока только это). 
Необходимо реализовать механизм по логированию этих операций 
и возможностью отмены и возврата действий. Т. е., 
в ходе работы программы вы открываете текстовый файл .txt, 
выделяете участок кода (два значения: начало и конец) и выбираете, что с этим кодом делать.
*/

spl_autoload_register(function ($classname) {
    require_once($classname . '.php');
});

$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, cumque?';
echo 'Текст из файла: ' . $text . '<br>';

$user = new User($text);
$user->copy(0,17);
$user->paste(0);

$user->down(1);
$user->up(1);

$user->cut(0,17);





