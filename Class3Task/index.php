<?php

//Task 1

	echo "<h1> Make two functions that sum and subtract two numbers and print it. </h1>";
	$a=20;
	$b=10;
	function Add($x,$y){
		echo "<h3>Summation is : ".($x+$y)."</h3>";
	}
	function Sub($x,$y){
		echo "<h3>Subtraction is : ".($x-$y)."</h3>";
	}
	Add($a,$b);
	Sub($a,$b);

//Task 2

	echo "<h1> Take a number and print it reversely till 0. </h1>";
	$num=10;
	while($num>=0){
		echo "<h3>".$num."</h3>";
		$num--;
	}

//Task 3

	echo "<h1> Find even numbers between 1 to 20. </h1>";
	for($i=1; $i<=20; $i++){
		if($i%2==0){
			echo "<h3>".$i."</h3>";
		}
	}

////Task 4

	echo "<h1> Multiplication Table of 22 and 40 </h1>";
	$count=1;
	echo"<h2>Table of 22</h2> ";
	for($i=22;$i<=220;$i+=22){
		echo "<h3>22 * ".$count++." = ".$i."</h3>";
	}
	$count=1;
	echo"<h2>Table of 40</h2> ";
	for($i=40;$i<=400;$i+=40){
		echo "<h3>40 * ".$count++." = ".$i."</h3>";
	}

?>