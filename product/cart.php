<?php
include "../inc/session.php";

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "select t1.*, t2.*, "; 
$sql .= "format ( ";
$sql .= "    t1.count * case t1.size ";
$sql .= "        when 's' then cast(replace(t2.s_price, ',', '') as int) ";
$sql .= "        when 'm' then cast(replace(t2.m_price, ',', '') as int) ";
$sql .= "        else cast(replace(t2.l_price, ',', '') as int) ";
$sql .= "    end ";
$sql .= "    + case t1.pearl when 'y' then 500 else 0 end ";
$sql .= "    + case t1.cheeze when 'y' then 500 else 0 end ";
$sql .= "    + case t1.jelly when 'y' then 500 else 0 end, ";
$sql .= "    0 ";
$sql .= ") as price ";
$sql .= "from" ;
$sql .= "   cart t1, products t2 ";
$sql .= "where ";
$sql .= "   t1.u_id = '$s_id' ";
$sql .= "   and t1.p_id = t2.p_id ;";

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
$sql1 .= ") as total_price ";
$sql1 .= "from" ;
$sql1 .= "   cart t1, products t2 ";
$sql1 .= "where ";
$sql1 .= "   t1.u_id = '$s_id' ";
$sql1 .= "   and t1.p_id = t2.p_id ";
$sql1 .= "group by ";
$sql1 .= "   t1.u_id ";


// 쿼리 실행
$result1 = mysqli_query($dbcon, $sql1);

$array1 = mysqli_fetch_array($result1);

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
    <link rel="stylesheet" href="/chayam/assets/libs/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/boot_reset.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/fragments.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/fragments_640.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/fragments_1024.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/cart.css">
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
                        <li class="allmenu_depth_1"><a href="#">MENU</a>
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
            <div class="container">
                <h2 id="cart_title" class="text-center fs-1">장바구니</h2>
                <div class="cart_list">
                    <small class="mb-4 text-muted">담긴 메뉴는 최대 2개월간 저장됩니다.</small>
                    <?php while($array = mysqli_fetch_array($result)){ ?>
                    <div class="card border-0 shadow">
                        <div class="row g-0">
                            <div class="col-4 d-flex justify-content-center py-4">
                                <img src="<?php echo $array['p_image']; ?>" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-8">
                                <div class="card-body pe-5 py-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title fs-4 mb-0"><?php echo $array['p_name']; ?></h5>
                                        <span class="card-text fs-4"><?php echo $array['price']; ?> 원</span>
                                    </div>
                                    <p class="card-text option_txt">
                                        <small class="text-muted">
                                            <?php echo $array['count']; ?> 개
                                            / <?php echo $array['hot'] == 'h' ? 'HOT' : 'ICE' ; ?> 
                                            / <?php echo strtoupper($array['size']); ?> 
                                            <?php if($array['pearl'] == 'y') echo '/ 펄 추가'; ?> 
                                            <?php if($array['cheeze'] == 'y') echo '/ 치즈폼 추가'; ?> 
                                            <?php if($array['jelly'] == 'y') echo '/ 코코넛젤리 추가'; ?> 
                                        </small>
                                    </p>
                                    <a class="cart_delete text-danger" href="#" onclick="clickDelBtn('<?php echo $array['c_id']; ?>')"><span class="hide">삭제하기</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="card w-100 my-5 border-0 shadow">
                    <div class="card-body px-5 py-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title fs-4 mb-0">상품 금액</h5>
                            <span class="card-text fs-4"><?php echo $array1['total_price']; ?> 원</span>
                        </div>
                      <a href="/chayam/product/order.php" class="btn btn-lg btn-primary w-100 mt-4">주문하기</a>
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
        function clickDelBtn(c_id){
            if(confirm("정말 삭제하시겠습니까?")){
                $.ajax({
                    url: '/chayam/api/cart/delete.php',
                    method: 'post',
                    data: {
                        c_id: c_id
                    }
                }).then(function (data) {
                    if(data === 'f'){
                        alert("시스템 오류입니다.");
                        return;
                    } 
                    alert("삭제되었습니다.");
                    location.reload();
                })
            }
        }
    </script>
</body>

</html>

<?php 
mysqli_close($dbcon);
?>