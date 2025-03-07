<?php require('connection.php');?>

<?php
session_start();
if(isset($_REQUEST['agency'])&&isset($_REQUEST['campaign'])){
    $agency=$_REQUEST['agency'];
    $campaign=$_REQUEST['campaign'];
}
 $agency1=preg_replace('/-/', ' ', $agency);
$campaign1=preg_replace('/-/', ' ', $campaign);
 $cat_res=mysqli_query($con,"select * from agency where name='$agency1' and status='1'");
 $count=mysqli_num_rows($cat_res);
 if($count>0){
          $r=mysqli_fetch_assoc($cat_res);
     $ag_id=$r['id'];
      $cat_re=mysqli_query($con,"select * from pages where name='$campaign1' and agency_id='$ag_id' and status='1'");
 $coun=mysqli_num_rows($cat_re);
 if($coun>0){
 $rs=mysqli_fetch_assoc($cat_re);
 $pid=$rs['id'];
 $name=$rs['name'];
 $logo=$rs['logo'];
 $banner=$rs['banner'];
 $image=$rs['image'];
 $kf1=$rs['kf1'];
 $kf2=$rs['kf2'];
 $kf3=$rs['kf3'];
 $kf4=$rs['kf4'];
 $description=$rs['description'];
 $states=$rs['url'];
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
     <?php
     
     if(isset($_REQUEST['click_id'])&&$_REQUEST['click_id']!=''&&isset($_REQUEST['sub_id'])&&$_REQUEST['sub_id']!=''){
     
     $click_id=$_REQUEST['click_id'];
     $sub_id=$_REQUEST['sub_id'];
 }else{
     $click_id='';
     $sub_id='';
 }
     ?>
     <!doctypehtml>
<html lang=en>
   <meta charset=utf-8>
   <meta content="IE=edge"http-equiv=X-UA-Compatible>
   <!--[if IE]>
   <meta content="IE=edge,chrome=1"http-equiv=X-UA-Compatible>
   <![endif]-->
   <title><?php echo $name;?></title>
   <meta content="width=device-width,initial-scale=1,maximum-scale=1"name="viewport">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/f9275dded9.js" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
<script src="js/script.js"></script>
<script src="js/script2.js"></script>
<link href="images/cc.jpeg" rel="icon" type="image/x-icon">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<section style="background:#120b61">
   <div class="desk"><a href=""><img alt="logo" class="d-logo" src="https://drive360.in/pages/uploads/<?php echo $logo;?>" style="position:absolute;z-index:1000"></a></div>
   <div class="mob"style="position:absolute;top:0;left:0;z-index:1;width:100%"><a href=""><img alt="logo" src="https://drive360.in/pages/uploads/<?php echo $logo;?>" width="100%"></a></div>

</section>
<nav class="navbar navbar-inverse"style="background:#000;border-style:none;margin-bottom:0">
</nav>
<style>
    .d-logo{
        width:180px;
        height:50px;
    }
    @media only screen and (max-width:900px){.mob{display:flex}}@media only screen and (max-width:900px){.desk{display:none}}@media only screen and (min-width:992px){.mob{display:none}}@media only screen and (min-width:1200px){.mob{display:none}}</style>
   <section>
       
       <div class="row">
      <div class="col-md-8">
          <img src="https://drive360.in/pages/landing-pages/images/<?php echo $banner;?>" width="100%" alt="">
      </div>
      <div class="col-md-4">
            <form class="imgbox" method="post" action="">
            <div class="form-row">
                <div class="form-group col-md-2">
      <label for="inputCity">Name</label>
      </div>
    <div class="form-group col-md-10">
      <input type="text" class="form-control" name="name" id="inputCity" placeholder="Name"required>
    </div>
    <div class="form-group col-md-2">
          <label for="inputEmail4">Email</label>
          </div>
    <div class="form-group col-md-10">
      <input type="email" class="form-control"name="email" id="em" placeholder="Email"required>
    </div>
        <div class="form-group col-md-2">
          <label for="inputEmail4">OTP</label>
          </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control"name="otp" id="inputEmail4" maxlength="6" minlength="6" placeholder="Enter OTP"required>
    </div>
    <div class="form-group col-md-4">
      <input type="button" class="form-control btn-default btn-sm" value="Get OTP" onclick="get_otp();"required>
    </div>
      <div class="form-group col-md-2">
            <label for="inputCity">Mobile</label>
       </div>
  <div class="form-group col-md-10">

      <input type="text" class="form-control" name="mobile"pattern="[6789][0-9]{9}"maxlength="10" minlength="10" placeholder="Mobile" id="inputCity"required>
    </div>
    
    <div class="form-group col-md-2">
     <label for="inputState">State</label>
     </div>
    <div class="form-group col-md-10">
     
      <select id="validationCustom03a" name="state" class="form-control" required onclick="get_city();">
        <option selected>Choose...</option>
        <?php 
                                                $flow2=explode(',',$states);
                                               foreach($flow2 as $f){ 
                                               $cat_res=mysqli_query($con,"select * from state where id='$f'");
                                                $cat_arr=array();
                                                while($row=mysqli_fetch_assoc($cat_res)){
                                                  $cat_arr[]=$row;    
                                                }
                                                 foreach($cat_arr as $list){
                                               ?>
        <option value="<?php echo $list['name'];?>"><?php echo $list['name'];?></option>
        <?php }}?>
      </select>
    </div>
      <div class="form-group col-md-2">
       <label for="inputCity">City</label>
       </div>
    <div class="form-group col-md-10">
      <select name="city" id="validationCustom03b" class="form-control" required>
         <option selected value="">Choose...</option>
      </select>
    </div>
  </div>
  <div class="form-group col-md-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" required>
      <label class="form-check-label" for="gridCheck">
        Your consent to share your data with third parties.
      </label>
    </div>
  </div>
  <button type="submit" name="register-submit" class="btn btn-warning btn-sm" style="margin-bottom:20px;">Submit</button>
</form>
      </div>
      </div>

   </section>
   <section>
       <div class="container">
           <div class="row">
               <div class="col-md-6 col-sm-12">
                   <div class="features">
                       
                       <ul>
                           <h4>Key Features of <?php echo $name;?></h4>
                           <li><h5><i class="fa fa-check" style="background:#fff;color:red;"></i> <?php echo $kf1;?></h5></li>
                           <li><h5><i class="fa fa-check" style="background:#fff;color:red;"></i> <?php echo $kf2;?></h5></li>
                           <li><h5><i class="fa fa-check" style="background:#fff;color:red;"></i> <?php echo $kf3;?></h5></li>
                           <li><h5><i class="fa fa-check" style="background:#fff;color:red;"></i> <?php echo $kf4;?></h5></li>
                       </ul>
                   </div>
               </div>
               <div class="col-md-6 col-sm-12">
                                      <img src="https://drive360.in/pages/landing-pages/images/<?php echo $image;?>" width="100%" class="image">
               </div>
           </div>
       </div>
   </section>
   <section style="margin-bottom:50px;">
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <?php echo $description;?>
               </div>
           </div>
       </div>
   </section>
   <style>
      .image{
         margin-top:40px;
         margin-bottom:40px;
         border:1px solid #dfe2e8;
         border-radius:10px;

      }
      .features{
          margin-top:40px;
          margin-bottom:40px;
          border:1px solid #dfe2e8;
          border-radius:10px;

      }
      .features > ul > li{
          list-style:none;
      }
      .imgbox{
         border:1px solid #dfe2e8;
         padding:5px;
         border-radius:2px;
      }
   </style>
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
					url:'https://drive360.in/pages/landing-pages/get_data.php',
					data:'id='+id+'&type=city',
					success:function(result){
						jQuery('#validationCustom03b').html(result);
					}
				});

}
	</script>
	<footer class="footer-1" id="footer">
   <div class="main-footer typo-light widgets-dark">
   <div class="footer-copyright">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <p>Design & Developed By <a href="https://zettamobi.com/">Zettamobi Technologies</a>
            </div>
         </div>
      </div>
   </div>
