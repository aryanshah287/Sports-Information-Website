<?php

$server="localhost";
$user="root";
$pw="";
$dbname="a3_DB";
$conn=mysqli_connect($server,$user,$pw,$dbname);
if(!$conn)
echo "could not connect";
else{

	$sql1="CREATE TABLE Login_Details(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        fname VARCHAR(20) NOT NULL, 
        email VARCHAR(20) NOT NULL,
        password VARCHAR(20))";
    if (mysqli_query($conn,$sql1))
		echo "TABLE created successfully";
	else 
		echo "TABLE not created successfully";
/*
		$sql1="INSERT INTO Login_Details(fname,email,password) VALUES('A1','R1','ag1@gmail.com');";     //INSERTION INTO TABLE
		/*$sql1 .="INSERT INTO Login_Details(fname,email,password) VALUES('A2','R2','ag2@gmail.com');";
		$sql1 .="INSERT INTO Login_Details(fname,email,password) VALUES('A3','R3','ag3@gmail.com')";


		 if (mysqli_multi_query($conn,$sql1))
		echo "Value inserted successfully";

	else 
		echo "Value not inserted successfully";



		/*$sql1="SELECT id,fname,lname,email FROM a3Cust ORDER BY email";

		$res=mysqli_query($conn,$sql1);
		if (mysqli_num_rows($res)>0){
			while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
				echo "id:".$row[0]."FIRST NAME:".$row[1]."LAST NAME:".$row[2]."EMAIL:".$row[3]."<br>";
			}
		}
		else
			echo "no records to display";*/

			/*$sql3="delete from a3cust WHERE id=1"; /*DELETION
			if (mysqli_multi_query($conn,$sql3))
		echo "Value deleted successfully";

	else 
		echo "Value not deleted successfully";

	$sql3="UPDATE a3cust SET fname='An' WHERE id=5";
			if (mysqli_multi_query($conn,$sql3))
		echo "Value UPDATED successfully";

	else 
		echo "Value not UPDATED successfully";*/

	


		




}
mysqli_close($conn);
?>