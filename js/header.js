$(document).ready(function () {
    // header menu 슬라이드
    $("header").mouseenter(function () {
        $(".depth_1>ul").stop().slideDown("fast");
    })
    $("header").mouseleave(function () {
        $(".depth_1>ul").stop().slideUp("fast");
    });

    // header allmenu 버튼 클릭 시 allmenu 화면 나타나기
    var allmenuEl = $(".allmenu_container");
    $(".menu_popup").click(function(){
        $(allmenuEl).addClass("active");
    });
    $(".close_btn").click(function(){
        $(allmenuEl).removeClass("active");
    });

    // header allmenu 슬라이드  
    var depth1Els = $('.allmenu_depth_1');
    depth1Els.click(function () {
        depth1Els.find("ul").not($(this).find("ul")).slideUp();
        $(this).find("ul").slideToggle("fast");
    });
});