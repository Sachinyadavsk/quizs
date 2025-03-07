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

            <div class="detail_scr">
                <?php if($_REQUEST['contest_id']!=''){
                   $vg=$_REQUEST['contest_id'];
                   }else{
                   header("https://zettaquiz.com/");
                   } ?>
                <?php 
                
               include("db_connection.php");
               $contest_id = str_replace('-',' ', $vg);
               $games = $con->query("SELECT * FROM games WHERE name='$contest_id'");

               if ($games->num_rows > 0) {
                   while ($game = $games->fetch_assoc()) {
              ?>
                <div class="contest_top contest_mid">
                    <img src="https://zettaquiz.com/images/games/<?php echo $game['image']?>" alt="icon">
                    <div class="contest_info">
                        <p class="font_sm clr_lght">
                            <?php echo $game['name']?>
                        </p>
                        <p class="font_lg clr_lght">Win PT. 25000</p>
                        <p class="font_sm clr_lght tme_start">Winner announcement @ 12:00 PM</p>
                    </div>
                </div>
                <ul class="clr_lght">
                    <li class="font_sm">
                        <?php echo $game['short_desc']?>
                    </li>
                </ul>
                <div class="contest_top contest_bottom cntr_btn">
                    <button class="btn_green btn_full play_contest"
                        rel="play-game/<?= $game['id'] ?>">Play</button>
                </div>
                <?php
                    }
                } else {
                    echo '';
                }
                ?>
            </div>
            <script>
                $('.play_contest').on('click', function(event) {
                    var value = $(this).attr('rel');
                    var base_url = "https://zettaquiz.com/";
                    window.location.href = base_url+value+"";
                });
                </script>
                
            <?php include("footer.php"); ?>

        </div>
    </div>
    <script src="https://zettaquiz.com/assets/js/main.js"></script>
    <script src="https://zettaquiz.com/assets/js/materialize.min.js"></script>
</body>

</html>