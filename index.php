<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="theme-color" content="#21234c" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('db_connection.php');?>
    <?php                                                                                                               
    $cat_res4=mysqli_query($con,"select * from meta_data where page='home'");
    $cat_arr4=array();
    while($row4=mysqli_fetch_assoc($cat_res4)){
    $cat_arr4[]=$row4;    
    }
    foreach($cat_arr4 as $list){
      echo htmlspecialchars_decode($list['data']);
     }?>
	<?php include("header.php"); ?>

			<style>
				.cookie_cns {
					background: #fff;
					padding: 5px;
					display: grid;
					grid-template-columns: 1fr;
					align-items: center;
					justify-content: center;
					position: fixed;
					bottom: 0;
					z-index: 9999;
					box-shadow: 0 0 16px #000000;
				}

				.cookie_cont {
					text-align: left;
					margin-bottom: 10px;
				}

				.cookie_cont>h2 {
					margin: 0;
					font-size: 16px;
					font-weight: 600;
					margin-bottom: 10px;
					color: #282828;
					text-align: center;
				}

				.cookie_cont>p {
					margin: 0;
					font-size: 10px;
					font-weight: bold;
					color: #282828;
				}

				.cookie_cont>p>a {
					margin-left: 5px;
				}

				.acpt_cookie {
					background: #00c50f;
					border: 1px solid #00c50f;
					padding: 5px 40px;
					color: #ffffff;
					border-radius: 10px;
					cursor: pointer;
				}

				#cookieNotice {
					justify-content: center;
					align-items: center;
					width: 100%;
				}

				.ldr_height {
					height: 62vh;
					display: flex;
					align-items: center;
					font-size: 12px;
					flex-direction: column;
					color: #ffffff;
					margin-top: 10%;
				}

				.ldr_height>img {
					width: auto;
					height: 80px;
					filter: contrast(50);
				}
				.btn_green {
					background-color: #28a745;
					color: white;
					border: none;
					padding: 10px 20px;
					cursor: pointer;
					border-radius: 5px;
				}

				.btn_green:disabled {
					background-color: #b5b5b5;
					color: #ffffff;
					cursor: not-allowed;
				}
			</style>

				<div class="center ldr_height" id="default_loader" style="display: none;">
					<p>Loading Your Favorite Quizzes!</p>
					<img src="https://zettaquiz.com/assets/images/loader.gif" alt="loader">
				</div>
				<h1 class="font_lg" style="margin-left: 5px;margin-top: 5px;">Your Username, </h1>
				<div class="topcontainer" id="games_container">
					<!-- Games data will be dynamically loaded here -->
				</div>

				<div class="pagination ctr">
					<button id="prev_page" class="btn_green" disabled><< Previous</button>
					<button id="next_page" class="btn_green">Next >></button>
				</div>

				<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
				<script>
					$(document).ready(function () {
						let currentPage = 1;
						const limit = 10;

						function fetchGames(page) {
							$('#default_loader').show();

							$.ajax({
								url: 'https://zettaquiz.com/fetch_games.php',
								type: 'GET',
								data: { page: page, limit: limit },
								success: function (response) {
									$('#games_container').html(response.trim());
									$('#default_loader').hide();

									// Enable/disable pagination buttons and update their colors
									if (page === 1) {
										$('#prev_page').attr('disabled', true).addClass('inactive');
									} else {
										$('#prev_page').attr('disabled', false).removeClass('inactive');
									}

									if (response.trim() === '' || response.trim().length < limit) {
										$('#next_page').attr('disabled', true).addClass('inactive');
									} else {
										$('#next_page').attr('disabled', false).removeClass('inactive');
									}
								},
								error: function () {
									alert('An error occurred while fetching games.');
									$('#default_loader').hide();
								}
							});
						}

						// Initial fetch
						fetchGames(currentPage);

						// Next button click
						$('#next_page').click(function () {
							currentPage++;
							fetchGames(currentPage);
						});

						// Previous button click
						$('#prev_page').click(function () {
							if (currentPage > 1) {
								currentPage--;
								fetchGames(currentPage);
							}
						});
					});


				</script>


			 <?php include("footer.php"); ?>

		</div>
	</div>
	<script src="https://zettaquiz.com/assets/js/main.js"></script>
	<script src="https://zettaquiz.com/assets/js/materialize.min.js"></script>
	<?php include('cookie.php');?>
</body>

</html>