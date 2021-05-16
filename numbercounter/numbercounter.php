<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From PHP</title>
</head>
<body>
<?php
$mynumber = round(0,100);

define('one', 'yksi');
define('two', 'kaksi');
define('three', 'kolme');
define('four', 'neljä');
define('five', 'viisi');
define('six', 'kuusi');
define('seven', 'seitsemän');
define('eigth', 'kahdeksan');
define('nine', 'yhdeksän');

$firstDigit = $mynumber % 10;
$secondDigit = ($mynumber - ($mynumber % 10)) / 10;

switch ($firstDigit) {
    case 0:
        $firstDigitStr = "";
        break;
    case 1:
        $firstDigitStr = one;
        break;
    case 2:
        $firstDigitStr = two;
        break;
    case 3:
        $firstDigitStr = three;
        break;
    case 4:
        $firstDigitStr = four;
        break;
    case 5:
        $firstDigitStr = five;
        break;
    case 6:
        $firstDigitStr = six;
        break;
    case 7:
        $firstDigitStr = seven;
        break;
    case 8:
        $firstDigitStr = eigth;
        break;
    case 9:
        $firstDigitStr = nine;
        break;
  }

  if ($mynumber > 10) {
    switch ($secondDigit) {
        case 1:
            $secondDigitStr = one;
            break;
        case 2:
            $secondDigitStr = two;
            break;
        case 3:
            $secondDigitStr = three;
            break;
        case 4:
            $secondDigitStr = four;
            break;
        case 5:
            $secondDigitStr = five;
            break;
        case 6:
            $secondDigitStr = six;
            break;
        case 7:
            $secondDigitStr = seven;
            break;
        case 8:
            $secondDigitStr = eigth;
            break;
        case 9:
            $secondDigitStr = nine;
            break;
    }
  }

  if ($mynumber == 0) {
    echo "nolla";
  } elseif ($mynumber == 10) {
    echo "kymmenen";
  } elseif ($mynumber == 100) {
    echo "sata";
  } elseif ($mynumber < 10) {
    echo $firstDigitStr;
  } elseif ($mynumber < 20) {
    echo $firstDigitStr . "toista";
  } else {
    echo $secondDigitStr . "kymmentä" . $firstDigitStr . ".";
  }
?>
</body>
</html>