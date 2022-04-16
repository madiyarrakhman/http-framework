<?php

namespace App\Bootloaders;

use Src\BootloaderInterface;
use Src\ConfigInterface;
use Src\Route;

class AppBootloader implements BootloaderInterface
{
    public function boot(ConfigInterface $config)
    {
        (new Route($config->getConfigs()['routes']));
    }
}
