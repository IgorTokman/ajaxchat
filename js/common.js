$(function() {

    $('<audio id="chatAudio"><source src="notify.mp3" type="audio/mpeg"></audio>').appendTo('body');

    $('#message_send').submit(function (e) {
        var str = $(this).serialize();
        e.preventDefault();

        $.ajax(
            {
                url: 'core/ajax.php',
                type: 'post',
                data: str,
                cache: false,
                success: function (data) {
                }
            }
        );

        $('#text_message').val("");
        $('#chatAudio')[0].play();
    });
});
