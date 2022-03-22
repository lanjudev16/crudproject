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

$conn->close();
?>