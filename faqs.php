<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="theme-color" content="#21234c" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('db_connection.php');?>
    <?php                                                                                                               
    $cat_res4=mysqli_query($con,"select * from meta_data where page='faqs'");
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
							<h1 class="text-justify heading_one" style="font-weight: 600">Frequently Asked Questions (FAQs) | ZettaQuiz</h1>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">1. What is ZettaQuiz?</h2>
						<p>ZettaQuiz is an interactive <a href="https://zettaquiz.com/disclaimer">platform that offers pretty</a> some quizzes in the course of first rate training, which includes brand new information, amusement, technology, information, and greater.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">2. Is ZettaQuiz loose to apply?</h2>
						<p>Yes, ZettaQuiz gives loose quizzes for clients. However, we may additionally additionally have pinnacle charge content cloth or capabilities available for a better revel in.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">3. Do I want to create an account to play?</h2>
						<p>No, you could play quizzes without an account. However, growing an account lets in you to track your development, hold ratings, and participate in leaderboards.Quiz & Gameplay </p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">4. How do I start a quiz?</h2>
						<p>Simply visit our homepage, pick a class, and click on a quiz to start.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">5. Can I play quizzes with pals?</h2>
						<p>Yes! ZettaQuiz gives multiplayer and challenge modes in which you may compete with pals in actual time.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">6. Are there any timed quizzes?</h2>
						<p>Yes, some quizzes have a time restrict to make the sport extra exciting. Others will let you play at your very personal tempo. Scoring & Rewards</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">7. How does the scoring machine art work?</h2>
						<p>Each quiz has a totally particular scoring device based on correct solutions and time taken. Faster and additional accurate responses earn higher elements.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">8. Are there prizes for pinnacle gamers?</h2>
						<p>ZettaQuiz also can run unique contests with prizes. Keep an eye fixed on our announcements for records. xTechnical & Account Issues</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">9. I forgot my password. How can I reset it?</h2>
						<p>Click on the "Forgot Password" hyperlink at the login internet page and follow the instructions to reset your password.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">10. Can I document incorrect quiz answers?</h2>
						<p>Yes! If you find out any incorrect answers, please use the "Report" button or touch our assist group.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">11. Does ZettaQuiz paintings on cellular devices?</h2>
						<p>Absolutely! ZettaQuiz is mobile-great and may be accessed through any mobile telephone or pill. Contact & Support.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">12. How can I touch ZettaQuiz assist?</h2>
						<p>You can achieve us through our [Contact Page] or email us at guide@zettaquiz.Com.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">13. Can I propose a today's quiz problem bear in mind?</h2>
						<p>Yes! We love individual recommendations. Send your quiz thoughts through our "Suggest a Quiz" shape.</p>
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