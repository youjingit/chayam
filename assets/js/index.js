$(document).ready(function () {
    var total_page_num=$('#fullpage').find('.section').length;
    $('.fullpage-nav-progress-active').css({'height':(1 / (total_page_num-1)) * 100 + '%'});

    // fullpage 실행
    $("#fullpage").fullpage({
        lockAnchors: true,
        scrollBar: true,
        responsiveWidth: 1024,
        afterRender: function(){
            new WOW().init();
        },
        //scrollbar indicator
        onLeave: function(index, nextIndex, direction){
            if(nextIndex === total_page_num){
                $('.fullpage-nav-progress-active').css({'height': '100%'});
                return;
            } 
            $('.fullpage-nav-progress-active').css({'height':(nextIndex / (total_page_num-1)) * 100 + '%'});

            var strNextIndex = '0' + nextIndex;
            $('.fullpage-nav-current').text(strNextIndex);
        }
    });

    // 메인 이미지 슬라이드
    var swiper = new Swiper(".mySwiper", {
        autoplay: {
            delay: 3000,
        },
        slidesPerView: 1,
        loop: true,
        effect: 'fade',
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        on: {
            slideChange: function () {
                var index = this.activeIndex - 1;
                if (index === 4) {
                    index = 0;
                }
                $(".slide_page").removeClass("active");
                $($(".slide_page")[index]).addClass("active");
            }
        }
    });

    $(".slide_page").click(function () {
        swiper.slideTo($(this).index() + 1);
    })

    // 메뉴 슬라이드
    initMenuSwiper("#milktea_menu");
    initMenuSwiper("#coffee_menu");
    initMenuSwiper("#tea_menu");
});


function initMenuSwiper(sliderId) {
    var menuSwiper = new Swiper(sliderId + " .menuSwiper", {
        loop: true,
        speed: 500,
        breakpoints: {
            1024: {
                slidesPerView: 'auto',
            },
            640: {
                slidesPerView: 1,
            },
            320: {
                slidesPerView: 1,
            }
        },
        navigation: {
            nextEl: sliderId + " .menu_pagination_wrap .button_next",
            prevEl: sliderId + " .menu_pagination_wrap .button_prev",
        },
        on: {
            slideChange: function () {
                setTimeout(function () {
                    var imgTitle = $(sliderId + " .menuSwiper .swiper-slide-active").find('img').attr('alt');
                    $(sliderId + " .menu_pagination").text(imgTitle);
                }, 10);
            }
        }
    });
}



//menu_subtitle 클릭 시 해당 메뉴 슬라이더 보이기
var subTitleEls = $(".menu_subtitle");

subTitleEls.click(function () {
    subTitleEls.removeClass("active");
    $(this).addClass("active");

    var targetId = $(this).attr("data-target");
    var menuSlider = $(".menu_slider");
    menuSlider.removeClass("active");

    $(targetId).addClass("active");
});