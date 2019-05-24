<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 24/05/2019
 * Time: 8:44 CH
 */
/*khi bạn khai báo một thuộc tính hay một phương thức ở dạng static thì bạn sẽ không thể gọi
bằng cách thông thường và dùng từ khóa this được nữa

để gọi phương thức tĩnh ngoài class
cú pháp
gọi theo cách truyền thống hoặc className::tenPhuongthuc();

để gọi thuộc tính tĩnh ngoài class
cú pháp:
className::$tenthuoctinh;
*/
class ConNguoi
{
    private static $name = 'can duy duc';
    public static function getName()
    {
        //gọi thuộc tính tĩnh
        return self::$name;
        //hoặc
        return ConNguoi::$name;
    }
    public function showAll()
    {
        //gọi phương thức tĩnh
        return self::getName();
        // hoặc
        return ConNguoi::getName();
    }
}
// gọi thuộc tính tĩnh
ConNguoi::$name;
// gọi phương thức tĩnh
ConNguoi::showAll();
//hoặc
$connguoi = new ConNguoi();
$connguoi->showAll();