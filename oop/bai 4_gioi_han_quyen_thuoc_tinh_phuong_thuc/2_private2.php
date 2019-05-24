<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 24/05/2019
 * Time: 9:57 SA
 */
class Person
{
    //khai báo thuộc tính name ở private
    private $name;
    //khai báo phương thức run ở private
    private function run()
    {
        return 'đây là hàm run';
    }
    function setName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }
    function getRunMethod()
    {
        return $this->run();
    }
}
//khởi tạo class
$person = new Person();
//set thuộc tính name
$person->setName('can duy duc');
//lấy ra thuộc tính name
echo $person->getName();
//gọi giá trị của phương thức run
echo "<br>".$person->getRunMethod();