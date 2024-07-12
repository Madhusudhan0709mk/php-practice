<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connect_db</title>
</head>
<body>
<?php 
// Logic to connect to root and create database
$connect = new mysqli("localhost", "root", "mad123");

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

// Create database if it does not exist
$sql = "CREATE DATABASE IF NOT EXISTS myDB";
if ($connect->query($sql) === TRUE) {
    echo "Database created or already exists.<br>";
} else {
    echo "Error creating database: " . $connect->error . "<br>";
}

// Connect to the created database
$connect_db = new mysqli("localhost", "root", "mad123", "myDB");
if ($connect_db->connect_error) {
    die("Could not connect: " . $connect_db->connect_error);
} else {
    echo "Connection to database established.<br>";
}

// SQL to create table
$sqloftable = "CREATE TABLE IF NOT EXISTS DEMOPHP (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(20) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($connect_db->query($sqloftable) === TRUE) {
    echo "Table created or already exists.<br>";
} else {
    echo "Error creating table: " . $connect_db->error . "<br>";
}



$sqltoinsert = "INSERT INTO DEMOPHP(firstname,email) 
VALUES('MADHU','madhumk0709m@gmail.com')";

if($connect_db->query($sqltoinsert)===TRUE){
    echo "CONNECTED ";
}else{
    echo "error :" .$connect_db->error;
}

// to read all data
$sql_to_read_all = "SELECT * FROM DEMOPHP";
$res = $connect_db->query($sql_to_read_all);
if ($res->num_rows>0){
    while($output = $res->fetch_assoc()){
        echo "ID: " . $output["id"] . " - Name: " . $output["firstname"] . " - Email: " . $output["email"] . "<br>";
    }
    
}else{
    echo "No results found.";
}
// if we refresh page it creates more records 


// Close connections
$connect->close();
$connect_db->close();
?>
</body>
</html>
