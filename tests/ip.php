<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */

use DtApp\QqWry\Client;

require_once '../vendor/autoload.php';

$ip = new Client();
// 查询位置信息
var_dump($ip->getLocation('116.7.97.38'));
// 查询省份信息
var_dump($ip->getProvince('116.7.97.38'));
// 查询城市信息
var_dump($ip->getCity('116.7.97.38'));
// 查询地区信息
var_dump($ip->getArea('116.7.97.38'));
// 查询运营商信息
var_dump($ip->getExtend('116.7.97.38'));
