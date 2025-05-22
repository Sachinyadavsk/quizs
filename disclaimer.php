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
						<p>Welcome to ZettaQuiz! By the use of this <a href="https://zettaquiz.com/privacy-policy">internet site!</a> you are well known and comply with the phrases mentioned on this disclaimer. If you no longer consider any part of this disclaimer, please refrain from the use of our internet site.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">General Information</h2>
						<p>ZettaQuiz provides quizzes, trivialities, and informational content material for leisure and educational purposes most effectively. While we attempt to make certain accuracy, we do not assure that every one content is entire, reliable, or updated. The statistics in this internet site need to not be considered as professional recommendation of any type.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">No Warranties</h2>
						<p>ZettaQuiz makes no representations or warranties concerning the accuracy, reliability, or availability of any content at the website. All content is furnished "as is" and "as to be had" without any specific or implied warranties.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">Limitation of Liability</h2>
						<p>Under no occasions shall ZettaQuiz, its owners, affiliates, personnel, or partners be chargeable for any direct, indirect, incidental, consequential, or special damages arising from the use or lack of ability to apply our website, even supposing we have been advised of the possibility of such damages.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">External Links Disclaimer</h2>
						<p>ZettaQuiz may also comprise hyperlinks to external web sites that aren't controlled or maintained by way of us. We no longer propose, guarantee, or assume obligation for any content, offerings, or merchandise furnished by means of third-party websites. Visiting any connected website is at your own risk.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">Affiliate Disclaimer</h2>
						<p>Some hyperlinks on ZettaQuiz can be associate links, that means we may additionally earn a fee if you purchase products or services via them. However, this does not affect our content material’s integrity or objectivity.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">User-Generated Content</h2>
						<p>ZettaQuiz can also allow users to publish content, remarks, or participate in discussions. We aren't responsible for any consumer-generated content and do not recommend any critiques expressed by users.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">Changes to This Disclaimer</h2>
						<p>We reserve the proper to replace or modify this disclaimer at any time without prior notice. It is your responsibility to check this web page periodically for any changes.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">Contact Us</h2>
						<p>If you have any questions or worries about this disclaimer, please touch us at:</p>
						<p>📧 Email: info@zettamobi.com</p>
						<p>🌐 Website: www.Zettaquiz.Com</p>
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