<?php

	$server_name="localhost";
	$username="root";
	$password="";
	$database_name="test1";

	

	$conn =mysqli_connect($server_name,$username,$password,$database_name)
	;

	if(!$conn)
	{
		die("Connection Failed : ". mysqli_connect_error());
	} 

	if(isset($_POST['submit']))
	{
		$sname = $_POST['sname'];
		$u_id = $_POST['u_id'];
		$semail = $_POST['semail'];
		$sphone = $_POST['sphone'];
		$aphone = $_POST['aphone'];
		$book_id = $_POST['book_id'];
		$book_name = $_POST['book_name'];
		$date = $_POST['date'];
		$fine = $_POST['fine'];

		$sql_query = "INSERT INTO entry_details(sname,u_id,semail,sphone,aphone,book_id,book_name,date,fine)
		VALUES('$sname','$u_id','$semail','$sphone','$aphone','$book_id','$book_name','$date','$fine')";

		if (mysqli_query($conn,$sql_query))
		{
			echo "New Details Entry inserted successfully!";
		}
		else
		{
			echo "Error: " . $sql . "" . mysqli_error($conn);
		}
		
		mysqli_close($conn);

	}

	if(isset($_POST['delete']))
	{
		$sname = $_POST['sname'];
		$u_id = $_POST['u_id'];
		$semail = $_POST['semail'];
		$sphone = $_POST['sphone'];
		$aphone = $_POST['aphone'];
		$book_id = $_POST['book_id'];
		$book_name = $_POST['book_name'];
		$date = $_POST['date'];
		$fine = $_POST['fine'];

		$sql_query = "DELETE FROM entry_details WHERE sname = sname && u_id = u_id ";

		if (mysqli_query($conn,$sql_query))
		{
			echo "Data Deleted successfully!";
		}
		else
		{
			echo "Error: " . $sql . "" . mysqli_error($conn);
		}
		
		mysqli_close($conn);

	}
?>