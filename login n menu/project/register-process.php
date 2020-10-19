<?php

require ("helper.php");
//error variable

$error = array();

$firstName = validate_input_text( $_POST['firstName']);
if(empty($firstName)){
    $error[] = "You forgot to enter First Name";
}

$lastName = validate_input_text( $_POST['LastName']);
if(empty($lastName)){
    $error[] = "You forgot to enter Last Name";
}

$Branch = validate_input_text( $_POST['Branch']);
if(empty($Branch)){
    $error[] = "You forgot to enter Branch";
}

$Div = validate_input_text( $_POST['Div']);
if(empty($Div)){
    $error[] = "You forgot to enter Div";
}

$email = validate_input_email( $_POST['email']);
if(empty($email)){
    $error[] = "You forgot to enter Email";
}


$password =validate_input_text( $_POST['password']);
if(empty($password)){
    $error[] = "You forgot to enter Password";
}


$confirm_pwd = validate_input_text( $_POST['confirm_pwd']);
if(empty($confirm_pwd )){
    $error[] = "You forgot to enter Confirm Password";
}




if(empty($error)){
    echo 'validate';
    //register new user
    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
    require('mysqli_connect.php');

    //make a query
    $query = "INSERT INTO user(userID,firstName,lastName,email,password,registerDate)";
    $query .= "VALUES('',?,?,?,?,NOW())";


    //initilize stmt
    $q= mysqli_stmt_init($conn);

    //prep sql stmt
    mysqli_stmt_prepare($q,$query);

    //bind val
    mysqli_stmt_bind_param($q,'ssss',$firstName,$lastName,$email,$hashed_pass);

    //execute
    mysqli_stmt_execute($q);

    if(mysqli_stmt_affected_rows($q)==1){
        print "record successfully inserted..!";
    }else{
        print "error while registration..!";
    }

}else{
    echo 'not validate';
}
