<?php
session_start();
if (isset($_SESSION['userid']) && isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script language="javascript">
  function check(){
    //for the name input validation
    if(document.form2.name.value==""){
      alert("hãy nhập tên");
      document.form2.name.focus();
      return false;
    }
    //for password validation
    if(document.form2.password.value==""){
      alert("nhập mật khẩu");
      document.form2.password.focus();
      return false;
    }

    //for phone no input validation
    if(document.form2.phonenumber.value==""){
      alert("nhập số điện thoại");
      document.form2.phonenumber.focus();
      return false;
    }
    //for DOB input validation
    if(document.form2.dob.value==""){
      alert("nhập ngày sinh");
      document.form2.dob.focus();
      return false;
    }
    if(document.form2.email.value==""){
      alert("hãy nhập địa chỉ email");
      return false;
    }
    em=document.form2.email.value;
           f1=em.indexOf('@');
           f2=em.indexOf('@',f1+1);
           e1=em.indexOf('_');
           e2=em.indexOf('_',e1+1);
           n=em.length;
           if(!(f1>0 && f2==-1 && e1>0 &&e2==-1 && f1!=e1+1 && e1!=f1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1)){
            alert("nhập email sai");
            document.form2.email.focus();
            return false;
           }
           return true;
  }
</script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include("include/menu.php"); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Tìm kiếm theo tên..." name="var" aria-label="Search" aria-describedby="basic-addon2" value="<?php if(isset($_GET['var'])) {echo $_GET['var'];} ?>">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <img class="img-profile rounded-circle" src="logo/title.png">
              </a>


              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Đăng xuất
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Cập nhật tài khoản tài khoản</h1>
        </div>

        <!-- add user -->
        <?php 
                   
                   $id=$_GET['id'];
                   $con=mysqli_connect("localhost","root","","pam");
                   $sel="SELECT * FROM employee WHERE id='$id'";
                   $rk=$con->query($sel);
                   while($row=$rk->fetch_assoc()){
                  ?>
        <form class="rt" action="updateuserfetch.php" method="post" class="po" enctype='multipart/form-data' name="form2" style="margin-left:500px;">
        <p><input type="hidden" name="id" value="<?php echo $id; ?>"</p>
               <table>     
           <tr>
             <th> 
                 Tên:<span style="color:red";>*</span><input class="form-control"  type="text" name="name" id="name" placeholder="Nhập đầy đủ họ tên bạn" 
                 value="<?php echo $row['name']; ?>">
                 Email:<span style="color:red";>*</span><input class="form-control" type="email" name="email" id="email" placeholder="Nhập email của bạn"
                 value="<?php echo $row['email']; ?>">
                tên tài khoản:<span style="color:red";>*</span><input class="form-control" type="text" name="username" id="username" placeholder="nhập tên tài khoản"
                value="<?php echo $row['username']; ?>">
               Đặt mật khẩu:<span style="color:red";>*</span><input  class="form-control" type="text" id="password" name="password" placeholder="Đặt mật khẩu ở đây"
               value="<?php echo $row['username']; ?>">
               Ngày sinh:<span style="color:red";>*</span><input class="form-control" type="date" name="dob" id="dob"  required=""
               value="<?php echo $row['dob']; ?>">
               Số điện thoại:<span style="color:red";>*</span><input class="form-control" type="tel" name="phonenumber" id="phonenumber" placeholder="Nhập số điện thoại của bạn" required=""
               value="<?php echo $row['phonenumber']; ?>">
             </th>   
           </tr>
             <th>
               <input type="submit" class="btn btn-primary btn-user btn-block" name="update" value="Cập nhật">
           </tr>          
         </table>     
       </form>
       <?php } ?>

  
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Xuan Quy &copy; Books </span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Bạn muốn thoát không</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Bạn chắc muốn thoát không</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Không</button>
          <a class="btn btn-primary" href="logoutfetch.php">Đăng Xuất</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  
</body>
<script>
      function check(){
        alert("your account has been successfully created");
      }
    </script>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>