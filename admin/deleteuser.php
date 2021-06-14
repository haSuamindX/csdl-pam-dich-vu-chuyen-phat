<?php
$con=mysqli_connect("localhost","root","","pam");
$id=$_GET['id'];

$sel="SELECT * FROM employee WHERE id='$id'";
$dl=$con->query($sel);
$row=$dl->fetch_assoc();




$del="DELETE FROM employee WHERE id='$id'";
$con->query($del);


header("location:user.php");
?>