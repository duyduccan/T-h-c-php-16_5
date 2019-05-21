<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>array_unshift($array,$var,$var...) hàm này có tác dụng thêm một hoặc nhiều phần tử
vào đầu mảng và trả về số lượng phần tử của mảng sau khi thêm</h1>
<?php
$array = array("domain" => "toidicode.com",
    "description" => "website học lập trình online");

    echo "<pre>";
    print_r(array_unshift($array,"học lập trình"));
    echo "</pre>";
?>
</body>
</html>