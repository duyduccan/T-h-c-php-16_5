<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 24/05/2019
 * Time: 2:49 CH
 */
//trong abstract class thuộc tính không được khai báo với từ khóa abstract
abstract class People
{
    //đúng
    public $name;
    //sai
    abstract public $name;
}