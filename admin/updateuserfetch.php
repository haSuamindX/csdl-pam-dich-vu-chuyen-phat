
<?php
$con=mysqli_connect("localhost","root","","pam");

if(isset($_POST['update'])){
$id=$_POST['id'];
$n=$_POST['name'];
$e=$_POST['email'];
$u=$_POST['username'];
$ps=$_POST['password'];
$cn=$_POST['phonenumber'];
$dob=$_POST['dob'];
 

  $updt="UPDATE employee SET name='$n',email='$e',password='$ps', phonenumber='$cn',dob='$dob', username='$u' where id='$id' ";

$con->query($updt);

header("location:user.php");
}
?>
