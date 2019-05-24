<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 24/05/2019
 * Time: 11:13 SA
 */
/*phương thức khởi tạo là một phương thức mà khi chúng ta khởi tạo một class thì nó luôn luôn
được gọi kèm theo
phương thức khởi tạo cũng được sử dụng đầy đủ chức năng của các phương thức bình thường khác
trong class và trong một class có thể có hoặc không có phương thức khởi tạo*/

class Foo
{
    public function __construct()
    {
        echo 'Class Foo được khởi tạo';
    }
}
new Foo();