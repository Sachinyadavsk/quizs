<?php
require('top.inc.php');

$game_id = '';
$question = '';
$msg = '';
$image_required = 'required';

if (isset($_GET['id']) && $_GET['id'] != '') {
    $image_required = '';
    $id = get_safe_value($con, $_GET['id']);
    $res = mysqli_query($con, "SELECT * FROM questions WHERE id='$id'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        $row = mysqli_fetch_assoc($res);
        $game_id = $row['game_id'];
        $question = $row['question'];
    } else {
        header('location:questions.php');
        die();
    }
}

if (isset($_POST['submit'])) {
    $game_id = get_safe_value($con, $_POST['game_id']);
    $question = get_safe_value($con, $_POST['question']);

    $res = mysqli_query($con, "SELECT * FROM questions WHERE question='$question'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        if (isset($_GET['id']) && $_GET['id'] != '') {
            $getData = mysqli_fetch_assoc($res);
            if ($id == $getData['id']) {
                // Allowed to proceed for update
            } else {
                $msg = "Questions already exists";
            }
        } else {
            $msg = "Questions already exists";
        }
    }

 
        
        if ($msg == '') {
            if (isset($_GET['id']) && $_GET['id'] != '') {
                if ($image != '') {
                    $update_sql = "UPDATE questions SET game_id='$game_id', question='$question', status='0' WHERE id='$id'";
                } else {
                    $update_sql = "UPDATE questions SET game_id='$game_id', question='$question', status='0' WHERE id='$id'";
                }
                mysqli_query($con, $update_sql);
            } else {
                mysqli_query($con, "INSERT INTO questions (game_id, question, status) VALUES ('$game_id', '$question','0')");
            }
            header('location:questions.php');
            die();
        }
    
}
?>

<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><strong>Manage Question</strong><small></small></div>
                    <form method="post" enctype="multipart/form-data">
                        <div class="card-body card-block">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="categories" class="form-control-label">Games Type</label>
                                        <select class="form-control" name="game_id" id="game_ids" required>
                                            <option value="">Select a Question Type</option>
                                            <?php
                                            $sql = "SELECT * FROM games";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $selected = ($row['id'] == $game_id) ? 'selected' : '';
                                                echo "<option value='{$row['id']}' {$selected}>{$row['name']}</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="question" class="form-control-label">Question Name</label>
                                        <input type="text" name="question" placeholder="Enter question name" class="form-control" required value="<?php echo $question ?>">
                                    </div>
                                    
                                </div>
                            </div>
                            <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info float-right">
                                <span id="payment-button-amount">Submit</span>
                            </button>
                            <div class="field_error">
                                <?php echo $msg ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function get_sub_cat(sub_cat_id) {
        var categories_id = jQuery('#game_ids').val();
        jQuery.ajax({
            url: 'get_sub_cat.php',
            type: 'post',
            data: 'game_id=' + game_id,
            success: function (result) {
                jQuery('#game_ids').html(result);
            }
        });
    }
</script>

<?php
require('footer.inc.php');
?>
<script>
<?php
if (isset($_GET['id'])) {
?>
get_sub_cat('<?php echo $game_id ?>');
<?php } ?>
</script>
