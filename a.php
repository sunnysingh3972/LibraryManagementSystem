<?php
    $username= $_POST['username'];
    $password= $_POST['password'];

    $con=new mysqli("localhost","root","","test1");
    if($con->connect_error) {
        die("Failed to connect : ".$con->connect_error);
    }else {
        $stmt = $con->prepare("select * from user where username =?");
        $stmt->bind_param("s",$username);
        $stmt->execute();
        $stmt_result=$stmt->get_result();
        if($stmt_result->num_rows >0){
            $data = $stmt_result->fetch_assoc();
            if($data['password']=== $password){
                echo "<h2>Login successful </h2>";
                header("location: library.html");
            }else{
                echo"<h2>Invalid username or password</h2>";
            }    
        }
    }

?>    