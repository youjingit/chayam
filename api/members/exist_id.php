<?php
// 데이터 가져오기
$u_id = $_GET["u_id"];

// DB 연결
include "../../inc/dbcon.php";

// 쿼리 작성
$sql = "select u_id from chayam_members where u_id='$u_id';";

// 쿼리 전송
$result = mysqli_query($dbcon, $sql);

// DB에서 데이터 가져오기
$num = mysqli_num_rows($result);

mysqli_close($dbcon);

echo $num ? 't' : 'f';
?>