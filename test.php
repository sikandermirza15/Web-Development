<?php
function sahilF()
{

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
}
sahilF();
// while loop
$a=40;
while ($a < 50 )

{
	echo "<p>$a</p>";
	$a++;
}
#poha shwi alkach


function factorial($number) { 

    if ($number < 2) { 
        return 1; 
    } else { 
        return ($number * factorial($number-1)); 
    } 
   

}
echo factorial(4);


// use recursive function to multiple numbers factorial


function factorial($n)
{
    if ($n == 0) {
        return 1;
    }
     else{   
    return $n * factorial($n - 1);}


for ($n = 0; $n <= 16; $n++) {
	
    echo $n . "! = " . factorial($n) . "\n";
