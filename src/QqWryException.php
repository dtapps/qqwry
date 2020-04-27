<?php

// +----------------------------------------------------------------------
// | 纯真IP数据库
// +----------------------------------------------------------------------
// | 版权所有 2017~2020 [ https://www.dtapp.net ]
// +----------------------------------------------------------------------
// | 官方网站: https://gitee.com/liguangchun/qqwry
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | gitee 仓库地址 ：https://gitee.com/liguangchun/qqwry
// | github 仓库地址 ：https://github.com/GC0202/qqwry
// | Packagist 地址 ：https://packagist.org/packages/liguangchun/qqwry
// +----------------------------------------------------------------------

namespace DtApp\QqWry;

use Exception;

/**
 * 处理错误
 * @package DtApp\QqWry
 */
class QqWryException extends Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}
