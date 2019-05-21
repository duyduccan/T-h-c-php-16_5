<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>array_search($keyword,$array)hàm có tác dụng tìm kiếm giá trị của mảng và trả về key của
của phần tử đó nếu có</h1>
<?php
$array = array("domain" => "toidicode.com",
    "description" => "website học lập trình online");

    echo "<pre>";
    print_r(array_search("toidicode.com",$array));
    echo "</pre>";

?>
</body>
</html>