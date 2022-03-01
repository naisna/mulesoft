<?php
$host_name="localhost";
$user_name="root";
$password="";
$db_name="my_db";
$conn=mysqli_connect($host_name,$user_name,$password,$db_name);
if(!$conn){
    die("connection error:". mysqli_connect_error());
}
$sql="SELECT * FROM moviess WHERE actor='dulquer_salman'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
    while($row=mysqli_fetch_assoc($result)){
        echo "slno: ".$row['slno'] . "moviename :" .$row['moviename'] ."actor: ".$row['actor'] ."actress: ".$row['actress'] ."releaseyear: ".$row['releaseyear'] ."directorname: ".$row['directorname'] ."<br>";
    }

    }else{
        echo "no records";

    }
?>