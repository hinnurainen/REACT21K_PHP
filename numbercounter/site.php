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
$mynumber = round(rand() * 100);
$result = "";

 if (0 <= $mynumber && $mynumber <=10) {
     switch($mynumber) {
        case 0:
             $result = 'nolla';
             break;
        case 1:
            $result = 'yksi';
            break;
        case 2:
            $result = 'kaksi';
            break;
        case 3:
            $result = 'kolme';
            break;
        case 4:
            $result = 'neljä';
            break;
        case 5:
            $result = 'viisi';
            break;
        case 6:
            $result = 'kuusi';
            break;
        case 7:
            $result = 'seitsemän';
            break;
        case 8:
            $result = 'kahdeksan';
            break;
        case 9:
            $result = 'yhdeksän';
            break;
        case 10:
            $result = 'kymmenen';
            break;
         default:
            break;
     }
 } elseif (10 < $mynumber && $mynumber <= 19) {
     $remainer = $mynumber - 10;
     switch($remainer) {
        case 1:
             $result += 'yksi';
             break;
        case 2:
            $result += 'kaksi';
            break;
        case 3:
            $result += 'kolme';
            break;
        case 4:
            $result += 'neljä';
            break;
        case 5:
            $result += 'viisi';
            break;
        case 6:
            $result += 'kuusi';
            break;
        case 7:
            $result += 'seitsemän';
            break;
        case 8:
            $result += 'kahdeksan';
            break;
        case 9:
            $result += 'yhdeksän';
            break;
        default:
            break;
        }
        $result += 'toista';
} elseif (20 <= $mynumber && $mynumber <= 99) {
    $module = floor($mynumber / 10);
    $remainder = $mynumber % 10;
    switch($module) {
             case 1:
                 $result += 'yksi';
                 break;
             case 2:
                 $result += 'kaksi';
                 break;
             case 3:
                 $result += 'kolme';
                 break;
             case 4:
                 $result += 'neljä';
                 break;
             case 5:
                 $result += 'viisi';
                 break;
             case 6:
                 $result += 'kuusi';
                 break;
             case 7:
                 $result += 'seitsemän';
                 break;
             case 8:
                 $result += 'kahdeksan';
                 break;
            case 9:
                $result += 'yhdeksän';
                break;
            default:
                break;
         }
        $result += 'kymmentä';

         switch($remainder) {
            case 1:
                 $result += 'yksi';
                 break;
            case 2:
                $result += 'kaksi';
                break;
            case 3:
                $result += 'kolme';
                break;
            case 4:
                $result += 'neljä';
                break;
            case 5:
                $result += 'viisi';
                break;
            case 6:
                $result += 'kuusi';
                break;
            case 7:
                $result += 'seitsemän';
                break;
            case 8:
                $result += 'kahdeksan';
                break;
            case 9:
                $result += 'yhdeksän';
                break;
            default:
                break;
         }
 } else {
$result = 'sata';
}
echo "$result";
?>
</body>
</html>