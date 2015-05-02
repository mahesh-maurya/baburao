$(document).ready(function () {
    $(".section").css("min-height", $(window).height());
    $(window).resize(function () {
        $(".section").css("min-height", $(window).height());
    });


    $('.landing').hide(5510);

    $("#hides, #hides1, #hides2, #hides3, #hides4, #hides5, #hides6, #hides7, #hides8, #hides9, #hides10, #hides11").click(function () {
        $(".tab_content").hide(1000);
        $(".read-set").show();

    });

        $(".thn").hide();
    
       $(".btn-right").click(function () {
      
       $(".thn").fadeIn(500);
       $(".nw").hide(500);

 
    });
    
    $("#tabs li").click(function () {
        //  First remove class "active" from currently active tab
        $("#tabs li").removeClass('active');

        //  Now add class "active" to the selected/clicked tab
        $(this).addClass("active");

        //  Hide all tab content
        $(".tab_content").hide();

        //  Here we get the href value of the selected tab
        var selected_tab = $(this).find("a").attr("href");

        //  Show the selected tab content
        $(selected_tab).fadeIn();

        //  At the end, we add return false so that the click on the link is not executed
        return false;
    });

    $(".bodyofprof").hide();
    $(".prof-set").click(function() {
        var proftext=$(this).children(".profname").text();
        var profcontent=$(this).children(".bodyofprof").text();
        $(".wht-cont .whiteboxname").text(proftext);
        $(".wht-cont .whiteboxcontent").text(profcontent);
    });
    
    $(".newslettersubmit").click(function() {
        var email=$(".newsletteremail").val();
        $.getJSON("http://wohlig.co.in/newsletter/index.php/json/submitemail",{email:email});
    });

});