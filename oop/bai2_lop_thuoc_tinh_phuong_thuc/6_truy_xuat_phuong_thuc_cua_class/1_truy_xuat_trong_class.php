<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 22/05/2019
 * Time: 11:50 CH
 */
/*
 *cú pháp
 * $this->methodName();
 * $this->methodName($argument);
 * */
class ConNguoi
{
    var $name = "aaa";
    var $mat;
    var $mui;
    const SOCHAN = 2;

    function an()
    {

    }
    function noi()
    {
        return $this->getSoChan();
    }
    function di()
    {

    }
    function getSoChan()
    {
        return self::SOCHAN;
    }
}