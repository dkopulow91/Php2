<?php

function mathOperation($arg1,$arg2,$operation){
    switch ($operation) {
        case 'addition':
            echo $arg1 + $arg2;
            break;
        case 'subtraction':
            echo $arg1 - $arg2;
            break;
        case 'multiplication':
            echo $arg1 * $arg2;
            break;
        case 'division':
            echo $arg1 / $arg2;
            break;
    }
}

$mathOperation = mathOperation(3,4,'multiplication');
echo $mathOperation;
?>