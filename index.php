<?php
$words1 = [
    "Apple" => "Яблоко",
    "Peach" => "Персик",
    "Pear" => "Груша",
    "Lemon" => "Лимон",
    "Strawberry" => "Клубника",
    "Pineapple" => "Ананас"
];
$words2 = [
    "Melon" => "Дыня",
    "Pineapple" => "Ананасик",
    "Blueberry" => "Голубика",
    "Cherry" => "Вишня",
    "Apple" => "Яблочко"
];
print_r(array_merge_recursive($words1, $words2));