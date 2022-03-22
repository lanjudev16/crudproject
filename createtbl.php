<?php 
$hostname="localhost";
$username="root";
$userpass="";
$dbname="mydb";
$conn=new mysqli($hostname,$username,$userpass,$dbname);

if($conn->connect_errno){
    echo $conn->connect_errno;
}

$sql="CREATE TABLE student(
    id INT NOT NULL AUTO_INCREMENT ,
        firstname VARCHAR(255),
        lastname VARCHAR(255),
        email VARCHAR(255),
        PRIMARY KEY(id)
    );";
if($conn->query($sql)==true){
    echo "created table";
}else{
    echo $conn->error;
}
$conn->close();
