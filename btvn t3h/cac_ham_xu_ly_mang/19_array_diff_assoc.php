<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>array_diff_assoc($array1,$array2...)hàm có tác dụng trả về mảng chứa các key có trong mảng
$array1 nhưng không có trong mảng $array2... $arrayn</h1>
<?php
$array1 = array("domain" => "toidicode.com",
    "description" => "website học lập trình online"
);
$array2 = array("domain" => "toidicode.com",
    "descriptions" => "website học lập trình online"
);

    echo "<pre>";
    print_r(array_diff_assoc($array1, $array2));
    echo "</pre>";

?>
</body>
</html>