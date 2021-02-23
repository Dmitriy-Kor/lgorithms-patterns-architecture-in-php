<?php
spl_autoload_register(function($class){
    //echo "try load: $class" . PHP_EOL; 
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    //echo "class replaced: $class" . PHP_EOL;
    $path = __DIR__ . "/{$class}.php";
    //echo $path . PHP_EOL;
    require $path;
}
);