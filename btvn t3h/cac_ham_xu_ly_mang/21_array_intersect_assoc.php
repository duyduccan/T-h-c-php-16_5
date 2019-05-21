<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>array_intersect($array1,$array2...)hàm có tác dụng trả về mảng chứa các phần tử giống
nhau cả về key và value trong mảng $array... </h1>
<?php
$array1 = array("domain" => "toidicode.com",
    "description" => "website học lập trình online"
);
$array2 = array("domain" => "toidicode.com",
    "description" => "swebsite học lập trình online"
);

    echo "<pre>";
    print_r(array_intersect($array1, $array2));
    echo "</pre>";

?>
</body>
</html>