<?php
/**
 * Created by PhpStorm.
 * User: Владимир
 * Date: 17.12.2018
 * Time: 13:42
 */

namespace Timur\Notifier;


interface NotifierAdapterInterface
{
    public function debug($message);

    public function info($message);

    public function notice($message);

    public function warning($message);

    public function error($message);

    public function critical($message);

    public function alert($message);

    public function emergency($message);
}