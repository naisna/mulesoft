<?php
$host_name="localhost";
$user_name="root";
$password="";
$db_name="my_db";
$conn=mysqli_connect($host_name,$user_name,$password,$db_name);
if(!$conn){
    die("connection error:". mysqli_connect_error());
}
$sql="INSERT INTO moviess(moviename,actor,actress,releaseyear,directorname)VALUES('hridhayam','pranav','dharshana',2022,'vineeth_sreenivasan');";
$sql .="INSERT INTO moviess(moviename,actor,actress,releaseyear,directorname)VALUES('aadhi','pranav','aditi',2018,'jeethu_joseph');";
$sql .="INSERT INTO moviess(moviename,actor,actress,releaseyear,directorname)VALUES('charlie','dulquer_salman','parvathy',2015,'martin');";
$sql .="INSERT INTO moviess(moviename,actor,actress,releaseyear,directorname)VALUES('bangalore_days','dulquer_salman','nasriya',2014,'amjalimenon');";
$sql .="INSERT INTO moviess(moviename,actor,actress,releaseyear,directorname)VALUES('kali','dulquer_salman','saipallavi',2016,'sameer');";
if(mysqli_multi_query($conn,$sql)){
    echo "new record created successfully";
}
else{
    echo "error" .mysqli_error($conn);
}
?>