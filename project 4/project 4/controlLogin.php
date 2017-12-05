<?php

$host = "localhost";
$user = "atruong8";
$pass = "atruong8";
$db = "atruong8";

function execute_query($query) {

    $r = mysql_query($query);

    if (!$r) {
        echo "Cannot execute query: $query\n";
        trigger_error(mysql_error());
    } else {
        echo "Query: $query executed\n";
    }
}

$r = mysql_connect($host, $user, $pass);

if (!$r) {
    echo "Could not connect to server\n";
    trigger_error(mysql_error(), E_USER_ERROR);
} else {
    echo "Connection established\n";
}

$r2 = mysql_select_db($db);

if (!$r2) {
    echo "Cannot select database\n";
    trigger_error(mysql_error(), E_USER_ERROR);
} else {
    echo "Database selected\n";
}



$password=$_POST['password'];
$email=$_POST['email'];
$query= "SELECT Id FROM Customers WHERE email='$email' AND Pass='$password'";
if(empty(trim($_POST["email"]))){
        echo"Please enter email";
    } else{
        $username = trim($_POST["email"]);
    }

    // Check if password is empty
    if(empty(trim($_POST['password']))){
        echo "Please enter password";
    } else{
        $password = trim($_POST['password']);
    }






mysql_close();

?>
