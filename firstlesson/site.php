<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Content</title>
</head>
<body>
    Hello from PHP!
    <?php
    $value = PHP_INT_MAX;
    $dec_value = 1000.00;
    echo "$dec_value is of type" . gettype($dec_value);
    echo "<br>";
    $value = "God morgon";
    echo "now $value is of type " . gettype($value);

    $sentence = "good morning";
    $someone = "Hoang";
    $a = 10;
    $b = 20;
    if ($a < $b) {
        echo "a is greater than b";
    } else {
        echo "a is not greater than b";
    }
     ?>
     <h1>hahaha<h1>
         <?php
         switch($value) {
             case 0:
                echo "value is zero";
                break;
             case 1:
                echo "value is one";
                break;
             case 2:
                echo "value is two";
                break;
             case 3:
                echo "value is three";
                break;
            default;
         }
         ?>
</body>
</html>