<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="theme-color" content="#21234c" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('db_connection.php');?>
    <?php                                                                                                               
    $cat_res4=mysqli_query($con,"select * from meta_data where page='leaderboard'");
    $cat_arr4=array();
    while($row4=mysqli_fetch_assoc($cat_res4)){
    $cat_arr4[]=$row4;    
    }
    foreach($cat_arr4 as $list){
      echo htmlspecialchars_decode($list['data']);
     }?>
	<?php include("header.php"); ?>

			<div class="detail_scr">
				<div class="ldrbrd_top">
					<div class="ldr_tp_rnk">
						<div class="ranks_tp">
							<img src="https://zettaquiz.com/assets/flags_50/in.png" alt="flag" class="flag">
							<p>S2421933</p>
							<p>91 K</p>
						</div>
						<div class="ranks_tp">
							<img src="https://zettaquiz.com/assets/flags_50/in.png" alt="flag" class="flag">
							<p>C2419482</p>
							<p>48 K</p>
						</div>
						<div class="ranks_tp">
							<img src="https://zettaquiz.com/assets/flags_50/in.png" alt="flag" class="flag">
							<p>F2419121</p>
							<p>43 K</p>
						</div>
					</div>
				</div>

				<!--leaderboard more-->
				<div class="ldr_mre">

					<div class="ldr_ttl_top">
						<p>Rank</p>
						<p class="w_5_spc">Players</p>
						<p>Points</p>
					</div>
					<div class="ldr_ttl_top ldr_rnk_bg">
						<p>4</p>
						<p class="w_5_spc ldr_rn_username"><img src="https://zettaquiz.com/assets/flags_50/cn.png" alt="country flag"
								class="usr_nm_country"> K2419525</p>
						<p class="rnk_rght_22">36.1 K</p>
					</div>
					<div class="ldr_ttl_top ldr_rnk_bg">
						<p>5</p>
						<p class="w_5_spc ldr_rn_username"><img src="https://zettaquiz.com/assets/flags_50/mx.png" alt="country flag"
								class="usr_nm_country"> P2419027</p>
						<p class="rnk_rght_22">35.3 K</p>
					</div>
					<div class="ldr_ttl_top ldr_rnk_bg">
						<p>6</p>
						<p class="w_5_spc ldr_rn_username"><img src="https://zettaquiz.com/assets/flags_50/us.png" alt="country flag"
								class="usr_nm_country"> I2424596</p>
						<p class="rnk_rght_22">30 K</p>
					</div>
					<div class="ldr_ttl_top ldr_rnk_bg">
						<p>7</p>
						<p class="w_5_spc ldr_rn_username"><img src="https://zettaquiz.com/assets/flags_50/in.png" alt="country flag"
								class="usr_nm_country"> O2421457</p>
						<p class="rnk_rght_22">25 K</p>
					</div>
					<div class="ldr_ttl_top ldr_rnk_bg">
						<p>8</p>
						<p class="w_5_spc ldr_rn_username"><img src="https://zettaquiz.com/assets/flags_50/in.png" alt="country flag"
								class="usr_nm_country"> C2417396</p>
						<p class="rnk_rght_22">24 K</p>
					</div>
					<div class="ldr_ttl_top ldr_rnk_bg">
						<p>9</p>
						<p class="w_5_spc ldr_rn_username"><img src="https://zettaquiz.com/assets/flags_50/in.png" alt="country flag"
								class="usr_nm_country"> H2417244</p>
						<p class="rnk_rght_22">23 K</p>
					</div>
					<div class="ldr_ttl_top ldr_rnk_bg">
						<p>10</p>
						<p class="w_5_spc ldr_rn_username"><img src="https://zettaquiz.com/assets/flags_50/et.png" alt="country flag"
								class="usr_nm_country"> G2420737</p>
						<p class="rnk_rght_22">23 K</p>
					</div>
					<div class="ldr_ttl_top ldr_rnk_bg">
						<p>11</p>
						<p class="w_5_spc ldr_rn_username"><img src="https://zettaquiz.com/assets/flags_50/in.png" alt="country flag"
								class="usr_nm_country"> E2420315</p>
						<p class="rnk_rght_22">19.4 K</p>
					</div>
					<div class="ldr_ttl_top ldr_rnk_bg">
						<p>12</p>
						<p class="w_5_spc ldr_rn_username"><img src="https://zettaquiz.com/assets/flags_50/in.png" alt="country flag"
								class="usr_nm_country"> Y2424448</p>
						<p class="rnk_rght_22">17.3 K</p>
					</div>
					<div class="ldr_ttl_top ldr_rnk_bg">
						<p>13</p>
						<p class="w_5_spc ldr_rn_username"><img src="https://zettaquiz.com/assets/flags_50/in.png" alt="country flag"
								class="usr_nm_country"> U2418331</p>
						<p class="rnk_rght_22">14.8 K</p>
					</div>
					<div class="ldr_ttl_top ldr_rnk_bg">
						<p>14</p>
						<p class="w_5_spc ldr_rn_username"><img src="https://zettaquiz.com/assets/flags_50/us.png" alt="country flag"
								class="usr_nm_country"> Q2422702</p>
						<p class="rnk_rght_22">13 K</p>
					</div>
					<div class="ldr_ttl_top ldr_rnk_bg">
						<p>15</p>
						<p class="w_5_spc ldr_rn_username"><img src="https://zettaquiz.com/assets/flags_50/in.png" alt="country flag"
								class="usr_nm_country"> T2424932</p>
						<p class="rnk_rght_22">13 K</p>
					</div>
					<div class="ldr_ttl_top ldr_rnk_bg">
						<p>16</p>
						<p class="w_5_spc ldr_rn_username"><img src="https://zettaquiz.com/assets/flags_50/in.png" alt="country flag"
								class="usr_nm_country"> T2419701</p>
						<p class="rnk_rght_22">12 K</p>
					</div>
					<div class="ldr_ttl_top ldr_rnk_bg">
						<p>17</p>
						<p class="w_5_spc ldr_rn_username"><img src="https://zettaquiz.com/assets/flags_50/in.png" alt="country flag"
								class="usr_nm_country"> P2422595</p>
						<p class="rnk_rght_22">11 K</p>
					</div>
					<div class="ldr_ttl_top ldr_rnk_bg">
						<p>18</p>
						<p class="w_5_spc ldr_rn_username"><img src="https://zettaquiz.com/assets/flags_50/ng.png" alt="country flag"
								class="usr_nm_country"> F2425409</p>
						<p class="rnk_rght_22">11 K</p>
					</div>
					<div class="ldr_ttl_top ldr_rnk_bg">
						<p>19</p>
						<p class="w_5_spc ldr_rn_username"><img src="https://zettaquiz.com/assets/flags_50/in.png" alt="country flag"
								class="usr_nm_country"> C2412909</p>
						<p class="rnk_rght_22">10 K</p>
					</div>
					<div class="ldr_ttl_top ldr_rnk_bg">
						<p>20</p>
						<p class="w_5_spc ldr_rn_username"><img src="https://zettaquiz.com/assets/flags_50/in.png" alt="country flag"
								class="usr_nm_country"> O2419127</p>
						<p class="rnk_rght_22">10 K</p>
					</div>
					<div class="disclmer qualify" style="margin-top: 17px;color: white;font-size: 14px;">
						<p>Note : LeaderBoard will be updated in Every 1 Hour.</p>
					</div>
				</div>
				
				  <?php include("footer.php"); ?>
				 
			</div>

		</div>
	</div>
	<script src="https://zettaquiz.com/assets/js/main.js"></script>
	<script src="https://zettaquiz.com/assets/js/materialize.min.js"></script>
</body>

</html>