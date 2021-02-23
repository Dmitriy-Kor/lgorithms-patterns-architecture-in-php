<?php
namespace app\traits;
trait Tsingleton
{
    private static $instance = null;
    
    public static function getInstance() {
        if (is_null(static::$instance)){
            static::$instance = new static();
        }
        return static::$instance;
    }

    public function hello()
    {
        echo 'Hello!';
    }
    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}
}

class Test
{
    use Tsingleton;
} 

// $test = Test::getInstance();
// $test->hello();