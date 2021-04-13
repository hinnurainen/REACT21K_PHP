<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jackpot PHP</title>
</head>
<body>
<?php
$winningStatus = false;
$roundPlayed = 0;
$jackpotCounter = 0;


$RANDOMIZE_RANGE = 2;
$COST_OF_ONE_ROUND = 0.5;
$JACKPOT_TO_BE_WON = 100;

while ($jackpotCounter < $JACKPOT_TO_BE_WON) {
    $jackpotCounter++;

    $winningStatus = false;

    while ($winningStatus === false) {
        $roundPlayed++;

        $chosenNumbers = [];

        $counter = 0;

        while ($counter < 5) {
            $chosenNumbers[$counter] = floor(rand() * $RANDOMIZE_RANGE);
            $counter++;
        }

        echo "The value of the counter after the creation loop: ', $counter";

        $oneCounter = 0;
        $zeroCounter = 0;

        $counter = 0;

        while ($counter < 5) {
            echo `Checking if element at index ${counter} is 1 or 0`;

            if ($chosenNumbers[$counter] === 1) {
                echo 'It is 1';
                $oneCounter++;
            } else if ($chosenNumbers[$counter] === 0) {
                echo 'It is 0';
                $zeroCounter++;
            }

            $counter++;
        }

        echo `Found ${oneCounter} ones and ${zeroCounter} zeroes`;

        if ($oneCounter === 5) {
            $winningStatus = true;
            echo 'Jackpot!';

        } elseif ($zeroCounter === 5) {
            $winningStatus = false;
            echo 'You got five 0s which is as unlikely as to have five 1s but sorry, no prize this time.';

        } elseif ($oneCounter === 4) {
            $winningStatus = false;
            echo 'Congrats, you got four 1s and win a smaller prize!';
        }
    }
}
echo `${roundPlayed} rounds have been played until ${JACKPOT_TO_BE_WON} jackpots are won`;
echo`${$roundPlayed * $COST_OF_ONE_ROUND} EUR was spent to win that ${JACKPOT_TO_BE_WON} jackpots`;
echo`${$roundPlayed * $COST_OF_ONE_ROUND / $JACKPOT_TO_BE_WON} EUR was spent on average to win a single jackpot`;
?>
</body>
</html>