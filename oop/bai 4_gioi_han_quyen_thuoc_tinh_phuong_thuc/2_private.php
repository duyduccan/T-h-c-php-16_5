<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 23/05/2019
 * Time: 9:08 SA
 */
/*private là giới hạn hẹp nhất của thuộc tính và phương thức trong oop
khi các thuộc tính và phương thức khai báo giới hạn này thì các thuộc tính và phương thức đó chỉ
có thể sử dụng được(trong class đó)bên ngoài class không thể nào sử dụng được nó kể cả lớp kế
thừa nó cũng không sử dụng được
ví dụ: mình khai báo và khởi tạo lớp person có các phương thức, thuộc tính là private*/
class Person
{
    //khai báo thuộc tính name ở private
    private $name;
    // khai báo phương thức run ở private
    private function run()
    {
        return 'Đây là hàm run';
    }
}
//khởi tạo class
$person = new Person();
// gọi phương thức name
$person->name;
/*lỗi  Cannot access private property Person::$name in

*/