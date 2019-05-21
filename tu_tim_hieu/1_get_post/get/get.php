<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['phone'])&& isset($_GET['address'])){
    echo 'name: ' .$_GET['name'];
    echo '<br> email: '.$_GET['email'];
    echo '<br> phone: ' .$_GET['phone'];
    echo '<br> address: ' .$_GET['address'];
}

?>
</body>
</html>