<?php
/**
 * Created by PhpStorm.
 * User: Владимир
 * Date: 18.12.2018
 * Time: 13:36
 */

namespace Timur\Notifier;


interface ObserverAdapterInterface extends NotifierAdapterInterface
{
    public function add(NotifierAdapterInterface $adapter);

}