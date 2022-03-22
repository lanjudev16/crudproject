<?php 
$hostname="localhost";
$username="root";
$userpass="";
$conn=new mysqli($hostname,$username,$userpass);

if($conn->connect_error){
    echo $conn->connect_error;
}else{
    echo "connected";
}

$sql="CREATE DATABASE mydb";
if($conn->query($sql)==true){
    echo "created database";
}else{
    echo $conn->error;
}
$conn->close();
