$(function() {

    $('<audio id="chatAudio"><source src="notify.mp3" type="audio/mpeg"></audio>').appendTo('body');

    $('#message_send').submit(function (e) {
        var str = $(this).serialize();
        e.preventDefault();

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
    });

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

         $('#chart_messages').animate({"scrollTop":9999},'slow');
     }
        setInterval(show,1000);
 });
