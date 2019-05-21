<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>array_unique($array)hàm có tác dụng loại bỏ các phần tử trùng nhau trong mảng và trả về
một mảng mới sau khi đã loai bỏ</h1>
<?php
$array = array("domain" => "toidicode.com",
    "description" => "website học lập trình online",
    "description" => "website học lập trình online"
);

    echo "<pre>";
    print_r(array_unique($array));
    echo "</pre>";

?>
</body>
</html>