<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 24/05/2019
 * Time: 9:15 CH
 */
/*
 * khi chúng ta khai báo một phương thức final thì không có một phương thức nào có thể
 * override (ghi đè lại dc)
 * cú pháp
 * class ClassName
 * {
 * final public function methodName()
 * {
 *
 * }
 * }
 * ví dụ: khai báo lớp ConNguoi có phương thức getSoChan() là final
 */
class ConNguoi
{
    private $soChan = 2;
    final public function getSoChan()
    {
        return $this->soChan;
    }
}
// sai vì không thể override lại final phương thức
class NguoiLon extends ConNguoi
{
    public function getSoChan()
    {

    }
}