<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="theme-color" content="#21234c" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('db_connection.php');?>
    <?php                                                                                                               
    $cat_res4=mysqli_query($con,"select * from meta_data where page='terms-conditions'");
    $cat_arr4=array();
    while($row4=mysqli_fetch_assoc($cat_res4)){
    $cat_arr4[]=$row4;    
    }
    foreach($cat_arr4 as $list){
      echo htmlspecialchars_decode($list['data']);
     }?>
	<?php include("header.php"); ?>

			<div class="top_slide_predict">
				<div>
					<h1 class="text-justify heading_one" style="font-weight: 600">Terms and Conditions</h1>
					<div class=" text-center text-justify">
						<p class="text-justify" style="font-weight: 600">Welcome to<a href="https://zettaquiz.com/">ZettaQuiz!</a> By gaining access to or the usage of our net web site ("Site"), services, or packages, you settle to conform with those Terms and Conditions ("Terms"). Please have a look at them carefully.</p>
					</div>
					<hr>
					<div class="mt-5">
						<h2 class="t-c-head heading_two">1. Acceptance of Terms</h2>
						<p class="text-justify"> By the usage of ZettaQuiz, you agree to abide via way of those Terms. If you do no longer agree, please do not use our offerings.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head heading_two">2. Changes to Terms</h2>
						<p class="text-justify">We reserve the right to replace the ones Terms at any time. Your endured use of the Site after modifications method you are taking shipping of the updated Terms.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head heading_two">3. User Eligibility</h2>
						<p class="text-justify">You must be at least thirteen years old to apply for ZettaQuiz. If you're below 18, you want to have parental consent</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head heading_two">4. User Accounts</h2>
						<div class="mt-5">
							<div class="t-c-list">
								<ul class="text-justify">
									<li>(1) You are accountable for retaining the safety of your account.</li>
									<li>(2) Do no longer proportion login credentials.</li>
									<li>(3) Notify us right now of unauthorized entry to.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head heading_two">5. Use of Services</h2>
						<p class="text-justify">You conform to:</p>
						<div class="mt-5">
							<div class="t-c-list">
								<ul class="text-justify">
									<li>(1) Use ZettaQuiz for lawful purposes</li>
									<li>(2) Not try and hack, adjust, or disrupt our platform</li>
									<li>(3) Not have interaction in fraudulent sports</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head heading_two">6. Intellectual Property</h2>
						<p class="text-justify">All content material on ZettaQuiz, which consist of trademarks, text, and quizzes, is our intellectual assets. You won't reproduce, distribute, or regulate without permission.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head heading_two">7. Third-Party Links</h2>
						<p class="text-justify">ZettaQuiz can also encompass hyperlinks to 0.33-party websites. We aren't responsible for their content material material material or guidelines.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head heading_two">8. Termination</h2>
						<p class="text-justify">We may additionally droop or terminate your right of entry to ZettaQuiz in case you violate those Terms.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head heading_two">9. Limitation of Liability</h2>
						<p class="text-justify">We are not responsible for any damages, losses, or disruptions because of the use of our services.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head heading_two">10. Governing Law</h2>
				      	<p class="text-justify"> These Terms are ruled by the manner of the legal pointers of the USA. Any disputes may be resolved in the best courts of that jurisdiction.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head heading_two">11. Contact Information</h2>
				      	<p class="text-justify"> For questions or issues concerning those Terms, touch us at: info@zettamobi.com By using ZettaQuiz, you have widely recognized which you have taken a look at, understood, and agreed to the ones Terms and Conditions.</p>
					</div>
				</div>
			</div>
			
		 <?php include("footer.php"); ?>

		</div>
	</div>
	<script src="https://zettaquiz.com/assets/js/main.js"></script>
	<script src="https://zettaquiz.com/assets/js/materialize.min.js"></script>
</body>
</html>