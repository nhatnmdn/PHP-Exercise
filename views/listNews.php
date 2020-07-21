<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List News</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
<a class="btn btn-primary mt-3 mb-3 ml-3 " href="index.php?action=create">Create</a>
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Images</th>
        <th>Create_at</th>
        <th colspan="2">Action</th>
    </tr>
    <?php
    if (isset($listNews)) {
        foreach ($listNews as $key => $value) {?>
            <tr>
                <td><?php echo $value['id'] ?></td>
                <td><a href="index.php?action=detail&id=<?php echo $value['id']?>" style="text-decoration: none; color: black"><?php echo $value['title'] ?></a></td>
                <td><?php echo $value['description'] ?></td>
                <td><a href="index.php?action=detail&id=<?php echo $value['id']?>"><img src="public/images/<?php echo $value['image'];?>" alt="" width="150px" height="150px"></a></td>
                <td><?php echo $value['created_at'] ?></td>
                <td><a href="index.php?action=edit&id=<?php echo $value['id']?>">Edit</a></td>
                <td><a href="index.php?action=delete&id=<?php echo $value['id']?>">Delete</a></td>
            </tr>
            <?php
        }
    }
    ?>
</table>
</body>
</html>
