<!DOCTYPE html>
<html>
<head>

	<script>
		function change(x)
	{
		if(x==1)
		{
		location.replace("redirect.html");
		}
		else if (x==2) 
		{
		location.replace("home.html");
		}
	}
	</script>
</head>
<body>

</body>
</html>
<?php

$server="localhost";
$user="root";
$pw="";
$dbname="a3_DB";
$fname=$_POST["fname"];
$email=$_POST["email"];
$password=$_POST["password"];


$conn=mysqli_connect($server,$user,$pw,$dbname);
if(!$conn)
echo "could not connect";
else{
$sql1="SELECT * FROM Login_details Where fname='$fname'";

		$res=mysqli_query($conn,$sql1);

		if (mysqli_num_rows($res)>0){
			$var ='two';
			echo "record valid";
			}

		
		else{
			$sql="INSERT INTO Login_details(fname,email,password) VALUES('$fname','$email','$password')";
if (mysqli_multi_query($conn,$sql)){

		$var='one';
		//echo "Value RECORD inserted successfully";
}
	else 
		echo "Value RECORD not inserted successfully";
		}
		


	}

	mysqli_close($conn);
?>
<script>
	var a='<?php echo $var?>';
	if (a=='one') 
	{
		change(1);
	}
	else if(a=='two')
	{
		change(2);
	}

</script>