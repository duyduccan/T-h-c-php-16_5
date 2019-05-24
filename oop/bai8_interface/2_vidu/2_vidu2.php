<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 24/05/2019
 * Time: 3:39 CH
 */
//trong interface chúng ta chỉ được khai báo hằng không thể khai báo biến
interface DongVat
{
    // đúng vì trong interface có thể khai báo hằng
    const CONNGUOI = False;
    // sai vì trong interface không thể khai báo biến
    public $name;

}