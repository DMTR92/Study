<?php
function findElementByIndex($array, $index) {
$result = [];
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $result = array_merge($result, findElementByIndex($value, $index));
        } elseif ($key == $index) {
            $result[] = $value;
        }
    }
    return $result;
}
function countLetterB($input) {
    if (!is_string($input)) {
        return false;
    }
    return substr_count($input, 'b');
}
function sumOfArray($array) {
    $sum = 0;
    foreach ($array as $value) {
        if (is_array($value)) {
            $sum += sumOfArray($value);
        } elseif (is_numeric($value)) {
            $sum += $value;
        }
    }
    return $sum;
}
function countSquaresInSquare($bigSize, $smallSize) {
    if ($smallSize <= 0 || $bigSize <= 0) {
        return false;
    }
    return ($bigSize / $smallSize) ** 2;
}
?>




