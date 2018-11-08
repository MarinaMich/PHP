<?php
//1. С помощью цикла while вывести все числа от 0 до 100, которые делятся на 3 без остатка.
//  3 6 9 12 15 18 21 24 27 30 33 36 39 42 45 48 51 54 57 60 63 66 69 72 75 78 81 84 87 90 93 96 99
$a = 0;
while ($a++ <= 100){
	if($a% 3 !== 0){
		continue;
	}
	echo $a . ' '; 
}
echo PHP_EOL;

//тоже самое с циклом for
/*$n = 100;
for ($i = 1; $i <= $n; $i++){
	if ($i % 3 !== 0){
		continue;
	}
	echo $i . ' ';
}*/

echo ' <br> ';
echo ' <br> ';
//2. С помощью цикла do…while написать функцию

function even_odd($variant){
	do{
		if ($variant === 0){
			echo $variant . '- это ноль <br>';
			$variant++;
		} else if ($variant%2 === 0){
			echo $variant . '- четное число<br>';
			$variant++;
		} else {
			echo $variant . '- нечетное число <br>';
			$variant++;
		}
	} while ($variant <= 10);
}
echo even_odd(0);

echo ' <br> ';

//7. Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла.
for($i = 0; $i<9; print($i++)){} //print -- Выводит строку
echo $i;
?>