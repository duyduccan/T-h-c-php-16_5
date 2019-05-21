<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>array_key_exists($key,$array)kiểm tra xem mảng $array có tồn tại khóa $key không
trả vể true nếu tồn tại và ngược lại</h1>
<?php
$array = array("domain" => "toidicode.com",
    "description" => "website học lập trình online"
);

    echo "<pre>";
    print_r(array_key_exists("domain", $array));
    echo "</pre>";

?>
</body>
</html>