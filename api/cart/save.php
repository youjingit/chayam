<?php
// 데이터 가져오기
$u_id = $_POST["u_id"];
$p_id = $_POST["p_id"];
$count = $_POST["count"];
$hot = $_POST["hot"];
$size = $_POST["size"];
$pearl = $_POST["pearl"];
$cheeze = $_POST["cheeze"];
$jelly = $_POST["jelly"];

// DB 연결
include "../../inc/dbcon.php";

// 쿼리 작성
$sql = "insert into chayam_cart (";
$sql .= "   u_id,";
$sql .= "   p_id,";
$sql .= "   count,";
$sql .= "   hot,";
$sql .= "   size,";
$sql .= "   pearl,";
$sql .= "   cheeze,";
$sql .= "   jelly";
$sql .= ")";
$sql .= "values (";
$sql .= "   '$u_id',";
$sql .= "   '$p_id',";
$sql .= "   '$count',";
$sql .= "   '$hot',";
$sql .= "   '$size',";
$sql .= "   '$pearl',";
$sql .= "   '$cheeze',";
$sql .= "   '$jelly'";
$sql .= ");";

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
