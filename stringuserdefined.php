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
    function add($x, $y) {
        $sum = $x + $y;
        return $sum;
    }

    $num1 = 11;
    $num2 = 15;
    $summ = add($num1, $num2)
    echo "$num1 + $num2 = " . $summ;
    ?>
</body>
</html>