<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 22/05/2019
 * Time: 11:40 CH
 */
/*truy xuất thuộc tính khi đứng bên ngoài class có 2 loại
(đối với thuộc tính động)
cú pháp:
$newClass->propertyName;
(đối với thuộc tính cố định)
cú pháp:
ClassName::propertyName;
ví dụ: gọi các thuộc tính động và cố định trong class ConNguoi
*/
// khởi tạo lớp
$tai = new ConNguoi();
// gọi thuộc tính động
//gọi name
$tai->name;
// gọi mui
$tai->mui;
// gọi thuộc tính cố định constant
ConNguoi::sochan;