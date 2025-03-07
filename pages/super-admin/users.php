<?php 
session_start();
if(isset($_SESSION['SUPER_ADMIN_LOGIN'])&&$_SESSION['SUPER_ADMIN_LOGIN']=='yes'){
?>
<?php require('connection.php');?>
<?php require('html-header.php');?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.4.6/tailwind.min.css" id="app-style" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js"></script>
<?php require('top-header.php');?>
<?php require('left-sidebar.php');?>
<script src="https://cdn.ckeditor.com/4.17.0/standard/ckeditor.js"></script>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                
                <div class="row">
                            <div class="col-12">
                                <div class="card" style="height: 495px; overflow: hidden auto;" data-simplebar="init">
                                    <div class="card-header">
                                        <div class="card-icon text-muted"><i class="fas fa-sync-alt fs-14"></i></div>
                                        <h3 class="card-title">Pages</h3>
                                        <div class="card-addon dropdown">
                                            <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#modal00">
                                            <button class="btn btn-label-success btn-sm"> <i class="fas fa-plus fs-12 align-middle ms-1"></i></button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive-md">
                                            <table id="datatable-col-visiblility" class="table text-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Agency</th>
                                                        <th>Name</th>
                                                        <th>Logo</th>
                                                        <th>Banner</th>
                                                        <th>Image</th>
                                                         <th>Key Feature 1</th>
                                                        <th>Key Feature 2</th>
                                                        <th>Key Feature 3</th>
                                                        <th>Key Feature 4</th>
                                                        <th>Page URL</th>
                                                        <th>Description</th>
                                                        <th>Added On</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                               <?php
                                                $cat_res=mysqli_query($con,"select * from pages order by id desc");
                                                $cat_arr=array();
                                                while($row=mysqli_fetch_assoc($cat_res)){
                                                  $cat_arr[]=$row;    
                                                }
                                                 foreach($cat_arr as $list){
                                                     $c_id=$list['agency_id'];
                                                      $cat_res=mysqli_query($con,"select * from agency where id='$c_id'");
                                                $cat_arr=array();
                                                while($row=mysqli_fetch_assoc($cat_res)){
                                                  $cat_arr[]=$row;    
                                                }
                                                 foreach($cat_arr as $listv){
                                                     $aname=$listv['name'];
                                                 $agnid=$listv['id'];
                                                 $alp=$listv['allowed_pages'];
                                                ?>
                                                    <tr>
                                                        <td class="align-middle"><?php echo $aname;?></td>
                                                       <td class="align-middle"><?php echo $list['name'];?></td>
                                                        <td class="align-middle"><img src="../uploads/<?php echo $list['logo'];?>" width="100%"></td>
                                                       
                                                        <td class="align-middle"><img src="../uploads/<?php echo $list['banner'];?>" width="100%"></td>
                                                        <td class="align-middle"><img src="../uploads/<?php echo $list['image'];?>" width="100%"></td>
                                                        <td class="align-middle"><?php echo $list['kf1'];?></td>
                                                        <td class="align-middle"><?php echo $list['kf2'];?></td>
                                                        <td class="align-middle"><?php echo $list['kf3'];?></td>
                                                        <td class="align-middle"><?php echo $list['kf4'];?></td>
                                                        <td class="align-middle">https://drive360.in/pages/landing-pages/<?php echo strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $listv['name'])));?>/<?php echo strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $list['name']))); ?>/click_id/sub_id/</td>
                                                        <td class="align-middle"><?php echo $list['description'];?></td>
                                                        <td class="align-middle"><?php echo $list['timestamp'];?></td>
                                                        <td class="align-middle"><?php echo $list['status'];?></td>
                                                       
                                                       
                                                        <td class="align-middle">
                                                           
                                                            <?php if($list['status']==1){?>
                                                            <form action="" method="post">
                                                                <input type="hidden" value="<?php echo $list['id'];?>" name="deleteid">
                                                           <button type="submit" name="lead-delete" style="border:none;">Active
                                                            </button>
                                                            </form>
                                                          <?php }else{?>
                                                          <form action="" method="post">
                                                                <input type="hidden" value="<?php echo $list['id'];?>" name="activeid">
                                                           <button type="submit" name="lead-active" style="border:none;">Deactive
                                                            </button>
                                                            </form>
                                                            <?php }?>
                                                        </td>
                                                         <td class="align-middle">
                                                            
                                                            <form action="" method="post">
                                                                <input type="hidden" value="<?php echo $list['id'];?>" name="deleteid">
                                                           <button type="submit" name="lead-deletee" style="border:none; background:none;"><i class="fas fa-trash" style="color:red"></i>
                                                            </button>
                                                            </form>
                                                
                                                        </td>
                                                    </tr>
                                                   <?php }}?>
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
                   
                </div>

                       <div class="modal fade" id="modal00">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Page</h5><button type="button" class="btn btn-sm btn-label-danger btn-icon" data-bs-dismiss="modal"><i class="mdi mdi-close"></i></button>
                            </div>
                            <div class="modal-body">
                                <div class="card">
                            <div class="card-body">
                                <form class="needs-validation" action="" method="post" enctype='multipart/form-data' novalidate>
                                     <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                  <label for="validationCustom03" class="form-label">Agency</label>
                                                <select class="form-select" id="validationCustom03a" name="agid" onchange="get_city();" required>
                                                    <option value="">Choose...</option>
                                                                 <?php
                                                $cat_res=mysqli_query($con,"select * from agency");
                                                $cat_arr=array();
                                                while($row=mysqli_fetch_assoc($cat_res)){
                                                  $cat_arr[]=$row;    
                                                }
                                                 foreach($cat_arr as $list){
                                                ?>
                                                    <option value="<?php echo $list['id'];?>"><?php echo $list['name'];?></option>
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
                                                <label for="validationCustom01" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="Name" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="validationCustom02" class="form-label">Logo</label>
                                                <input type="file" class="form-control" id="validationCustom02" name="logo" required>
                                                <p>Logo size should be 200 x 55 px</p>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="validationCustom01" class="form-label">Banner</label>
                                                <input type="file" class="form-control" name="banner" id="validationCustom" required>
                                                <p>Banner size should be 1000 x 500 px</p>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="validationCustom02" class="form-label">Image</label>
                                                <input type="file" class="form-control" id="validationCustom" name="image" required>
                                                <p>Image size should be 1000 x 500 px</p>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                      <div class="row">
                                       
                                            <div class="col-md-6">
                                             <div class="mb-3">
                                                <label for="validationCustom02" class="form-label">Key Feature 1</label>
                                                <input type="text" class="form-control" name="kf1" placeholder="Key Feature 1" required/>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                             <div class="col-md-6">
                                             <div class="mb-3">
                                                <label for="validationCustom02" class="form-label">Key Feature 2</label>
                                                <input type="text" class="form-control" name="kf2" placeholder="Key Feature 2" required/>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     
                                      <div class="row">
                                       
                                            <div class="col-md-6">
                                             <div class="mb-3">
                                                <label for="validationCustom02" class="form-label">Key Feature 3</label>
                                                <input type="text" class="form-control" name="kf3" placeholder="Key Feature 3" required/>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                             <div class="col-md-6">
                                             <div class="mb-3">
                                                <label for="validationCustom02" class="form-label">Key Feature 4</label>
                                                <input type="text" class="form-control" name="kf4" placeholder="Key Feature 4" required/>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                      <div class="row">
                                       
                                            <div class="col-md-12">
                                                                             <div class="mb-3">
                                                <label for="validationCustom03" class="form-label">Targeted States</label>
                                                <select class="form-select" id="selecteditgeo" x-cloak name="geo[]" multiple>
                                                    <option disabled value="">Choose...</option>
                                                             <?php
                                                $cat_res=mysqli_query($con,"select * from state where country_id='101'");
                                                $cat_arr=array();
                                                while($row=mysqli_fetch_assoc($cat_res)){
                                                  $cat_arr[]=$row;    
                                                }
                                                 foreach($cat_arr as $list){
                                                ?>
                                                    <option value="<?php echo $list['id'];?>"><?php echo $list['name'];?></option>
                                                    <?php }?>
                                                </select>
                                                                                                <div x-data="dropdowneditgeo()" x-init="loadOptions()" class="md:w-1/2 flex flex-col items-center mx-auto">
  <input name="editvalues2" type="hidden" x-bind:value="selectedValues()">
  <div class="inline-block relative w-64">
    <div class="flex flex-col items-center relative">
      <div x-on:click="open" class="">
        <div class="my-2 p-1 flex border border-gray-200 bg-white rounded">
          <div class="flex flex-auto flex-wrap">
            <template x-for="(option,index) in selected" :key="options[option].value">
              <div class="flex justify-center items-center m-1 font-medium py-1 px-1 bg-white rounded bg-gray-100 border">
                <div class="text-xs font-normal leading-none max-w-full flex-initial x-model=" options[option] x-text="options[option].text"></div>
                <div class="flex flex-auto flex-row-reverse">
                  <div x-on:click.stop="remove(index,option)">
                    <svg class="fill-current h-4 w-4 " role="button" viewBox="0 0 20 20">
                      <path d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0
                                           c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183
                                           l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15
                                           C14.817,13.62,14.817,14.38,14.348,14.849z" />
                    </svg>

                  </div>
                </div>
              </div>
            </template>
            <div x-show="selected.length == 0" class="flex-1">
              <input placeholder="Select a option" class="bg-transparent p-1 px-2 appearance-none outline-none h-full w-full text-gray-800" x-bind:value="selectedValues()">
            </div>
          </div>
          <div class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center border-gray-200 svelte-1l8159u">

            <button type="button" x-show="isOpen() === true" x-on:click="open" class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
              <svg version="1.1" class="fill-current h-4 w-4" viewBox="0 0 20 20">
                <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83
	c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25
	L17.418,6.109z" />
              </svg>

            </button>
            <button type="button" x-show="isOpen() === false" @click="close" class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
              <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                <path d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83
	c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z
	" />
              </svg>

            </button>
          </div>
        </div>
      </div>
      <div class="w-full px-4">
        <div x-show.transition.origin.top="isOpen()" class="absolute shadow top-100 bg-white z-40 w-full left-0 rounded max-h-select" x-on:click.away="close">
          <div class="flex flex-col w-full overflow-y-auto h-64">
            <template x-for="(option,index) in options" :key="option" class="overflow-auto">
              <div class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-gray-100" @click="select(index,$event)">
                <div class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative">
                  <div class="w-full items-center flex justify-between">
                    <div class="mx-2 leading-6" x-model="option" x-text="option.text"></div>
                    <div x-show="option.selected">
                      <svg class="svg-icon" viewBox="0 0 20 20">
                        <path fill="none" d="M7.197,16.963H7.195c-0.204,0-0.399-0.083-0.544-0.227l-6.039-6.082c-0.3-0.302-0.297-0.788,0.003-1.087
							C0.919,9.266,1.404,9.269,1.702,9.57l5.495,5.536L18.221,4.083c0.301-0.301,0.787-0.301,1.087,0c0.301,0.3,0.301,0.787,0,1.087
							L7.741,16.738C7.596,16.882,7.401,16.963,7.197,16.963z"></path>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </template>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
                                                <div class="invalid-feedback">
                                                    Please select a valid option.
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
										<label for="categories" class=" form-control-label">Description</label>
                                        <textarea type="text" name="des" id="desc" class="form-control des" required></textarea>
									  </div>
                                    </div>
                                    <div>
                                        
                                        <input class="btn btn-primary" name="submit" type="submit">
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
if(isset($_POST['submit'])){
    date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
$date_time=date('d/m/Y H:i:s a');
$agid=mysqli_real_escape_string($con,$_POST['agid']);
$name=mysqli_real_escape_string($con,$_POST['name']);
$kf1=mysqli_real_escape_string($con,$_POST['kf1']);
$kf2=mysqli_real_escape_string($con,$_POST['kf2']);
$kf3=mysqli_real_escape_string($con,$_POST['kf3']);
$kf4=mysqli_real_escape_string($con,$_POST['kf4']);
$description=mysqli_real_escape_string($con,$_POST['des']);
$url=mysqli_real_escape_string($con,$_POST['editvalues2']);
	$logo=mysqli_real_escape_string($con,$_FILES['logo']['name']);
	$image=mysqli_real_escape_string($con,$_FILES['image']['name']);
	$banner=mysqli_real_escape_string($con,$_FILES['banner']['name']);
	$sql="select allowed_pages from agency where id='$agid'";
	$res=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($res);
	$alp=$row['allowed_pages'];
$check_user2=mysqli_num_rows(mysqli_query($con,"select * from pages where agency_id='$agid'"));
$check_user=mysqli_num_rows(mysqli_query($con,"select * from pages where name='$name'"));
if($check_user2>=$alp){?>
        <script>Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: 'Page Limit Exceed',
  showConfirmButton: false,
  timer: 2500
})
setTimeout(() => {
  window.location.href="pages";
}, "2600")</script>
<?php }else{
if($check_user>0){
    ?>
    <script>Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: 'User already exist',
  showConfirmButton: false,
  timer: 2500
})
setTimeout(() => {
  window.location.href="pages";
}, "2600")</script>
    
<?php
}else{
    			            if($_FILES['logo']['name']!=''){
				 $photo=$_FILES['logo']['name'];
				$ext=explode('.',$_FILES['logo']['name']);
				$ext_check=strtolower(end($ext));
				$valid_ext=array('png','jpg','jpeg');
				if(in_array($ext_check,$valid_ext)){
					move_uploaded_file($_FILES['logo']['tmp_name'],'../uploads/'.$photo);
				}
    			}
    			            if($_FILES['image']['name']!=''){
				 $photo=$_FILES['image']['name'];
				$ext=explode('.',$_FILES['image']['name']);
				$ext_check=strtolower(end($ext));
				$valid_ext=array('png','jpg','jpeg');
				if(in_array($ext_check,$valid_ext)){
					move_uploaded_file($_FILES['image']['tmp_name'],'../uploads/'.$photo);
				}
    			}
    			            if($_FILES['banner']['name']!=''){
				 $photo=$_FILES['banner']['name'];
				$ext=explode('.',$_FILES['banner']['name']);
				$ext_check=strtolower(end($ext));
				$valid_ext=array('png','jpg','jpeg');
				if(in_array($ext_check,$valid_ext)){
					move_uploaded_file($_FILES['banner']['tmp_name'],'../uploads/'.$photo);
				}
    			}
	mysqli_query($con,"insert into pages(agency_id,name,logo,banner,image,kf1,kf2,kf3,kf4,url,description,timestamp,status) values('$agid','$name','$logo','$banner','$image','$kf1','$kf2','$kf3','$kf4','$url','$description','$date_time','0')");

	
					?>
        <script>Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Page Added Successfully',
  showConfirmButton: false,
  timer: 2500
})
setTimeout(() => {
  window.location.href="pages";
}, "2600")</script>
  <?php
}
}
}
?>
<?php 

    if(isset($_POST['lead-deletee'])){
        $ldid=mysqli_real_escape_string($con,$_POST['deleteid']);
        mysqli_query($con,"delete from pages where id='$ldid'");?>
                <script>Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Page Deleted',
  showConfirmButton: false,
  timer: 2500
})
setTimeout(() => {
  window.location.href="pages";
}, "2600")</script>
<?php }?>
<?php 

    if(isset($_POST['lead-delete'])){
        $ldid=mysqli_real_escape_string($con,$_POST['deleteid']);
        mysqli_query($con,"update pages set status='0' where id='$ldid'");?>
                <script>Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Page Deactive',
  showConfirmButton: false,
  timer: 2500
})
setTimeout(() => {
  window.location.href="pages";
}, "2600")</script>

