<?php
include "../inc/session.php";

// DB 연결
include "../inc/dbcon.php";

function makeJson($result){
    $array = array();
    while($row = mysqli_fetch_array($result)){
        array_push($array,
            array(
                'p_id' => $row['p_id'],
                'p_cate' => $row['p_cate'],
                'p_name' => $row['p_name'],
                'p_image' => $row['p_image'],
                's_price' => $row['s_price'],
                'm_price' => $row['m_price'],
                'l_price' => $row['l_price'],
            )
        );
    }
    return json_encode($array, JSON_UNESCAPED_UNICODE); //자바스크립트에서 사용할 수 있게 변환
}

//milktea
$sql1 = "select * from products where p_cate='milktea';";
$result1 = mysqli_query($dbcon, $sql1);
$json1 = makeJson($result1);

//coffee
$sql2 = "select * from products where p_cate='coffee';";
$result2 = mysqli_query($dbcon, $sql2);
$json2 = makeJson($result2);

//tea
$sql3 = "select * from products where p_cate='tea';";
$result3 = mysqli_query($dbcon, $sql3);
$json3 = makeJson($result3);

mysqli_close($dbcon);
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>차얌 - 茶원이 다른 밀크티, 차얌</title>
    <link rel="stylesheet" type="text/css" href="/chayam/assets/libs/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/libs/wow/animate.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/boot_reset.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/fragments.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/fragments_640.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/fragments_1024.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/menu.css">

</head>

