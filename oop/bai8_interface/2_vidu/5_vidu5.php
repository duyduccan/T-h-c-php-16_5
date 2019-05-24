<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 24/05/2019
 * Time: 3:57 CH
 */
// một class có thể implement nhiều interface
interface DongVat
{
    public function getName();
}
interface ConTrau
{
    public function checkSung();
}
class ConNghe implements DongVat, ConTrau
{
    private $name;
    const SUNG = false;
    public function getName(){
        return $this->getName();
    }
    public function checkSung()
    {
        return self::SUNG;
    }

    public function setName()
    {
        // TODO: Implement setName() method.
    }
}