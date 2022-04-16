<?php

namespace App\Bootloaders;

use Src\BootloaderInterface;
use Src\ConfigInterface;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class LoggingBootloader implements BootloaderInterface
{
    public function boot(ConfigInterface $config)
    {
        $logger = new Logger('file_log');
        $logger->pushHandler(new StreamHandler($config->getConfigs()['logger']['path'].'/app.log', Logger::DEBUG));
    }
}
