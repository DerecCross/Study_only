<?php
$array = [
    [
    'id' => 5,
    'name' => 'Product1',
    'price' => 3.99,
    'sort' => 100,
    'quantity' => 2000,
    ],
    [
        'id' => 8,
        'name' => 'Product2',
        'price' => 3.99,
        'sort' => 13,
        'quantity' => 4,
    ],
    [
        'id' => 10,
        'name' => 'Product3',
        'price' => 3.99,
        'sort' => 15,
        'quantity' => 5,
    ],
];
//добавление нового элемента массива
$array[] = [
    'id' => 13,
    'name' => 'Product9',
    'price' => 3.99,
    'sort' => 100,
    'quantity' => 2000,
];
//добавление нового элемента массива
$array[] = [
    'id' => 20,
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

newProduct($array, 25, 'Новый', 100, 10, 5000 );
newProduct($array, 26, 'Новый2 ', 90);

$index = array_column($array, "name");
$result = array_key_exists('id', $array);



//Создайте массив из 5 элементов и выведите на экран второй элемент.
$arr = [1, 2, 3, 4, 5];
echo "Задание 1. <br>";
print_r($arr[1]);
echo "<br>";

/*Создайте массив чисел от 1 до 10, найдите сумму элементов
массива и выведите на экран, используя функцию array_sum*/

$arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo "Задание 2 <br>";
print_r(array_sum($arr1));
echo "<br>";

/*Создайте массив строк, отсортируйте его в алфавитном порядке и
выведите на экран.
*/
$arr2 = ['Виктор', 'Алена', 'Дмитрий', 'Александр'];
echo "Задание 3 <br>";
if (asort($arr2)) {
    print_r($arr2);
    echo "<br>";
} else {
    echo "Ошибка сортировки";
}
echo "<br>";


/*4.Создайте двумерный массив и выведите на экран элемент,
расположенный во втором ряду и третьем столбце.*/
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
echo "Задание 4 <br>";
echo $matrix[1][2] . PHP_EOL;
echo "<br>";

/*5. Создайте ассоциативный массив, где ключами будут названия
фруктов, а значениями - их цена в рублях за килограмм. Выведите
на экран цену апельсинов.*/
$fruits = [
    'яблоко' => 85,
    'апельсин' => 120,
    'банан' => 70
];
echo "Задание 5 <br>";
echo $fruits['апельсин'];
echo "<br>";

/*6. Найти значение по ключу. Напишите функцию, которая принимает
ассоциативный массив и ключ, и возвращает значение, связанное с
этим ключом, если ключ существует, и null в противном случае.*/
function getValueByKey($array, $key) {
    return $array[$key] ?? null;
}
echo "Задание 6 <br>";
echo getValueByKey($fruits, 'банан');
echo getValueByKey($fruits, 'груша');
echo "<br>";

/*7. Поиск наибольшего значения. Напишите функцию, которая
принимает ассоциативный массив и возвращает наибольшее
значение из всех значений в массиве.*/
function getMaxValue($array) {
    return max($array);
}
echo "Задание 7 <br>";
echo getMaxValue($fruits);
echo "<br>";

/*8. Сортировка по значениям. Напишите функцию, которая принимает
ассоциативный массив и сортирует его по значениям.*/
function sortByValues($array) {
    asort($array);
    return $array;
}

print_r(sortByValues($fruits));
echo "<br>";

/*9. У вас есть массив чисел. Напишите функцию, которая принимает
этот массив и колбек функцию в качестве аргументов. Функция
должна применить колбек к каждому элементу массива и вернуть
новый массив, содержащий результаты применения колбека к
каждому элементу.*/
function arrayMap($array, $callback) {
    return array_map($callback, $array);
}

$numbers = [1, 2, 3];
$squared = arrayMap($numbers, function($n) { return $n * $n; });
print_r($squared);

/*10. Создание строк. Создайте переменную $string и присвойте ей
значение "Привет, мир!".*/
$string = "Привет, мир!";

/*11. Сцепление строк. Создайте переменные $str1 и $str2 и склейте
их вместе с помощью оператора ".".*/
$str1 = "Привет";
$str2 = "мир";
$result = $str1 . ", " . $str2 . "!";
echo $result;

/*12. Извлечение символов из строк. Извлеките символы "w" и "o" из
строки "Hello World!".*/
$str = "Hello World!";
$w = $str[6];
$o = $str[4];
echo "$w $o";

/*13. Поиск подстроки. Проверьте, содержит ли строка "Hello World!"
подстроку "World".*/
$str = "Hello World!";
if (strpos($str, "World") !== false) {
    echo "Найдено";
}

/*14. Замена подстроки. Замените все вхождения подстроки "world"
на "everyone" в строке "Hello world!".*/
$str = "Hello world!";
$newStr = str_replace("world", "everyone", $str);
echo $newStr;

/*15. Обработка HTML-тегов. Удалите все HTML-теги из строки
"<p>Hello, <b>world</b>!</p>".*/
$html = "<p>Hello, <b>world</b>!</p>";
$clean = strip_tags($html);
echo $clean;

/*16. Преобразование регистра. Преобразуйте строку "HeLLo,
WorLd!" к нижнему регистру.*/
$str = "HeLLo, WorLd!";
$lower = mb_strtolower($str);
echo $lower;

/*17. Разбиение строки на подстроки. Разбейте строку
"apple,orange,banana" на массив из трех элементов.*/
$fruits = "apple,orange,banana";
$array = explode(",", $fruits);
print_r($array);