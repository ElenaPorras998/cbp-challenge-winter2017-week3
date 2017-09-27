<?php
require 'lib/data-functions.php';

$index = get_index();
var_dump($index);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Kittens</title>
</head>
<body>

    <h1>Our Kittens</h1>

    <ul>
        <?php foreach($index as $n => $name) : ?>
            <a href="details.php?item_id=<?php echo $n?>"> <li><?php echo $n.'. '.$name; ?></li></a>
        <?php endforeach; ?>
    </ul>



</body>
</html>