</footer>
<style>
    footer .main-footer {
	padding: 20px 0;
	background: #000
}

footer ul {
	padding-left: 0;
	list-style: none
}

.footer-copyright {
	background: #fff;
	padding: 5px 0
}

.footer-copyright .logo {
	display: inherit
}

.footer-copyright nav {
	float: right;
	margin-top: 5px
}

.footer-copyright nav ul {
	list-style: none;
	margin: 0;
	padding: 0
}

.footer-copyright nav ul li {
	border-left: 1px solid #505050;
	display: inline-block;
	line-height: 12px;
	margin: 0;
	padding: 0 8px
}

.footer-copyright nav ul li a {
	color: #969696;
}

.footer-copyright nav ul li:first-child {
	border: medium none;
	padding-left: 0
}

.footer-copyright p {
	color: #969696;
	margin: 2px 0 0
}

.footer-top {
	background: #252525;
	padding-bottom: 30px;
	margin-bottom: 30px;
	border-bottom: 3px solid #222
}

footer.transparent .footer-top,
footer.transparent .main-footer {
	background: transparent
}

footer.transparent .footer-copyright {
	background: none repeat scroll 0 0 rgba(0, 0, 0, 0.3)
}

footer.light .footer-top {
	background: #f9f9f9
}

footer.light .main-footer {
	background: #f9f9f9
}

footer.light .footer-copyright {
	background: none repeat scroll 0 0 rgba(255, 255, 255, 0.3)
}

.footer- .logo {
	display: inline-block
}

</style>
<?php
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
$date_time=date('d/m/Y H:i:s a');
if(isset($_POST['register-submit'])){	
$email=mysqli_real_escape_string($con,$_POST['email']);
$name=mysqli_real_escape_string($con,$_POST['name']);
$phone=mysqli_real_escape_string($con,$_POST['mobile']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$state=mysqli_real_escape_string($con,$_POST['state']);
$otp2=mysqli_real_escape_string($con,$_POST['otp']);
$otp1=$_SESSION['otp1'];
$em=$_SESSION['email'];
$otp2=mysqli_real_escape_string($con,$_POST['otp']);
if($otp1==$otp2 && $email==$em){
$check_user=mysqli_num_rows(mysqli_query($con,"select * from leads where email='$email' && name='$name'"));
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
           		
	mysqli_query($con,"insert into leads(page_id,click_id,sub_id,name,email,mobile,state,city,ip,device,loc,timestamp) values('$pid','$click_id','$sub_id','$name','$email','$phone','$state','$city','$ipaddress','$device - $os','$country - $region - $cityy','$date_time')");

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

<?php }else{
    echo "Page not found";
}
}else{
    echo "Page not found";
}                       
?>
