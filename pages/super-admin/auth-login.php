       <?php 
session_start();
if(isset($_SESSION['SUPER_ADMIN_LOGIN'])&&$_SESSION['SUPER_ADMIN_LOGIN']=='yes'){
    $admin_name=$_SESSION['SUPER_ADMIN_NAME'];?>
    <script>
  window.location.href="dashboard";
  </script>
      <?php  }else{?>
<?php session_start();
require('connection.php');
?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ic">

    
    <!-- dark layout js -->
    <script src="assets/js/pages/layout.js"></script>

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- simplebar css -->
    <link href="assets/libs/simplebar/simplebar.min.css" rel="stylesheet">
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="assets/libs/sweetalert2/sweetalert2.min.css">

</head>

<body>

    <div class="container-fluid authentication-b overflow-hidden">
        <div class="bg-overlay"></div>
        <div class="row align-items-center justify-content-center min-vh-100">
            <div class="col-10 col-md-6 col-lg-4 col-xxl-3">
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="text-center">
                            <!--<a href="index.html" class="logo-dark">-->
                            <!--    <img src="" alt="logo here" height="100%" class="auth-logo logo-dark mx-auto">-->
                            <!--</a>-->
                           
                            <h4 class="mt-4">Welcome Back Admin!</h4>
                            <p class="text-muted">Sign in to continue</p>
                        </div>
                    <div class="p-2 mt-5">
                            <form class="needs-validation" action="" method="post" novalidate>
                                <div class="input-group auth-form-group-custom mb-3">
                                    <span class="input-group-text bg-primary bg-opacity-10 fs-16 " id="basic-addon1"><i class="mdi mdi-account-outline auti-custom-input-icon"></i></span>
                                    <input type="text" class="form-control" placeholder="Enter username" aria-label="Username" name="email" aria-describedby="basic-addon1" required>
                                    <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                </div>

                                <div class="input-group auth-form-group-custom mb-3">
                                    <span class="input-group-text bg-primary bg-opacity-10 fs-16" id="basic-addon2"><i class="mdi mdi-lock-outline auti-custom-input-icon"></i></span>
                                    <input type="password" class="form-control" id="userpassword" placeholder="Enter password" aria-label="Password" name="password" aria-describedby="basic-addon1" required>
                                    <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                </div>

                                <div class="mb-sm-5">
                                    <div class="form-check float-sm-start">
                                        <!--<input type="checkbox" class="form-check-input" id="customControlInline">-->
                                        <!--<label class="form-check-label" for="customControlInline">Remember me</label>-->
                                    </div>
                                   <!-- <div class="float-sm-end">
                                        <a href="" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                    </div>-->
                                </div>

                                <div class="pt-3 text-center">
                                    <input class="btn btn-primary w-xl waves-effect waves-light" type="submit" name="login-submit">
                                </div>
                                
                            </form>
                        </div>

                        <div class="mt-5 text-center">
                            <p>©
                                <script>document.write(new Date().getFullYear())</script>Crafted with <i class="mdi mdi-heart text-danger"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                </div>
    <!-- JAVASCRIPT -->
    <?php require('connection.php');?>
    <?php
$msg='';
if(isset($_POST['login-submit'])){
	$username=mysqli_real_escape_string($con,$_POST['email']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$sql="select * from admin where username='$username'";
	$res=mysqli_query($con,$sql);
	$count=mysqli_num_rows($res);
	if($count>0){
		$row=mysqli_fetch_assoc($res);
			$verify=password_verify($password,$row['password']);
			if($verify==1){
			    session_start();
			    $_SESSION['SUPER_ADMIN_LOGIN']='yes';
			    $_SESSION['SUPER_ADMIN_NAME']=$row['username'];
			    $_SESSION['SPER_ADMIN_ROLE']=$row['role'];
			    			?>
                                <script>Swal.fire({
                          position: 'center',
                          icon: 'success',
                          title: 'Logged In Successfully',
                          showConfirmButton: false,
                          timer: 2500
                        })
                        setTimeout(() => {
                          window.location.href="dashboard";
                        }, "2600")</script>
                          <?php
		        	    
			}   
			else{
			    
		    ?>
    <script>Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'Something went wrong',
  showConfirmButton: false,
  timer: 2500
})
setTimeout(() => {
  window.location.href="auth-login";
}, "2600")</script>
    
<?php
			}
	}else{
	    
		    ?>
    <script>Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: 'Something went wrong',
  showConfirmButton: false,
  timer: 2500
})
setTimeout(() => {
  window.location.href="auth-login";
}, "2600")</script>
    
<?php
	}
}
?>

    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/js/pages/form-validation.init.js"></script>
<script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <script src="assets/js/app.js"></script>

</body>
</html>
<?php }?>