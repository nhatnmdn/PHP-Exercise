<?php require 'exercise4.php';?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
<form action="#" method="get" class="form mt-3">
    <button type="submit" class="btn btn-primary" name="button" value="filter_character">Display student contain word "a" in Name</button>
    <button type="submit" class="btn btn-primary" name="button" value="css_highest">CSS Score Highest</button>
    <button type="submit" class="btn btn-primary" name="button" value="order_by_php">Order by PHP Score ASC</button>
</form>
<table class="table table-striped">
    <tr>
        <th>Name</th>
        <th>Class</th>
        <th>CSS score</th>
        <th>PHP score</th>
        <th>Java score</th>
    </tr>
    <?php
    if (isset($filterStudents)) {
        foreach ($filterStudents as $value) {
            ?>
            <tr>
                <td><?php echo $value['name'] ?></td>
                <td><?php echo $value['class'] ?></td>
                <td><?php echo $value['css_score'] ?></td>
                <td><?php echo $value['php_score'] ?></td>
                <td><?php echo $value['java_score'] ?></td>
            </tr>
            <?php
        }
    }
    ?>
</table>
</body>
</html>
