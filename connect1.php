<?php
$servername="localhost";
$username="root";
$password="";
$database_name="test";
$conn=mysqli_connect($servername,$username,$password,$database_name);

//$result = mysqli_query($conn,$query);


if(!$conn)
{
	die("Connection Failed:" .mysqli_connect_error());

}
if(isset($_POST['Stop']))
{
	$sql_query = "INSERT INTO buttons (button_name)
	VALUES ('S')";

	if(mysqli_query($conn , $sql_query))
	{
		$query = "SELECT * FROM buttons ORDER BY ID DESC LIMIT 1";
		$result = mysqli_query($conn,$query);

		while($rows = mysqli_fetch_assoc($result)){

     echo $rows['button_name'];


		}

	echo"<br>";
	echo "  New Data Entry inserted to Engines table successfully..!";

	}
	else
	{
		echo"Error: " .$sql . "" . mysqli_error($conn);
	}



	mysqli_close($conn);



}

if(!$conn)
{
	die("Connection Failed:" .mysqli_connect_error());

}


if(isset($_POST['Forword']))
{
	$sql_query = "INSERT INTO buttons (button_name)
	VALUES ('F')";

	if(mysqli_query($conn , $sql_query))
	{

		$query = "SELECT * FROM buttons ORDER BY ID DESC LIMIT 1";
		$result = mysqli_query($conn,$query);
		while($rows = mysqli_fetch_assoc($result)){

     echo $rows['button_name'];


		}

	echo"<br>";
	echo "  New Data Entry inserted to Engines table successfully..!";

	}
	else
	{
		echo"Error: " .$sql . "" . mysqli_error($conn);
	}



	mysqli_close($conn);



}


if(isset($_POST['Backword']))
{
	$sql_query = "INSERT INTO buttons (button_name)
	VALUES ('B')";

	if(mysqli_query($conn , $sql_query))
	{
		$query = "SELECT * FROM buttons ORDER BY ID DESC LIMIT 1";
		$result = mysqli_query($conn,$query);

		while($rows = mysqli_fetch_assoc($result)){

     echo $rows['button_name'];


		}

	echo"<br>";
	echo "  New Data Entry inserted to Engines table successfully..!";

	}
	else
	{
		echo"Error: " .$sql . "" . mysqli_error($conn);
	}



	mysqli_close($conn);



}


if(isset($_POST['Left']))
{
	$sql_query = "INSERT INTO buttons (button_name)
	VALUES ('L')";

	if(mysqli_query($conn , $sql_query))
	{	$query = "SELECT * FROM buttons ORDER BY ID DESC LIMIT 1";
		$result = mysqli_query($conn,$query);


		while($rows = mysqli_fetch_assoc($result)){

     echo $rows['button_name'];


		}

	echo"<br>";
	echo "  New Data Entry inserted to Engines table successfully..!";

	}
	else
	{
		echo"Error: " .$sql . "" . mysqli_error($conn);
	}



	mysqli_close($conn);



}


if(isset($_POST['Right']))
{
	$sql_query = "INSERT INTO buttons (button_name)
	VALUES ('R')";

	if(mysqli_query($conn , $sql_query))
	{
		$query = "SELECT * FROM buttons ORDER BY ID DESC LIMIT 1";
		$result = mysqli_query($conn,$query);

		while($rows = mysqli_fetch_assoc($result)){

     echo $rows['button_name'];


		}

	echo"<br>";
	echo "  New Data Entry inserted to Engines table successfully..!";

	}
	else
	{
		echo"Error: " .$sql . "" . mysqli_error($conn);
	}



	mysqli_close($conn);



}

?>
