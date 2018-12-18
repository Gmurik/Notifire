<?php
/**
 * Created by PhpStorm.
 * User: Владимир
 * Date: 18.12.2018
 * Time: 10:12
 */

namespace Timur\Notifier\Adapter;


use Timur\Notifier\NotifierAdapterInterface;

class TelegramAdapter implements NotifierAdapterInterface
{

private $url = "https://api.telegram.org/bot<token>/sendMessage?chat_id=<id>&text=";

    public function __construct($chat_id,  $token)
    {
        $this->url = str_replace('<token>',$token,$this->url);
        $this->url = str_replace('<id>',$chat_id,$this->url);
    }

    public function debug($message)
    {
        file_get_contents($this->url.\urlencode("debug".$message));
    }

    public function info($message)
    {
        file_get_contents($this->url.\urlencode("info".$message));
    }

    public function notice($message)
    {
        file_get_contents($this->url.\urlencode("notice".$message));
    }

    public function warning($message)
    {
        file_get_contents($this->url.\urlencode("warning".$message));
    }

    public function error($message)
    {
        file_get_contents($this->url.\urlencode("error".$message));
    }

    public function critical($message)
    {
        file_get_contents($this->url.\urlencode("critical".$message));
    }

    public function alert($message)
    {
        file_get_contents($this->url.\urlencode("alert".$message));
    }

    public function emergency($message)
    {
        file_get_contents($this->url.\urlencode("emergency".$message));
    }


}