<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>array_flip($array) hàm có tác dụng chuyển đổi key của mảng thành value và ngược lại</h1>
<?php
$array = array("domain" => "toidicode.com",
    "description" => "website học lập trình online");

    echo "<pre>";
    print_r(array_flip($array));
    echo "</pre>";
?>
</body>
</html>