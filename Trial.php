<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
<?php
	/*
	echo "<h3>Hello</h3>";
	$a=4;
	$b=3.4;
	$c="WEB Programming";
	$sum=$a+$b;
	$diff=$a-$b;
	echo "Sum =".$sum."<br>Diffrence =".$diff;
	print "<br>Sum= ".$sum;
	define("pi", 3.14);
	//define("pi", "hello");
	echo "<br>".pi."<br>";
	var_dump($b);
	echo "<br>";
	var_dump($c);
	echo "<br>";
	echo strlen($c);
	echo "<br>";
	echo strrev($c);
	echo "<br>";
	echo str_word_count($c);
	echo "<br>";
	echo strpos($c,"Programming");
	echo "<br>";
	echo str_replace("Programming", "Design", $c);
	echo "<br>";
	var_dump(is_int($a));
	$x=(int)($b);
	echo "<br>".$x;
	echo "<br>";
	echo date("d/m/Y");
	echo "<br>";
	echo date("d");
	echo "<br>";

	$today=date("M");
	if ($today=="Oct")
		echo "Month is right";
	else
		echo "Nope";
	$today=date("D");
	echo "<br>";
	switch ($today)
	{
		case 'Mon':
			echo "Its Monday";
			break;
		case 'Tue':
			echo "Its Tuesday";
			break;
		case 'Wed':
			echo "Its Wednesday";
			break;
		case 'Fri':
			echo "Its Friday";
			break;
		case 'Sat':
			echo "Its Saturday";
			break;
		case 'Sun':
			echo "Its Sunday";
			break;
		default:
			echo "Unknown";
			break;
	}
	$n=10; $count=0;
	while ($count<$n) 
	{
		echo $count;
		$count++;
	}
	echo "<br>";
	for ($i=0; $i<10 ; $i++)
	{ 
		if (($i%2)==0)
		continue;
		else
		echo $i;
	}
	*/
	$arr=array(2,3,5,7,11,13);
	$arr1=array("Html","CSS","PHP");
	sort($arr1);
	//rsort($arr1);
	for ($i=0; $i<count($arr1); $i++)
	{
		echo $arr1[$i]." ";
	}
	$stu_arr=array(array("aa",34,89),array("bb",76,77));
	for ($i=0; $i<2; $i++)
	{
		echo "<ul>";
		for($j=0;$j<3;$j++)
		{
			echo "<li>".$stu_arr[$i][$j]."</li>";
		}
		echo "</ul>";
	}

?>
</body>
</html>