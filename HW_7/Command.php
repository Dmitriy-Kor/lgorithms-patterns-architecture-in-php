<?php

abstract class Command
{
    public abstract function execute(); // выполнить
    
    public abstract function unExecute(); // отменить
}
