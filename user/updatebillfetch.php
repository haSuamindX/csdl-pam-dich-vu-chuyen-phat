
<?php
$con=mysqli_connect("localhost","root","","pam");

if(isset($_POST['update'])){
$id=$_POST['id'];
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
 

  $updt="UPDATE bill SET    bill_id='$bill_id',
                            customer_sendname='$customer_sendname',
                            customer_sendtel='$customer_sendtel',
                            customer_receivername='$customer_receivername',
                            customer_receivertel='$customer_receivertel', 
                            customer_sendadr='$customer_sendadr',
                            customer_receiveradr='$customer_receiveradr',
                            weight='$weight',
                            fee='$fee',
                            datesend='$datesend',
                            datereceived='$datereceived'

                            where idb='$id' ";

$con->query($updt);

header("location:bill.php");
}
?>