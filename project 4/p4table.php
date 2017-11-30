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

$query = "DROP TABLE IF EXISTS Customers";
execute_query($query);

$query = "CREATE TABLE Customers(Id INT PRIMARY KEY, fName TEXT,
    lName TEXT, PhoneNum INT, Pass TEXT ) ENGINE=InnoDB";
execute_query($query);

$query= "DROP TABLE IF EXISTS Inventory";
execute_query($query);

$query = "CREATE TABLE Inventory(Id INT PRIMARY KEY, Name TEXT,
    Price INT, Count INT) ENGINE=InnoDB";
execute_query($query);

$query= "DROP TABLE IF EXISTS Orders";
execute_query($query);

$query = "CREATE TABLE Orders(Id INT PRIMARY KEY, Name TEXT,
    Price INT, ) ENGINE=InnoDB";
execute_query($query);



mysql_close();

?>
