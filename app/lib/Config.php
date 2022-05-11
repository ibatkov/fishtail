<?php

namespace lib;

use Monolog\Logger as MonoLogger;
use Monolog\Handler\StreamHandler;

class Config extends Singleton
{
    private array $config;

    const PATH_TO_CONF = __DIR__ . DS . ".." . DS . 'conf' . DS . 'config.php';

    protected function __construct()
    {
        $this->config = require_once self::PATH_TO_CONF;
    }

    public function getParameter(...$string)
    {
        $value = $this->config[$string[0]];
        for ($i = 1; $i < count($string); $i++) {
            $value = $value[$string[$i]];
        }
        return $value;
    }

}