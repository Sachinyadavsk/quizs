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
            </style>
            <script src="https://zettaquiz.com/assets/js/quiz.js"></script>

                      <?php 
                        include("db_connection.php"); 
                        $game_id = $_GET['game_id'];
                        $score = $_GET['correct_answers'];
                        $games_result = $con->query("SELECT * FROM games WHERE id ='$game_id'");
                        $game = $games_result->fetch_assoc();
                        ?>

                        <div class="detail_scr">
                            <div class="contest_top contest_mid">
                                <img src="https://zettaquiz.com/images/games/<?php echo $game['image']; ?>" alt="icon">
                                <div class="contest_info">
                                    <p class="font_sm clr_lght score_ids" style="font-size:18px;font-weight: bold;"><?php echo $game['name']; ?></p>
                                    <!-- p class="font_lg clr_lght"> </p-->
                                    <!-- p class="font_sm clr_lght tme_start"></p-->
                                </div>
                            </div>
                            <div class="score">
                                <p class="clr_lght font_sm rank_dis">Based on your score, you won</p>
                                <h2 class="clr_lght font_lg scr_inf"><?php echo $score?> K &nbsp;&nbsp;pt.</h2>
                            </div>
                            <br>
                            <div class="qualify btn_online">
                                <a href="leaderboard"><button class="btn_green btn_full btn_yello">Leaderboard</button></a>
                                <a href="https://zettaquiz.com/"><button class="btn_green">Home</button></a>
                            </div>
                        </div>



                  <?php include("footer.php"); ?>
        </div>
    </div>

    <script>
    $(document).ready(function() {
            var currentScore = getCookie('correct_answers') ? parseInt(getCookie('correct_answers')) : 0;
            var newScore = <?php echo $score; ?>;
            var updatedScore = currentScore + newScore;
            if (updatedScore > 0) {
                $('#points-display').text(updatedScore + ' Pt.').removeClass('negative').addClass('positive');
            } else {
                $('#points-display').text('0 Pt.').removeClass('positive').addClass('negative');
            }
            document.cookie = "correct_answers=" + updatedScore + "; path=/; max-age=" + (60 * 60 * 24 * 30);
        });

        function getCookie(name) {
            var match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
            if (match) return match[2];
            return null;
        }
</script>

    <script src="https://zettaquiz.com/assets/js/main.js"></script>
    <script src="https://zettaquiz.com/assets/js/materialize.min.js"></script>
</body>

</html>