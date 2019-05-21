<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>array_shift($array) hàm có tác dụng xóa phần tử đầu tiên của mảng và trả về phần tử
vừa xóa</h1>
<?php
$array = array("domain" => "toidicode.com",
    "description" => "website học lập trình online");

    echo "<pre>";
    print_r(array_shift($array));
    echo "</pre>";
?>
</body>
</html>