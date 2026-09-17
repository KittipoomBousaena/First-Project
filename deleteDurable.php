<?php 
require('dbconnect.php');

$durable_id=$_GET["idemp"];

$sql="DELETE FROM comsci_durable WHERE durable_id =$durable_id";

$result=mysqli_query($connect,$sql);

if($result){
    header("location:showDurable.php");
    exit(0);
}else{
    echo "เกิดข้อผิดพลาดเกิดขึ้น";
}

?>