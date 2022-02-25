<?php declare(strict_types=1);
	function add(int $a,float $b):int
	{
		//$a=4;
		//$b=5;
		$res=$a+$b;
		//echo "Sum = ".$res;
		return (int)($res);
	}
	//add(4); //passes 4 as $a and takes default val b=6
	//add(4,8.2);
	$r1=add(4,8.5);
	//echo "Sum = ".$r."<br>";
	echo "Sum = ".$r1;
	/*
	function byref(&$i)
	{
		$i=$i+10;
	}
	function byval($i)
	{
		$i=$i+10;
	}
	$i=20; $j=10;
	byref($i);
	byval($j);
	echo "i= ".$i."<br>";
	echo "j= ".$j;
	*/

?>
