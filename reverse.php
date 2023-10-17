<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<form action= "reverse.php"method="POST">;
<label>enter the number</label>
<input type="number" name="number">
<br>
<button type="submit">SUBMIT</button>
</form>


<?php
$n=$_POST['number'];
echo $n;
$sum=0;
while ($n!=0){
    $r=$n%10;
    $sum=$sum+$r;
    $n=$n/10;
}
echo"sum is $sum";
?>

 <body>
</html>

