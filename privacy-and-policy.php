<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="theme-color" content="#21234c" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('db_connection.php');?>
    <?php                                                                                                               
    $cat_res4=mysqli_query($con,"select * from meta_data where page='privacy-policy'");
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
					<div class="">
							<h1 class="text-justify heading_one" style="font-weight: 600">Privacy Policy</h1>
						<p>Welcome to <a href="https://zettaquiz.com/terms-and-conditions">ZettaQuiz!</a>Your privateness is critical to us. This Privacy Policy outlines how we accumulate, use, and protect your information at the same time as you use our internet website online ("ZettaQuiz," "we," "our," or "us").</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">1. Information We Collect</h2>
						<p>We collect the following sorts of data:</p>
						<ul>
						    <li>(1)&nbsp;Personal Information: Name, e-mail address, and unique information you offer whilst signing up or contacting us.</li>
						    <li>(2)&nbsp;Usage Data: Information approximately how you operate our net internet site, which includes IP deal with, browser kind, and pages visited.</li>
						    <li>(3)&nbsp;Cookies and Tracking Technologies: To enhance your revel in and beautify our services.</li>
						</ul>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">2. How We Use Your Information</h2>
						<p>We use the gathered data for:</p>
						<ul>
						    <li>(1)&nbsp;Providing, retaining, and enhancing our offerings.</li>
						    <li>(2)&nbsp;Personalizing man or woman revels in.</li>
						    <li>(3)&nbsp;Communicating with you about updates, promotions, or customer service.</li>
						    <li>(4)&nbsp;Ensuring protection and stopping fraudulent sports.</li>
						</ul>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">3. How We Share Your Information</h2>
						<p>We do not promote, alternate, or rent your non-public data. However, we may additionally additionally proportion it with:</p>
						<ul>
						    <li>(1)&nbsp;Service Providers: Third occasions that assist us carry out our net internet site online.</li>
						    <li>(2)&nbsp;Legal Authorities: If required by way of the usage of way of law to conform with crook responsibilities or guard our rights.</li>
						</ul>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">4. Cookies & Tracking Technologies</h2>
						<p>We use cookies to decorate your surfing. You can modify your browser settings to refuse cookies, but some functions might not work properly.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">5. Data Security</h2>
						<p>We implement security capabilities to guard your records. However, no approach of transmission over the internet is 100% robust.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">6. Your Rights</h2>
						<p>You have the right to:</p>
						<ul>
						    <li>(1)&nbsp;Access, update, or delete your private information.</li>
						    <li>(2)&nbsp;Opt-out of marketing emails.</li>
						    <li>(3)&nbsp;Request a replica of the information we keep approximately you.</li>
						</ul>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">7. Third-Party Links</h2>
						<p>Our internet website online can also furthermore encompass hyperlinks to third-birthday party websites. We are not responsible for their private practices.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">8. Changes to This Privacy Policy</h2>
						<p>We can also replace this coverage once in a while. The current model will always be available on our net web site.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">9. Contact Us</h2>
						<p>If you have got any questions about this Privacy Policy, contact us at: info@zettamobi.com By using ZettaQuiz, you compromise the terms of this Privacy Policy.</p>
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