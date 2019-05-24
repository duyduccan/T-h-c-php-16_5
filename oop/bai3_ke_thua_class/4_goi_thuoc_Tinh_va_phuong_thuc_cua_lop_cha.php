<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 23/05/2019
 * Time: 8:31 SA
 */
/*gọi thuộc tính và phương thức của class cha.
khi lớp con cũng tồn tại một thuộc tính, phương thức mà lớp cha của nó đã tồn tại
cú pháp:
parent::methodName();
parent::propertyName;
*/
class ParentClass
{
    function getClass()
    {
        return 'ParentClass';
    }
}
class ChildClass extends ParentClass
{
    var $name = 'ChildClass';

    function getclass(){
        return 'ChildClass';
    }
    function getMethod()
    {
        echo 'Đầy là phương thức ăn của lớp ' .$this->getclass();
    }
    function getMethodParent()
    {
        echo '<br>Đây là phương thức ăn của lớp '.parent::getClass();
    }
}
$class = new ChildClass();
$class->getMethod();
// kq đây là phương thức ăn của lớp trẻ con
$class->getMethodParent();
//kq đây là phương thức ăn của lớp người lớn