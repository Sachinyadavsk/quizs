<?php
include 'db_connection.php';
$game_id = $_POST['game_id'];
$question_id = $_POST['question_id'];
$answer_given = $_POST['answer_given'];
$correct_answer = $_POST['correct_answer'];
$time_taken = $_POST['time_taken'];
$current_ques_no = $_POST['current_ques_no'];
$skip_question = $_POST['skip_ques'];
$score = $_POST['score'];

$is_correct = ($correct_answer == $answer_given) ? 1 : 0;
$query = "INSERT INTO game_answers (game_id, question_id, answer_given, correct_answer, time_taken, current_ques_no, skip_ques, score) 
          VALUES ('$game_id', '$question_id', '$answer_given', '$correct_answer', '$time_taken', '$current_ques_no', '$skip_question', '$score')";
mysqli_query($con, $query);

if ($is_correct=='1') {
    $score_update_query = "UPDATE games SET score = score + $score WHERE game_id = '$game_id'";
    mysqli_query($con, $score_update_query);
}
echo "success";
?>
