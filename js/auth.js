$(function(){
    $('#auth').submit(function(e){
        e.preventDefault();
        var inputs = $(this).find('input');

        $.each(inputs,function(index,value){
            var input = $(value);
            var formGroup = input.parents('.form-group');

            if(input.val().length === 0){
                formGroup.addClass('has-error');
                input.tooltip({
                    trigger: 'manual',
                    placement: 'right',
                    title: 'Enter your message'
                }).tooltip('show');
            }
            else
            {
                formGroup.addClass('has-success');
            }
        });

        if($('#login').val().length !== 0 && $('#password').val().length !== 0)
        {
            var str = $('#auth').serialize();
            $.ajax(
                {
                    url: 'core/verification.php',
                    type: 'post',
                    data: str,
                    cache: false,
                    success: function (data) {
                        if(data !== "wrong")
                           document.location = 'http://localhost/ajaxchat/?user=' + data;
                        else
                        {
                            $('#error').show();
                            $.each($('input'),function(index, value){
                               var input = $(value);
                                input.val("");

                            });
                        }
                    }
                }
            );
        }

    });

        $('form').on('keydown', 'input', function(e){
            $(this).tooltip('destroy').parent('.form-group').removeClass('has-error').addClass('has-success');
    });

});