<?php 
$hostname="localhost";
$username="root";
$password="";
$dbname="mydb";

$conn=new mysqli($hostname,$username,$password,$dbname);
if($conn->connect_error==true){
echo $conn->connect_error;
}

$sql="SELECT * FROM student WHERE id='1' ";

$result=$conn->query($sql);
if($result==true){
    $row=$result->fetch_assoc();
    echo $row['firstname'];
}else{
    echo $conn->error;
}


?>