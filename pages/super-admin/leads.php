<?php 
session_start();
if(isset($_SESSION['SUPER_ADMIN_LOGIN'])&&$_SESSION['SUPER_ADMIN_LOGIN']=='yes'){
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
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>City</th>
                                                        <th>State</th>
                                                        <th>IP</th>
                                                        <th>Device</th>
                                                        <th>Location</th>
                                                        <th>Added On</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                              <?php
                                                         
                                                          $cat_res=mysqli_query($con,"select * from leads order by id desc");
                                                         
                                                $cat_arr=array();
                                                while($row=mysqli_fetch_assoc($cat_res)){
                                                  $cat_arr[]=$row;    
                                                }
                                                 foreach($cat_arr as $list1){
                                                     $l_id=$list1['id'];
                                                     $comp_id=$list1['company_id'];
                                                ?>
                                                 
                                                <tr>
                                                        <td class="align-middle"><input type="checkbox" value="<?php echo $list1['id'];?>,<?php echo $list1['name'];?>,<?php echo $list1['email'];?>,<?php echo $list1['mobile'];?>,<?php echo $list1['city'];?>,<?php echo $list1['state'];?>" name="chk" class="all"/></td>
                                                        <td class="align-middle"><?php echo $list1['name'];?></td>
                                                        <td class="align-middle"><?php echo $list1['email'];?></td>
                                                        <td class="align-middle"><?php echo $list1['mobile'];?></td>
                                                        <td class="align-middle"><?php echo $list1['city'];?></td>
                                                       <td class="align-middle"><?php echo $list1['state'];?></td>
                                                       <td class="align-middle"><?php echo $list1['ip'];?></td>
                                                       <td class="align-middle"><?php echo $list1['device'];?></td>
                                                       <td class="align-middle"><?php echo $list1['loc'];?></td>
                                                       <td class="align-middle"><?php echo $list1['timestamp'];?></td>
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
        header('location:auth-login');
        }
        ?>