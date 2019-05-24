<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 24/05/2019
 * Time: 3:44 CH
 */
//các lớp implement lại interface thi phải khai báo và định nghĩa lại các phương thức có trong
//interface
interface DongVat
{
    public function getName();
}
//Class này đúng vì đã khai báo và định nghĩa lại phương thức getName
//trong interface
class ConTrau implements DongVat
{
    private $name;
    public function getName()
    {
        return $this->name;
    }


    public function setName()
    {
        // TODO: Implement setName() method.
    }
}
//Class này sai vì chưa khai báo và định nghĩa lại phương thức getName
//trong interface
class ConBo implements DongVat
{
    private $name;
    public function setName($name)
    {
        $this->name = $name;
    }
}