var main = function(){
    $('.dropdown-toggle').click(function(){
        $('.dropdown-menu').toggle();
    });
    $('.sec').click(function(){
        $.post( "sumidero_info.php" );
    });
    
    
};
            
         

$(document).ready(main);