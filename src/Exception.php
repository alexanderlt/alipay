<?php
/**
 * Created by PhpStorm.
 * User: liangtao
 * Date: 2018/11/17
 * Time: 5:02 PM
 */

namespace alexanderlt\alipay;


class Exception extends \Exception
{

    public function __construct($e = '', $code = 0, \Throwable $previous = null)
    {
        return new \Exception($e, $code, $previous);
    }

}