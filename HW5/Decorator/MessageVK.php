<?php
class MessageVK implements Message
{
    protected Message $objMessage;
    public function __construct(Message $objMessage)
    {   
        $this->objMessage = $objMessage;
    }
    public function sendMessage()
    {
        echo "This message send in VK: " . $this->objMessage->getContent() . "<br>";
        $this->objMessage->sendMessage();
    }
    public function getContent()
    {
        return $this->objMessage->getContent();
    }
    

}