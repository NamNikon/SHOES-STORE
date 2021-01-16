$(document).ready(function(){
    $("#re-menu").on("click",function(){
        $(".nav-mobie").css("transform","translateX(0)");
        $("#nav_over").css("display","inline");
    });

    $(".nav-mobile-close").on("click",function (){
        $(".nav-mobie").css("transform","translateX(-100%)");
        $("#nav_over").css("display","none");
    });

    $("#nav_over").on("click",function (){
        $(".nav-mobie").css("transform","translateX(-100%)");
        $("#nav_over").css("display","none");
    });

})