<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
</head>
<body>
    <h1>All About Me</h1>
    <h4>Name: <?php echo $name ?></h4>
    <h4>Age: <?= $age ?></h4>
    <h4>Address: <?= $address ?></h4>
</body>
</html>