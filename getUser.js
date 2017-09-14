$(document).ready(function(){
    $('#getUser').on('click',function(){
        var user_id = $('#autocomplete').val();
        $.ajax({
            type:'POST',
            url:'getData.php',
            dataType: "json",
            data:{autocomplete:id},
            success:function(data){
                if(data.status == 'ok'){
                    $('#userName').text(data.result.text)
                }else{
                    $('.user-content').slideUp();
                    alert("Text not found...");
                } 
            }
        });
    });
});