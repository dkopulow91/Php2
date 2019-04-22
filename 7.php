<?php
$h = date('H');
$m = date('i');

if($h == 1 or $h == 21) {
    $hours = 'час';
} elseif (($h >= 2 and $h <= 4) or ($h >= 22 and $h <= 24)){
    $hours = 'часа';
} else {
    $hours = 'часов';
}

if(($m < 20) or ($m > 10)){
    $minutes = 'минут';
} elseif (($m % 10) === 1) {
    $minutes = 'минутa';
} elseif ((($m % 10) >= 2) and (($m % 10) <= 4)) {
    $minutes = 'минуты';
} else {
    $minutes = 'минут';
}

echo $h . $hours . ' ' . $m . $minutes;

?>