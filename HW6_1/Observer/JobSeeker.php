<?php
class JobSeeker implements Observer
{
    private String $name;
    private String $email;
    private int $experience;
    private $status;

    public function __construct(String $name, String $email, int $experience)
    {
        $this->name = $name;
        $this->email = $email;
        $this->experience = $experience;
        $this->status = 'on';
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function statysOn()
    {
        $this->status = 'on';

    }
    public function statysOff()
    {
        $this->status = 'off';
        
    }

    function notify($data)
    {
        echo 'Пользователь ' . $this->name . ' получил вакансию: ' . $data['name'] . ' и номер телефона для связи ' . $data['phone'] . PHP_EOL;
    }
}