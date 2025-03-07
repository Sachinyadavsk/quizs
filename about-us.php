<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="theme-color" content="#21234c" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('db_connection.php');?>
    <?php                                                                                                               
    $cat_res4=mysqli_query($con,"select * from meta_data where page='about-us'");
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
							<h1 class="text-justify heading_one" style="font-weight: 600">About Us</h1>
					</div>
					<div class="mt-5">
						<p>Welcome to ZettaQuiz, your ultimate destination for engaging and challenging <a href="https://zettaquiz.com/faqs">gaming quizzes!</a>. Our platform is designed to test your knowledge across a wide array of gaming genres, from classic arcade titles to the latest releases.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">Our Mission</h2>
						<p>At ZettaQuiz, we aim to create an interactive and educational environment where gamers can assess and expand their knowledge. We believe that learning about games should be as enjoyable as playing them.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">3. Is ZettaQuiz free to use?</h2>
						<p>Yes, ZettaQuiz offers free access to a vast collection of quizzes. However, we also provide premium features and exclusive content available through a subscription plan.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">What We Offer</h2>
						<ul>
						    <li><b>Diverse Quiz Categories:</b> Explore quizzes covering various gaming platforms and genres, ensuring there's something for every gaming enthusiast.</li>
                            <li><b>Regular Updates:</b> Our team consistently adds new quizzes to keep the content fresh and aligned with the latest gaming trends.</li>
                            <li><b>Community Engagement:</b> Join a community of like-minded gamers, share your scores, and challenge friends to beat your high scores.</li>

						</ul>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">Join Us</h2>
						<p>Whether you're a casual gamer or a hardcore enthusiast, ZettaQuiz offers a fun and informative way to test your gaming knowledge. Dive into our quizzes and see how you stack up against other gamers worldwide.</p>
						<p>Thank you for choosing ZettaQuiz as your go-to platform for gaming quizzes. We look forward to challenging and entertaining you!</p>
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