<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolour="grey">
    <h1>CALCULATOR</h1>
    <form action="calculator.php" method="GET">
        <label>Enter 1st num</label>
        <input type="text" name="Enter the 1st num"><br><hr>
        <label>Enter the 2nd num</label>
        <input type="text" name="Enter the 2nd num"><br><hr>
        <input type="submit" name="op" value="sum">sum</input>
        <input type="submit" name="op" value="sub">sub</input>
        <input type="submit" name="op" value="mul">mul</input>
        <input type="submit" name="op" value="div">div</input>
        </form>
        <?php
        
        $a=$_POST['op']
        if($a=="sum")
        echo$n1+$n2;
    else if($a=="sub")
       echo$n1-    
    <h1>
</body>
</html>

