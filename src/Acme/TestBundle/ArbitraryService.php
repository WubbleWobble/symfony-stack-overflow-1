<?php

namespace App\Acme\TestBundle;

class ArbitraryService
{
    protected $emailSender;

    protected $emailTitle;

    public function __construct(string $emailSender, string $emailTitle)
    {
        $this->emailSender = $emailSender;
        $this->emailTitle = $emailTitle;
    }
}