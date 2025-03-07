       <?php 
session_start();
if(isset($_SESSION['ADMIN_LOGIN'])&&$_SESSION['ADMIN_LOGIN']=='yes'){
        $company_name=$_SESSION['COMPANY_NAME'];
    $role=$_SESSION['ROLE'];
    $new_admin_name=$_SESSION['SLUG_ADMIN_NAME'];?>
    <script>
  window.location.href="dashboard";
  </script>
      <?php  }else{?>
<?php session_start();
require('connection.php');
?>
<?php 
     
     if(isset($_REQUEST['ema'])){
$email=$_REQUEST['ema'];
$otp1=rand(111111,999999);
 $_SESSION['otp1']=$otp1;
 $_SESSION['email']=$email;
  include('smtp/PHPMailerAutoload.php');
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "sonulodhi.54321@gmail.com";
	$mail->Password = "tkjoxqiqadhxkybu";
	$mail->SetFrom("sonulodhi.54321@gmail.com");
	$mail->Subject = "OTP";
	$mail->Body =$otp1;
	$mail->AddAddress($email);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}
}
     
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
                            
                            <h4 class="mt-4">Welcome Back !</h4>
                            <p class="text-muted">Sign in to continue</p>
                        </div>
                    <div class="p-2 mt-5">
                            <form class="needs-validation" action="" method="post" novalidate>
                                <div class="input-group auth-form-group-custom mb-3">
                                    <span class="input-group-text bg-primary bg-opacity-10 fs-16 " id="basic-addon1"><i class="mdi mdi-account-outline auti-custom-input-icon"></i></span>
                                    <input type="email" class="form-control" placeholder="Enter email" aria-label="Username" name="email" aria-describedby="basic-addon1" required>
                                    <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                </div>

                                <div class="input-group auth-form-group-custom mb-3">
                                    <span class="input-group-text bg-primary bg-opacity-10 fs-16" id="basic-addon2"><i class="mdi mdi-lock-outline auti-custom-input-icon"></i></span>
                                    <input type="password" class="form-control" id="userpassword" placeholder="Enter password" aria-label="Username" name="password" aria-describedby="basic-addon1" required>
                                    <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                </div>

                                <div class="mb-sm-5">
                                    <div class="form-check float-sm-start">
                                        <!--<input type="checkbox" class="form-check-input" id="customControlInline">-->
                                        <!--<label class="form-check-label" for="customControlInline">Remember me</label>-->
                                    </div>
                                  <!--<div class="float-sm-end">
                                        <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#modal-forgot" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                    </div>-->
                                </div>

                                <div class="pt-3 text-center">
                                    <input class="btn btn-primary w-xl waves-effect waves-light" type="submit" name="login-submit">
                                </div>
                                <div class="mt-3 text-center">
                                    <p class="mb-0">Don't have an account ? <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#modal11" class="fw-medium text-primary"> Register </a> </p>
                                </div>

                               <!-- <div class="mt-4 text-center">
                                    <div class="signin-other-title position-relative">
                                        <h5 class="mb-0 title">or</h5>
                                    </div>
                                    <div class="mt-4 pt-1 hstack gap-3">
                                        <div class="vstack gap-2">
                                            <button type="button" class="btn btn-label-info d-block"><i class="ri-facebook-fill fs-18 align-middle me-2"></i>Sign in with facebook</button>
                                            <button type="button" class="btn btn-label-danger d-block"><i class="ri-google-fill fs-18 align-middle me-2"></i>Sign in with google</button>
                                        </div>
                                        <div class="vstack gap-2">
                                            <button type="button" class="btn btn-label-dark d-block"><i class="ri-github-fill fs-18 align-middle me-2"></i>Sign in with github</button>
                                            <button type="button" class="btn btn-label-success d-block"><i class="ri-twitter-fill fs-18 align-middle me-2"></i>Sign in with twitter</button>
                                        </div>

                                    </div>
                                </div>-->
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
       <div class="modal fade" id="modal11">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Agency Registration</h5><button type="button" class="btn btn-sm btn-label-danger btn-icon" data-bs-dismiss="modal"><i class="mdi mdi-close"></i></button>
                            </div>
                           
                            <div class="modal-body">
                                <div class="card">
                            <div class="card-body">
                                <form class="needs-validation" action="" method="post" novalidate>
                                    <div class="row">
                                        <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="validationCustom01" class="form-label"> Name</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="Company Name" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="validationCustom02" class="form-label"> Email</label>
                                                <input type="email" class="form-control" id="em" name="email" placeholder="Enter a valid email" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                            <div class="form-group col-md-6">
                                                <div class="mb-3">
                                                <label for="validationCustom02" class="form-label"> OTP</label>
                                          <input type="text" class="form-control"name="otp" id="inputEmail4" maxlength="6" minlength="6" placeholder="Enter OTP"required>
                                        </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="mb-3">
                                                <label for="validationCustom02" class="form-label"> Get OTP</label>
                                          <input type="button" class="form-control btn-default btn-sm" value="Get OTP" onclick="get_otp();"required>
                                        </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="validationCustom01" class="form-label"> Mobile</label>
                                                <input type="text" data-parsley-type="number" class="form-control" pattern="[6789][0-9]{9}"  name="phone" id="validationCustom" maxlength="10" minlength="10" placeholder="Phone number" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="validationCustom03" class="form-label">State</label>
                                                <select class="form-select" id="validationCustom03a" name="state" onchange="get_city();" required>
                                                    <option value="">Choose...</option>
                                                                 <?php
                                                $cat_res=mysqli_query($con,"select * from state where country_id='101'");
                                                $cat_arr=array();
                                                while($row=mysqli_fetch_assoc($cat_res)){
                                                  $cat_arr[]=$row;    
                                                }
                                                 foreach($cat_arr as $list){
                                                ?>
                                                    <option value="<?php echo $list['name'];?>"><?php echo $list['name'];?></option>
                                                    <?php }?>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a valid state.
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                       
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="validationCustom04" class="form-label">City</label>
                                                <select class="form-select" id="validationCustom03b" name="city" required>
                                                    <option value="">Choose...</option>
                                                    </select>
                                                <div class="invalid-feedback">
                                                    Please provide a valid city.
                                                </div>
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                                             <div class="mb-3">
                                                <label for="validationCustom02" class="form-label">Create Password</label>
                                                <input type="password" class="form-control" name="password" placeholder="create your password" required/>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                        <label class="form-check-label" for="invalidCheck">
                                            Agree to terms and conditions
                                        </label>
                                        <div class="invalid-feedback">
                                            You must agree before submitting.
                                        </div>
                                    </div>
                                    </div>
                                   
                                    <div>
                                        <input class="btn btn-primary" name="register-submit" type="submit">
                                    </div>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
  
  <div class="modal fade" id="modal-forgot">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Forgot Password</h5><button type="button" class="btn btn-sm btn-label-danger btn-icon" data-bs-dismiss="modal"><i class="mdi mdi-close"></i></button>
                            </div>
                            <div class="modal-body">
                                <div class="card">
                            <div class="card-body">
                                <form class="needs-validation" action="" method="post" novalidate>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="validationCustom01" class="form-label">Enter Registered Email</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="email" placeholder="Enter email" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <input class="btn btn-primary" name="forgot-submit" type="submit">
                                    </div>
                                </form>
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
	$sql="select * from agency where email='$username' && status='1'";
	$res=mysqli_query($con,$sql);
	$count=mysqli_num_rows($res);
	if($count>0){
		$row=mysqli_fetch_assoc($res);
			$verify=password_verify($password,$row['password']);
			if($verify==1){
			    $_SESSION['ADMIN_LOGIN']='yes';
			    $_SESSION['ADMIN_ID']=$row['id'];
	            $_SESSION['ADMIN_NAME']=$row['name'];
	            ?>
	      <script>	      Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Logged In',
  showConfirmButton: false,
  timer: 2500
})
setTimeout(() => {
  window.location.href="https://drive360.in/pages/";
}, "2600")</script>  
<?php
			}
			else{
			    
		    ?>
    <script>Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'Something went wrongg',
  showConfirmButton: false,
  timer: 2500
})
setTimeout(() => {
  window.location.href="auth-login";
}, "2600")</script>
    
