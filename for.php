<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($count = 1; $count <= 10; $count++) {
        if ( ($count % 3) == 0) {
            echo "$count is divisible by 3!<br>";
        }
    }
    ?>
</body>
</html>