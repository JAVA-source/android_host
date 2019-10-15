<?php
$username = $_GET['username'];
$password = $_GET['password'];

if ($username=='admin' && $password=='abc12345'){
    echo 'login successful';
} else{
    echo "error username $username or password $password is wrong!!!";
}
?>
