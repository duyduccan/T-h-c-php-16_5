<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 24/05/2019
 * Time: 1:47 CH
 */
/*phương thức hủy trong class được gọi khi class đó được hủy. nó thường được dùng để giải phóng
tài nguyên của một class và trong một class có thể có hoặc không có phương thức hủy*/
class Foo
{
    public function __destruct()
    {
        echo 'class Foo được hủy ';
    }
}
$foo = new Foo();