<?php }
    if(isset($_POST['lead-active'])){
        $ldid=mysqli_real_escape_string($con,$_POST['activeid']);
        mysqli_query($con,"update pages set status='1' where id='$ldid'");?>
                <script>Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Page Active',
  showConfirmButton: false,
  timer: 2500
})
setTimeout(() => {
  window.location.href="pages";
}, "2600")</script>
<?php }?>
<script>
    function dropdowneditgeo() {
                return {
                    options: [],
                    selected: [],
                    show: false,
                    open() { this.show = true },
                    close() { this.show = false },
                    isOpen() { return this.show === true },
                    select(index, event) {

                        if (!this.options[index].selected) {

                            this.options[index].selected = true;
                            this.options[index].element = event.target;
                            this.selected.push(index);

                        } else {
                            this.selected.splice(this.selected.lastIndexOf(index), 1);
                            this.options[index].selected = false
                        }
                    },
                    remove(index, option) {
                        this.options[option].selected = false;
                        this.selected.splice(index, 1);


                    },
                    loadOptions() {
                        const options = document.getElementById('selecteditgeo').options;
                        for (let i = 0; i < options.length; i++) {
                            this.options.push({
                                value: options[i].value,
                                text: options[i].innerText,
                                selected: options[i].getAttribute('selected') != null ? options[i].getAttribute('selected') : false
                            });
                        }


                    },
                    selectedValues(){
                        return this.selected.map((option)=>{
                            return this.options[option].value;
                        })
                    }
                }
            }
</script>
	<style>
    [x-cloak] {
  display: none;
}

.svg-icon {
  width: 1em;
  height: 1em;
}

.svg-icon path,
.svg-icon polygon,
.svg-icon rect {
  fill: #333;
}

.svg-icon circle {
  stroke: #4691f6;
  stroke-width: 1;
}

</style>
     <script>
    CKEDITOR.replace('desc', {
        // Custom configuration options
        toolbar: 'Basic'
    });
</script>
<?php require('footer.php');?>
        <?php }else{
        header('location:auth-login');
        }
        ?>