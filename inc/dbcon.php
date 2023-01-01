<?php
$dbcon = mysqli_connect("localhost", "root", "", "chayam") or die("접속에 실패하였습니다.");
mysqli_set_charset($dbcon, "utf8");

date_default_timezone_set('Asia/Seoul');
?>