var main = function(){
    $('.sumidero').click(function() {
        $.post( "sumidero_info.php" );
    });
};
            
         

$(document).ready(main);