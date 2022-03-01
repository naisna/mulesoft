<?php
$host_name="localhost";
$user_name="root";
$password="";
$db_name="my_db";
$conn=mysqli_connect($host_name,$user_name,$password,$db_name);
if(!$conn){
    die("connection error:". mysqli_connect_error());
}
$sql="CREATE TABLE moviess(slno INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,moviename VARCHAR(50),actor VARCHAR(30),actress VARCHAR(50),releaseyear INT(10),directorname VARCHAR(40))";
if(mysqli_query($conn,$sql)){
    echo "table created successfully";
}
else{
    echo "error".mysqli_error($conn);
}

?>
