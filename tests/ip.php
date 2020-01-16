<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */

use DtApp\QqWry\Client;

require_once '../vendor/autoload.php';

$ip = new Client();
var_dump($ip->getlocation('www.baidu.com'));
var_dump($ip->getlocation('127.0.0.1'));
