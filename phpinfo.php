<?php 
$a = 91234567890;
$result = change($a);
print_r($result);
function change($a){
	$a = intval($a);
	$len = strlen($a);
	$num =$len % 3;/*剩下的几位*/
	
	$state = substr($a, 0, $num);/*剩下的数*/
	
	$n= $len-$num;
	
	$end = substr($a,$num,$len-$num);
	
	$result = $state;
	
	while($i < strlen($end)){ 
		$result = $result.','.substr($end, $i, 3);
		$i = $i + 3; 
	}
	
	return trim($result,',');
}
?>