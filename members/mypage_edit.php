<?php
// 세션으로 데이터 가져오기
/* session_start();
$s_idx =  isset($_SESSION["s_idx"])?  $_SESSION["s_idx"] : ""; */
include "../inc/session.php";

// 로그인 사용자만 접근
include "../inc/login_check.php";

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "select * from chayam_members where idx=$s_idx;";
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
    <link rel="stylesheet" type="text/css" href="/chayam/assets/libs/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/boot_reset.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/fragments.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/fragments_640.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/fragments_1024.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/join.css">
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
                    <li class="depth_1"><a href="/chayam/product/menu.php">메뉴</a>
                        <ul>
                            <li><a href="/chayam/product/menu.php">MILK TEA</a></li>
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
                    <li><a href="/chayam/login/login.php">로그인</a></li>
                    <li><a href="join.php">회원가입</a></li>
                <?php } else if($s_id == "admin1234"){ ?>
                    <!-- 관리자 로그인 -->
                    <li><a href="/chayam/login/logout.php">로그아웃</a></li>
                    <li><a href="/chayam/admin/index.php">관리자 페이지</a></li>
                <?php } else{ ?>
                    <!-- 로그인 후 -->   
                    <li><a href="/chayam/login/logout.php">로그아웃</a></li>
                    <li><a href="mypage.php">마이페이지</a></li>
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
                                <li><a href="/chayam/product/menu.php">MILK TEA</a></li>
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
                    <li><a href="/chayam/login/login.php">로그인</a></li>
                    <li><a href="join.php">회원가입</a></li>
                <?php } else if($s_id == "admin1234"){ ?>
                    <!-- 관리자 로그인 -->
                    <li><a href="/chayam/login/logout.php">로그아웃</a></li>
                    <li><a href="/chayam/admin/index.php">관리자 페이지</a></li>
                <?php } else{ ?>
                    <!-- 로그인 후 -->   
                    <li><a href="/chayam/login/logout.php">로그아웃</a></li>
                    <li><a href="mypage.php">마이페이지</a></li>
                <?php }; ?>    
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="padding_top">
            <h2 id="join_title">회원정보 수정</h2>
            <form name="edit_form" class="container pb-4" action="edit.php" method="post"
                onsubmit="return edit_form_check()">
                <input type="hidden" name="email_exist" id="email_exist" value="f">
                <fieldset class="row justify-content-center">
                    <legend class="hide">회원정보 수정</legend>
                    <section class="col-12 col-lg-9">
                        <div class="row mb-3 d-flex align-items-center">
                            <label for="u_id" class="col-12 col-md-3 col-form-label fs-5 fw-bold">아이디</label>
                            <div class="col-12 col-md-9">
                                <div class="row">
                                    <div class="col-12 col-sm-9 mb-2">
                                        <input type="text" id="u_id" name="u_id" class="form-control" value="<?php echo $array["u_id"];?>" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 d-flex align-items-center">
                            <label for="pwd" class="col-12 col-md-3 col-form-label fs-5 fw-bold">비밀번호</label>
                            <div class="col-12 col-md-9">
                                <div class="row">
                                    <div class="col-12 col-sm-9 mb-2">
                                        <input type="password" id="pwd" name="pwd"
                                            placeholder="비밀번호 (영어 숫자 특수문자 조합 8~16자리)" class="form-control">
                                    </div>
                                </div>
                                <span id="err_pwd" class="err_txt"></span>
                            </div>
                        </div>
                        <div class="row mb-3 d-flex align-items-center">
                            <label for="re_pwd" class="col-12 col-md-3 col-form-label fs-5 fw-bold">비밀번호 확인</label>
                            <div class="col-12 col-md-9">
                                <div class="row">
                                    <div class="col-12 col-sm-9 mb-2">
                                        <input type="password" id="re_pwd" name="re_pwd" class="form-control">
                                    </div>
                                </div>
                                <span id="err_repwd" class="err_txt"></span>
                            </div>
                        </div>
                        <div class="row mb-3 d-flex align-items-center">
                            <label for="u_name" class="col-12 col-md-3 col-form-label fs-5 fw-bold">이름</label>
                            <div class="col-12 col-md-9">
                                <div class="row">
                                    <div class="col-12 col-sm-9 mb-2">
                                        <input type="text" id="u_name" name="u_name" class="form-control" value="<?php echo $array["u_name"];?>" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 d-flex align-items-center">
                            <label for="mobile" class="col-12 col-md-3 col-form-label fs-5 fw-bold">휴대폰</label>
                            <div class="col-12 col-md-9">
                                <div class="row">
                                    <div class="col-12 col-sm-9 mb-2">
                                        <input type="text" id="mobile" name="mobile" placeholder="숫자만 입력해주세요"
                                            maxlength="11" class="form-control" value="<?php echo $array["mobile"];?>"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="d-grid gap-2">
                                            <button type="button" id="auth_mobile"
                                                class="btn btn-outline-primary text-nowrap">인증번호
                                                받기</button>
                                        </div>
                                    </div>
                                </div>
                                <span id="err_mobile" class="err_txt"></span>
                            </div>
                        </div>
                        <div class="row mb-3 d-flex align-items-center">
                            <label for="email" class="col-12 col-md-3 col-form-label fs-5 fw-bold">이메일</label>
                            <div class="col-12 col-md-9">
                                <div class="row">
                                    <div class="col-12 col-sm-9 mb-2">
                                        <input type="text" id="email" name="email"
                                            placeholder="ex) chayaming@chayam.com" class="form-control" value="<?php echo $array["email"];?>">
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="d-grid gap-2">
                                            <button type="button" id="email_search_btn"
                                                class="btn btn-outline-primary text-nowrap"
                                                onclick="email_search()">중복확인</button>
                                        </div>
                                    </div>
                                </div>
                                <span id="err_email" class="err_txt"></span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-12 col-md-3 col-form-label fs-5 fw-bold">주소</label>
                            <div class="col-12 col-md-9">
                                <div class="row">
                                    <div class="col-7 col-md-9">
                                        <input type="text" name="ps_code" id="sample3_postcode"
                                            class="form-control mb-3" placeholder="우편번호" value="<?php echo $array["ps_code"];?>" readonly>
                                    </div>
                                    <div class="col-5 col-md-3">
                                        <div class="d-grid gap-2">
                                            <button type="button" onclick="sample3_execDaumPostcode()"
                                                class="btn btn-outline-primary text-nowrap">우편번호
                                                검색</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="addr_b" id="sample3_address" class="form-control mb-3" value="<?php echo $array["addr_b"];?>"
                                            placeholder="기본주소" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="addr_d" id="sample3_detailAddress"
                                            class="form-control mb-3" value="<?php echo $array["addr_d"];?>"placeholder="상세주소">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="addr_ref" id="sample3_extraAddress"
                                            class="form-control mb-3" value="<?php echo $array["addr_ref"];?>"placeholder="참고항목">
                                    </div>
                                </div>
                                <span id="err_address" class="err_txt"></span>
                                <div class="row">
                                    <div class="col-12 col-md-9">
                                        <div id="wrap"
                                            style="display:none;border:1px solid;width:100%;height:300px;margin:5px 0;position:relative">
                                            <img src="//t1.daumcdn.net/postcode/resource/images/close.png"
                                                id="btnFoldWrap"
                                                style="cursor:pointer;position:absolute;right:0px;top:-1px;z-index:1"
                                                onclick="foldDaumPostcode()" alt="접기 버튼">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-12 col-md-3 col-form-label fs-5 fw-bold">이용약관동의</label>
                            <div class="col-12 col-md-9 pt-1">
                                <div class="row">
                                    <div class="col-12 col-md-9">
                                        <div class="form-check mb-2">
                                            <input type="checkbox" id="collect_agree_ch"
                                                name="collect_agree_ch" class="form-check-input custom_checkbox me-2 termck" value="y" <?php if($array["collect_agree"] == "y") echo "checked";?>>
                                            <label for="collect_agree_ch" class="form-check-label">
                                                개인정보 수집 이용 동의 (선택)
                                            </label>
                                            <a href="#" class="float-end terms_link">약관보기</a>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="checkbox" name="mkt_agree" id="mkt_agree"
                                                class="form-check-input custom_checkbox me-2 termck" value="y" <?php if($array["mkt_agree"] == "y") echo "checked";?>>
                                            <label for="mkt_agree" class="form-check-label">
                                                혜택/정보 수신 동의 (선택)
                                            </label>
                                        </div>
                                        <div class="mb-2 ms-4">
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" name="sms_agree" id="sms_agree"
                                                    class="form-check-input custom_checkbox me-2 termck"
                                                    value="y" <?php if($array["sms_agree"] == "y") echo "checked";?>>
                                                <label for="sms_agree" class="form-check-label">SMS</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" name="email_agree" id="email_agree"
                                                    class="form-check-input custom_checkbox me-2 termck"
                                                    value="y" <?php if($array["email_agree"] == "y") echo " checked";?>>
                                                <label for="email_agree" class="form-check-label">이메일</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span id="err_ess" class="err_txt"></span>
                            </div>
                        </div>
                        <div class="row justify-content-end my-4">
                            <div class="col-12 col-md-9">
                                <div class="row">
                                    <div class="col-12 col-md-9">
                                        <button type="submit" name="join_btn" id="join_btn"
                                            class="btn btn-primary w-100 my-2">수정하기</button>
                                        <button type="button" name="back_btn" id="back_btn" class="btn btn-outline-primary w-100 my-2" onclick="location.href='mypage.php'">돌아가기</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </fieldset>
            </form>
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


    <!-- 폼 스크립트 -->
    <script src="/chayam/assets/libs/jquery-3.6.1.min.js"></script>
    <script src="/chayam/assets/libs/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="/chayam/assets/libs/daum_api/postcode.v2.js"></script>
    <script src="/chayam/assets/js/header.js"></script>
    <script>
        // 우편번호 찾기 찾기 화면을 넣을 element
        var element_wrap = document.getElementById('wrap');

        function foldDaumPostcode() {
            // iframe을 넣은 element를 안보이게 한다.
            element_wrap.style.display = 'none';
        }

        function sample3_execDaumPostcode() {
            // 색깔 바꾸기
            var themeObj = {
                bgColor: "#5C068C",
                postcodeTextColor: "#E82A3E",
                emphTextColor: "#E72C81"
            };
            // 현재 scroll 위치를 저장해놓는다.
            var currentScroll = Math.max(document.body.scrollTop, document.documentElement.scrollTop);
            new daum.Postcode({
                theme: themeObj,
                oncomplete: function (data) {
                    // 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                    // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                    // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                    var addr = ''; // 주소 변수
                    var extraAddr = ''; // 참고항목 변수

                    //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                    if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                        addr = data.roadAddress;
                    } else { // 사용자가 지번 주소를 선택했을 경우(J)
                        addr = data.jibunAddress;
                    }

                    // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
                    if (data.userSelectedType === 'R') {
                        // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                        // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                        if (data.bname !== '' && /[동|로|가]$/g.test(data.bname)) {
                            extraAddr += data.bname;
                        }
                        // 건물명이 있고, 공동주택일 경우 추가한다.
                        if (data.buildingName !== '' && data.apartment === 'Y') {
                            extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                        }
                        // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                        if (extraAddr !== '') {
                            extraAddr = ' (' + extraAddr + ')';
                        }
                        // 조합된 참고항목을 해당 필드에 넣는다.
                        document.getElementById("sample3_extraAddress").value = extraAddr;

                    } else {
                        document.getElementById("sample3_extraAddress").value = '';
                    }

                    // 우편번호와 주소 정보를 해당 필드에 넣는다.
                    document.getElementById('sample3_postcode').value = data.zonecode;
                    document.getElementById("sample3_address").value = addr;
                    // 커서를 상세주소 필드로 이동한다.
                    document.getElementById("sample3_detailAddress").focus();

                    // iframe을 넣은 element를 안보이게 한다.
                    // (autoClose:false 기능을 이용한다면, 아래 코드를 제거해야 화면에서 사라지지 않는다.)
                    element_wrap.style.display = 'none';

                    // 우편번호 찾기 화면이 보이기 이전으로 scroll 위치를 되돌린다.
                    document.body.scrollTop = currentScroll;
                },
                // 우편번호 찾기 화면 크기가 조정되었을때 실행할 코드를 작성하는 부분. iframe을 넣은 element의 높이값을 조정한다.
                onresize: function (size) {
                    element_wrap.style.height = size.height + 'px';
                },
                width: '100%',
                height: '100%'
            }).embed(element_wrap);

            // iframe을 넣은 element를 보이게 한다.
            element_wrap.style.display = 'block';
        }

        function edit_form_check() {
            var pwdEl = document.getElementById("pwd");
            var repwdEl = document.getElementById("re_pwd");
            var mobileEl = document.getElementById("mobile");
            var emailEl = document.getElementById("email");
            var ps_codeEl = document.getElementById("sample3_postcode");
            var addr_bEl = document.getElementById("sample3_address");
            var addr_dEl = document.getElementById("sample3_detailAddress");
            var email_existEl = document.getElementById("email_exist"); //hidden input

            if (pwdEl.value) {
                var txt = document.getElementById("err_pwd");
                txt.innerHTML = "";

                var cnt = 0;
                var format1 = /[0-9]/;
                if (format1.test(pwdEl.value)) {
                    cnt++;
                }

                var format2 = /[a-zA-Z]/;
                if (format2.test(pwdEl.value)) {
                    cnt++;
                }

                var format3 = /[~?!@#$%<>^&*\()\-=+_\’\:\;\.\,\"\'\[\]\{\}\/\|\`]/gi;
                if (format3.test(pwdEl.value)) {
                    cnt++;
                }

                var txt = document.getElementById("err_pwd");
                if ((cnt >= 2 && pwdEl.value.length >= 10) || (cnt >= 3 && pwdEl.value.length >= 8)) {
                    txt.innerHTML = "";
                } else {
                    txt.innerHTML =
                        "<em>-영문,숫자,특수문자 중 2가지 종류이상을 조합으로 10자리이상 입력하세요.<br>-영문,숫자,특수문자 중 3가지 종류이상을 조합으로 8자리이상 입력하세요.</em>";
                    pwdEl.focus();
                    return false;
                }

                if (pwdEl.value != repwdEl.value) {
                var txt = document.getElementById("err_repwd");
                txt.innerHTML = "<em>비밀번호를 확인하세요.</em>";
                repwdEl.focus();
                return false;
                } else {
                var txt = document.getElementById("err_repwd");
                txt.innerHTML = "";
                }
            }

            if (mobileEl.value == "") {
                var txt = document.getElementById("err_mobile");
                txt.innerHTML = "<em>휴대폰번호를 입력하세요.</em>";
                mobileEl.focus();
                return false;
            } else {
                var txt = document.getElementById("err_mobile");
                txt.innerHTML = "";
            }

            if (emailEl.value == "") {
                var txt = document.getElementById("err_email");
                txt.innerHTML = "<em>이메일을 입력하세요.</em>";
                emailEl.focus();
                return false;
            } else {
                var regex = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
                if (!regex.test(emailEl.value)) {
                    var txt = document.getElementById("err_email");
                    txt.innerHTML = "<em>올바른 이메일을 입력해주세요</em>";
                    emailEl.focus();
                    return false;
                } else {
                    var txt = document.getElementById("err_email");
                    txt.innerHTML = "";
                }
            }

            if (email_existEl.value == 't') {
                alert('이메일 중복확인을 해주세요');
                return false;
            }

            if (ps_codeEl.value == "") {
                var txt = document.getElementById("err_address");
                txt.innerHTML = "<em>우편번호를 검색하세요.</em>";
                ps_codeEl.focus();
                return false;
            } else {
                var txt = document.getElementById("err_address");
                txt.innerHTML = "";
            }

            if (addr_bEl.value == "") {
                var txt = document.getElementById("err_address");
                txt.innerHTML = "<em>기본주소를 입력하세요.</em>";
                addr_bEl.focus();
                return false;
            } else {
                var txt = document.getElementById("err_address");
                txt.innerHTML = "";
            }

            if (addr_dEl.value == "") {
                var txt = document.getElementById("err_address");
                txt.innerHTML = "<em>상세주소를 입력하세요.</em>";
                addr_dEl.focus();
                return false;
            } else {
                var txt = document.getElementById("err_address");
                txt.innerHTML = "";
            }
        }

        // 이메일 중복확인
        function email_search() {
            var emailEl = document.getElementById("email");
            var emailVal = emailEl.value;
            if (emailEl == "") {
                alert('이메일을 입력해주세요');
                return;
            }

            var regex = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
            if (!regex.test(emailVal)) {
                alert('올바른 이메일을 입력하세요');
                return;
            }

            $.ajax({
                url: '/chayam/api/members/exist_email.php',
                method: 'get',
                data: {
                    email: emailVal
                }
            }).then(function (data) {
                if (data === 't') {
                    alert(emailVal + "은 사용할 수 없는 이메일입니다.");
                } else {
                    alert(emailVal + "은 사용할 수 있는 이메일입니다.");
                }
                $('#email_exist').val(data);
            })
        }

        // 이메일 변경 시 기존 이메일과 비교, 같으면 중복확인 X, 다르면 중복확인 시행
        $("#email").change(function () {
            if('<?php echo $array["email"];?>' === $(this).val()){
                $('#email_exist').val('f');
            } else {
                $('#email_exist').val('t');
            }
        })

        // 선택약관 항목별 자동선택
        var marketAgreeEl = document.getElementById("mkt_agree");
        var emailAgreeEl = document.getElementById("email_agree");
        var smsAgreeEl = document.getElementById("sms_agree");

        marketAgreeEl.onclick = function () {
            var isChecked = marketAgreeEl.checked;
            if (isChecked) {
                emailAgreeEl.checked = true;
                smsAgreeEl.checked = true;
            } else {
                emailAgreeEl.checked = false;
                smsAgreeEl.checked = false;
            }
        }
        emailAgreeEl.onclick = function () {
            var isChecked = emailAgreeEl.checked;
            var isSmsChecked = smsAgreeEl.checked;
            if (isChecked === true) {
                marketAgreeEl.checked = true;
            } else {
                if (isSmsChecked === false) {
                    marketAgreeEl.checked = false;
                }
            }
        }
        smsAgreeEl.onclick = function () {
            var isChecked = smsAgreeEl.checked;
            var isEmailChecked = emailAgreeEl.checked;
            if (isChecked === true) {
                marketAgreeEl.checked = true;
            } else {
                if (isEmailChecked === false) {
                    marketAgreeEl.checked = false;
                }
            }
        }
    </script>
</body>

</html>