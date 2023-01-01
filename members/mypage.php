<?php
// 세션으로 데이터 가져오기
include "../inc/session.php";

// 로그인 사용자만 접근
include "../inc/login_check.php";

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "select coalesce(min(t1.count), 0) as count from stamp t1 where t1.u_id= '$s_id';";

// 쿼리 실행
$result = mysqli_query($dbcon, $sql);

// 총 주문금액
$sql1 = "select "; 
$sql1 .= "format ( ";
$sql1 .= "sum(";
$sql1 .= "    t1.count * case t1.size ";
$sql1 .= "        when 's' then cast(replace(t2.s_price, ',', '') as int) ";
$sql1 .= "        when 'm' then cast(replace(t2.m_price, ',', '') as int) ";
$sql1 .= "        else cast(replace(t2.l_price, ',', '') as int) ";
$sql1 .= "    end ";
$sql1 .= "    + case t1.pearl when 'y' then 500 else 0 end ";
$sql1 .= "    + case t1.cheeze when 'y' then 500 else 0 end ";
$sql1 .= "    + case t1.jelly when 'y' then 500 else 0 end ";
$sql1 .= "    ), ";
$sql1 .= "    0 ";
$sql1 .= ") as total_price, t1.o_id, min(t1.reg_date) as reg_date ";
$sql1 .= "from" ;
$sql1 .= "   orders t0, orders_detail t1, products t2 ";
$sql1 .= "where ";
$sql1 .= "   t0.u_id = '$s_id' ";
$sql1 .= "   and t0.o_id = t1.o_id ";
$sql1 .= "   and t1.p_id = t2.p_id ";
$sql1 .= "group by ";
$sql1 .= "   t1.o_id ";


// 쿼리 실행
$result1 = mysqli_query($dbcon, $sql1);

// DB에서 데이터 가져오기
$array = mysqli_fetch_array($result);

// DB 종료
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
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/boot_reset.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/fragments.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/fragments_640.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/fragments_1024.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/mypage.css">
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
                        <li class="allmenu_depth_1"><a href="#">MENU</a>
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
                <h2 id="mypage_title" class="text-center fs-1">마이페이지</h2>
                <div class="row gy-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="row g-0">
                                <div class="card-header d-flex justify-content-between align-items-center px-4">
                                    <p class="fs-5 fw-bold">주문 내역</p>
                                </div>
                                <?php if(!mysqli_num_rows($result1)) {?>
                                    <p class="text-center my-4">주문 내역이 없습니다.</p>
                                <?php } else { ?>
                                <?php       while($array1 = mysqli_fetch_array($result1)) { ?>
                                    <div class="card-body">
                                        <table class="table ">
                                            <thead class="bg-light">
                                                <tr>
                                                    <th>주문일시</th>
                                                    <th>주문번호</th>
                                                    <th>주문금액</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $array1['reg_date']; ?></td>
                                                    <td><?php echo $array1['o_id']; ?></td>
                                                    <td><?php echo $array1['total_price']; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                <?php       } ?>
                                <?php } ?>
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
                                    <?php 
                                        $i = 1;
                                        while($i <= 12){
                                            if($array['count'] >= $i){
                                                echo '<img class="active" src="/chayam/assets/images/stamp.png" alt="stamp">';
                                            } else {
                                                echo '<img src="/chayam/assets/images/stamp.png" alt="stamp">';
                                            }
                                            $i++;
                                        }
                                    ?>
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
                                <img src="/chayam/assets/images/barcode.png" alt="barcode">
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
                            <button type="button" onclick="location.href='mypage_auth.php'" class="btn btn-secondary w-100">내 정보수정</button>
                            <button type="button" class="btn btn-secondary w-100" onclick="mem_del()">회원탈퇴</button>
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
    <script src="/chayam/assets/libs/jquery-3.6.1.min.js"></script>
    <script src="/chayam/assets/libs/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="/chayam/assets/js/header.js"></script>
    <script type="text/javascript">
        function mem_del(){
            var rtn_val = confirm("정말 탈퇴하시겠습니까?");
            if(rtn_val == true){
                location.href = "member_delete.php";
            };
        };
    </script>
</body>

</html>