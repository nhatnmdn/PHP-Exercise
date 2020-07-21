<?php
include 'db.php'
?>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <title>Moon Cake</title>
</head>
<body>
<h1>Moon Cake</h1>
<form action="">
    <select name="cake" id="cake">
        <option value="">Select cake</option>
        <?php
        if (isset($cakes)) {
            foreach ($cakes as $key => $value) {
                ?>
                <option value="<?php echo $value['name'] ?>">
                    <?php echo $value['name'] ?>
                </option>
            <?php }
        } ?>
    </select>
    <div class="result">

    </div>
</form>
</body>

<script>
  $(document).ready(function(){
    $("#cake").change(function(){
      var cake = $(this).val();
      $.ajax({
        type: "POST",
        url: 'listCake.php',
        data: {
          'cake' : cake
        }
      }).then((res) => {
        $(".result").html("")
        $(".result").append(res)
      });
    });
  });
</script>
</html>
