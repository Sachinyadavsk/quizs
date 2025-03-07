<?php 
session_start();
if(isset($_SESSION['SUPER_ADMIN_LOGIN'])&&$_SESSION['SUPER_ADMIN_LOGIN']=='yes'){
?>
<?php require('html-header.php');?>
<?php require('top-header.php');?>
<?php require('left-sidebar.php');?>
<?php require('connection.php');?>
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
    
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                
                <div class="row">
                            <div class="col-12">
                                <div class="card" style="height: 495px; overflow: hidden auto;" data-simplebar="init">
                                    <div class="card-header">
                                        <div class="card-icon text-muted"><i class="fas fa-sync-alt fs-14"></i></div>
                                        <h3 class="card-title">Agencies</h3>
                                       <div class="card-addon dropdown">
                                            <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#modaladd">
                                            <button class="btn btn-label-success btn-sm"> <i class="fas fa-plus fs-12 align-middle ms-1"></i></button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive-md">
                                            <table id="datatable-col-visiblility" class="table text-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>City</th>
                                                        <th>State</th>
                                                        <th>IP</th>
                                                        <th>Device</th>
                                                        <th>Location</th>
                                                        <th>Allowed Pages</th>
                                                        <th>Password</th>
                                                        <th>Added On</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $cat_res=mysqli_query($con,"select * from agency order by id desc");
                                                $cat_arr=array();
                                                while($row=mysqli_fetch_assoc($cat_res)){
                                                  $cat_arr[]=$row;    
                                                }
                                                 foreach($cat_arr as $list){
                                                ?>
                                                    <tr>
                                                        <td class="align-middle"><?php echo $list['name'];?></td>
                                                        <td class="align-middle"><?php echo $list['email'];?></td>
                                                        <td class="align-middle"><?php echo $list['mobile'];?></td>
                                                        <td class="align-middle"><?php echo $list['city'];?></td>
                                                        <td class="align-middle"><?php echo $list['state'];?></td>
                                                        <td class="align-middle"><?php echo $list['ip'];?></td>
                                                        <td class="align-middle"><?php echo $list['device'];?></td>
                                                        <td class="align-middle"><?php echo $list['loc'];?></td>
                                                        <td class="align-middle"><?php echo $list['allowed_pages'];?></td>
                                                        <td class="align-middle"><?php echo $list['password_plain'];?></td>
                                                        <td class="align-middle"><?php echo $list['timestamp'];?></td>
                                                        <td class="align-middle"><?php echo $list['status'];?></td>
                                                        
                                                       
                                                        <td class="align-middle">
                                                           
                                                            <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#modal<?php echo $list['id'];?>" title="Edit Lead">
                                                            <i class="fas fa-edit" style="color:blue"></i>
                                                            </a>
                                                           
                                                                <?php if($list['status']==1){?>
                                                            <form action="" method="post">
                                                                <input type="hidden" value="<?php echo $list['id'];?>" name="deleteid">
                                                           <button type="submit" name="lead-delete" style="border:none; background:none;"><i class="fas fa-trash" style="color:#92f77c"></i>
                                                            </button>
                                                            </form>
                                                          <?php }else{?>
                                                          <form action="" method="post">
                                                                <input type="hidden" value="<?php echo $list['id'];?>" name="activeid">
                                                           <button type="submit" name="lead-active" style="border:none; background:none;"><i class="fas fa-trash" style="color:red"></i>
                                                            </button>
                                                            </form>
                                                            <?php }?>
                                                        </td>
                                                    </tr>
                                                    <?php }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        
                    
                    </div>
                    </div>
                    </div>
                    <?php 
                    $a='';
                   
         
                                                $cat_res=mysqli_query($con,"select * from agency");
                                                $cat_arr=array();
                                                while($row=mysqli_fetch_assoc($cat_res)){
                                                  $cat_arr[]=$row;    
                                                }
                                                 foreach($cat_arr as $list){
                                                     $llid=$list['id'];
                                               $a=$list['allowed_pages'];
                                         
                                                 
                                                
                    
                    ?>
<div class="modal fade" id="modal<?php echo $list['id'];?>">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Update</h5><button type="button" class="btn btn-sm btn-label-danger btn-icon" data-bs-dismiss="modal"><i class="mdi mdi-close"></i></button>
                            </div>
                            <div class="modal-body">
                                <div class="card">
                            <div class="card-body">
                                <form class="needs-validation" action="" method="post" novalidate>
                                    <div class="row">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="validationCustom01" class="form-label">Allowed Pages</label>
                                                <input type="number" class="form-control" id="validationCustom01" name="ap"  value="<?php echo $a;?>" min="1" max="10"required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                       
                                                <input type="hidden" name="agency_id" value="<?php echo $llid;?>">
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
                    <?php }?>
                  <div class="modal fade" id="modaladd">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add</h5><button type="button" class="btn btn-sm btn-label-danger btn-icon" data-bs-dismiss="modal"><i class="mdi mdi-close"></i></button>
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
                                        <input class="btn btn-primary" name="add-submit" type="submit">
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
                    <?php
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
$date_time=date('d/m/Y H:i:s a');
if(isset($_POST['add-submit'])){	
$email=mysqli_real_escape_string($con,$_POST['email']);
$name=mysqli_real_escape_string($con,$_POST['name']);
$phone=mysqli_real_escape_string($con,$_POST['phone']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$state=mysqli_real_escape_string($con,$_POST['state']);
$otp2=mysqli_real_escape_string($con,$_POST['otp']);
$otp1=$_SESSION['otp1'];
$em=$_SESSION['email'];
$otp2=mysqli_real_escape_string($con,$_POST['otp']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$password_hash=password_hash($password, PASSWORD_DEFAULT);
if($otp1==$otp2 && $email==$em){
$check_user=mysqli_num_rows(mysqli_query($con,"select * from agency where email='$email' && name='$name'"));
if($check_user>0){
    ?>
    <script>Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: 'User already registered',
  showConfirmButton: false,
  timer: 2500
})
setTimeout(() => {
  window.location.href="";
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
        <script>
               $(document).ready(function(){
  var name='<?php echo $name;?>';
  var email='<?php echo $email;?>';
  var phone='<?php echo $phone;?>';
  var state='<?php echo $state;?>';
  var city='<?php echo $city;?>';
  var postback_url='<?php echo $url;?>';
$.ajax({
 url: 'postback_url',
 type: "GET",
 success: function(data){
 },
 error: function(data){
 }
});
});
        </script>
    <script>Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Thank You!',
  showConfirmButton: false,
  timer: 2500
})
setTimeout(() => {
  window.location.href="";
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
<?php }
}
?>
                    <?php
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
$date_time=date('d/m/Y H:i:s a');
if(isset($_POST['register-submit'])){
   $agency_id=mysqli_real_escape_string($con,$_POST['agency_id']);
$ap=mysqli_real_escape_string($con,$_POST['ap']);
mysqli_query($con,"update agency set allowed_pages='$ap' where id='$agency_id'");
			?>
        <script>Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Updated Successfully',
  showConfirmButton: false,
  timer: 2500
})
setTimeout(() => {
  window.location.href="agencies";
}, "2600")</script>
  <?php
}
?>

<?php 
    if(isset($_POST['lead-delete'])){
        $ldid=mysqli_real_escape_string($con,$_POST['deleteid']);
        mysqli_query($con,"update agency set status='0' where id='$ldid'");
        ?>
                <script>Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Agency Deactive',
  showConfirmButton: false,
  timer: 2500
})
setTimeout(() => {
  window.location.href="agencies";
}, "2600")</script>
<?php }
    if(isset($_POST['lead-active'])){
        $ldid=mysqli_real_escape_string($con,$_POST['activeid']);
                mysqli_query($con,"update agency set status='1' where id='$ldid'");
        ?>
                <script>Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Agency Active',
  showConfirmButton: false,
  timer: 2500
})
setTimeout(() => {
  window.location.href="agencies";
}, "2600")</script>
<?php }?>
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
<?php require('footer.php');?>
        <?php }else{
        header('location:auth-login');
        }
        ?>
        