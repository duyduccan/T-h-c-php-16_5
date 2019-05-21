<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>is_array($array1)hàm có tác dụng kiểm tra xem một biến có phải mảng hay không.
trả vể true nếu là mảng và ngược lại</h1>
<?php
$array = array("domain" => "toidicode.com",
    "description" => "website học lập trình online"
);


    echo "<pre>";
    print_r(is_array($array));
    echo "</pre>";

?>
</body>
</html>