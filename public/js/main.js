(function(){

$('form.ajax').on('submit', function(e){

    var form = $(this);
    var url = form.attr('action');
    var type = form.find('input[name="_method"]').val() || "POST";

    $.ajax({
        url: url,
        type: type,
        dataType:'json',
        data: form.serialize(),
        success: function(response) {
            var isCorrectText;
            if (response.replyResult) {
                isCorrectText = "Correct!";
            } else {
                isCorrectText = "Hm... Not quite.";
            }
            $('.reply_result').html(isCorrectText);
        }
    });

    e.preventDefault();
});

})();