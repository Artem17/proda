$(document).ready(function(){
    
$(".contact-form1").on('click', '.call-me', function(){
    
    $.ajax({
        type: "POST",
        data: {
            name: $('.name').val()
        },
        url: "send.php",
        success:function(data){
            console.log(data);
        }
    })
});
});