<?php
		}
	}else{?>
	      <script>Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'Something went wrongs',
  showConfirmButton: false,
  timer: 2500
})
setTimeout(() => {
  window.location.href="auth-login";
}, "2600")</script>  
<?php	}
	}?>

<?php
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
$date_time=date('d/m/Y H:i:s a');
if(isset($_POST['register-submit'])){	
$email=mysqli_real_escape_string($con,$_POST['email']);
$name=mysqli_real_escape_string($con,$_POST['name']);
$phone=mysqli_real_escape_string($con,$_POST['phone']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$state=mysqli_real_escape_string($con,$_POST['state']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$password_hash=password_hash($password, PASSWORD_DEFAULT);
$otp2=mysqli_real_escape_string($con,$_POST['otp']);
$otp1=$_SESSION['otp1'];
$em=$_SESSION['email'];
$otp2=mysqli_real_escape_string($con,$_POST['otp']);
if($otp1==$otp2 && $email==$em){
$check_user=mysqli_num_rows(mysqli_query($con,"select * from agency where email='$email' && name='$name'"));
if($check_user>0){
    ?>
    <script>Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: 'Agency already registered',
  showConfirmButton: false,
  timer: 2500
})
setTimeout(() => {
  window.location.href="auth-login";
}, "2600")</script>
    
<?php
}else{
    date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
$date_time=date('d/m/Y H:i:s a');
              $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    } else if (isset($_SERVER['HTTP_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    } else if (isset($_SERVER['REMOTE_ADDR'])) {
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    } else {
        $ipaddress = 'UNKNOWN';
    }

$json     = file_get_contents("http://ipinfo.io/$ipaddress/geo");
$json     = json_decode($json, true);
 $country  = $json['country'];
 $region   = $json['region'];
 $cityy     = $json['city'];
 $postal     = $json['postal'];
 $locc     = $json['loc'];
  $isp     = $json['org'];     
       	$isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile")); 
 $isWin = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "windows")); 
 $isAndroid = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "android")); 
 $isIPhone = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "iphone")); 
 $isIPad = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "ipad")); 
 $isIOS = $isIPhone || $isIPad; 
  
 if($isMob){ 
		 $device="mobile"; 
 }else{ 
	 $device="desktop"; 
 } 
  
 if($isIOS){ 
	 $os="ios"; 
 }elseif($isAndroid){ 
	 $os="android"; 
 }elseif($isWin){ 
	 $os="windows"; 
 } 
           		
	mysqli_query($con,"insert into agency(name,email,mobile,state,city,password,ip,device,loc,allowed_pages,password_plain,timestamp,status) values('$name','$email','$phone','$state','$city','$password_hash','$ipaddress','$device - $os','$country - $region - $cityy','1','$password','$date_time','0')");

        ?>
    <script>Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Agency registered successfully',
  showConfirmButton: false,
  timer: 2500
})
setTimeout(() => {
  window.location.href="auth-login";
}, "2600")</script>
    
