<?php

namespace App\Bootloaders;

use Exception;
use Src\BootloaderInterface;
use Src\ConfigInterface;
use Src\Route;

class AppBootloader implements BootloaderInterface
{
    /**
     * @throws \Exception
     */
    public function boot(ConfigInterface $config)
    {
        try {
            (new Route($config->getConfigs()['routes']));
        } catch (Exception $e) {
            echo sprintf('<h2>%s</h2>', $e->getMessage());
        }
    }
}
