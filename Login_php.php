<?php
    $con = mysqli_connect("localhost", "id1179200_olas", "olaspassword", "id1179200_olas_user");
    
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $statement = mysqli_prepare($con, "SELECT * FROM user_details WHERE mail = ? AND password = ?");
    mysqli_stmt_bind_param($statement, "ss", $email, $password);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement,$username,$email,$number,$password);
    
    $response = array();
    $response["success"] = false;  
    
    while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;  
        $response["username"] = $name;
		$response["email"] = $mail;
		$response["number"] = $number;
        $response["password"] = $pass;
    }
    
    echo json_encode($response);
?>
