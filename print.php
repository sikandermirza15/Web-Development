	<?php

	echo "hello world!";

	$a=20;
	echo "<br />";
	var_dump($a);
	$firstname="sikander";
	$second_name="sahil";
	echo $firstname. "&nbsp;&nbsp;&nbsp;&nbsp;" .$second_name;
	echo "<br />";
	var_dump($second_name);
	echo "<br />";

	$firstnumber=11;
	$secondnumber=11;

	if($firstnumber > $secondnumber){
	echo "firstnumber is greater";
	}else if($firstnumber == $secondnumber){	
	echo "number are equal";
	}else{
	echo "second number is greater";
	}


	$a1=array(80,70,60,50);

	$length = count($a1);        //For counting the length of array
	for($i=0; $i<$length; $i++){
	if($a1[$i] > 80){
	echo $a1[$i] . "markes grade of A <br />"; 
	} else if ($a1[$i] > 70){
	echo $a1[$i] . "  markes grade of B <br />"; 
	} else if ($a1[$i] > 60){
	echo $a1[$i] . "  markes grade of C <br />"; 
	} else if ($a1[$i] > 50){
	echo $a1[$i] . "  markes grade of D <br />"; 
	} else {
	echo $a1[$i] . "  markes grade of F <br />"; 
	}
	}





	$cars = array("nissan", "BMW", "Toyota","honda");

	echo $length = count($cars) ;



	for($x = 0; $x<$length; $x++)
	{
	echo "</br>";
	echo $cars[$x];
	echo "<br>";
	}


	$cars = array("nissan", "BMW", "Toyota","honda");

	foreach($cars as $value){

	echo " $value <br>";
	}


// while loop

	$cars = array("nissan", "BMW", "Toyota","honda");

	$length=count($cars);
	$i=0;
	while($cars < $length){

	echo " $cars[$i] <br>";
	}


// devision through function


function div($a = NULL, $b = NULL){

	return $a/$b;
}

$div = div(20, 2);

var_dump($div);


//subtrection through function

function minus($a = NULL, $b = NULL){

	return $a-$b;
}

$minus = minus(20,3);
var_dump($minus);


// factorial of nuber through function

function factorial($number) { 

    if ($number < 2) { 
        return 1; 
    } else { 
        return ($number * factorial($number-1)); 
    } 
   

}
echo factorial(4);


// fabonacci through function

 /*function fibonacciSequence($pos){
 $fibarray = array(0, 1);
 for ( $i=2; $i<=$pos; ++$i ) {
  $fibarray[$i] = $fibarray[$i-1] + $fibarray[$i-2];
 }
 return $fibarray;
}
echo fibonacciSequence();*/