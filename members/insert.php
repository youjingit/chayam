<?php

// 이전 페이지에서 값 가져오기
$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];
$u_name = $_POST["u_name"];
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

// 시간 구하기
$reg_date = date("Y-m-d");

include "../inc/dbcon.php";

$sql = "insert into members(";
$sql .= "u_id, pwd, u_name, ";
$sql .= "mobile, email, ps_code, ";
$sql .= "addr_b, addr_d, addr_ref, ";
$sql .= "collect_agree, mkt_agree, sms_agree, email_agree, reg_date";
$sql .= ") values(";
$sql .= "'$u_id', '$pwd', '$u_name',";
$sql .= "'$mobile', '$email', '$ps_code',";
$sql .= "'$addr_b', '$addr_d', '$addr_ref', ";
$sql .= "'$collect_agree', '$mkt_agree', '$sms_agree', '$email_agree', '$reg_date');";

// 데이터베이스에 쿼리 전송
// $result = mysqli_query($dbcon, $sql);
// echo $result;
try {
    mysqli_query($dbcon, $sql);
    echo "
    <script type=\"text/javascript\">
        location.href = \"welcome.php?u_id=$u_id\";
    </script>
    ";
}
catch (exception $e){
    echo "
    <script type=\"text/javascript\">
        alert(\"잘못된 접근입니다.\");
        location.href = \"join.php\";
    </script>
    ";
}
finally {
    // DB 접속 종료
    mysqli_close($dbcon);
}

?>