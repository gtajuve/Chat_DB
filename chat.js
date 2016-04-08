$(function(){
    $('#submitbtn').on('click',function(){

       var message=$('#usermsg').val();
        $.ajax({
                method: "POST",
                url: "post.php",
                data: { text: message }
            })
            .done(function( msg ) {
            $('#usermsg').setAttribute('value','');
            });
    });
    function loadLog(){
        var oldScrollHeidht=$('#chatbox').prop('scrollHeight')-20;
        console.log(oldScrollHeidht);
        $.ajax({
                url: "getmessages.php",
                cache:false
            })
            .done(function( msg ) {
                $('#chatbox').html(msg);
                var newscrollHeight=$('#chatbox').prop('scrollHeight')-20;
                if(newscrollHeight>oldScrollHeidht){
                    $('#chatbox').animate({ scrollTop:newscrollHeight},'slow');
                    $('#chatbox').sc
                }
            });
    }
    setInterval(loadLog(),2000);
    $('#exit').on('click',function(){
        event.preventDefault();
        var exit = confirm('Сигурен ли си?');
        if(exit==true){

            window.location='index.php?logout=true';
        }
    })

})