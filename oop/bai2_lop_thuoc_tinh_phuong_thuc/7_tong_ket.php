<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 23/05/2019
 * Time: 12:00 SA
 */
class ConNguoi
{
    // khái báo thuộc tính động
    public $name;
    public $mat;
    public $mui;
    // khai báo constant
    const SOCHAN = 2;

    //khai báo phương thức
    public function an()
    {
        //code
    }
    public function noi($caunoi)
    {
        // gọi phương thức trong class
        return $this->getSoChan();
    }
    public function di()
    {
        //code
    }
    public function getName()
    {
        //gọi thuộc tính trong class
        return $this->name;
    }
    public function getSoChan()
    {
        // gọi thuộc tính constant trong class
        return self::SOCHAN;
    }
}
// khởi tạo class
$connguoi = new ConNguoi();
// gọi thuộc tính ngoài class và đồng thời gán giá trị mới cho thuộc tính
$connguoi->name = "can duy duc";
//gọi lại thuộc tính này để xem thay đổi
echo $connguoi->name . "<br>";
//gọi phương thức
echo $connguoi->noi('can duy duc ');