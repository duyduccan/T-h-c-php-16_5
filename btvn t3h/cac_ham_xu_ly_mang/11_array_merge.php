<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>array_merge($array,$array...) hàm có tác dụng gộp 2 hay nhiều mảng thành một mảng</h1>
<?php
$array = array("domain" => "toidicode.com",
    "description" => "website học lập trình online");
$array1 = array(5,4,3,2,1);
    echo "<pre>";
    print_r(array_merge($array,$array1));
    echo "</pre>";
?>
</body>
</html>