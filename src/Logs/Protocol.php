<?php declare (strict_types=1);

namespace App\Logs;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Protocol
{
    const PATH_DEVELOPMENT_LOG = 'var/log/development.log';
    const PATH_PRODUCTION_LOG = 'var/log/production.log';
    
    /** @var Logger */
    private $logger;
    
    public function __construct(string $name)
    {
        $this->logger = new Logger($name);
        $this->logger->pushHandler(new StreamHandler(self::PATH_DEVELOPMENT_LOG, Logger::DEBUG));
        $this->logger->pushHandler(new StreamHandler(self::PATH_PRODUCTION_LOG, Logger::WARNING));
    }
    
    public function debug(string $message): bool
    {
        return $this->logger->debug($message);
    }
    
    public function warning(string $message): bool
    {
        return $this->logger->warning($message);
    }
}
