<?php
session_start();
//redirection page link
header("location:bill.php");
$con=mysqli_connect("localhost","root","","pam");

if($con){
  echo "";
}
else{
	echo "connection failed";
}


if(isset($_POST['addbill'])){

$bill_id=$_POST['bill_id'];
$customer_sendname=$_POST['customer_sendname'];
$customer_sendtel=$_POST['customer_sendtel'];
$customer_receivername=$_POST['customer_receivername'];
$customer_receivertel=$_POST['customer_receivertel'];
$customer_sendadr=$_POST['customer_sendadr'];

$customer_receiveradr=$_POST['customer_receiveradr'];
$weight=$_POST['weight'];
$fee=$_POST['fee'];
$datesend=$_POST['datesend'];
$datereceived=$_POST['datereceived'];




$sel="SELECT * FROM bill WHERE bill_id ='$bill_id'";

$r=$con->query($sel);

if($r->num_rows> 0){
	echo "mã hóa đơn đã tồn tại";
}

else {
$ins="INSERT INTO bill SET  bill_id='$bill_id',
                            customer_sendname='$customer_sendname',
                            customer_sendtel='$customer_sendtel', 
                            customer_receivername='$customer_receivername',
                            customer_receivertel='$customer_receivertel', 
                            customer_sendadr='$customer_sendadr',
                            customer_receiveradr='$customer_receiveradr',
                            weight='$weight',
                            fee='$fee', 
                            datesend='$datesend',
                            datereceived='$datereceived',
                            id='1'";
$con->query($ins);
 
}
}


?>