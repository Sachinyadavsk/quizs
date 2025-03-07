
<?php
require('top.inc.php');
if(isset($_POST['submit'])){
    	$title=get_safe_value($con,$_REQUEST['title']);
	$description=get_safe_value($con,$_REQUEST['description']);
	$icon_url=get_safe_value($con,$_REQUEST['icon_url']);
	$action_url=get_safe_value($con,$_REQUEST['action_url']);
	     $cat_re=mysqli_query($con,"select * from notifications where title='$title'&&description='$description'&&icon_url='$icon_url'&&action_url='$action_url'");
	     $check_user=mysqli_num_rows($cat_re);
	     if($check_user>0){
	                  $cat_ar=array();
               while($ro=mysqli_fetch_assoc($cat_re)){
                 $cat_ar[]=$ro;    
               }
                foreach($cat_ar as $lis){
                    $count=$lis['shoot_count'];
                    $count++;
                    mysqli_query($con,"update notifications set shoot_count='$count' where title='$title'&&description='$description'&&icon_url='$icon_url'&&action_url='$action_url'");
	     }
	     }else{
	     mysqli_query($con,"insert into notifications(title,description,icon_url,action_url,shoot_count,created_on) values('$title','$description','$icon_url','$action_url','1',now())");
	     }

    $cat_res=mysqli_query($con,"select * from tokens");
               $cat_arr=array();
               while($row=mysqli_fetch_assoc($cat_res)){
                 $cat_arr[]=$row;    
               }
                foreach($cat_arr as $list){
                    $token=$list['token'];
                    sendNotification($token);
 
                }
                header("location:notifications.php");
}
?>
<?php
function sendNotification($token){
    $url ="https://fcm.googleapis.com/fcm/send";

    $fields=array(
        "to"=>$token,
        "notification"=>array(
            "body"=>$_REQUEST['description'],
            "title"=>$_REQUEST['title'],
            "icon"=>$_REQUEST['icon_url'],
            "click_action"=>$_REQUEST['action_url']
            )
    );

    $headers=array(
        'Authorization: key=BE8Mce1TccxhZGiIm6jU0VU1FgEiXag3qVQi2uZdrEYxrpjRrkwPtv_5taz2SG0i1ys4laZSwq2OV2HxPNGVshE',
        'Content-Type:application/json'
    );

    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_POST,true);
    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
    $result=curl_exec($ch);
    print_r($result);
    curl_close($ch);
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Notification</strong><small> Form</small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="categories" class=" form-control-label">Title</label>
									<input type="text" name="title"  class="form-control" required>
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Description</label>
									<textarea name="description" class="form-control" required></textarea>
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Icon Url</label>
									<input type="text" name="icon_url" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Action Url</label>
									<input type="text" name="action_url" class="form-control" required>
								</div>
								<div class="form-group">	
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   <div class="field_error"></div>
							   </div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         
<?php
require('footer.inc.php');
?>