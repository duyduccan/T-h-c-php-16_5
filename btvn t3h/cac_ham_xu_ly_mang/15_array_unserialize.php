<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>array_unserialize($input)hàm có tác dụng decode chuỗi được mã hóa bằng serialize</h1>
<?php
$array = array("domain" => "toidicode.com",
    "description" => "website học lập trình online"
);

    echo "<pre>";
    print_r($a = serialize($array));
    echo "</pre>";

    echo "<pre>";
    print_r(unserialize($a));
    echo "</pre>";

?>
</body>
</html>