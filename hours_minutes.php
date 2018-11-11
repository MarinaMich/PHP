<!-- 7 -->
<?php
$h = date( "H" );
	if ($h==1 || $h==21) {
		$hours = " час";
	} else if (($h>=2 && $h<=4) || ($h>=22 && $h<=24)) {
		$hours = " часа";
	} else {$hours = " часов";
	}
$m = date('i');	
	if (($m<20) || ($m>10)) {
		$minutes = " минут.";
	} else if (($m % 10) === 1) {
		$minutes = " минута.";
	} else if ((($m % 10)>=2) && (($m % 10)<=4)) {
		$minutes = " минуты.";
	} else {
		$minutes = " минут.";
	}
echo $h . $hours . " " . $m . $minutes;
?>