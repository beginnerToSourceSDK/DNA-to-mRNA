<?php	
function translate($string){
	$string = str_replace("a","U",$string);
	$string = str_replace("t","A",$string);
	$string = str_replace("c","G",$string);
	$string = str_replace("g","C",$string);
	echo ("mRNA sequence: $string");
}

$string = $_POST["text"];

$string2 = translate($string);

?>
