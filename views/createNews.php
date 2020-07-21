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
<form action="" method="post" class="form mt-5" role="form" enctype="multipart/form-data">
    <h1 style="text-align: center">Create News</h1>
    <div class="form-group row ">
        <div class="col-xs-3 col-md-3">
            <label for="" class="float-md-right mt-2">Title: </label>
        </div>
        <div class="col-xs-7 col-md-7">
            <input type="text" class="form-control" name="title" value="">
        </div>
    </div>
    <div class="form-group row ">
        <div class="col-xs-3 col-md-3">
            <label for="" class="float-md-right mt-2">Description: </label>
        </div>
        <div class="col-xs-7 col-md-7">
            <input type="text" class="form-control" name="description" value="">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-xs-3 col-md-3">
            <label for="" class="float-md-right mt-2">Image: </label>
        </div>
        <div class="col-xs-7 col-md-7">
            <input type="file" name="image" class="form-control">
        </div>
    </div>
    </div>
    <button type="submit" class="btn btn-lg btn-success btn-block col-md-3 container" name="action" value="store">Create</button>
</form>

</body>
</html>
