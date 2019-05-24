<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 24/05/2019
 * Time: 3:05 CH
 */
//phải định nghĩa lại các phương thức abstract của abstract class đó khi kế thừa
abstract class Dongvat
{
    protected $name;
    abstract protected function getName();
}
//class này sai vì chưa định nghĩa lại phương thức abstract getName
class ConTrau extends Dongvat
{
    //
}
//class này đúng vì đã định nghĩa lại đầy đủ các phương thức abstract
class Conbo extends Dongvat
{
    public function getName()
    {
        return $this->name;
    }
}