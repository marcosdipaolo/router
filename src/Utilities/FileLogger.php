<?php

namespace MDP\Utilities;

class FileLogger implements LoggerInterface
{
    private readonly string $logFile;

    public function __construct(string $logFile = null, private readonly string $dateFormat = 'Y-m-d H:i:s')
    {
        $this->logFile = $logFile ?? sys_get_temp_dir() . '/mdp_router.log';

        // Create log directory if it doesn't exist
        $dir = dirname($this->logFile);
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
    }

    public function log(string $level, string $message, array $context = []): void
    {
        $timestamp = date($this->dateFormat);
        $contextStr = $context === [] ? '' : ' | ' . json_encode($context);
        $logMessage = sprintf('[%s] [%s] %s%s%s', $timestamp, $level, $message, $contextStr, PHP_EOL);

        file_put_contents($this->logFile, $logMessage, FILE_APPEND);
    }

    public function error(string $message, array $context = []): void
    {
        $this->log('ERROR', $message, $context);
    }

    public function warning(string $message, array $context = []): void
    {
        $this->log('WARNING', $message, $context);
    }

    public function info(string $message, array $context = []): void
    {
        $this->log('INFO', $message, $context);
    }

    public function debug(string $message, array $context = []): void
    {
        $this->log('DEBUG', $message, $context);
    }

    public function getLogFile(): string
    {
        return $this->logFile;
    }
}
