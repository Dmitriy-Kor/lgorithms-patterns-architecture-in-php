<?php
// Decorator

spl_autoload_register(function ($classname) {
    require_once($classname . '.php');
});

$message = new MessageVK(new MessageTwiter(new MessageFacebook(new MessageBase('some message text'))));
$message->sendMessage();