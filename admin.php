<?php

	$server_name="localhost";
	$username="root";
	$password="";
	$database_name="test1";

	

	$conn =mysqli_connect($server_name,$username,$password,$database_name);

	if(!$conn)
	{
		die("Connection Failed : ". mysqli_connect_error());
	} 

    if(isset($_POST['submit']))
	{  
        $username = $_POST['username'];
        $password = $_POST['password']; 
        
         
        $sql = "Select * from users where username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        
        if ($num == 1){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header("location: library.html");
    
        } 
        else{
            $showError = "Invalid Credentials";
        }
    }
	

?>