<?php 
session_start();
if(isset($_SESSION['SUPER_ADMIN_LOGIN'])&&$_SESSION['SUPER_ADMIN_LOGIN']=='yes'){?>
<?php require('html-header.php');?>
 <script src="https://code.highcharts.com/highcharts.js"></script>
 <script src="https://code.highcharts.com/modules/exporting.js"></script>
 <script src="https://code.highcharts.com/modules/export-data.js"></script>
 <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <?php require('top-header.php');?>
<?php require('left-sidebar.php');?>

      <?php
                                                $total_leads=0;
                                                $cat_res=mysqli_query($con,"select * from leads");
                                                $cat_arr=array();
                                                while($row=mysqli_fetch_assoc($cat_res)){
                                                  $cat_arr[]=$row;    
                                                }
                                                 foreach($cat_arr as $list){
                                                  $total_leads++;
                                                 }
                                                    $total_assigned_leads=0;
                                                $cat_res=mysqli_query($con,"select * from manage_leads group by lead_id");
                                                $cat_arr=array();
                                                while($row=mysqli_fetch_assoc($cat_res)){
                                                  $cat_arr[]=$row;    
                                                }
                                                 foreach($cat_arr as $list){
                                                  $total_assigned_leads++;
                                                 }
                                                   $total_won_leads=0;
                                                $cat_res=mysqli_query($con,"select * from agency");
                                                $cat_arr=array();
                                                while($row=mysqli_fetch_assoc($cat_res)){
                                                  $cat_arr[]=$row;    
                                                }
                                                 foreach($cat_arr as $list){
                                                  $total_won_leads++;
                                                 }
                                                     $total_lost_leads=0;
                                                $cat_res=mysqli_query($con,"select * from leads");
                                                $cat_arr=array();
                                                while($row=mysqli_fetch_assoc($cat_res)){
                                                  $cat_arr[]=$row;    
                                                }
                                                 foreach($cat_arr as $list){
                                                  $total_lost_leads++;
                                                 }
                                                     $total_pending_leads=0;
                                                $cat_res=mysqli_query($con,"select * from pages");
                                                $cat_arr=array();
                                                while($row=mysqli_fetch_assoc($cat_res)){
                                                  $cat_arr[]=$row;    
                                                }
                                                 foreach($cat_arr as $list){
                                                  $total_pending_leads++;
                                                 }

?>

    <!-- Start right Content here -->

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div>
                                <h4 class="fs-16 fw-semibold mb-1 mb-md-2">Welcome, <span class="text-primary"><?php echo $_SESSION['SUPER_ADMIN_NAME'];?>!</span></h4>
                                <p class="text-muted mb-0">Here's what's happening with your dashboard today.</p>
                            </div>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!--    end row -->

                <div class="row">
                    <div class="col-xxl-9">
                        
                        <div class="row">
                           
                            <div class="col-xl-4">
                                <div class="card bg-success-subtle" style="background: url('assets/images/dashboard/dashboard-shape-2.png'); background-repeat: no-repeat; background-position: bottom center; ">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="avatar avatar-sm avatar-label-success">
                                                <i class="mdi mdi-webhook mt-1"></i>
                                            </div>
                                            <div class="ms-3">
                                                <p class="text-success mb-1">Total Agencies</p>
                                                <h4 class="mb-0"><?php echo $total_won_leads;?></h4>
                                            </div>
                                        </div>
                                        <div class="mt-3 mb-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card bg-success-subtle" style="background: url('assets/images/dashboard/dashboard-shape-3.png'); background-repeat: no-repeat; background-position: bottom center; ">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="avatar avatar-sm avatar-label-success">
                                                <i class="mdi mdi-webhook mt-1"></i>
                                            </div>
                                            <div class="ms-3">
                                                <p class="text-success mb-1">Total Pages</p>
                                                <h4 class="mb-0"><?php echo $total_pending_leads;?></h4>
                                            </div>
                                        </div>
                                        <div class="mt-3 mb-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-4">
                                <div class="card bg-success-subtle" style="background: url('assets/images/dashboard/dashboard-shape-1.png'); background-repeat: no-repeat; background-position: bottom center; ">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="avatar avatar-sm avatar-label-success">
                                                <i class="mdi mdi-webhook mt-1"></i>
                                            </div>
                                            <div class="ms-3">
                                                <p class="text-success mb-1">Total Leads</p>
                                                <h4 class="mb-0"><?php echo $total_lost_leads;?></h4>
                                            </div>
                                        </div>
                                        <div class="hstack gap-2 mt-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        
                    </div>
                    <?php

	 $cat_res=mysqli_query($con,"select * from pages");
                                                $cat_arr=array();
                                                while($row=mysqli_fetch_assoc($cat_res)){
                                                  $cat_arr[]=$row;    
                                                }
                                                $dataPoints=array();
                                                 foreach($cat_arr as $list){
                                                     $leads=0;
                                                     $lid=$list['id'];
                                                    
                                                $cat_res=mysqli_query($con,"select * from leads where page_id='$lid'");
                                                $cat_arr=array();
                                                while($row=mysqli_fetch_assoc($cat_res)){
                                                  $cat_arr[]=$row;    
                                                }
                                                 foreach($cat_arr as $list1){
                                                     
                                                     $leads++;
                                                 }
                                                 array_push($dataPoints, array("label" => $list['name'], "y" => $leads));
                                                 }
?>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title: {
		text: ""
	},
	axisY: {
		title: ""
	},
	data: [{
		type: "column",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>

                    <div class="col-xxl-3">
                        <div class="row">

                                    <div class="col-xxl-12 col-xl-12 order-2 order-xxl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-icon">
                                            <i class="fas fa-calendar-alt fs-14 text-muted"></i>
                                        </div>
                                        <h4 class="card-title mb-0">Leads / Page</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="container2">
<div id="chartContainer2" style="height: 370px; width: 100%;"></div>
 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                
                
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- End Page-content -->

<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
        <?php require('footer.php');?>
        <?php }else{
        header('auth-login');
        }
        ?>