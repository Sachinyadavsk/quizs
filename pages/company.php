<?php 
session_start();
if(isset($_SESSION['ADMIN_LOGIN'])&&$_SESSION['ADMIN_LOGIN']=='yes'){
$admin_id=$_SESSION['ADMIN_ID'];
?>
<?php require('html-header.php');?>
<?php require('top-header.php');?>
<?php require('left-sidebar.php');?>
<?php require('connection.php');?>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                
                <div class="row">
                            <div class="col-12">
                                <div class="card" style="height: 495px; overflow: hidden auto;" data-simplebar="init">
                                    <div class="card-header">
                                        <div class="card-icon text-muted"><i class="fas fa-sync-alt fs-14"></i></div>
                                        <h3 class="card-title">Agency</h3>
                                       
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
                                                        <th>Allowed Pages</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $cat_res=mysqli_query($con,"select * from agency where id='$admin_id' order by id desc");
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
                                                        <td class="align-middle"><?php echo $list['allowed_pages'];?></td>
                                                        <td class="align-middle"><?php echo $list['status'];?></td>
                                                        <!--
                                                        <td class="align-middle">
                                                           
                                                            <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#modal11" title="Edit Agency">
                                                            <i class="fas fa-edit" style="color:blue"></i>
                                                            </a>
                                                           
                                                        </td>-->
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
                    $b='';
                    $c='';
                    $d='';
                    $e='';
                    $f='';
                    $g='';
                    $h='';
                    $i='';
                    $j='';
                    $k='';
         
                                                $cat_res=mysqli_query($con,"select * from agency where id='$admin_id' order by id desc");
                                                $cat_arr=array();
                                                while($row=mysqli_fetch_assoc($cat_res)){
                                                  $cat_arr[]=$row;    
                                                }
                                                 foreach($cat_arr as $list){
                                               $a=$list['name'];
                                               $b=$list['email'];
                                               $c=$list['mobile'];
                                              
                                               $e=$list['state'];
                                               $d=$list['city'];
                                              
                                                 }
                                                
                    
                    ?>
<div class="modal fade" id="modal11">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Update Company Details</h5><button type="button" class="btn btn-sm btn-label-danger btn-icon" data-bs-dismiss="modal"><i class="mdi mdi-close"></i></button>
                            </div>
                            <div class="modal-body">
                                <div class="card">
                            <div class="card-body">
                                <form class="needs-validation" action="" method="post" novalidate>
                                    <div class="row">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="validationCustom01" class="form-label">Company Name</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="name" disabled value="<?php echo $a;?>" placeholder="Company Name" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="validationCustom02" class="form-label">Company Email</label>
                                                <input type="email" class="form-control" id="validationCustom02" name="email" disabled value="<?php echo $b;?>" placeholder="Enter a valid email" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="validationCustom01" class="form-label">Company Phone</label>
                                                <input type="text" data-parsley-type="number" class="form-control"  name="phone" disabled value="<?php echo $c;?>" id="validationCustom" maxlength="10" minlength="10" placeholder="Phone number" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="validationCustom02" class="form-label">Company Address</label>
                                                <input type="text" class="form-control" id="validationCustom" name="address" value="<?php echo $g;?>" placeholder="Address here" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                             <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="validationCustom03" class="form-label">State</label>
                                                <select class="form-select" id="validationCustom03a" name="state" onchange="get_city();" required>
                                                    <?php if($h!==''){?>
                                                    <option value="<?php echo $h;?>" selected><?php echo $h;?></option>
                                                    <?php }?>
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
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="validationCustom04" class="form-label">City</label>
                                                <select class="form-select" id="validationCustom03b" name="city" required>
                                                     <?php if($i!==''){?>
                                                    <option value="<?php echo $i;?>" selected><?php echo $i;?></option>
                                                    <?php }?>
                                                    <option value="">Choose...</option>
                                                    </select>
                                                <div class="invalid-feedback">
                                                    Please provide a valid city.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="validationCustom05" class="form-label">Zip</label>
                                                <input type="text" class="form-control" id="validationCustom05" value="<?php echo $j;?>"pattern="[0-9]{6}" maxlength="6" minlength="6" name="pin" placeholder="Zip" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid zip.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                             <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="validationCustom02" class="form-label">Contact Person</label>
                                                <input type="text" class="form-control" id="validationCustom" name="contact_person_name" value="<?php echo $d;?>" placeholder="Contact person" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="validationCustom01" class="form-label">Contact Person Phone</label>
                                                <input type="text" data-parsley-type="number" name="contact_person_phone" pattern="[6789][0-9]{9}" value="<?php echo $e;?>" class="form-control" id="validationCustom" maxlength="10" minlength="10" placeholder="Phone number" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                      
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="validationCustom02" class="form-label">Contact Person Designation</label>
                                                <input type="text" class="form-control" id="validationCustom" name="contact_person_designation" value="<?php echo $f;?>" placeholder="Designation" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                             <div class="mb-3">
                                                <label for="validationCustom02" class="form-label">Company GST</label>
                                                <input type="text" class="form-control" name="gst" value="<?php echo $k;?>" disabled placeholder="company gst" required/>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
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
                    <?php
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
$date_time=date('d/m/Y H:i:s a');
if(isset($_POST['register-submit'])){	
$email=mysqli_real_escape_string($con,$_POST['email']);
$name=mysqli_real_escape_string($con,$_POST['name']);
$phone=mysqli_real_escape_string($con,$_POST['phone']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$state=mysqli_real_escape_string($con,$_POST['state']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$pin=mysqli_real_escape_string($con,$_POST['pin']);
$gst=mysqli_real_escape_string($con,$_POST['gst']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$password_hash=password_hash($password, PASSWORD_DEFAULT);
$contact_person_name=mysqli_real_escape_string($con,$_POST['contact_person_name']);
$contact_person_phone=mysqli_real_escape_string($con,$_POST['contact_person_phone']);
$contact_person_designation=mysqli_real_escape_string($con,$_POST['contact_person_designation']);
mysqli_query($con,"update companies set address='$address',state='$state',city='$city',zip='$pin',contact_person_name='$contact_person_name',contact_person_phone='$contact_person_phone',contact_person_designation='$contact_person_designation' where id='$comp_id'");
mysqli_query($con,"update users set name='$contact_person_name', contact_person_phone='$contact_person_phone', contact_person_designation='$contact_person_designation' where id='$admin_id'");
			?>
        <script>Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Updated Successfully',
  showConfirmButton: false,
  timer: 2500
})
setTimeout(() => {
  window.location.href="https://cassatacrm.com/<?php echo $company_name;?>/company";
}, "2600")</script>
  <?php
}
?>

	<script>
function get_city(){
			var id=jQuery('#validationCustom03a').val();
			console.log(id);
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
        header('location:https://cassatacrm.com/auth-login');
        }
        ?>
        