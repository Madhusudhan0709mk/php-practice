<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connect_db</title>
</head>
<body>
    <?php
    $connect_db = mysqli_connect("localhost","root","mad123","php");
    if(!$connect_db)
        die("could not connect".mysqli_connect_error());
    else
    echo "connection established";
    ?>
</body>
</html>