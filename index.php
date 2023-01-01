<?php
include "inc/session.php";
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>차얌 - 茶원이 다른 밀크티, 차얌</title>
    <link rel="stylesheet" type="text/css" href="/chayam/assets/libs/fullpage/jquery.fullpage.min.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/libs/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/libs/wow/animate.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/fragments.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/fragments_640.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/index_460.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/index_640.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/index_1024.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/index_1200.css">

</head>

<body>
    <header id="header" class="header">
        <h1 class="logo"><a href="#">CHAYAM</a></h1>
        <div class="gnb_wrap">
            <nav class="gnb">
                <h2 class="hide">주요메뉴</h2>
                <ul>
                    <li class="depth_1">
                        <a href="#">차얌 이야기</a>
                        <ul>
                            <li><a href="#">브랜드 소개</a></li>
                            <li><a href="#">브랜드 경쟁력</a></li>
                        </ul>
                    </li>
                    <li class="depth_1">
                        <a href="./product/menu.php">메뉴</a>
                        <ul>
                            <li><a href="./product/menu.php">MILK TEA</a></li>
                            <li><a href="#">COFFEE</a></li>
                            <li><a href="#">TEA</a></li>
                        </ul>
                    </li>
                    <li class="depth_1">
                        <a href="#">매장</a>
                        <ul>
                            <li><a href="#">매장찾기</a></li>
                            <li><a href="#">매장 이야기</a></li>
                        </ul>
                    </li>
                    <li class="depth_1">
                        <a href="#">멤버십</a>
                        <ul>
                            <li><a href="#">멤버십 소개</a></li>
                        </ul>
                    </li>
                    <li class="depth_1">
                        <a href="#">이벤트&뉴스</a>
                        <ul>
                            <li><a href="#">공지사항</a></li>
                            <li><a href="#">이벤트</a></li>
                        </ul>
                    </li>
                    <li class="depth_1">
                        <a href="#">프랜차이즈</a>
                        <ul>
                            <li><a href="#">인테리어</a></li>
                            <li><a href="#">창업문의</a></li>
                            <li><a href="#">창업설명회</a></li>
                            <li><a href="#">개설안내</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="top_menu">
            <h2 class="hide">사용자 메뉴</h2>
            <ul>
            <?php if(!$s_idx){ ?>
                <!-- 로그인 전 -->
                <li><a href="./login/login.php">로그인</a></li>
                <li><a href="./members/join.php">회원가입</a></li>
            <?php } else if($s_id == "admin1234"){ ?>
                <!-- 관리자 로그인 -->
                <li><a href="./login/logout.php">로그아웃</a></li>
                <li><a href="./admin/index.php">관리자 페이지</a></li>
            <?php } else{ ?>
                <!-- 로그인 후 -->   
                <li><a href="./login/logout.php">로그아웃</a></li>
                <li><a href="./members/mypage.php">마이페이지</a></li>
            <?php }; ?>    
            </ul>
        </div>
        <div>
            <a href="#" class="menu_popup">주요메뉴</a>
        </div>
        <div class="allmenu_container">
            <div class="allmenu_top">
                <h1 class="allmenu_logo"><a href="#">CHAYAM</a></h1>
                <a class="close_btn" href="#">닫기</a>
            </div>
            <div class="allmenu_gnb_wrap">
                <nav class="allmenu_gnb">
                    <h2 class="hide">주요메뉴</h2>
                    <ul>
                        <li class="allmenu_depth_1">
                            <a href="#">차얌 이야기</a>
                            <ul>
                                <li><a href="#">브랜드 소개</a></li>
                                <li><a href="#">브랜드 경쟁력</a></li>
                            </ul>
                        </li>
                        <li class="allmenu_depth_1">
                            <a href="#">메뉴</a>
                            <ul>
                                <li><a href="./product/menu.php">MILK TEA</a></li>
                                <li><a href="#">COFFEE</a></li>
                                <li><a href="#">TEA</a></li>
                            </ul>
                        </li>
                        <li class="allmenu_depth_1">
                            <a href="#">매장</a>
                            <ul>
                                <li><a href="#">매장찾기</a></li>
                                <li><a href="#">매장 이야기</a></li>
                            </ul>
                        </li>
                        <li class="allmenu_depth_1">
                            <a href="#">멤버십</a>
                            <ul>
                                <li><a href="#">멤버십 소개</a></li>
                            </ul>
                        </li>
                        <li class="allmenu_depth_1">
                            <a href="#">이벤트&뉴스</a>
                            <ul>
                                <li><a href="#">공지사항</a></li>
                                <li><a href="#">이벤트</a></li>
                            </ul>
                        </li>
                        <li class="allmenu_depth_1">
                            <a href="#">프랜차이즈</a>
                            <ul>
                                <li><a href="#">인테리어</a></li>
                                <li><a href="#">창업문의</a></li>
                                <li><a href="#">창업설명회</a></li>
                                <li><a href="#">개설안내</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <hr>
            <div class="allmenu_user_menu">
                <h2 class="hide">사용자 메뉴</h2>
                <ul>
                    <?php if(!$s_idx){ ?>
                        <!-- 로그인 전 -->
                        <li><a href="./login/login.php">로그인</a></li>
                        <li><a href="./members/join.php">회원가입</a></li>
                    <?php } else if($s_id == "admin1234"){ ?>
                        <!-- 관리자 로그인 -->
                        <li><a href="./login/logout.php">로그아웃</a></li>
                        <li><a href="./admin/index.php">관리자 페이지</a></li>
                    <?php } else{ ?>
                        <!-- 로그인 후 -->   
                        <li><a href="./login/logout.php">로그아웃</a></li>
                        <li><a href="./members/my_page.php">마이페이지</a></li>
                    <?php }; ?>    
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div id="fullpage">
            <!-- fullpage slide1 -->
            <div class="section" data-anchor="slide1">
                <section class="main_swiper">
                    <h2 class="hide">신메뉴 소식</h2>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#">
                                    <picture>
                                        <source media="(min-width: 1024px)" srcset="/chayam/assets/images/main01.jpg">
                                        <img src="/chayam/assets/images/mobile_main01.jpg" alt="차얌 흑당얌">
                                    </picture>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <picture>
                                        <source media="(min-width: 1024px)" srcset="/chayam/assets/images/main02.jpg">
                                        <img src="/chayam/assets/images/mobile_main02.jpg" alt="차얌 밀크퐁">
                                    </picture>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <picture>
                                        <source media="(min-width: 1024px)" srcset="/chayam/assets/images/main03.jpg">
                                        <img src="/chayam/assets/images/mobile_main03.jpg" alt="치즈 흑당얌">
                                    </picture>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <picture>
                                        <source media="(min-width: 1024px)" srcset="/chayam/assets/images/main04.jpg">
                                        <img src="/chayam/assets/images/mobile_main04.jpg" alt="차얌 블랜드">
                                    </picture>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <ul class="swiper_custom_pagination">
                        <li class="slide_page"><a href="#">차얌 흑당얌</a></li>
                        <li class="slide_page"><a href="#">차얌 밀크퐁</a></li>
                        <li class="slide_page"><a href="#">치즈 흑당얌</a></li>
                        <li class="slide_page"><a href="#">차얌 블랜드</a></li>
                    </ul>
                    <div class="quick_menu">
                        <h2 class="hide">CHAYAM ORDER</h2>
                        <div class="chayam_order_img"></div>
                        <ul>
                            <li><a href="#"><i class="quick_i order"></i><span>주문</span></a></li>
                            <li><a href="#"><i class="quick_i barcode"></i><span>멤버십</span></a></li>
                            <li><a href="#"><i class="quick_i stamp"></i><span>적립</span></a></li>
                            <li><a href="#"><i class="quick_i coupon"></i><span>쿠폰</span></a></li>
                        </ul>
                    </div>
                </section>
            </div>
            <!-- fullpage slide2 -->
            <div class="section" data-anchor="slide2">
                <section class="chayam_menu">
                    <div class="container">
                        <div class="container_inner">
                            <h2 class="section_title">CHAYAM MENU</h2>
                        </div>
                        <div class="container_inner">
                            <div class="tabs">
                                <ul>
                                    <li><button type="button" class="menu_subtitle active"
                                            data-target="#milktea_menu">MILK TEA</button></li>
                                    <li><button type="button" class="menu_subtitle"
                                            data-target="#coffee_menu">COFFEE</button></li>
                                    <li><button type="button" class="menu_subtitle"
                                            data-target="#tea_menu">TEA</button></li>
                                </ul>
                            </div>
                            <div class="menu_slider active" id="milktea_menu">
                                <h3 class="hide">MILK TEA</h3>
                                <div class="swiper menuSwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="/chayam/assets/images/milktea1.png" alt="차얌 밀크티"></div>
                                        <div class="swiper-slide"><img src="/chayam/assets/images/milktea2.png" alt="타로 밀크티"></div>
                                        <div class="swiper-slide"><img src="/chayam/assets/images/milktea3.png" alt="보성 말차 밀크티"></div>
                                        <div class="swiper-slide"><img src="/chayam/assets/images/milktea4.png" alt="망고 밀크퐁"></div>
                                        <div class="swiper-slide"><img src="/chayam/assets/images/milktea5.png" alt="오레오 밀크티"></div>
                                    </div>
                                </div>
                                <div class="menu_pagination_wrap">
                                    <button class="button_prev">이전</button>
                                    <div class="menu_pagination">차얌 밀크티</div>
                                    <button class="button_next">다음</button>
                                </div>
                            </div>
                            <div class="menu_slider" id="coffee_menu">
                                <h3 class="hide">COFFEE</h3>
                                <div class="swiper menuSwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="/chayam/assets/images/coffee1.png" alt="아메리카노"></div>
                                        <div class="swiper-slide"><img src="/chayam/assets/images/coffee2.png" alt="카페라떼"></div>
                                        <div class="swiper-slide"><img src="/chayam/assets/images/coffee3.png" alt="달고나 커피"></div>
                                        <div class="swiper-slide"><img src="/chayam/assets/images/coffee4.png" alt="코코넛 커피 스무디"></div>
                                        <div class="swiper-slide"><img src="/chayam/assets/images/coffee5.png" alt="치즈크림커피"></div>
                                    </div>
                                </div>
                                <div class="menu_pagination_wrap">
                                    <button class="button_prev">이전</button>
                                    <div class="menu_pagination">아메리카노</div>
                                    <button class="button_next">다음</button>
                                </div>
                            </div>
                            <div class="menu_slider" id="tea_menu">
                                <h3 class="hide">TEA</h3>
                                <div class="swiper menuSwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="/chayam/assets/images/tea1.png" alt="차얌 치즈폼티"></div>
                                        <div class="swiper-slide"><img src="/chayam/assets/images/tea2.png" alt="우롱"></div>
                                        <div class="swiper-slide"><img src="/chayam/assets/images/tea3.png" alt="얼그레이"></div>
                                        <div class="swiper-slide"><img src="/chayam/assets/images/tea4.png" alt="차얌 블랙티"></div>
                                        <div class="swiper-slide"><img src="/chayam/assets/images/tea5.png" alt="잉글리시블랙퍼스트"></div>
                                    </div>
                                </div>
                                <div class="menu_pagination_wrap">
                                    <button class="button_prev">이전</button>
                                    <div class="menu_pagination">차얌 치즈폼티</div>
                                    <button class="button_next">다음</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- fullpage slide3 -->
            <div class="section" data-anchor="slide3">
                <section class="brand_story">
                    <div class="container">
                        <div class="container_inner">
                            <h2 class="section_title">BRAND STORY</h2>
                            <div class="cont_wrap">
                                <div class="wow fadeInUp cont" data-wow-delay="400ms" data-wow-duration="1000ms">
                                    <div class="cont_subtitle"><span>맛을<br>지킵니다</span></div>
                                    <ul>
                                        <li>직접 끓이는 흑설탕 시럽</li>
                                        <li>흑설탕의 깊은맛을</li>
                                        <li>지키는 차얌</li>
                                    </ul>
                                </div>
                                <div class="wow fadeInUp cont" data-wow-delay="800ms" data-wow-duration="1000ms">
                                    <div class="cont_subtitle"><span>신선함을<br>지킵니다</span></div>
                                    <ul>
                                        <li>직접 끓이는 타피오카 펄</li>
                                        <li>항상 신선함을</li>
                                        <li>지키는 차얌</li>
                                    </ul>
                                </div>
                                <div class="wow fadeInUp cont" data-wow-delay="1200ms" data-wow-duration="1000ms">
                                    <div class="cont_subtitle"><span>원칙을<br>지킵니다</span></div>
                                    <ul>
                                        <li>직접 우려내는 잎차</li>
                                        <li>우려낸 이후 4시간만 판매</li>
                                        <li>원칙을 지키는 차얌</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- fullpage slide4 -->
            <div class="section" data-anchor="slide4">
                <section class="franchise">
                    <div class="container">
                        <div class="container_inner">
                            <h2 class="section_title">FRANCHISE</h2>
                            <strong>"茶원이 다른 창업 차얌,<br>런칭 1개월만의 20호점 가맹 계약 돌파!"</strong>
                            <a href="#"><span>가맹상담신청</span></a>
                        </div>
                    </div>
                    <div class="franchise_cont_wrap">
                        <div class="franchise_cont_item">
                            <dl>
                                <dt>차얌 성결대점</dt>
                                <dd>
                                    <img src="/chayam/assets/images/franchise1.png" alt="차얌 성결대점">
                                </dd>
                            </dl>
                        </div>
                        <div class="franchise_cont_item">
                            <dl>
                                <dt>차얌 수원정자점</dt>
                                <dd>
                                    <img src="/chayam/assets/images/franchise2.png" alt="차얌 수원정자점">

                                </dd>
                            </dl>
                        </div>
                        <div class="franchise_cont_item">
                            <dl>
                                <dt>차얌 군포송정점</dt>
                                <dd>
                                    <img src="/chayam/assets/images/franchise3.png" alt="차얌 군포송정점">

                                </dd>
                            </dl>
                        </div>
                        <div class="franchise_cont_item">
                            <dl>
                                <dt>차얌 삼산시장점</dt>
                                <dd>
                                    <img src="/chayam/assets/images/franchise4.png" alt="차얌 삼산시장점">
                                </dd>
                            </dl>
                        </div>
                        <div class="franchise_cont_item">
                            <dl>
                                <dt>차얌 구의점</dt>
                                <dd>
                                    <img src="/chayam/assets/images/franchise5.png" alt="차얌 구의점">
                                </dd>
                            </dl>
                        </div>
                        <div class="franchise_cont_item">
                            <dl>
                                <dt>차얌 방이시장점</dt>
                                <dd>
                                    <img src="/chayam/assets/images/franchise6.png" alt="차얌 방이시장점">
                                </dd>
                            </dl>
                        </div>
                        <div class="franchise_cont_item">
                            <dl>
                                <dt>차얌 광교호수공원점</dt>
                                <dd>
                                    <img src="/chayam/assets/images/franchise7.png" alt="차얌 광교호수공원점">
                                </dd>
                            </dl>
                        </div>
                    </div>
                </section>
            </div>
            <!-- fullpage slide4 (footer)-->
            <div class="section fp-auto-height" data-anchor="slide5">
                <footer id="footer" class="footer">
                    <h2 class="hide">사이트 이용안내</h2>
                    <div class="footer_wrap">
                        <div class="footer_left">
                            <div class="notice">
                                <h3>Notice</h3>
                                <div class="notice_cont">
                                    <a href="#" class="notice_title">쥬씨패밀리 멤버십 서비스 앱 출시 안내</a>
                                    <a href="#" class="notice_more_btn">+ 더보기</a>
                                </div>
                            </div>
                            <div class="sns">
                                <h3>SNS</h3>
                                <ul>
                                    <li>
                                        <a href="#" class="instagram_i">인스타그램</a>
                                    </li>
                                    <li>
                                        <a href="#" class="facebook_i">페이스북</a>
                                    </li>
                                    <li>
                                        <a href="#" class="youtube_i">유튜브</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer_right">
                            <dl>
                                <dt>Address</dt>
                                <dd>
                                    <span>본사주소: </span>
                                    <address>서울특별시 성동구 왕십리로 16가길 24 4층<br>(서울특별시 성동구 성수동 1가 656-1835 4층)</address>
                                </dd>
                                <dd>
                                    <span>사업자 등록주소: </span>
                                    <address>서울특별시 성동구 성수이로 69, 2층 2196호 (성수동 2가, 삼화빌딩)</address>
                                </dd>
                            </dl>
                            <dl>
                                <dt>Customer</dt>
                                <dd>대표전화 : 1661-9178</dd>
                            </dl>
                            <div class="footer_bottom">
                                <i class="bottom_logo">chayam</i>
                                <div class="bottom_copyright">
                                    <p>대표자명 : 윤석제</p>
                                    <p>상호 : 주식회사 프로젝트비</p>
                                    <p>Copyright 2019 차얌 all rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!-- scroll indicator -->
        <div class="fullpage-nav">
            <span class="fullpage-nav-current">01</span>

            
            <span class="fullpage-nav-progress">
                <em class="fullpage-nav-progress-active"></em>
            </span>
            <span class="fullpage-nav-total">04</span>
        </div>
    </main>

    <script src="/chayam/assets/libs/jquery-3.6.1.min.js"></script> 
    <script src="/chayam/assets/libs/swiper/swiper-bundle.min.js"></script>
    <script src="/chayam/assets/libs/fullpage/jquery.fullpage.js"></script>
    <script src="/chayam/assets/libs/wow/wow.min.js"></script>
    <script src="/chayam/assets/js/header.js"></script>
    <script type="text/javascript">
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
                // autoplay: {
                //     delay: 3000,
                // },
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

    </script>
</body>

</html>