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

            <div class="load__question">
    <div class="question_src detail_scr">
        <div class="question">
            <p class="num_ques font_lg clr_wht">
                [<span class="font_sm clr_lght">
                    <span id="question_number">1</span> / <span id="total_questions">10</span>
                </span>]
            </p>
            <p class="ques clr_wht font_lg" id="question_text">Loading question...</p>
        </div>

        <div class="options quiz_options" id="answer_options"></div>
    </div>

    <input id="correct_answer" type="hidden" value="0">
    <input id="current_ques_no" type="hidden" value="1">
    <input id="number_of_questions" type="hidden" value="9">
    <input id="ques_id" type="hidden" value="55065791843">
    <input id="get_base_url" type="hidden" value="https://zettaquiz.com/">
    <input id="correct_answers_count" type="hidden" value="0">
    
        <?php if($_REQUEST['game_id']!=''){
                  $gm=$_REQUEST['game_id'];
                   }else{
                   header("https://zettaquiz.com/");
                   } ?>
            <script>
       $(document).ready(function () {
    load_data();
});

function load_data() {
    const game_id = <?php echo $gm;?>;
    const current_question = $('#current_ques_no').val(); // Current question index
    $.ajax({
        url: $('#get_base_url').val() + 'cqstsapi.php',
        type: 'POST',
        data: { game_id, question_index: current_question }, // Passing current question index
        success: function (response) {
            const data = JSON.parse(response);
            if (data.status === 'success') {
                $('#question_text').text(data.question);
                $('#question_number').text(data.current_question);
                $('#total_questions').text(data.total_questions);

                let optionsHtml = '';
                data.answers.forEach(answer => {
                    optionsHtml += `
                        <button 
                            type="button" 
                            class="option myoptcls" 
                            data-answer-id="${answer.id}" 
                            data-correct="${answer.is_correct}">
                            ${answer.answer}
                        </button>`;
                });
                $('#answer_options').html(optionsHtml);
            } else {
                alert(data.message);
            }
        }
    });
}

$(document).on("click", ".myoptcls", function () {
    const selected = $(this);
    const isCorrect = selected.attr('data-correct') === '1'; 
    const correctColor = isCorrect ? 'green' : 'red';

    $(".myoptcls").css('background-color', '');
    selected.css('background-color', correctColor);
    if (isCorrect) {
        const correctAnswersCount = parseInt($('#correct_answers_count').val()) + 1;
        $('#correct_answers_count').val(correctAnswersCount);
    }

    $(".myoptcls").prop("disabled", true); 
    saveAnswerData(selected);
});

function saveAnswerData(cur_obj) {
    const game_id = <?php echo $gm;?>;
    const correct_answer = $('#correct_answer').val();
    const answer_given = cur_obj.attr('data-answer-id');
    const current_ques_no = $('#current_ques_no').val();
    const question_id = $('#ques_id').val();
    const total_questions = parseInt($('#number_of_questions').val());
    const correctAnswersCount = parseInt($('#correct_answers_count').val());

    $.ajax({
        url: $('#get_base_url').val() + 'cdsmry.php',
        type: 'POST',
        data: {
            game_id,
            correct_answer,
            answer_given,
            question_index: current_ques_no,
            question_id
        },
        success: function () {
            const nextQuestion = parseInt(current_ques_no) + 1;
            if (nextQuestion > total_questions) {
                // Redirect to result page with correct answer count
                window.location.href = "https://zettaquiz.com/result.php?game_id=" + game_id + "&correct_answers=" + correctAnswersCount;
            } else {
                $('#current_ques_no').val(nextQuestion);
                load_data();
            }
        }
    });
}

$.urlParam = function (name) {
    const results = new RegExp('[?&]' + name + '=([^&#]*)').exec(window.location.href);
    return results ? decodeURIComponent(results[1]) : null;
};

    </script>
</div>


             <?php include("footer.php"); ?>
        </div>
    </div>
    <script src="https://zettaquiz.com/assets/js/main.js"></script>
    <script src="https://zettaquiz.com/assets/js/materialize.min.js"></script>
</body>

</html>