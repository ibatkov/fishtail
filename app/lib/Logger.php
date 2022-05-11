<?php

namespace lib;

use Monolog\Logger as MonoLogger;
use Monolog\Handler\StreamHandler;

class Logger extends Singleton
{
    private MonoLogger $logger;

    protected function __construct()
    {
        $config = Config::getInstance();

        $appName = $config->getParameter('app_name');

        $this->logger = new MonoLogger($appName);

        $infoLogPath = $config->getParameter('log_path', 'info');
        $this->createHandler($infoLogPath, MonoLogger::INFO);

        $errorLogPath = $config->getParameter('log_path', 'error');
        $this->createHandler($errorLogPath, MonoLogger::ERROR);
    }

    private function createHandler($path, $level){
        if (!file_exists($path)) {
            file_put_contents($path, null);
        }
        $this->logger->pushHandler(new StreamHandler($path, $level, false));
    }

    public function error($message): void
    {
        $this->logger->error($message);
    }

    public function info($message): void
    {
        $this->logger->info($message);
    }

}