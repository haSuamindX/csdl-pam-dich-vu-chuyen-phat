<?php
$con=mysqli_connect("localhost","root","","pam");
$id=$_GET['id'];

$sel="SELECT * FROM bill WHERE idb='$id'";
$dl=$con->query($sel);
$row=$dl->fetch_assoc();




$del="DELETE FROM bill WHERE idb='$id'";
$con->query($del);


header("location:bill.php");
?>