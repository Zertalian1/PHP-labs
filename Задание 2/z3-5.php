<html>
<head>
</head>
<body>

<?php

function printArr($arr) {
    foreach ($arr as $val) {
        print "$val  ";
    }
    print "\n";
}

print "Создайте массив treug \"треугольных\" чисел.\n";
$treug = array();
for ($i = 1; $i <= 10; $i++) {
    $treug[] = $i * ($i + 1) / 2;
}
printArr($treug);

print "Создайте массив kvd квадратов натуральных чисел от 1 до 10.\n";
$kvd = array();
for ($i = 1; $i <= 10; $i++) {
    $kvd[] = $i * $i;
}
printArr($kvd);

print "Объедините эти 2 массива в массив rez, выведите результат на экран.\n";
$rez = array_merge($treug, $kvd);
printArr($rez);

print "Отсортируйте массив rez, выведите результат на экран.\n";
sort($rez);
printArr($rez);

print "Удалите в массиве rez первый элемент, выведите результат на экран.\n";
array_shift($rez);
printArr($rez);

print "С помощью функции array_unique() удалите из массива rez повторяющиеся элементы.\n";
$rez = array_unique($rez);
printArr($rez);
?>
</body>
</html>