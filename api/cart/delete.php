<?php
// 데이터 가져오기
$c_id = $_POST["c_id"];

// DB 연결
include "../../inc/dbcon.php";

// 쿼리 작성
$sql = "delete from cart where c_id = '$c_id' ";

try {
    mysqli_query($dbcon, $sql);
    echo "t";
}
catch (exception $e){
    echo "f";
}
finally {
    // DB 접속 종료
    mysqli_close($dbcon);
}
?>
