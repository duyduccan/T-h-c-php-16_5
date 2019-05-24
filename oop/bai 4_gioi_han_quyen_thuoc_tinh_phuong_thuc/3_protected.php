<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 24/05/2019
 * Time: 9:57 SA
 */
/*protected ngoài dc sử dụng trong class đó ra thì class con kế thừa từ nó
cũng có thể sử dụng được, như bên ngoài class không có thể sử dụng dc*/

class Person
{
    //khai báo thuộc tính cha dạng protected
    protected $name;
}
class Male extends Person
{
    function setName($name)
    {
        // đúng vì sử dụng class con
        $this->name = $name;
    }
    function getName()
    {
        // đúng vì sử dụng trong class con
        return $this->name;
    }
}
//khởi tạo lớp Person
$person = new Person();
// sai vì biến name có visibility là protected nên không tác động từ bên ngoài vào dc
//$person->name;
// khởi tạo lớp Male
$male = new Male();
// tác động vào biến name trong hàm setName
$male->setName('can duy duc');
echo $male->getName();