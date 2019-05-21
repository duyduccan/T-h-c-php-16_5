<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>array_slice($array,$begin,$lenght)hàm có tác dụng lấy ra $lenght phần tử bắt đầu từ
$begin trong mảng</h1>
<?php
$array = array("domain" => "toidicode.com",
    "description" => "website học lập trình online");

    echo "<pre>";
    print_r(array_slice($array,0));
    echo "</pre>";

    echo "<pre>";
    print_r(array_slice($array,0, 1));
    echo "</pre>";

?>
</body>
</html>