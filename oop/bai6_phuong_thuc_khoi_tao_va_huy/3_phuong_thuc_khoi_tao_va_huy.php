<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 24/05/2019
 * Time: 1:54 CH
 */
/*khi một class có phương thức khởi tạo và phương thức hủy kế thừa từ một class cũng có phương
thức khởi tạo và phương thức hủy thì phương thức khởi tạo và phương thức hủy sẽ nhận của class
được kế thừa */
class Bar
{
    public function __construct()
    {
        echo 'class Bar được khởi tạo';
    }
    public function __destruct()
    {
        echo '<br>class Bar được hủy';
    }
}
class Foo extends Bar
{
    public function __construct()
    {
        echo 'class Foo được khởi tạo';
    }
    public function __destruct()
    {
        echo '<br>class Foo được hủy';
    }
}
$foo = new Foo();
