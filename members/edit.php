<?php
include "../inc/session.php";

// 이전 페이지에서 값 가져오기
$pwd = $_POST["pwd"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$ps_code = $_POST["ps_code"];
$addr_b = $_POST["addr_b"];
$addr_d = $_POST["addr_d"];
$addr_ref = $_POST["addr_ref"];
$collect_agree = @$_POST["collect_agree_ch"] == "y" ? "y" : "n";
$mkt_agree = @$_POST["mkt_agree"] == "y" ? "y" : "n";
$sms_agree = @$_POST["sms_agree"] == "y" ? "y" : "n";
$email_agree = @$_POST["email_agree"] == "y" ? "y" : "n";

include "../inc/dbcon.php";

// 비밀번호를 입력한 경우
$sql = "update members set ";
$sql .= "pwd='$pwd', ";
$sql .= "mobile='$mobile', ";
$sql .= "email='$email', ";
$sql .= "ps_code='$ps_code', 'addr_b='$addr_b', 'addr_d='$addr_d', 'addr_ref='$addr_ref', ";
$sql .= "collect_agree='$collect_agree', mkt_agree='$mkt_agree', sms_agree='$sms_agree', email_agree='$email_agree' ";
$sql .= "where idx=$s_idx;";

//비밀번호를 입력하지 않은 경우
$sql_nPwd = "update members set mobile='$mobile', email='$email', ps_code='$ps_code', addr_b='$addr_b', addr_d='$addr_d', addr_ref='$addr_ref', collect_agree='$collect_agree', mkt_agree='$mkt_agree', sms_agree='$sms_agree', email_agree='$email_agree' where idx=$s_idx;";

// 쿼리 전송
// mysqli_query(DB 연결객체, 전송할 쿼리)
if($pwd){ //비밀번호 입력한 경우
    mysqli_query($dbcon, $sql);
} else{ //비밀번호 입력하지 않은 경우
    mysqli_query($dbcon, $sql_nPwd);
};

// DB 종료
mysqli_close($dbcon);

// 페이지 이동
echo "
    <script type=\"text/javascript\">
        alert(\"수정되었습니다.\");
        location.href = \"mypage_edit.php\";
    </script>
    ";
?>

?>