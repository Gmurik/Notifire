<?php
/**
 * Created by PhpStorm.
 * User: Владимир
 * Date: 17.12.2018
 * Time: 13:44
 */

namespace Timur\Notifier\Adapter;


use Monolog\Logger;
use Timur\Notifier\NotifierAdapterInterface;

class MonologAdapter implements NotifierAdapterInterface
{
    /** @var Logger */
private $logger;

    /**
     * MonologAdapter constructor.
     * @param Logger $logger
     */
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function debug($message)
    {
        $this->logger->debug($message);
    }

    public function info($message)
    {
        $this->logger->info($message);
    }

    public function notice($message)
    {
        $this->logger->notice($message);
    }

    public function warning($message)
    {
        $this->logger->warning($message);
    }

    public function error($message)
    {
        $this->logger->error($message);
    }

    public function critical($message)
    {
        $this->logger->critical($message);
    }

    public function alert($message)
    {
        $this->logger->emergency($message);
    }

    public function emergency($message)
    {
        $this->logger->info($message);
    }


}