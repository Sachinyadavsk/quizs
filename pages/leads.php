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
                                        <h3 class="card-title">Leads</h3>
                                          <div class="card-addon dropdown">
                                            <button class="btn btn-label-success btn-sm" onclick=getdata();> <i class="fas fa-download fs-12 align-middle ms-1"> Download</i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive-md">
                                            <table id="datatable-col-visiblility" class="table text-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th><input type="checkbox" id="select_all"/> All</th>
                                                        <th>ID</th>
                                                        <th>Page</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>City</th>
                                                        <th>Date</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                        <?php
                                                $cat_res=mysqli_query($con,"select * from leads where page_id='1'");
                                                $cat_arr=array();
                                                while($row=mysqli_fetch_assoc($cat_res)){
                                                  $cat_arr[]=$row;    
                                                }
                                                 foreach($cat_arr as $list){
                                                     $p_id=$list['page_id'];
                                                ?>
                                                 <?php
                                                $cat_res=mysqli_query($con,"select name from pages where id='$p_id'");
                                                $cat_arr=array();
                                                while($row=mysqli_fetch_assoc($cat_res)){
                                                  $cat_arr[]=$row;    
                                                }
                                                 foreach($cat_arr as $lis){
                                                     $p_name=$lis['name'];
                                                 }
                                                ?>
                                                <tr>
                                                    <td class="align-middle"><input type="checkbox" value="<?php echo $list['id'];?>,<?php echo $list['name'];?>,<?php echo $list['email'];?>,<?php echo $list['mobile'];?>,<?php echo $list['city'];?>,<?php echo $list['state'];?>" name="chk" class="all"/></td>
                                                    <td class="align-middle"><?php echo $list['id'];?></td>
                                                    <td class="align-middle"><?php echo $p_name;?></td>
                                                             <td class="align-middle"><?php echo $list['name'];?></td>
                                                             
                                                        <td class="align-middle"><?php echo $list['email'];?></td>
                                                        <td class="align-middle"><?php echo $list['mobile'];?></td>
                                                        <td class="align-middle"><?php echo $list['city'];?></td>
                                                        <td class="align-middle"></td>
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

<?php
    if(isset($_POST['lead-delete'])){
        $ldid=mysqli_real_escape_string($con,$_POST['deleteid']);
        mysqli_query($con,"update leads set status='0' where id='$ldid'");?>
                <script>Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Lead Deleted Successfully',
  showConfirmButton: false,
  timer: 2500
})
setTimeout(() => {
  window.location.href="https://drive360.in/pages/leads";
}, "2600")</script>
  <?php  }
?>

<script>
function getdata(){
var yourArray=[];
$("input:checkbox[name=chk]:checked").each(function(){
    yourArray.push($(this).val());
});
const twoDArray = yourArray.map(item => item.split(','));
// Create a new workbook
const wb = XLSX.utils.book_new();

// Add a worksheet with the array data
const ws = XLSX.utils.aoa_to_sheet(twoDArray);
XLSX.utils.book_append_sheet(wb, ws, "Sheet1");

// Save the workbook to a file
XLSX.writeFile(wb, "output.xlsx");

}

</script>
                <script type="text/javascript">
$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.all').each(function(){
                this.checked = true;
            });
        }else{
             $('.all').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('.all').on('click',function(){
        if($('.all:checked').length == $('.all').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});
</script>

<?php require('footer.php');?>
        <?php }else{
        header('location:https://drive360.in/pages/auth-login');
        }
        ?>