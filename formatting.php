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
    printf("%.2f", 123.456);
    echo "<br />";
    printf("%.10f", 123.456);
    echo "<br />";
    printf("%.0f", 123.456);
    echo "<br />";
    echo number_format("2500000",2);
    ?>

</body>
</html>