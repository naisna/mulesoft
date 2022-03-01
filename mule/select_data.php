<?php
$conn=mysqli_connect("localhost","root","","my_db");
if(!$conn){
    echo "connection error";

}
$sql="SELECT * FROM moviess";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
    while($row=mysqli_fetch_assoc($result)){
        echo "slno: ".$row['slno'] . "moviename :" .$row['moviename'] ."actor: ".$row['actor'] ."actress: ".$row['actress'] ."releaseyear: ".$row['releaseyear'] ."directorname: ".$row['directorname'] ."<br>";
    }

    }else{
        echo "no records";

    }
?>