<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="theme-color" content="#21234c" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('db_connection.php');?>
    <?php                                                                                                               
    $cat_res4=mysqli_query($con,"select * from meta_data where page='disclaimer'");
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
							<h1 class="text-justify heading_one" style="font-weight: 600">Disclaimer</h1>
						<p>Welcome to ZettaQuiz  By using this website, you agree to the <a href="https://zettaquiz.com/privacy-policy">terms!</a> outlined in this disclaimer. If you do not agree with any part of this disclaimer, please do not use our website.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">General Information</h2>
						<p>ZettaQuiz is an online platform that provides gaming-related questions, answers, quizzes, and related content for informational and entertainment purposes. While we strive to ensure the accuracy of our content, we do not guarantee that all information is correct, complete, or up to date.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">No Professional Advice</h2>
						<p>The content on this website is for entertainment and informational purposes only. It should not be considered professional gaming advice, strategy consultation, or an official source for game-related information. Any reliance you place on the information provided is strictly at your own risk.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">Third-Party Links & Content</h2>
						<p>Our website may contain links to third-party websites, products, or services. These links are provided for convenience and do not signify our endorsement. We do not control or take responsibility for the accuracy, legality, or content of external sites. Please review their respective terms and policies before engaging with them.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">Intellectual Property & Fair Use</h2>
						<p>All trademarks, game names, images, and logos appearing on ZettaQuiz belong to their respective owners. We use them under fair use guidelines for informational purposes only. If you believe that any content on our site infringes upon your copyright, please contact us, and we will address the issue promptly.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">Limitation of Liability</h2>
						<p>ZettaQuiz shall not be liable for any direct, indirect, incidental, consequential, or punitive damages arising from your use of this website. This includes but is not limited to errors, omissions, inaccuracies, website downtime, or actions taken based on our content.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">Changes to This Disclaimer</h2>
						<p>We reserve the right to update or modify this disclaimer at any time without prior notice. It is your responsibility to review this page periodically for any changes</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">Contact Us</h2>
						<p>If you have any questions or concerns regarding this disclaimer, please reach out to us at:</p>
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