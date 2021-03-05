<?php

class MessageBase implements Message
{   
    protected $content;
    public function __construct($content)
    {   
        $this->content = $content;
    }
    public function sendMessage()
    {
       echo "Message content: " . $this->content;
    }
    public function getContent()
    {
        return $this->content;
    }
}