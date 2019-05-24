<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 24/05/2019
 * Time: 3:13 CH
 */
/*
 * interface trong hướng đối tượng là một khuôn mẫu giúp cho chúng ta tạo ra bộ khung cho một
 * hoặc nhiều đối tượng và nhìn vào interface thì chúng ta hoàn toàn có thể xác định được
 * các phương thức và các thuộc tính cố định(hay còn gọi là hằng) sẽ có trong đối tượng
 * implement nó
 *
 * cú pháp khai báo interface*/
interface InterfaceName
{
    //code
}
// trong đó InterfaceName là tên của interface các bạn muốn đặt

//ví dụ interface DongVat
interface DongVat
{
    // code
}
/*tính chất của interface

1_interface không phải là một đối tượng
2_trong interface chúng ta chỉ được khai báo phương thức chứ không được định nghĩa chúng
3_trong interface chúng ta có thể khai báo được hằng nhưng không thể khai báo biến
4_Một interface không thể khởi tạo được (vì nó không phải là một đối tượng)
5_các lớp implement interface thì phải khai báo và định nghĩa lại các phương thức có trong
interface đó
6_một class có thể implement nhiều interface
7_các interface có thể kế thừa lẫn nhau*/