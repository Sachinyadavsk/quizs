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
						<p class="text-justify" style="font-weight: 600"> Welcome to <a href="https://zettaquiz.com/">ZettaQuiz!</a> These Terms and Conditions outline the rules and regulations for the use of our website, https://zettaquiz.com/ (the "Website"). By accessing or using this Website, you accept and agree to comply with these Terms. If you do not agree with any part of these Terms, you should discontinue use of the Website immediately.</p>
					</div>
					<hr>
					<div class="mt-5">
						<h2 class="t-c-head heading_two">1. Definitions</h2>
						<div class="mt-5">
							<div class="t-c-list">
								<ul class="text-justify">
									<li>(1) "ZettaQuiz," "we," "our," or "us" refers to the owners and operators of the Website</li>
									<li>(2) "User," "you," or "your" refers to any individual accessing or using the Website.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head heading_two">2. Use of the Website</h2>
						<div class="mt-5">
							<div class="t-c-list">
								<ul class="text-justify">
									<li>(1) You must be at least 13 years old to use this Website. If you are under 18, you must have parental or guardian permission.</li>
									<li>(2) You agree to use the Website only for lawful purposes and in a way that does not infringe the rights of, restrict, or inhibit anyone else’s use and enjoyment of the Website.</li>
									<li>(3) You are responsible for ensuring the confidentiality of your account credentials, if applicable.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head heading_two">3. User Content</h2>
						<div class="mt-5">
							<div class="t-c-list">
								<ul class="text-justify">
									<li>(1) Any quizzes, comments, or other materials you submit to the Website ("User Content") must not contain offensive, illegal, or infringing content.</li>
									<li>(2) By submitting User Content, you grant ZettaQuiz a worldwide, non-exclusive, royalty-free license to use, distribute, and display your content on the Website.</li>
									<li>(3) We reserve the right to remove any content that violates these Terms or is deemed inappropriate at our discretion.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head heading_two">4. Intellectual Property</h2>
						<div class="mt-5">
							<div class="t-c-list">
								<ul class="text-justify">
									<li>(1) All content on the Website, including but not limited to text, images, logos, and software, is the property of ZettaQuiz or its licensors and is protected by applicable copyright and trademark laws.</li>
									<li>(2) You may not copy, distribute, modify, or use any content without our prior written permission.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head heading_two">5. Disclaimers & Limitations of Liability</h2>
						<div class="mt-5">
							<div class="t-c-list">
								<ul class="text-justify">
									<li>(1) The Website is provided "as is" without warranties of any kind, either express or implied.</li>
									<li>(2) We do not guarantee the accuracy, completeness, or reliability of any content on the Website.</li>
									<li>(3) ZettaQuiz shall not be liable for any direct, indirect, incidental, consequential, or punitive damages arising from your use of the Website.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head heading_two">6. Third-Party Links</h2>
						<div class="mt-5">
							<div class="t-c-list">
								<ul class="text-justify">
									<li>(1) The Website may contain links to third-party websites. We are not responsible for the content, privacy policies, or practices of any third-party sites.</li>
									<li>(2) Your interactions with third-party sites are at your own risk.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head heading_two">7. Termination</h2>
						<div class="mt-5">
							<div class="t-c-list">
								<ul class="text-justify">
									<li>(1) We reserve the right to suspend or terminate your access to the Website if you violate these Terms.</li>
									<li>(2) Upon termination, any rights and licenses granted to you will cease immediately.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head heading_two">8. Changes to These Terms</h2>
						<div class="mt-5">
							<div class="t-c-list">
								<ul class="text-justify">
									<li>(1) We may update these Terms at any time without prior notice. The latest version will be posted on this page.</li>
									<li>(2) Your continued use of the Website after any modifications constitutes acceptance of the updated Terms.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head heading_two">9. Governing Law</h2>
						<div class="mt-5">
							<div class="t-c-list">
								<ul class="text-justify">
									<li>(1) These Terms shall be governed by and interpreted in accordance with the laws of [Insert Jurisdiction].</li>
									<li>(2) Any disputes shall be resolved exclusively in the courts of [Insert Jurisdiction].</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head heading_two">Contact Us</h2>
						<div class="mt-5">
							<div class="t-c-list">
								<ul class="text-justify">
									<li>(1)  If you have any questions about these Terms, please contact us at:</li>
									<li>(2)  <b>Website:</b> https://zettaquiz.com/</li>
								</ul>
							</div>
						</div>
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