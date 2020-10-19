<?php

$error = array();

$email = validate_input_email( $_POST['email']);
if(empty($email)){
    $error[] = "You forgot to enter Email";
}


$password =validate_input_text( $_POST['password']);
if(empty($password)){
    $error[] = "You forgot to enter Password";
}

if(empty($error)){
//SQL QUERY

$query = "SELECT userID,firstName,lastName,email,password FROM user WHERE email = ?";
$q= mysqli_stmt_init($conn);
mysqli_stmt_prepare($q,$query);

//bind parameter
mysqli_stmt_bind_param($q,'s',$email);
//execute
mysqli_stmt_execute($q);

$result = mysqli_stmt_get_result($q);

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

if(!empty($row)){
    //verify pass
    if(password_verify($password,$row['password'])){
        header("location:menu.html");
        exit();
    }
}else{
   print "You are not a member please register ";
}

}else{

    echo "Please fill out email and password to login";
}