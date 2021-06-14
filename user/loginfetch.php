
<?php

session_start();
//redirection page link


$con=mysqli_connect("localhost","root","","pam");

if($con){
  echo "";
}
else{
	echo "connection failed";
} 
$e=$_POST['username'];
$ps=$_POST['password'];
//check for duplicate data
$sel="SELECT * FROM employee WHERE username='$e' && password='$ps'";
$r=$con->query($sel);
if($r->num_rows> 0){
	while($row=$r->fetch_assoc()){
    $_SESSION['userid']=$row['id'];
	$_SESSION['username']=$row['username'];
    
	header('location:user.php');
}
}

else{ ?>
	<script>
		alert("Đăng nhập sai !");
		window.location="index.php";
	</script>
	<?php } ?>





