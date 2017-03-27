<?php
    $con = mysqli_connect("localhost", "id1179200_olas", "olaspassword", "id1179200_olas_user");
    
    $username = $_POST["username"];
	$email = $_POST["email"];
	$number = $_POST["number"];
    $password = $_POST["password"];

    $statement = mysqli_prepare($con, "INSERT INTO user_details (name,mail,number,pass) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "ssss",$username,$email,$number,$password);
	
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>
