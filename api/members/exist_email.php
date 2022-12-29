<?php
// 데이터 가져오기
$email = $_GET["email"];

// DB 연결
include "../../inc/dbcon.php";

// 쿼리 작성
$sql = "select email from members where email='$email';";

// 쿼리 전송
$result = mysqli_query($dbcon, $sql);

// DB에서 데이터 가져오기
$num = mysqli_num_rows($result);

mysqli_close($dbcon);

echo $num ? 't' : 'f';
?>