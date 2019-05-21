<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>array_values($array) hàm có tác dụng đưa mảng về dạng tuần tự</h1>
<?php
$array = array("domain" => "toidicode.com",
    "description" => "website học lập trình online");

    echo "<pre>";
    print_r(array_values($array));
    echo "</pre>";
?>
</body>
</html>