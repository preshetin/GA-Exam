(function(){

    // Apply question form validation.
    if ($('form.two_variants').length) {
        $('form.two_variants').validate({
            rules: {
                'chosenAnswers[]': {
                    minlength: 2,
                    maxlength:2
                }
            },
            errorLabelContainer: "#validation-error-container",
            messages: {
                'chosenAnswers[]': "Выберите два варианта ответа"
            }
        });
    } else {
        $('form.ajax').validate({
            errorLabelContainer: "#validation-error-container",
            messages: {
                chosenAnswer: "Выберите вариант ответа",
                'chosenAnswers[]': "Выберите все подходящие варианты"
            }
        });
    }

    //When checkboxes/radios checked/unchecked, toggle background color
    $('.challenge').on('click','input[type=radio]',function() {
        $(this).closest('form.question').find('.radio-inline, .radio').removeClass('checked');
        $(this).closest('.radio-inline, .radio').addClass('checked');
    });
    $('.challenge').on('click','input[type=checkbox]',function() {
        $(this).closest('.checkbox-inline, .checkbox').toggleClass('checked');
    });

    // For delete form methods put confirm alert.
    $('form').on('submit', function(e) {
        var formMethod = $(this).find('input[name="_method"]').val();
        if (formMethod == 'DELETE') {
            var confirmAction = confirm('Are you sure you want to delete it?');
            if (confirmAction == false) {
                e.preventDefault();
            }
        }
    });

    $('form.ajax').on('submit', function(e){

        if ($('form.ajax').validate().errorList.length == 0) {

            var form = $(this);
            var url = form.attr('action');
            var type = form.find('input[name="_method"]').val() || "POST";

            $.ajax({
                url: url,
                type: type,
                dataType:'json',
                data: form.serialize(),
                success: function(response) {

                    var proposedSolutionResultIcon;
                    if(response.proposedSolutionResult) {
                        proposedSolutionResultIcon = "<span class=\"glyphicon glyphicon-ok\" style=\"color:green;\"></span>";
                    } else {
                        proposedSolutionResultIcon = "<span class=\"glyphicon glyphicon-remove\" style=\"color:red;\"></span>";
                    }
                    $('.panel-heading').prepend(proposedSolutionResultIcon + ' ');

                    var proposedSolutionWithDetailedResult = response.proposedSolutionWithDetailedResult;
                    var proposedSolutionDetaledIcon;
                    var resultClass;
                    for (var chosenAnswerId in proposedSolutionWithDetailedResult) {
                        if (!proposedSolutionWithDetailedResult.hasOwnProperty(chosenAnswerId)) {
                            continue;
                        }
                        var isCorrect = proposedSolutionWithDetailedResult[chosenAnswerId];
                        console.log('chosenAnswerId: ' + chosenAnswerId + ' isCorrect: ' + isCorrect);

                        if(isCorrect) {
                            proposedSolutionDetaledIcon = "<span class=\"glyphicon glyphicon-ok\" style=\"color:green;\"></span>";
                            resultClass = 'correct';
                        } else {
                            proposedSolutionDetaledIcon = "<span class=\"glyphicon glyphicon-remove\" style=\"color:red;\"></span>";
                            resultClass = 'incorrect';
                        }

                        $("label input[value=" + chosenAnswerId + "]").addClass(resultClass).parent().prepend(proposedSolutionDetaledIcon);

                    }

                    var correctSolution = response.correctSolution;
                    var correctSolutionLength = correctSolution.length;
                    for (var i = 0; i < correctSolutionLength; i++) {
                        $("input[value=" + correctSolution[i] + "]:not(.correct)").parent().prepend('<span class="glyphicon glyphicon-ok" style="color:green;"></span>');
                    }

                    form.removeClass('challenge');
                    form.find('input[type=radio]').remove();
                    form.find('input[type=checkbox]').remove();
                    form.find('input[type=submit]').hide();
                    form.find('.next-question-button').show();
                }
            });
        }

    e.preventDefault();
});

})();