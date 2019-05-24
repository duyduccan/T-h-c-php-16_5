<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 22/05/2019
 * Time: 11:03 CH
 */
/*
 * phương thức trong class là hành động hành vi của class đó.
 * cú pháp:
 * class Name
 * {
 *  function methodName()
 * {
 *      // code
 * }
 * }
 * methodName là tên phương thức trong class
 * Ví dụ: đối với class ConNguoi ở trên thì sẽ bổ sung thêm các phương thức: ăn, đi, chạy, nói..*/
class ConNguoi
{
    var $name;
    var $mat;
    var $mui;
    const SOCHAN = 2;
    function an()
    {
        //code
    }
    function noi()
    {
        //code
    }
    function di()
    {
        //code
    }
}
/*
 * giống như hàm thì bạn có thể truyền các argument vào hàm dc
 *
 * function noi($caunoi)
 * {
 *      //code
 * }*/