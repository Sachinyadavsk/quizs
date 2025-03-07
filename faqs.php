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
							<h1 class="text-justify heading_one" style="font-weight: 600">Frequently Asked Questions (FAQ)</h1>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">1. What is ZettaQuiz?</h2>
						<p>ZettaQuiz is an interactive platform offering a wide range of <a href="https://zettaquiz.com/disclaimer">gaming-related quizzes!</a> and trivia. Users can test their knowledge across various gaming genres, stay updated with the latest gaming trends, and challenge friends to beat their scores.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">2. How do I create an account?</h2>
						<p>To create an account, click on the "Sign Up" button located at the top-right corner of the homepage. You can register using your email address or through social media accounts like Facebook or Google.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">3. Is ZettaQuiz free to use?</h2>
						<p>Yes, ZettaQuiz offers free access to a vast collection of quizzes. However, we also provide premium features and exclusive content available through a subscription plan.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">4. How can I participate in quizzes?</h2>
						<p>Once logged in, navigate to the "Quizzes" section. Browse through the available quizzes, select the one you're interested in, and click "Start Quiz" to begin.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">5. Can I create my own quizzes?</h2>
						<p>Yes, registered users can create and share their own quizzes. Go to the "Create Quiz" section, follow the prompts to design your quiz, and publish it for others to enjoy.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">6. How is my performance tracked?</h2>
						<p>After completing a quiz, your score and performance statistics will be displayed. You can view your quiz history and track your progress in the "Profile" section</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">7. Are there any rewards for high scores?</h2>
						<p>Top performers may earn badges, certificates, or other rewards. Details about the rewards system can be found in the "Rewards" section of the website.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">8. How do I report an issue or provide feedback?</h2>
						<p>If you encounter any problems or have suggestions, please visit the "Contact Us" page and fill out the feedback form. Our support team will address your concerns promptly.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">9. Is my personal information secure?</h2>
						<p>We prioritize user privacy and employ robust security measures to protect your data. For more information, please review our Privacy Policy.</p>
					</div>
					<div class="mt-5">
						<h2 class="t-c-head">10. How can I delete my account?</h2>
						<p>If you wish to delete your account, go to the "Account Settings" in your profile and select the "Delete Account" option. Please note that this action is irreversible.</p>
					    <p>Feel free to modify these questions and answers to align with the specific functionalities and policies of ZettaQuiz.com.</p>
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