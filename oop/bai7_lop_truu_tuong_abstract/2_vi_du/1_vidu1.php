<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 24/05/2019
 * Time: 2:28 CH
 */
//khai báo một phương thức abstract trong abstract class
abstract class Person
{
    //khai báo một abstract method đúng
    abstract public function getName();
    //sai vì abstract class không thể viết code xử lý được
    abstract public function getHeight()
    {
        //
    }
}