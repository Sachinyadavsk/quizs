<?php
include("db_connection.php");

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$limit = isset($_GET['limit']) ? intval($_GET['limit']) : 10;
$offset = ($page - 1) * $limit;

$games = $con->query("SELECT * FROM games WHERE status='1' LIMIT $offset, $limit");

if ($games->num_rows > 0) {
    while ($game = $games->fetch_assoc()) {
        ?>
        <a href="https://zettaquiz.com/view-game/<?php echo str_replace(' ','-', $game['name']); ?>">
            <div class="contest">
                <div class="contest_top">
                    <div class="live">
                        <span class="Live_dot"></span>
                        <p class="font_sm">Live</p>
                    </div>
                    <p class="font_sm clr_lght"><?php echo $game['game_play_users']?> Users</p>
                </div>
                <div class="contest_top contest_mid">
                    <img src="https://zettaquiz.com/images/games/<?php echo $game['image']?>"
                         alt="<?php echo $game['name']?>">
                    <div class="contest_info">
                        <p class="font_sm clr_lght"><?php echo $game['name']?></p>
                        <p class="font_lg clr_lght">Win PT. <?php echo $game['game_price']?> </p>
                        <p class="font_sm clr_lght tme_start">Winner announcement @ <?php 
                        $time = $game['game_time'];
                        $formatted_time = date("g:i A", strtotime($time));
                        echo $formatted_time;
                        ?></p>
                    </div>
                </div>
                <div class="contest_top contest_bottom">
                    <p class="font_sm">ENTRY : <span class="clr_lght">FREE</span></p>
                    <button class="btn_green" rel="">Play</button>
                </div>
            </div>
        </a>
        <?php
    }
} else {
    echo ''; // No more games
}
?>
