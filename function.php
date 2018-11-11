<!-- 3 -->
<?php
function sum($c,$y)
{
	return($c + $y);
}
function difference($c,$y)
{
	return($c - $y);
}
function multiply($c,$y)
{
	return($c * $y);
}
function division($c,$y)
{
	if ($y!=0){
	return($c / $y);
	} else {
		echo 'Делить на ноль нельзя!';
	}
}

$sum = sum(4,35);
echo $sum;
echo PHP_EOL;
$dif = difference(120,57);
echo $dif;
echo PHP_EOL;
$multi = multiply(2,4);
echo $multi;
echo PHP_EOL;
$div = division(10,2);
echo $div;
echo PHP_EOL;


// <!-- 4 -->
function mathOperation($c, $y, $operation)
{
	switch ($operation) {
		case 'summa':
			return sum($c,$y);
			break;
		case 'differ':
			return difference($c,$y);
			break;	
		case 'multiply':
			return multiply($c,$y);
			break;
		case 'div':
			return division($c,$y);
			break;	
	}
}
$rezult = mathOperation(16, 4, 'div');
echo $rezult;
echo PHP_EOL;
?>
