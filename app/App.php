<?php

namespace App;

use App\Bootloaders as Bootloaders;
use Src\ConfigInterface;

class App
{
    public function __construct(private ConfigInterface $config)
    {
    }

    public function run()
    {
        (new Bootloaders\LoggingBootloader())->boot($this->config);
        (new Bootloaders\AppBootloader())->boot($this->config);
    }
}
