<?php require 'exercise1.php'?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculation</title>
</head>
<body>
<form action='#' method='POST'>
    <h1>Calculation</h1>
    <label>First Number:</label>
    <input type='number' name='num1' value="">
    <br>
    <br>
    <label>Second Number:</label>
    <input type='number' name='num2' value="">
    <br>
    <br>
    <label>Oparation:</label>
    <select name="calculator">
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiplication">*</option>
        <option value="division">/</option>
    </select>
    <br>
    <button type='submit'>Submit</button>
</form>
</body>
</html>