<body>
    <header id="header" class="header">
        <h1 class="logo"><a href="../index.php">CHAYAM</a></h1>
        <div class="gnb_wrap">
            <nav class="gnb">
                <h2 class="hide">주요메뉴</h2>
                <ul>
                    <li class="depth_1"><a href="#">차얌 이야기</a>
                        <ul>
                            <li><a href="#">브랜드 소개</a></li>
                            <li><a href="#">브랜드 경쟁력</a></li>
                        </ul>
                    </li>
                    <li class="depth_1"><a href="javascript:void(0);">메뉴</a>
                        <ul>
                            <li><a href="javascript:void(0);">MILK TEA</a></li>
                            <li><a href="#">COFFEE</a></li>
                            <li><a href="#">TEA</a></li>
                        </ul>
                    </li>
                    <li class="depth_1"><a href="#">매장</a>
                        <ul>
                            <li><a href="#">매장찾기</a></li>
                            <li><a href="#">매장 이야기</a></li>
                        </ul>
                    </li>
                    <li class="depth_1"><a href="#">멤버십</a>
                        <ul>
                            <li><a href="#">멤버십 소개</a></li>
                        </ul>
                    </li>
                    <li class="depth_1"><a href="#">이벤트&뉴스</a>
                        <ul>
                            <li><a href="#">공지사항</a></li>
                            <li><a href="#">이벤트</a></li>
                        </ul>
                    </li>
                    <li class="depth_1"><a href="#">프랜차이즈</a>
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
                    <li><a href="../login/login.php">로그인</a></li>
                    <li><a href="../members/join.php">회원가입</a></li>
                <?php } else if($s_id == "admin1234"){ ?>
                    <!-- 관리자 로그인 -->
                    <li><a href="../login/logout.php">로그아웃</a></li>
                    <li><a href="../admin/index.php">관리자 페이지</a></li>
                <?php } else{ ?>
                    <!-- 로그인 후 -->   
                    <li><a href="../login/logout.php">로그아웃</a></li>
                    <li><a href="../members/mypage.php">마이페이지</a></li>
                <?php }; ?>    
            </ul>
        </div>
        <div>
            <a href="#" class="menu_popup">주요메뉴</a>
        </div>
        <div class="allmenu_container">
            <div class="allmenu_top">
                <h1 class="allmenu_logo"><a href="../index.php">CHAYAM</a></h1>
                <a class="close_btn" href="#">닫기</a>
            </div>
            <div class="allmenu_gnb_wrap">
                <nav class="allmenu_gnb">
                    <h2 class="hide">주요메뉴</h2>
                    <ul>
                        <li class="allmenu_depth_1"><a href="#">차얌 이야기</a>
                            <ul>
                                <li><a href="#">브랜드 소개</a></li>
                                <li><a href="#">브랜드 경쟁력</a></li>
                            </ul>
                        </li>
                        <li class="allmenu_depth_1"><a href="#">MENU</a>
                            <ul>
                                <li><a href="javascript:void(0);">MILK TEA</a></li>
                                <li><a href="#">COFFEE</a></li>
                                <li><a href="#">TEA</a></li>
                            </ul>
                        </li>
                        <li class="allmenu_depth_1"><a href="#">매장</a>
                            <ul>
                                <li><a href="#">매장찾기</a></li>
                                <li><a href="#">매장 이야기</a></li>
                            </ul>
                        </li>
                        <li class="allmenu_depth_1"><a href="#">멤버십</a>
                            <ul>
                                <li><a href="#">멤버십 소개</a></li>
                            </ul>
                        </li>
                        <li class="allmenu_depth_1"><a href="#">이벤트&뉴스</a>
                            <ul>
                                <li><a href="#">공지사항</a></li>
                                <li><a href="#">이벤트</a></li>
                            </ul>
                        </li>
                        <li class="allmenu_depth_1"><a href="#">프랜차이즈</a>
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
                        <li><a href="../login/login.php">로그인</a></li>
                        <li><a href="../members/join.php">회원가입</a></li>
                    <?php } else if($s_id == "admin1234"){ ?>
                        <!-- 관리자 로그인 -->
                        <li><a href="../login/logout.php">로그아웃</a></li>
                        <li><a href="../admin/index.php">관리자 페이지</a></li>
                    <?php } else{ ?>
                        <!-- 로그인 후 -->   
                        <li><a href="../login/logout.php">로그아웃</a></li>
                        <li><a href="../members/mypage.php">마이페이지</a></li>
                    <?php }; ?>    
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="padding_top">
            <div class="title_wrap">
                <div class="bg_img">
                    <h2 class="sv_tit wow fadeInUp" data-wow-delay="0s" data-wow-offset="10">
                        MENU</h2>
                </div>
            </div>
            <div class="container">
                <nav class="nav nav-pills nav-justified menu_list fs-5">
                    <a class="nav-link py-3 rounded-0 active" href="#" data-bs-toggle="tab"
                        data-bs-target="#home-tab-pane">MILK
                        TEA</a>
                    <a class="nav-link py-3 rounded-0" href="#" data-bs-toggle="tab"
                        data-bs-target="#profile-tab-pane">COFFEE</a>
                    <a class="nav-link py-3 rounded-0" href="#" data-bs-toggle="tab"
                        data-bs-target="#contact-tab-pane">TEA</a>
                </nav>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" tabindex="0">
                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                            aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-end mt-3">
                                <li class="breadcrumb-item"><a href="#">HOME</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">MENU</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="../product/menu.php">MILK TEA</a></li>
                            </ol>
                        </nav>
                        <h3 class="fs-1 fw-bold text-center wow fadeInUp" data-wow-delay="0s" data-wow-offset="10">MILK TEA</h3>
                        <hr>
                        <div class="pb-4">
                            <div id="milktea_vue">
                                <div class="row gy-4">
                                    <div v-for="info in list" class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                        <div class="card h-100">
                                            <img :src="info.p_image" class="card-img-top w-100 px-5" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title fw-bold">{{ info.p_name }}</h5>
                                                <p class="card-text d-flex flex-wrap">
                                                    <span v-if="info.s_price">S: {{ info.s_price }} / </span>
                                                    <span>M: {{ info.m_price }} / </span>
                                                    <span>L: {{ info.l_price }} </span>
                                                </p>
                                                <div class="cart_wrap">
                                                    <a href="javascript:void(0);" class="btn btn-primary" @click="clickCartBtn(info.p_id, info.s_price ? true : false)">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                        </svg>
                                                        <span class="hide">장바구니에 담기</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" tabindex="0">
                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                            aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-end mt-3">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">MENU</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">COFFEE</a></li>
                            </ol>
                        </nav>
                        <h3 class="fs-1 fw-bold text-center wow fadeInUp" data-wow-delay="0s" data-wow-offset="10">COFFEE</h3>
                        <hr>
                        <div class="pb-4">
                            <div id="coffee_vue" >
                            <div class="row gy-4">
                                    <div v-for="info in list" class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                        <div class="card h-100">
                                            <img :src="info.p_image" class="card-img-top w-100 px-5" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title fw-bold">{{ info.p_name }}</h5>
                                                <p class="card-text d-flex flex-wrap">
                                                    <span v-if="info.s_price">S: {{ info.s_price }} / </span>
                                                    <span>M: {{ info.m_price }} / </span>
                                                    <span>L: {{ info.l_price }} </span>
                                                </p>
                                                <div class="cart_wrap">
                                                    <a href="javascript:void(0);" class="btn btn-primary" @click="clickCartBtn(info.p_id, info.s_price ? true : false)">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                        </svg>
                                                        <span class="hide">장바구니에 담기</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" tabindex="0">
                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                            aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-end mt-3">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">MENU</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">TEA</a></li>
                            </ol>
                        </nav>
                        <h3 class="fs-1 fw-bold text-center wow fadeInUp" data-wow-delay="0s" data-wow-offset="10">TEA</h3>
                        <hr>
                        <div class="pb-4">
                            <div id="tea_vue">
                                <div class="row gy-4">
                                    <div v-for="info in list" class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                        <div class="card h-100">
                                            <img :src="info.p_image" class="card-img-top w-100 px-5" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title fw-bold">{{ info.p_name }}</h5>
                                                <p class="card-text d-flex flex-wrap">
                                                    <span v-if="info.s_price">S: {{ info.s_price }} / </span>
                                                    <span>M: {{ info.m_price }} / </span>
                                                    <span>L: {{ info.l_price }} </span>
                                                </p>
                                                <div class="cart_wrap">
                                                    <a href="javascript:void(0);" class="btn btn-primary" @click="clickCartBtn(info.p_id, info.s_price ? true : false)">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                        </svg>
                                                        <span class="hide">장바구니에 담기</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-5" id="exampleModalLabel">장바구니에 담기</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <fieldset>
                            <legend class="hide">옵션 선택</legend>
                            <div class="mb-3">
                                <label class="form-label">수량</label>
                                <div class="count d-flex align-items-center">
                                    <button type="button" class="minus btn btn-outline-primary">-</button>
                                    <input type="text" name="count" value="1"></span>
                                    <button type="button" class="plus btn btn-outline-primary">+</button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">HOT / ICE</label>
                                <div>
                                    <label>
                                        <input type="radio" class="btn-check" name="hot" value="h" checked>
                                        <span class="btn btn-outline-primary">HOT</span>
                                    </label>
                                    <label>
                                        <input type="radio" class="btn-check" name="hot" value="i">
                                        <span class="btn btn-outline-primary">ICE</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">SIZE</label>
                                <div>
                                    <label>
                                        <input type="radio" class="btn-check" name="size" value="m" checked>
                                        <span class="btn btn-outline-primary">M</span>
                                    </label>
                                    <label>
                                        <input type="radio" class="btn-check" name="size" value="l">
                                        <span class="btn btn-outline-primary">L</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">펄 추가</label>
                                <div>
                                    <label>
                                        <input type="radio" class="btn-check" name="pearl" value="n" checked>
                                        <span class="btn btn-outline-primary">안함</span>
                                    </label>
                                    <label>
                                        <input type="radio" class="btn-check" name="pearl" value="y">
                                        <span class="btn btn-outline-primary">펄 추가 (+500원)</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">치즈폼 추가</label>
                                <div>
                                    <label>
                                        <input type="radio" class="btn-check" name="cheeze" value="n" checked>
                                        <span class="btn btn-outline-primary">안함</span>
                                    </label>
                                    <label>
                                        <input type="radio" class="btn-check" name="cheeze" value="y">
                                        <span class="btn btn-outline-primary">치즈폼 추가 (+500원)</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">코코넛젤리 추가</label>
                                <div>
                                    <label>
                                        <input type="radio" class="btn-check" name="jelly" value="n" checked>
                                        <span class="btn btn-outline-primary">안함</span>
                                    </label>
                                    <label>
                                        <input type="radio" class="btn-check" name="jelly" value="y">
                                        <span class="btn btn-outline-primary">코코넛젤리 추가 (+500원)</span>
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">취소</button>
                    <button type="button" class="btn btn-primary" onclick="addCartModal('#exampleModal');">담기</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">장바구니에 담기</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <fieldset>
                            <legend class="hide">옵션 선택</legend>
                            <div class="mb-3">
                                <label class="form-label">수량</label>
                                <div class="count d-flex align-items-center">
                                    <button type="button" class="minus btn btn-outline-primary">-</button>
                                    <input type="text" name="count" value="1"></span>
                                    <button type="button" class="plus btn btn-outline-primary">+</button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">HOT / ICE</label>
                                <div>
                                    <label>
                                        <input type="radio" class="btn-check" name="hot" value="h" checked>
                                        <span class="btn btn-outline-primary">HOT</span>
                                    </label>
                                    <label>
                                        <input type="radio" class="btn-check" name="hot" value="i">
                                        <span class="btn btn-outline-primary">ICE</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">SIZE</label>
                                <div>
                                    <label>
                                        <input type="radio" class="btn-check" name="size" value="s" checked>
                                        <span class="btn btn-outline-primary">S</span>
                                    </label>
                                    <label>
                                        <input type="radio" class="btn-check" name="size" value="m" >
                                        <span class="btn btn-outline-primary">M</span>
                                    </label>
                                    <label>
                                        <input type="radio" class="btn-check" name="size" value="l" >
                                        <span class="btn btn-outline-primary">L</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">펄 추가</label>
                                <div>
                                    <label>
                                        <input type="radio" class="btn-check" name="pearl" value="n" checked>
                                        <span class="btn btn-outline-primary">안함</span>
                                    </label>
                                    <label>
                                        <input type="radio" class="btn-check" name="pearl" value="y">
                                        <span class="btn btn-outline-primary">펄 추가 (+500원)</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">치즈폼 추가</label>
                                <div>
                                    <label>
                                        <input type="radio" class="btn-check" name="cheeze" value="n" checked>
                                        <span class="btn btn-outline-primary">안함</span>
                                    </label>
                                    <label>
                                        <input type="radio" class="btn-check" name="cheeze" value="y">
                                        <span class="btn btn-outline-primary">치즈폼 추가 (+500원)</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">코코넛젤리 추가</label>
                                <div>
                                    <label>
                                        <input type="radio" class="btn-check" name="jelly" value="n" checked>
                                        <span class="btn btn-outline-primary">안함</span>
                                    </label>
                                    <label>
                                        <input type="radio" class="btn-check" name="jelly" value="y">
                                        <span class="btn btn-outline-primary">코코넛젤리 추가 (+500원)</span>
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">취소</button>
                    <button type="button" class="btn btn-primary" onclick="addCartModal('#exampleModal2');">담기</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="cartCompleteModal" tabindex="-1" aria-labelledby="cartCompleteModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <p class="my-4">장바구니에 담겼습니다. </p>
                    <a href="/chayam/product/cart.php" class="btn btn-primary">장바구니 보기</a>
                    <a href="javascript:void(0)" class="btn btn-secondary" data-bs-dismiss="modal">계속 쇼핑하기</a>
                </div>
            </div>
        </div>
    </div>
    <script src="/chayam/assets/libs/jquery-3.6.1.min.js"></script>
    <script src="/chayam/assets/libs/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="/chayam/assets/libs/vue/vue.js"></script>
    <script src="/chayam/assets/libs/wow/wow.min.js"></script>
    <script src="/chayam/assets/js/header.js"></script>
    <script type="text/javascript">
        // 전역 상품아이디 
        var global_p_id = null;

        function openCartModal(p_id, s_price_check){
            // 로그인이 필요한 서비스입니다 팝업
            var s_idx = '<?php echo $s_idx?>';
            if(!s_idx){
                alert("로그인이 필요한 서비스입니다.");
                location.href = "http://localhost/chayam/login/login.php";
                return;
            }

            // 해당 상품 아이디값을 전역 변수에 넣기
            global_p_id = p_id;

            //장바구니 버튼 클릭시 팝업 열기
            var myModalEl = document.querySelector(s_price_check ? '#exampleModal2' : '#exampleModal');
            var modal = bootstrap.Modal.getOrCreateInstance(myModalEl);
            modal.show();
        }

        function addCartModal(modalSelector){
            var modalEl = $(modalSelector);
            var count = modalEl.find("[name='count']").val();
            var hot = modalEl.find("[name='hot']:checked").val();
            var size = modalEl.find("[name='size']:checked").val();
            var pearl = modalEl.find("[name='pearl']:checked").val();
            var cheeze = modalEl.find("[name='cheeze']:checked").val();
            var jelly = modalEl.find("[name='jelly']:checked").val();

            $.ajax({
                url: '/chayam/api/cart/save.php',
                method: 'post',
                data: {
                    u_id : '<?php echo $s_id; ?>',
                    p_id : global_p_id,
                    count : count,
                    hot : hot,
                    size : size,
                    pearl : pearl,
                    cheeze : cheeze,
                    jelly : jelly
                }
            }).then(function (data) {
                if(data === 'f'){
                    alert("시스템 오류입니다.");
                    return;
                } 

                // 장바구니 팝업 닫기
                var modal = bootstrap.Modal.getOrCreateInstance(modalEl.get(0));
                modal.hide();

                // 장바구니에 담겼습니다 팝업 열기
                var cartModalEl = document.querySelector("#cartCompleteModal");
                var cartModal = bootstrap.Modal.getOrCreateInstance(cartModalEl);
                cartModal.show();
            })
        }

        $(document).ready(function () {
            // MILKTEA Vue 시작
            new Vue({
                el: '#milktea_vue',
                data: function(){
                    return {
                        list: <?php echo $json1;?>,
                    };
                },
                methods: {
                    clickCartBtn: function (p_id, s_price_check){
                       openCartModal(p_id, s_price_check);
                    }
                }
            });
            new Vue({
                el: '#coffee_vue',
                data: function(){
                    return {
                        list: <?php echo $json2;?>
                    };
                },
                methods: {
                    clickCartBtn: function(p_id, s_price_check){
                        openCartModal(p_id, s_price_check);
                    }
                }
            });
            new Vue({
                el: '#tea_vue',
                data: function(){
                    return {
                        list: <?php echo $json3;?>
                    };
                },
                methods: {
                    clickCartBtn: function(p_id, s_price_check){
                        openCartModal(p_id, s_price_check);
                    }
                }
            });

            //수량 옵션
            $('.count :button').on({
                'click': function (e) {
                    e.preventDefault();
                    var $count = $(this).parent('.count').find("[name='count']");
                    var now = parseInt($count.val());
                    var min = 1;
                    var max = 999;
                    var num = now;
                    if ($(this).hasClass('minus')) {
                        var type = 'm';
                    } else {
                        var type = 'p';
                    }
                    if (type == 'm') {
                        if (now > min) {
                            num = now - 1;
                        }
                    } else {
                        if (now < max) {
                            num = now + 1;
                        }
                    }
                    if (num != now) {
                        $count.val(num);
                    }
                }
            });
        });

        new WOW().init();

    </script>
</body>

</html>