<?php
}
}else{?>
     <script>Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: 'Invalid OTP',
  showConfirmButton: false,
  timer: 2500
})
setTimeout(() => {
  window.location.href="";
}, "2600")</script>   
<?php }}
?>
<?php 

// if(isset($_POST['forgot-submit'])){
// 	$username=mysqli_real_escape_string($con,$_POST['email']);
// 	$sql="select * from users where email='$username'";
// 	$res=mysqli_query($con,$sql);
// 	$count=mysqli_num_rows($res);
// 	if($count>0){
// 		$row=mysqli_fetch_assoc($res);
// 			$password=$row['plain_password'];
// 			$rolee=$row['role'];
// 			$company_id=$row['company_id'];
// 			if($rolee=='admin'){
// 			   $email="sonu.singh@performship.com";
// 			}else{
// 			    $sqlq="select email from users where company_id='$company_id' && role='admin'";
// 	                $resq=mysqli_query($con,$sqlq);
// 	            	$rowq=mysqli_fetch_assoc($resq);
// 	            	$email=$rowq['email']; 
// 			}
// include('smtp/PHPMailerAutoload.php');
// 	$mail = new PHPMailer(); 
// 	$mail->IsSMTP(); 
// 	$mail->SMTPAuth = true; 
// 	$mail->SMTPSecure = 'tls'; 
// 	$mail->Host = "sg2plzcpnl490052.prod.sin2.secureserver.net";
// 	$mail->Port = 587; 
// 	$mail->IsHTML(true);
// 	$mail->CharSet = 'UTF-8';
// //	$mail->SMTPDebug = 2; 
// 	$mail->Username = "info@rkelectrocare.com";
// 	$mail->Password = "cassata@email12";
// 	$mail->SetFrom("Cassata-CRM@rkelectrocare.com");
// 	$mail->Subject ="Frogot Password";
// 	$mail->Body ="Hi User,<br> Your password is : <b>".$password."</b><br>Thank You";
// 	$mail->AddAddress($email);
// 	$mail->SMTPOptions=array('ssl'=>array(
// 		'verify_peer'=>false,
// 		'verify_peer_name'=>false,
// 		'allow_self_signed'=>false
// 	));
// 	if(!$mail->Send()){
// 		//echo $mail->ErrorInfo;
// 	}else{?>
	    	      <script>//Swal.fire({
//   position: 'center',
//   icon: 'success',
//   title: 'Password sent on email',
//   showConfirmButton: false,
//   timer: 2500
// })
// setTimeout(() => {
//   window.location.href="https://drive360.in/pages/auth-login";
// }, "2600")</script> 
 	<?php //}
// 	}else{?>
        	    	      <script>//Swal.fire({
//   position: 'center',
//   icon: 'error',
//   title: 'Email not registered',
//   showConfirmButton: false,
//   timer: 2500
// })
// setTimeout(() => {
//   window.location.href="https://drive360.in/pages/auth-login";
// }, "2600")</script>
 <?php	//}
// }
?> 
	<script>
		   	function get_otp(){
   $(document).ready(function(){
  var em= $("#em").val();
  $.ajax({
        type: "POST",
        url:"",
        data:'ema='+em,
        success: function(result) {
        }
    });
});
   
   	}
function get_city(){
			var id=jQuery('#validationCustom03a').val();
				jQuery.ajax({
					type:'post',
					url:'get_data.php',
					data:'id='+id+'&type=city',
					success:function(result){
						jQuery('#validationCustom03b').html(result);
					}
				});

}
	</script>

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