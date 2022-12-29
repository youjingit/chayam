<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>차얌 - 茶원이 다른 밀크티, 차얌</title>
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/fragments.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/fragments_640.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/fragments_1024.css">
    <link rel="stylesheet" type="text/css" href="/chayam/assets/css/login.css">
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
                <li><a href="#">로그인</a></li>
                <li><a href="../members/join.php">회원가입</a></li>
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
                    <li><a href="#">로그인</a></li>
                    <li><a href="../members/join.php">회원가입</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="padding_top">
            <div class="login_container">
                <h2 id="login_title">로그인</h2>
                <form name="login_form" action="login_ok.php" method="post" onsubmit="return login_form_check()">
                    <fieldset>
                        <legend class="hide">로그인</legend>
                        <section class="login_form">
                            <div class="input_wrap">
                                <input class="u_id" type="text" name="u_id" id="u_id" placeholder="아이디를 입력하세요">
                                <input class="pwd" type="password" name="pwd" id="pwd" placeholder="비밀번호를 입력하세요">
                                <br><span id="err_msg" class="err_txt"></span>
                            </div>
                            <div class="login_sub_menu">
                                <a href="#" class="id_find">아이디 찾기</a>
                                <a href="#" class="pwd_find">비밀번호 찾기</a>
                            </div>
                            <div class="btn_wrap">
                                <button type="submit" name="login_btn" id="login_btn">로그인</button>
                                <button type="button" name="join_btn" id="join_btn" onclick="location.href='../members/join.php'">회원가입</button>
                            </div>
                        </section>
                    </fieldset>
                </form>
                <div class="simple_login_title">
                    <div class="simple_login_line"></div>
                    <div class="simple_login_text">
                        <span>간편 로그인</span>
                    </div>
                </div>
                <div class="simple_login_cont">
                    <a href="#"><i class="log_icon naver">네이버 로그인</i></a>
                    <a href="#"><i class="log_icon kakao">카카오톡 로그인</i></a>
                    <a href="#"><i class="log_icon fb">페이스북 로그인</i></a>
                    <a href="#"><i class="log_icon google">구글 로그인</i></a>
                </div>
            </div>
        </div>
    </main>
    <footer id="footer" class="footer">
        <p>Copyright 2019 차얌 all rights reserved.</p>
    </footer>

    <script src="/chayam/assets/libs/jquery-3.6.1.min.js"></script> 
    <script src="/chayam/assets/js/header.js"></script>
    <script type="text/javascript">
        function login_form_check() {
            var u_idEl = document.getElementById("u_id");
            var u_pwdEl = document.getElementById("pwd");
            if (u_idEl.value == "") {
                var txt = document.getElementById("err_msg");
                txt.innerHTML = "<em>아이디를 입력하세요.</em>"
                u_idEl.focus();
                return false;
            } else {
                var regex= /^[a-z0-9]{4,20}$/;
                if (!regex.test(u_idEl.value)){
                    var txt = document.getElementById("err_msg");
                    txt.innerHTML = "<em>올바른 아이디를 입력해주세요.</em>";
                    u_idEl.focus();
                    return false;
                } else {
                    var txt = document.getElementById("err_msg");
                    txt.innerHTML = "";
                }
            }
            if (u_pwdEl.value == "") {
                var txt = document.getElementById("err_msg");
                txt.innerHTML = "<em>비밀번호를 입력하세요.</em>"
                u_pwdEl.focus();
                return false;
            } else {
                var txt = document.getElementById("err_msg");
                txt.innerHTML = "";
            }
        }    

    </script>
</body>
</html>