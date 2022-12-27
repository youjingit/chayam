<?php
// 세션으로 데이터 가져오기
include "../inc/session.php";

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "select * from members where idx=$s_idx;";
// 쿼리 실행
$result = mysqli_query($dbcon, $sql);

// DB에서 데이터 가져오기
$array = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>차얌 - 茶원이 다른 밀크티, 차얌</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/boot_reset.css">
    <link rel="stylesheet" type="text/css" href="../css/fragments.css">
    <link rel="stylesheet" type="text/css" href="../css/fragments_640.css">
    <link rel="stylesheet" type="text/css" href="../css/fragments_1024.css">
    <link rel="stylesheet" type="text/css" href="../css/mypage.css">
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
                    <li class="depth_1"><a href="../product/menu.php">메뉴</a>
                        <ul>
                            <li><a href="../product/menu.php">MILK TEA</a></li>
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
                    <li><a href="join.php">회원가입</a></li>
                <?php } else if($s_id == "admin1234"){ ?>
                    <!-- 관리자 로그인 -->
                    <li><a href="../login/logout.php">로그아웃</a></li>
                    <li><a href="../admin/index.php">관리자 페이지</a></li>
                <?php } else{ ?>
                    <!-- 로그인 후 -->   
                    <li><a href="../login/logout.php">로그아웃</a></li>
                    <li><a href="#">마이페이지</a></li>
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
                        <li class="allmenu_depth_1"><a href="menu.html">MENU</a>
                            <ul>
                                <li><a href="../product/menu.php">MILK TEA</a></li>
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
                    <li><a href="join.php">회원가입</a></li>
                <?php } else if($s_id == "admin1234"){ ?>
                    <!-- 관리자 로그인 -->
                    <li><a href="../login/logout.php">로그아웃</a></li>
                    <li><a href="../admin/index.php">관리자 페이지</a></li>
                <?php } else{ ?>
                    <!-- 로그인 후 -->   
                    <li><a href="../login/logout.php">로그아웃</a></li>
                    <li><a href="#">마이페이지</a></li>
                <?php }; ?>    
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="padding_top">
            <div class="container mb-5">
                <h2 id="mypage_title" class="text-center fw-bold fs-1">마이페이지</h2>
                <div class="row gy-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="row g-0">
                                <div class="card-header d-flex justify-content-between align-items-center px-4">
                                    <p class="fs-5 fw-bold">주문 내역</p>
                                </div>
                                <div class="card-body">
                                    <table class="table ">
                                        <thead class="bg-light">
                                            <tr>
                                                <th>주문일시</th>
                                                <th>메뉴</th>
                                                <th>옵션</th>
                                                <th>가격</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2022-12-24 18:35</td>
                                                <td>밀크티</td>
                                                <td>HOT / 펄 추가</td>
                                                <td>4,000원</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="3">주문금액</th>
                                                <th>4,000원</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="card">
                            <div class="card-header fs-5 fw-bold">
                                적립
                            </div>
                            <div class="card-body text-center">
                                <div class="stamp_board">
                                    <img src="../images/stamp.png" alt="stamp">
                                    <img src="../images/stamp.png" alt="stamp">
                                    <img src="../images/stamp.png" alt="stamp">
                                    <img src="../images/stamp.png" alt="stamp">
                                    <img src="../images/stamp.png" alt="stamp">
                                    <img src="../images/stamp.png" alt="stamp">
                                    <img src="../images/stamp.png" alt="stamp">
                                    <img src="../images/stamp.png" alt="stamp">
                                    <img src="../images/stamp.png" alt="stamp">
                                    <img src="../images/stamp.png" alt="stamp">
                                    <img src="../images/stamp.png" alt="stamp">
                                    <img src="../images/stamp.png" alt="stamp">
                                </div>
                                <p class="card-text">스탬프 12개 적립 시 무료음료쿠폰 1개가 익일 발급됩니다.</p>
                                <p class="card-text">발행된 스탬프의 유효기간은 발행일로부터 1년입니다.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="card">
                            <div class="card-header fs-5 fw-bold">
                                멤버십 바코드
                            </div>
                            <div class="card-body text-center">
                                <img src="../images/barcode.png" alt="barcode">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="card">
                            <div class="card-header fs-5 fw-bold">
                                보유 포인트
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="card-text"><span class="text-danger fs-4">1,500</span> P</p>
                                    <a href="#" class="btn btn-outline-primary btn-sm">적립/사용내역</a>
                                </div>
                                <ul class="point_notice mt-2">
                                    <li>직영점의 경우 직영점(통합)으로 포인트가 적립되며, <br>모든 직영점에서 사용가능합니다.</li>
                                    <li>가맹점의 경우 구매 매장별로 포인트가 적립되며, <br>적립한 매장에서만 사용가능합니다.</li>
                                    <li>일부 매장은 스탬프/포인트 적립 제도를 운영하지 않습니다.</li>
                                    <li>적립한 포인트의 유효기간은 적립일로부터 1년입니다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="card">
                            <div class="card-header fs-5 fw-bold">
                                보유 쿠폰
                            </div>
                            <div class="card-body">
                                <p class="card-text">현재 보유중인 쿠폰이 없습니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end mt-4">
                    <div class="col-12 col-xl-6">
                        <div class="d-flex gap-2">
                            <a href="mypage_auth.php" class="btn btn-secondary w-100">내 정보수정</a>
                            <a href="mypage_auth.php" class="btn btn-secondary w-100">회원탈퇴</a>
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
    <script src="../libs/jquery-3.6.1.min.js"></script>
    <script src="../libs/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../js/header.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
        });
    </script>
</body>

</html>