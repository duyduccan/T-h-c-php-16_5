<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
if(isset($_POST['name'])&&isset($_POST['pass'])){
    echo 'name: '.$_POST["name"];
    echo '<br>password: '.$_POST["pass"];
}
?>
</body>
</html>