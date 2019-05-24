<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 24/05/2019
 * Time: 3:35 CH
 */
//chỉ được khai báo phương thức chứ không được định nghĩa chúng trong interface
interface DongVat
{
    //đúng vì chúng ta chỉ khai báo phương thức trong interface
    public function setName();
    // sai vì chúng ta không được định nghĩa phương thức trong interface
    public function getName()
    {
        //
    }
}