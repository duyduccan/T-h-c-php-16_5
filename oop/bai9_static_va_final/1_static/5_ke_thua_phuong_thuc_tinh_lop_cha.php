<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 24/05/2019
 * Time: 9:02 CH
 */
//để kế thừa phương thức tĩnh từ lớp cha ta dùng như cách truyền thống
class ConNguoi
{
    private static $name = 'can duy duc';
    public static function getName()
    {
        return ConNguoi::$name;
    }
}
class NguoiLon extends ConNguoi
{
    public function getName()
    {
        parent::getName();
    }
}
/*
 * Nhược điểm của static
-Như ở trên mình có nói 'static nó hoạt động như một biến toàn cục' và cũng vì điều này mà
 khi sử dụng static trong chương trình thì nó sẽ chiếm nhiều tài nguyên hơn các thành
phần thường.*/