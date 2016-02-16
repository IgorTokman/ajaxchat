$(function() {

    //added sound to the message arrived
    $('<audio id="chatAudio"><source src="notify.mp3" type="audio/mpeg"></audio>').appendTo('body');

    $('#message_send').submit(function (e) {
        var str = $(this).serialize();
        e.preventDefault();

        //checks if message is empty
        if($('#text_message').val().length === 0) {
            $('#message_send').addClass('has-error');

            $(this).tooltip({
                trigger: 'manual',
                placement: 'top',
                title: 'Enter your message'
            }).tooltip('show');
        }

        //mesasge is correct
        else {

            //sending message
            $.ajax(
                {
                    url: 'core/send.php',
                    type: 'post',
                    data: str,
                    cache: false,
                    success: function (data) {
                    }
                }
            );

            $('#submit_btn').blur();
            $('#text_message').val("");
            $('#chatAudio')[0].play();
        }
    });

    //message input
    $('#text_message').on('keydown',function(e){
        $('#message_send').removeClass('has-error').tooltip('hide');
    });

    //message view
     function show(){
         $.ajax(
             {
                 url: 'core/output.php',
                 cache: false,
                 success: function(data){
                    $('#chart_messages').html(data);
                 }
             }
         );

         //autoscrolling to the botom of the app
         $('#chart_messages').animate({"scrollTop":9999},'slow');
     }
        //messages update every 1 second
        setInterval(show,500);

 });
