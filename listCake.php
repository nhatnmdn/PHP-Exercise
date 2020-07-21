<?php
include 'db.php';

$cake = isset($_POST['cake']) ? $_POST['cake'] : 'default';

if (isset($cakes)) {
    foreach ($cakes as $key => $value) {
        if ($value['name'] === $cake) {
            ?>
            <div id="show">
                <p> Cake Name: <?php echo $value['name'] ?></p>
                <p> Price: <?php echo number_format($value['price']) ?></p>
                <img src="images/<?php echo $value['image'] ?>" width="200px" height="200px">
            </div>
        <?php }
    }
} ?>
