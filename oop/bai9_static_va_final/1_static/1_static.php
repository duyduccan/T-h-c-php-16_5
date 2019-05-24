<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 24/05/2019
 * Time: 7:44 CH
 */
/*
 * static trong lập trình hướng đối tượng là một thành phần tĩnh (có thể là thuộc tính hoặc
 * phương thức) mà nó hoạt động như một biến toàn cục, dù cho nó có được xử lý ở bất kỳ file
 * nào đi nữa(trong cùng một chương trình) thì nó đều lưu lại giá trị cuối cùng mà nó được
 * thực hiện vào trong lớp
 * cú pháp:
 *
class ClassName
{
         //khai báo thuộc tính tĩnh
        visibility static $propertyName;
        //khai báo phương thức tĩnh
        visibility static function methodName()
{
    //
}
}
ví dụ: khai báo lớp ConNguoi có thuộc tính tĩnh là name và phương thức tĩnh là getName,setName*/
class ConNguoi
{
    private static $name;
    public static function setName()
    {
        //code
    }
    public static function getName()
    {
        //code
    }
}