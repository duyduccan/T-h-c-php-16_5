<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 24/05/2019
 * Time: 2:46 CH
 */
//không thể khai báo một phương thức abstract trong class bình thường
class People
{
    //sai vì không thể khai báo một phương thức abstract trong class bình thường
    abstract public function getA();
}