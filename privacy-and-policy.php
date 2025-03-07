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
						<p>Welcome to ZettaQuiz ("we," "our," or "us"). Your <a href="https://zettaquiz.com/terms-and-conditions">privacy!</a>  is important to us, and this Privacy Policy explains how we collect, use, disclose, and protect your information when you visit our website https://zettaquiz.com/ (the "Site"). By using the Site, you agree to the practices described in this Privacy Policy.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">1. Information We Collect</h2>
						<p>We may collect the following types of information when you use our Site:</p>
						<h5 class="t-c-head">a. Personal Information</h5>
						<p>When you voluntarily provide it, we may collect personal information such as:</p>
						<ul>
						    <li>(1)&nbsp;Name</li>
						    <li>(2)&nbsp;Email address</li>
						    <li>(3)&nbsp;Contact details</li>
						    <li>(4)&nbsp;Any other information you submit through forms or account registration</li>
						</ul>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">b. Non-Personal Information</h2>
						<p>We may collect non-personal information automatically, such as:</p>
						<ul>
						    <li>(1)&nbsp;IP address</li>
						    <li>(2)&nbsp;Browser type and version</li>
						    <li>(3)&nbsp;Device information</li>
						    <li>(4)&nbsp;Pages visited and time spent on the Site</li>
						    <li>(5)&nbsp;Referring website URLs</li>
						    <li>(6)&nbsp;Cookies and similar tracking technologies</li>
						</ul>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">2. How We Use Your Information</h2>
						<p>We use the collected information for the following purposes:</p>
						<ul>
						    <li>(1)&nbsp;To provide and improve our services</li>
						    <li>(2)&nbsp;To communicate with you regarding updates, promotions, and customer support</li>
						    <li>(3)&nbsp;To personalize user experience</li>
						    <li>(4)&nbsp;To analyze website traffic and trends</li>
						    <li>(5)&nbsp;To detect and prevent fraud or security threats</li>
						    <li>(6)&nbsp;To comply with legal requirements</li>
						</ul>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">3. Cookies and Tracking Technologies</h2>
						<p>Our Site uses cookies and similar technologies to enhance user experience. Cookies help us analyze site traffic, remember user preferences, and improve our services. You can manage your cookie preferences through your browser settings.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">4. How We Share Your Information</h2>
						<p>We do not sell or rent your personal information. However, we may share information with:</p>
						<ul>
						    <li>(1)&nbsp;<b>Service Providers:</b> Third-party vendors assisting with website operations, analytics, and marketing.</li>
						    <li>(2)&nbsp;<b>Legal Compliance:</b> When required by law, regulation, or legal process.</li>
						    <li>(3)&nbsp;<b>Business Transfers:</b> In the case of a merger, acquisition, or sale of assets.</li>
						</ul>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">5. Data Security</h2>
						<p>We implement industry-standard security measures to protect your personal information. However, no method of transmission over the Internet is 100% secure, and we cannot guarantee absolute security.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">6. Third-Party Links</h2>
						<p>Our Site may contain links to third-party websites. We are not responsible for their privacy practices, and we encourage you to review their privacy policies.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">7. Your Rights and Choices</h2>
						<p>Depending on your location, you may have the following rights:</p>
						<ul>
						    <li>(1)&nbsp;Access, update, or delete your personal information</li>
						    <li>(2)&nbsp;Opt-out of marketing communications</li>
						    <li>(3)&nbsp;Restrict or object to data processing</li>
						    <li>(3)&nbsp;Withdraw consent for data collection</li>
						</ul>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">8. Children’s Privacy</h2>
						<p>Our Site is not intended for children under the age of 13. We do not knowingly collect personal information from children.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">9. Changes to This Privacy Policy</h2>
						<p>We may update this Privacy Policy from time to time. Any changes will be posted on this page with an updated effective date.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">10. Contact Us</h2>
						<p>Thank you for using ZettaQuiz!.</p>
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