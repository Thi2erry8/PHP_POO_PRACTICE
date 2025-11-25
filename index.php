<?php
      declare(strict_types=1)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="inc/calc.php" method="post">
        <p>My own calculator</p>
        <input type="number" name="num1" placeholder="First number">
        <select name="oper">
            <option value="add">Addiction</option>
            <option value="sub">Subtraction</option>
            <option value="div">Division</option>
            <option value="mul">Multiplication</option>
        </select>
        <input type="number" name="num2" placeholder="Second numder">
        <button type="submit" name="submit">Calculatrice</button>
    </form>
</body>

</html>