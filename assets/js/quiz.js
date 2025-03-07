$(document).ready(function() {
    load_data();
});

function load_data() {
    var game_id = $.urlParam('game_id');
    var current_question = $('#current_ques_no').val();
    //var get_base_url = $('#get_base_url').val();

    $.ajax({
        url: 'http://localhost/quiz/cqstsapi.php',
        type: 'POST',
        data: { 'game_id': game_id, 'question_index': current_question },
        success: function(response) {
            var data = JSON.parse(response);
            if (data.status == 'success') {
                // Ensure the elements exist before trying to set values
                if (document.getElementById("question_text")) {
                    $('#question_text').text(data.question);
                }
                if (document.getElementById("question_number")) {
                    $('#question_number').text(data.current_question);
                }
                if (document.getElementById("total_questions")) {
                    $('#total_questions').text(data.total_questions);
                }

                // Display the options dynamically
                var optionsHtml = '';
                data.answers.forEach(function(answer) {
                    optionsHtml += '<button type="button" class="option myoptcls" data-answer-id="' + answer.id + '" data-correct="' + answer.is_correct + '">' + answer.answer + '</button>';
                });
                $('#answer_options').html(optionsHtml);
            } else {
                alert(data.message);
            }
        }
    });
}


$(document).on("click", '.myoptcls', function(e) {
    saveAnswerData($(this));
});

function saveAnswerData(cur_obj) {
    var game_id = $.urlParam('game_id');
    var correct_answer = $('#correct_answer').val();
    var answer_given = $.trim(cur_obj.attr('data-answer-id'));
    var current_ques_no = $('#current_ques_no').val();
    var total_time = $('#questtimer').val();
    var question_id = $('#ques_id').val();
    
    var skip_ques = (answer_given == '') ? "1" : "0";
    var time_taken = Math.abs(total_time);
    
    $.ajax({
        url: 'http://localhost/quiz/cdsmry.php',
        type: 'POST',
        data: {
            'game_id': game_id,
            'correct_answer': correct_answer,
            'answer_given': answer_given,
            'time_taken': time_taken,
            'question_index': current_ques_no,
            'question_id': question_id,
            'skip_question': skip_ques
        },
        success: function(resp) {
            if (current_ques_no >= $('#number_of_questions').val()) {
                window.location.href = "result.php?game_id=" + game_id + "&score=" + $('#score').val();
            } else {
                $('#current_ques_no').val(parseInt(current_ques_no) + 1);
                load_data();
            }
        }
    });
}

function showCorrectOption(answer_given, correct_answer) {
    $('.myoptcls').each(function() {
        var data = $(this).attr('data-answer-id');
        if (data == answer_given && answer_given == correct_answer) {
            $(this).addClass('right_ans');
        } else if (data == answer_given && answer_given != correct_answer) {
            $(this).addClass('wrong_ans');
        }
        $(this).removeClass('myoptcls'); 
    });
}

$.urlParam = function(name) {
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results == null) {
        return null;
    }
    return decodeURI(results[1]) || 0;
};
