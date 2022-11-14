<?php
//  EECS 448 Lab 6
//  file: timestable.php
//  author: Jack Reynolds
//  written: 13 November 2022
//    
//  Builds multiplication table using a for-loop and the function product().

echo "<link href='style.css' rel='stylesheet' type='text/css'/>";
function product($x, $y){
	$z = $x * $y;
	return $z;
}

echo "<table>";
for($i = 0; $i <= 100; $i++){
	echo "<tr>";
	// the first row needs to be the values from 1 to 100,
	// since these are the headers for this part of the table.
	// we fill the corner box with an arbitrary entry * to keep the columns in alignment.
	if($i == 0){
		echo "<th>*</th>";
		for($j = 1; $j <= 100; $j++){
			echo "<th>" . $j . "</th>";
		}
	}
	// for the rest of these,
	// we create the headers for the side values,
	// and then we multiply the index of the row by the index of the column.
	if($i > 0){
		echo "<th>" . $i . " </th>";
		for($j = 1; $j <= 100; $j++){
			echo "<td>" . product($i,$j) . "</td>";
		}
	}
	echo "</tr>";
}
echo "</table>";
?>
