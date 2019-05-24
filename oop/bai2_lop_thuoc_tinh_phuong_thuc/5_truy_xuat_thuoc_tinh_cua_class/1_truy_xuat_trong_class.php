<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 22/05/2019
 * Time: 11:21 CH
 */
/*
 *để truy xuất các (thuộc tính động) trong class thì chúng ta dùng từ khóa this với
 * cú pháp:
 * $this->propertyName;
 * ví dụ: truy xuất thông tin của thuộc tính (name) trong phương thức (noi) của class (ConNguoi)*/
class ConNguoi
{
    var $name;
    var $mat;
    var $mui;
    const SOCHAN = 2;

    function an()
    {

    }
    function noi($caunoi)
    {
        return $this->name = $caunoi;
    }
    function di()
    {

    }
}
/*truy xuất thông tin của (thuộc tính cố định) trong class
self::propertyName;
ví dụ: xây dựng thêm phương thức(getSoChan) có nhiêm vụ trả về (sochan) bên trong lớp (ConNguoi)
*/
function getSoChan()
{
    return self::SOCHAN;
}
