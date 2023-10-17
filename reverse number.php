<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $num = 123456789;
    $x = 0;
    $n =$num;

    while(floor($num))
    {
        $mod = $num%10;
        $x = $x * 10 + $mod;
        $num = $num/10;
    }
    echo "Reverse of $n is $x.";
    ?>
</body>
</html>