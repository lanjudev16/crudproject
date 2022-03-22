<?php 
$hostname="localhost";
$username="root";
$password="";
$dbname="mydb";

$conn=new mysqli($hostname,$username,$password,$dbname);
if($conn->connect_error==false){
echo "connect";
}

$sql="UPDATE student
SET 
firstname='kalam',
lastname='kibria',
email='lanju@gmail.com'
WHERE id='3';";

$result=$conn->query($sql);
if($result==true){
echo "Update";
}else{
    echo $conn->error;
}


?>