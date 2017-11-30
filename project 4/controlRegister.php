<?php

$host = "localhost";
$user = "user12";
$pass = "user12";
$db = "mydb";

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

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$password=$_POST['password'];
$password2=$_POST['password2'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];

if($password!==$password2){
  echo 'Passwords are in correct';
}
else{
  $query = "INSERT INTO Customers VALUES(DEFAULT, '$fname', '$lname', '$phonenumber', '$password')";
  execute_query($query);

  echo 'You have been registered!!!';
}


mysql_close();

?>
