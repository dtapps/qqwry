<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */

use DtApp\QqWry\Client;

require_once '../vendor/autoload.php';

$ip = new Client();
// 查询位置信息
try {
    var_dump($ip->getLocation());
} catch (\DtApp\QqWry\QqWryException $e) {
    var_dump($e->getMessage());
}
// 查询省份信息
try {
    var_dump($ip->getProvince());
} catch (\DtApp\QqWry\QqWryException $e) {
    var_dump($e->getMessage());
}
// 查询城市信息
try {
    var_dump($ip->getCity());
} catch (\DtApp\QqWry\QqWryException $e) {
    var_dump($e->getMessage());
}
// 查询地区信息
try {
    var_dump($ip->getArea());
} catch (\DtApp\QqWry\QqWryException $e) {
    var_dump($e->getMessage());
}
// 查询运营商信息
try {
    var_dump($ip->getExtend());
} catch (\DtApp\QqWry\QqWryException $e) {
    var_dump($e->getMessage());
}
