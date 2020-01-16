<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */

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
