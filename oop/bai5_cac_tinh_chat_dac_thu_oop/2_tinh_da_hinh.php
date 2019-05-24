<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 24/05/2019
 * Time: 10:39 SA
 */
/*thể hiện rõ nhất thông qua việc gọi phương thức của đối tượng. các phương thức hoàn toàn có
thể giống nhau, nhưng việc xử lý luồng có thể khác nhau
ví dụ: ta có 3 lớp Hình, hình vuông, hình tròn.
trong đó lớp hình là lớp cha của 2 lớp còn lại có phương thức là tính diện tích */
class Hinh
{
    protected function tinhDienTich()
    {
        //code
    }
}
class HinhVuong extends Hinh
{
    private $canh;
    public function setCanh($canh)
    {
        $this->canh = $canh;
    }
    public function getCanh()
    {
        return $this->canh;
    }
    // xử lý tính diện tích của hình vuông
    public function tinhDienTich()
    {
        return pow($this->canh,2);
    }
}
class HinhTron extends Hinh
{
    private $bankinh;
    public function setBanKinh($bankinh)
    {
        $this->bankinh = $bankinh;
    }
    public function getBanKinh()
    {
        return $this->bankinh;
    }
    //xử lý tính diện tích hình tròn
    public function tinhDienTich()
    {
        return (pow($this->bankinh,2)* pi());
    }
}
$hinhvuong = new HinhVuong();
$hinhvuong->setCanh(4);
echo 'dien tích hình vuông: '.$hinhvuong->tinhDienTich();
echo '<br>';
$hinhtron = new HinhTron();
$hinhtron->setBanKinh(4);
echo 'diện tích hình tròn: '.$hinhtron->tinhDienTich();