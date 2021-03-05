<?php

class Vacancy
{
    private $observers;
    private int $phone;
    private string $name;
    private array $info;

    public function __construct(string $name, int $phone)
    {
        $this->phone = $phone;
        $this->name = $name;
        $this->info = ['name' => $name, 'phone' => $phone];
    }
    public function addObserver(array $observers)
    {
        foreach ($observers as $observer) {
            if ($observer->getStatus() == 'on') {
                $this->observers[] = $observer;
            }
        }
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getName()
    {
        return $this->name;
    }

    public function openVacancy(array $observers)
    {
        $this->addObserver($observers);
        $this->sendEmail();
        $this->notifyObservers();
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->notify($this->info);
        }
    }

    public function sendEmail()
    {
        foreach ($this->observers as $observer) {
            echo 'Письмо отправлено на адрес ' . $observer->getEmail() . PHP_EOL;
        }
    }
}
