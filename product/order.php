<?php
include "../inc/session.php";
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>차얌 - 茶원이 다른 밀크티, 차얌</title>
    <link rel="stylesheet" href="../libs/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../libs/bootstrap//bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/boot_reset.css">
    <link rel="stylesheet" type="text/css" href="../css/fragments.css">
    <link rel="stylesheet" type="text/css" href="../css/fragments_640.css">
    <link rel="stylesheet" type="text/css" href="../css/fragments_1024.css">
    <link rel="stylesheet" type="text/css" href="../css/order.css">
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
                    <li class="depth_1"><a href="menu.php">메뉴</a>
                        <ul>
                            <li><a href="menu.php">MILK TEA</a></li>
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
                        <li class="allmenu_depth_1"><a href="menu.php">MENU</a>
                            <ul>
                                <li><a href="menu.php">MILK TEA</a></li>
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
            <div class="container mb-5">
                <h2 id="order_title" class="text-center fw-bold fs-1">주문하기</h2>
                <form name="order_form" action="order.php" method="post" onsubmit="return order_form_check()">
                    <fieldset>
                        <legend class="hide">주문하기</legend>
                        <div class="card my-3">
                            <div class="card-header fs-5 fw-bold ps-4">
                                주문 매장
                            </div>
                            <div class="card-body d-flex justify-content-between align-items-center px-4 py-4">
                                <a href="#" class="btn btn-outline-primary">매장 선택</a>
                                <p class="card-text">AK 금정점 (경기도 군포시 금정동 689 AK플라자 금정점 2층)</p>
                            </div>
                        </div>
                        <div class="card my-3">
                            <div class="row g-0">
                                <div class="card-header fs-5 fw-bold ps-4">
                                    주문 내역
                                </div>
                                <div class="col-4 d-flex justify-content-center py-4">
                                    <img src="../images/menu/milktea_05.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-8">
                                    <div class="card-body px-4 py-4">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5 class="card-title fs-4 mb-0">밀크티</h5>
                                            <span class="card-text fs-4">4,000원</span>
                                        </div>
                                        <p class="card-text option_txt"><small class="text-muted">HOT / 펄 추가</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card my-3">
                            <div class="card-header fs-5 fw-bold ps-4">
                                포인트
                            </div>
                            <div class="card-body px-4 py-4">
                                <p><small class="text-muted">(1,500P 이상 적립 시 사용가능)</small></p>
                                <div class="d-flex align-items-center">
                                    <p>잔여 포인트 <span class="text-danger me-4">0P</span></p>
                                    <label for="point">포인트 사용</label>
                                    <input type="text" name="point" id="point" class="mx-2" placeholder="포인트 입력">P
                                </div>
                            </div>
                        </div>
                        <div class="card my-3">
                            <div class="card-header fs-5 fw-bold ps-4">
                                결제정보
                            </div>
                            <div class="card-body d-flex align-items-center px-4 py-4">
                                <input type="checkbox" class="form-check-input custom_checkbox mx-2" name="credit_card"
                                    id="credit_card" value="y">
                                <label for="credit_card" class="d-flex align-items-center"><i
                                        class="bi bi-credit-card fs-3 mx-2 mt-1"></i>신용카드</label>
                            </div>
                        </div>
                        <div class="card my-3">
                            <div class="card-header fs-5 fw-bold ps-4">
                                주문 금액
                            </div>
                            <div class="card-body d-flex flex-column px-4 py-4">
                                <div class="d-flex justify-content-between"><span>상품금액</span>
                                    <div><span>4,000</span> 원</div>
                                </div>
                                <div class="d-flex justify-content-between"><span>할인금액</span>
                                    <div>-<span>0</span> 원</div>
                                </div>
                                <div class="d-flex justify-content-between"><span>결제금액</span>
                                    <div class="text-danger"><span>4,000</span> 원</div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-lg btn-primary w-100 mt-4">주문 결제하기</a>
                    </fieldset>
                </form>
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
    <script src="../libs/jquery-3.6.1.min.js"></script>
    <script src="../libs/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../js/header.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
        });
    </script>
</body>

</html>