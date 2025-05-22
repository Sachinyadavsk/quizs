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
						<p>Welcome to ZettaQuiz, your last tour spot for amusing, understanding, and <a href="https://zettaquiz.com/faqs"> difficult quizzes! At ZettaQuiz</a>, we take shipping of as real with that studying have to be appealing and beautiful. Whether you're a minutiae lover, a quiz fanatic, or a person who enjoys testing their know-how, we've got got some issue for you. Our platform gives a massive form of quizzes spanning severa topics—from full-size information and records to pop culture, technology, and past.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">Our Mission</h2>
						<p>Our motive is easy: to make reading interesting and interactive. We cause to create a space wherein clients can assignment themselves, compete with buddies, and enlarge their information in an amusing way.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">Why Choose ZettaQuiz?</h2>
						<ul>
						    <li>Diverse Topics – Quizzes on a wide type of topics</li>
                            <li>Interactive & Fun – Engaging codecs to keep you entertained</li>
                            <li>Challenge Friends – Compete, proportion, and enhance collectively</li>
                            <li> Learn & Grow – Enhance your statistics at the same time as having amusing</li>

						</ul>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">Join the ZettaQuiz Community!</h2>
						<p>Start exploring in recent times and located your facts to the test. Whether you are right here to undertaking yourself or just have a laugh, ZettaQuiz is the right location to enjoy the amusing of quizzes.Let the quiz adventure start! 🚀🎉</p>
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