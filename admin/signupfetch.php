
<?php
session_start();
//redirection page link
header("location:user.php");
$con=mysqli_connect("localhost","root","","pam");

if($con){
  echo "";
}
else{
	echo "connection failed";
}


if(isset($_POST['signup'])){

$n=$_POST['name'];
$e=$_POST['email'];
$u=$_POST['username'];
$ps=$_POST['password'];
$cn=$_POST['phonenumber'];
$dob=$_POST['dob'];


$sel="SELECT * FROM employee WHERE email ='$e'";

$r=$con->query($sel);

if($r->num_rows> 0){
	echo "email tồn tại";
}

else {
$ins="INSERT INTO employee SET name='$n',email='$e',password='$ps', phonenumber='$cn',dob='$dob', username='$u'";
$con->query($ins);
 
}
}


?>

