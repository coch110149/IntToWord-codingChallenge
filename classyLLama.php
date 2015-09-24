<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php 
		
		function intToWord($base)
		{
			$array = array(0=>"", 1 => 'one', 2 => "two", 3=> "three", 4 =>"four", 5 => "five", 6 => "six", 7 =>"seven", 8 => "eight", 9 => "nine", 10 => "ten",
					 11=> "eleven", 12 => "twelve", 13 => "thirteen", 14 => "fourteen", 15 => "fifteen", 16 => "sixteen", 17 => "seventeen", 18 => "eighteen",
					 19 => "nineteen", 20 => "twenty", 30 => "thirty", 40 => "fourty", 50 => "fifty", 60 => "sixty", 70 => "seventy", 80 => "eighty", 90=>"ninety");
			$str= "";
			
			if ($base > 999) //for numbers between 1000-9999
			{
				$str.= $array[$base/1000]." thousand ".$array[$base/100 %10]." hundred "; //concatinates the first two digits of a four digit number to $str
				if ($base %100 > 20){ 
					$str.= $array[$base%100 - $base%10]. "-". $array[$base%10]; //concatinates what is in $str to the tens digit word and the ones digit word
				}else{
					$str.= $array[$base%100]; //this means that the number is directly in the $array so just concatinate it
				}	
			}
				
			elseif ($base > 99)
			{
					$str.= $array[$base/100 %10]." hundred "; //concatinates the first digit of a three digit number to $str
				if ($base %100 > 20){
					$str.= $array[$base%100 - $base%10]. "-". $array[$base%10];
				}else{
					$str.= $array[$base%100];
				}
			}
				
			elseif ($base > 20)
			{
					$str.= $array[$base%100 - $base%10]. "-". $array[$base%10];
			}	
			else
				$str.= $array[$base%100];
			return $str;
		}
		
	echo intToWord(666);
?>

</body>
</html>