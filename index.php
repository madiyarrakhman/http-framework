<?php
include __DIR__ . '/./vendor/autoload.php';
$start = time();
$config = new Src\Config([
    __DIR__ . '/./configs/routes.php',
    __DIR__ . '/./configs/logger.php',
]);
$app = new App\App($config);
$app->run();

echo "<br/>Process took " . number_format(microtime(true) - $start, 2) . " seconds.";
