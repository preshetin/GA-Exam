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

            form.find('label').each(function (index) {
                var variantAnswerId = $(this).find("input").val();
                if (variantAnswerId == response.chosenAnswerId) {
                    var answerStatusIcon;
                    if (response.replyResult) {
                        answerStatusIcon = "<span class=\"glyphicon glyphicon-ok-sign\" style=\"color:green;\"></span>";
                    } else {
                        answerStatusIcon = "<span class=\"glyphicon glyphicon-remove-sign\" style=\"color:red;\"></span>";
                    }
                    $(this).prepend(answerStatusIcon);
                }

                if (variantAnswerId == response.correctAnswerId && !response.replyResult ) {
                    $(this).prepend('<span class="glyphicon glyphicon-ok-sign" style="color:green;"></span>');
                }
            });

            form.find('input[type=radio]').hide();
            form.find('input[type=submit]').hide();
        }
    });

    e.preventDefault();
});

})();