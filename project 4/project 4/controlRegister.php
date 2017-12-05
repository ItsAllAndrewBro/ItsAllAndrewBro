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



$query = "CREATE TABLE IF NOT EXISTS Customers(Id INT , fName TEXT,
    lName TEXT, email VARCHAR(80) PRIMARY KEY, PhoneNum INT(10), Pass VARCHAR(20) ) ENGINE=InnoDB";
execute_query($query);



$query = "CREATE TABLE IF NOT EXISTS Inventory(Id INT PRIMARY KEY, Name TEXT,
    Price INT, Count INT) ENGINE=InnoDB";
execute_query($query);


$query = "CREATE TABLE IF NOT EXISTS Orders(Id INT PRIMARY KEY, Name TEXT,
    Price INT, ) ENGINE=InnoDB";
execute_query($query);


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$password=$_POST['password'];
$password2=$_POST['password2'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];

if($password!==$password2){
  echo 'Passwords are in correct';
  header("Location: Register.php");
}
else{
  $query = "INSERT INTO Customers VALUES(DEFAULT, '$fname', '$lname','$email', '$phonenumber', '$password')";
  execute_query($query);
  header("Location: Main.php");
  exit();


}


mysql_close();

?>
