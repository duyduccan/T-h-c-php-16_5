<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>count($array) hàm có tác dụng đếm xem trong mảng có bao nhiêu phần tử</h1>
<?php
$array = array("toidicode.com","website học lập trình online");

echo "<pre>";
print_r($array);
echo "</pre>";

echo "<br> Đếm số phần tử của mảng: ".count($array);
?>
</body>
</html>