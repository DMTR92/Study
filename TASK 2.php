<?php
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
echo count($arr);
//Переместить первые 4 элемента массива в конец массива
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
$firstElements = array_splice($arr, 0, 4);
$arr = array_merge($arr, $firstElements);
var_dump($arr);
//Получить сумму 4-го, 5-го и 6-го элемента
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
echo $arr[3] + $arr[4] + $arr[5];
//Найти все элементы, которые отсутствуют в первом массиве и присутствуют во втором
$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'foure' => 5,
    'five' => 12,
];
$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'foure' => 5,
    'five' => 13,
    'six' => 37,
];
$missingElements1 = array_diff_key($secondArr, $firstArr);
$missingElements2 = array_diff_key($firstArr, $secondArr);
$commonElements = array_intersect_assoc($firstArr, $secondArr);
$diffValues = array_diff_assoc($firstArr, $secondArr);
  //Второй массив
    $firstArr = [
        'one' => 1,
        'two' => [
            'one' => 1,
            'seven' => 22,
            'three' => 32,
        ],
        'three' => [
            'one' => 1,
            'two' => 2,
        ],
        'foure' => 5,
        'five' => [
            'three' => 32,
            'foure' => 5,
            'five' => 12,
        ],
    ];
//Получить все вторые элементы вложенных массивов:
$secondElements = [];
foreach ($firstArr as $key => $value) {
    if (is_array($value)) {
        $secondElements[$key] = $value[array_keys($value)[1]];
    }
}
$allElementsCount = count($firstArr, COUNT_RECURSIVE);
function arraySumRecursive($array) {
    $sum = 0;
    foreach ($array as $value) {
        if (is_array($value)) {
            $sum += arraySumRecursive($value);
        } else {
            $sum += $value;
        }
    }
    return $sum;
}
?>