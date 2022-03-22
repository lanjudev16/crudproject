<?php 
$hostname="localhost";
$username="root";
$password="";
$dbname="mydb";

$conn=new mysqli($hostname,$username,$password,$dbname);
if($conn->connect_error==false){
echo "connect";
}

$sql="INSERT INTO student(id,firstname,lastname,email)VALUES('','lanju','hossain','lanju@gmail.com');";

$result=$conn->query($sql);
if($result==true){
echo "Insert";
}else{
    echo $conn->error;
}


?>