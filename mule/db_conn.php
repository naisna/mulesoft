<?php
$host_name="localhost";
$user_name="root";
$password="";
$conn=mysqli_connect($host_name,$user_name,$password);
if(!$conn){
    echo "connection failed";
}
else{
    echo "connected successfully";

}
$sql="CREATE DATABASE my_db";
if(mysqli_query($conn,$sql)){
    echo "database create successfully";
}else{
    echo "error";


}
?>