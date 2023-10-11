<html>
<head>
<body>

<?php

function printArr($arr) {
    foreach ($arr as $key=>$value) {  #2
        print "$key:  $value\n";
    }
    print "\n";
}

print "Создайте ассоциативный массив cust, выведите этот массив.\n";
$cust = array(  #1
    'cnum' => 2001,
    'cname' => "Hoffman",
    'city' => "London",
    'snum' => 1001,
    'rating' => 100
);  #1
printArr($cust);

print "Отсортируйте этот массив по значениям. Выведите результат на экран.\n";
asort($cust);
printArr($cust);

print "Отсортируйте этот массив по ключам. Выведите результат на экран.\n";
ksort($cust);
printArr($cust);

print "Выполните сортировку массива с помощью функции sort(). Выведите результат на экран.\n";
sort($cust);
printArr($cust);
?>

</body>
</html>