<?php
/**
 * Created by PhpStorm.
 * User: Владимир
 * Date: 18.12.2018
 * Time: 13:39
 */

namespace Timur\Notifier;


class NotifierObserver implements ObserverAdapterInterface
{
private $adapters = [];

    public function debug($message)
    {
        foreach ($this->adapters as $adapter){
            $adapter->debug($message);
        }
    }

    public function info($message)
    {
        foreach ($this->adapters as $adapter){
            $adapter->info($message);
        }
    }

    public function notice($message)
    {
        foreach ($this->adapters as $adapter){
            $adapter->notice($message);
        }
    }

    public function warning($message)
    {
        foreach ($this->adapters as $adapter){
            $adapter->warning($message);
        }
    }

    public function error($message)
    {
        foreach ($this->adapters as $adapter){
            $adapter->error($message);
        }
    }

    public function critical($message)
    {
        foreach ($this->adapters as $adapter){
            $adapter->critical($message);
        }
    }

    public function alert($message)
    {
        foreach ($this->adapters as $adapter){
            $adapter->alert($message);
        }
    }

    public function emergency($message)
    {
        foreach ($this->adapters as $adapter){
            $adapter->emergency($message);
        }
    }

    public function add(NotifierAdapterInterface $adapter)
    {
        $this->adapters[]= $adapter;
    }

}