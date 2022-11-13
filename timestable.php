<?php
function product($x, $y){
	$z = $x * $y;
	return $z;
}
echo "<table>";
for($i = 0; $i <= 100; $i++){
	echo "<tr>";
	if($i == 0){
		echo "<td>*</td>";
		for($j = 1; $j < 100; $j++){
			echo "<td>" . $j . "</td>";
		}
	}
	if($i > 0){
		echo "<td>" . $i . " </td>";
		for($j = 1; $j <= 100; $j++){
			echo "<td>" . product($i,$j) . "</td>";
		}
	}
	echo "</tr>";
}
echo "</table>";
?>
