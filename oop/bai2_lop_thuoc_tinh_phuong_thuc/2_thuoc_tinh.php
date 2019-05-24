<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 22/05/2019
 * Time: 10:50 CH
 */
/*Thuộc tính(properties) trong class có tác dụng như biến và hằng trong phương pháp lập trình
hướng thủ tục
ví dụ lớp con người có thuộc tính: mắt, mũi, chân, tay...
cú pháp:
class Name
{
    // đối tượng thuộc tính động(biến) có thể thiết lập luôn giá trị cho biến
    var $name = "can duy duc";
    var $propertyName;
    // đối với thuộc tính cố định(hằng) với thuộc tính này chúng ta không thể thay đổi giá
    trị của nó
    const constName = value;
}
ví dụ: khai báo lớp ConNguoi có các thuộc tính động là mat, mui và có các thuộc tính cố định
là sochan=2.
*/
class ConNguoi
{
    var $name;
    var $mat;
    var $mui;

    const SOCHAN = 2;
}