<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 22/05/2019
 * Time: 10:32 CH
 */
// lập trình hướng đối tượng sẽ chia ra các đối tượng để xử lý
// ví dụ bài toán lấy ra tên tuổi của một nhân viên Personnel
class Personnel
{
    private $name = 'Can duy duc';
    private $age = 32;

    public function getPersonel()
    {
        return $this->name . "-" . $this->age;
    }
}