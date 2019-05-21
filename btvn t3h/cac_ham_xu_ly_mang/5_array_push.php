<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>array_push($array,$var,$var...) hàm này có tác dụng thêm một hoặc nhiều phần tử
vào cuối mảng và trả về số lượng phần tử của mảng sau khi thêm</h1>
<?php
$array = array("domain" => "toidicode.com",
    "description" => "website học lập trình online");

    echo "<pre>";
    print_r(array_push($array,"Miễn phí nhé"));
    echo "</pre>";
?>
</body>
</html>