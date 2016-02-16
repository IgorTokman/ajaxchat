$(function(){

//displays all users what have active status "yes"

    function showUsers(){
        $.ajax(
            {
                url: 'core/cur_users.php',
                cache: false,
                success: function(data){
                    $('#chart_users').html(data);
                }
            }
        );
    }
    //users are updated every 1 second
    setInterval(showUsers,1000);

});
