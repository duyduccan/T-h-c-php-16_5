<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>array_serialize($input)hàm có tác dụng chuyển đổi một chuỗi, số, mảng, object thành một
chuỗi được mã hóa</h1>
<?php
$array = array("domain" => "toidicode.com",
    "description" => "website học lập trình online"
);

    echo "<pre>";
    print_r($a = serialize($array));
    echo "</pre>";

?>
</body>
</html>