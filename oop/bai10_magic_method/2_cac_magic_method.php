<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 24/05/2019
 * Time: 9:39 CH
 */
__construct(); //gọi khi khởi tạo đối tượng
__destruct(); //gọi khi hủy đối tượng
__set(); //gọi khi ta truyền dữ liệu cho một thuôc tính không được phép truy cập
__get();//khi đọc dữ liệu từ một thuộc tính không được phép truy cập
__isset();// đc gọi khi gọi hàm isset() hoặc empty() trên một thuộc tính không được phép truy cập
__unset();// dc gọi khi hàm unset() dc sử dụng trong một thuộc tính không dc phép truy cập
__call();//dc gọi khi ta gọi một phương thức không dc phép truy cập trong phạm vi của một đối tượng
__callstatic();//dc kích hoạt khi ta gọi một phương thức không dc phép truy cập trong phạm vi
// của một phương thức tĩnh
__toString();// phương thức này giúp class chỉ định xem sẽ in ra cái gì khi nó đc dùng
__invoke();//phương thức này được gọi khi một lệnh cố gắng gọi một đối tượng như một hàm
__sleep();//dc gọi khi serialize() một đối tượng
__wakeup(); //dc gọi khi unserialize() đối tượng
__set__state();
__clone();//dc sd khi chúng ta clone một object
__debugInfo();//dc gọi khi chúng ta sd vardump()