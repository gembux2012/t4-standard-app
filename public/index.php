<?php
//phpinfo();die;
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../protected/boot.php';
require __DIR__ . '/../protected/autoload.php';

//phpinfo();die;

T4\Mvc\Application
    ::instance()
    ->setConfig(
        new \T4\Core\Config(ROOT_PATH_PROTECTED . '/config.php')
    )
    ->run();