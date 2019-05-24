<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 24/05/2019
 * Time: 2:10 CH
 */
/*
 * một lớp được khai báo abstract thì đó là lớp trừu tượng
 * 1_các phương thức (hàm) khi được khai báo Abstract thì chỉ được định nghĩa chứ không được
phép viết code xử lý trong phương thức
2_trong abstract class nếu không phải phương thức abstract thì vẫn khai báo và viết code như
bình thường
3_phương thức abstract chỉ có thể khai báo trong abstract class
4_các thuộc tính trong abstract class thì không được khai báo là abstract
5_không thể khởi tạo một abstract class
6_vì không thể khởi tạo một abstract class nên các phương thức chỉ được khai báo ở mức độ
protected và public
7_các lớp kế thừa một abstract class phải định nghĩa lại tất cả các phương thức trong
abstract class đó (nếu không bị lỗi)*/

// khai báo một abstract class ta dùng cú pháp:
abstract class className
{
    //class body
}
// className: là tên class chúng ta cần khai báo

/*cú pháp khai báo một phương thức abstract
abstract visibility function methodName();

trong đó:
visibility: là protected hoặc public hoặc có thể bỏ trống (bỏ trống là public)
methodName là tên của phương thức cần khai báo
*/
