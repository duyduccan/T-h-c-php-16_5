<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>array_rand($array,$number) hàm có tác dụng lấy ra key ngẫu nhiên trong mảng với number
là số lượng muốn lấy</h1>
<?php
$array = array("domain" => "toidicode.com",
    "description" => "website học lập trình online");

    echo "<pre>";
    print_r(array_rand($array));
    echo "</pre>";

    echo "<pre>";
    print_r(array_rand($array,2));
    echo "</pre>";
?>
</body>
</html>