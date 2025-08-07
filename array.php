<?php
$array = [
    [
    'id' => 1,
    'name' => 'Product1',
    'price' => 3.99,
    'sort' => 100,
    'quantity' => 2000,
    ],
    [
        'id' => 2,
        'name' => 'Product2',
        'price' => 3.99,
        'sort' => 13,
        'quantity' => 4,
    ],
    [
        'id' => 3,
        'name' => 'Product3',
        'price' => 3.99,
        'sort' => 15,
        'quantity' => 5,
    ],
];
//добавление нового элемента массива
$array[] = [
    'id' => 8,
    'name' => 'Product9',
    'price' => 3.99,
    'sort' => 100,
    'quantity' => 2000,
];
//добавление нового элемента массива
$array[] = [
    'id' => 10,
    'name' => 'Product10',
    'price' => 1,
    'sort' => 1,
    'quantity' => 2,
];

//добавление нового элемента массива через функцию
function newProduct(&$array, $id, $name, $price, $sort = 100, $quantity = 0) {
    $array[] = [
        'id' => $id,
        'name' => $name,
        'price' => $price,
        'sort' => $sort,
        'quantity' => $quantity
    ];
}

newProduct($array, 15, 'Новый', 100, 10, 5000 );
newProduct($array, 16, 'Новый2 ', 90);

print_r($array);
