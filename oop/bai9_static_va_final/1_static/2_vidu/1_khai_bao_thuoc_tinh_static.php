<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 24/05/2019
 * Time: 7:55 CH
 */
class ConNguoi
{
    private static $name = 'tom';
    public function setName($name)
    {
        self::$name = $name;
    }
    public function getName()
    {
        return self::$name;
    }
}
//khởi tạo đối tượng con người
$chublog = new ConNguoi();
//setName cho đối tượng
$chublog->setName('can duy duc');
//in ra name cho đối tượng
echo $chublog->getName();
// khởi tạo đối tượng con người
$nguoixem = new ConNguoi();
//hiển thị ra tên người xem
echo '<br>'.$nguoixem->getName();