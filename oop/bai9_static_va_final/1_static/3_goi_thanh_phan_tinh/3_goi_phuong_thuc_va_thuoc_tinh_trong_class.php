<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 24/05/2019
 * Time: 8:44 CH
 */
/*khi bạn khai báo một thuộc tính hay một phương thức ở dạng static thì bạn sẽ không thể gọi
bằng cách thông thường và dùng từ khóa this được nữa
để gọi phương thức và thuộc tính tĩnh trong class
cú pháp
self::ten hoặc className::ten hoặc static::ten
*/
class ConNguoi
{
    private static $name = 'can duy duc';
    public static function getName()
    {
        //gọi thuộc tính tĩnh
        return self::$name;
        //hoặc
        return ConNguoi::$name;
    }
    public function showAll()
    {
        //gọi phương thức tĩnh
        return self::getName();
        // hoặc
        return ConNguoi::getName();
    }
}