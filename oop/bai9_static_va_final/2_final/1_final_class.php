<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 24/05/2019
 * Time: 9:09 CH
 */
/*
 * final có nghĩa là sau cũng
 * final dc ứng dụng vào class và phương thức
 * final class
 * khi một class được khai báo là final thì không lớp nào có thể kế thừa nó và nó chỉ
 * có thể được khởi tạo mà thôi
 * cú pháp:
 * final class ClassName
 * {
 * }
 * ví dụ: khai báo class ConNguoi
 * */
final class ConNguoi
{
    //
}
//sai vì final class không thể kế thừa
class NguoiLon extends ConNguoi
{

}