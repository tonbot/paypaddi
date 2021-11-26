$(document).ready(function(){
    
    $(".fa-bars").click(function(){
        $(".navlink").show();
        $(".fa-bars").hide();
        $(".fa-times").show();
    })
    // on press of close icon will close the nav bar
    $(".fa-times").click(function(){
        $(".navlink").hide();
        $(".fa-bars").show();
        $(".fa-times").hide();
    })


})