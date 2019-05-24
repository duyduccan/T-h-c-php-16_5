<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 24/05/2019
 * Time: 4:04 CH
 */
//interface có thể kế thừa lẫn nhau
interface DongVat
{
    public function getName();
}

interface ConTrau extends Dongvat
{
    public function checkSung();
}

class ConNghe implements ConTrau
{
    private $name;
    const SUNG = false;

    public function getName()
    {
        return $this->name;
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