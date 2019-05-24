<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 24/05/2019
 * Time: 10:27 SA
 */
/*public có mức độ truy cập rộng nhất
chúng có thể tác động vào thuộc tính và phương thức đó từ cả trong lẫn ngoài class*/
class Person
{
    public $name;

    function setName($name)
    {
        $this->name = $name;
    }
    function getName(){
        return $this->name;
    }
}
$person = new Person();
$person->name = 'can duy duc 1';
$person->setName('can duy duc 2');
echo '<br>'.$person->getName();