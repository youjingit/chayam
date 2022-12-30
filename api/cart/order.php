<?php
include "../../inc/session.php";

// DB 연결
include "../../inc/dbcon.php";  

$o_id = uniqid();
$reg_date = date('Y-m-d h:i:s');

// orders table insert 쿼리 작성
$sql = "insert into orders( ";
$sql .= "   o_id, u_id, reg_date ";
$sql .= ") values( ";
$sql .= "    '$o_id', ";
$sql .= "    '$s_id', ";
$sql .= "    '$reg_date' ";
$sql .= "); ";

// orders_detail insert 쿼리 작성
$sql1 = "insert into orders_detail( ";
$sql1 .= "   o_id, p_id, count, ";
$sql1 .= "   hot, size, pearl, ";
$sql1 .= "   cheeze, jelly, reg_date ";
$sql1 .= ") select ";
$sql1 .= "    '$o_id', t1.p_id, t1.count,";
$sql1 .= "    t1.hot, t1.size, t1.pearl,";
$sql1 .= "    t1.cheeze, t1.jelly, '$reg_date' ";
$sql1 .= " from cart t1 where t1.u_id = '$s_id';"; 

// 기존 장바구니 내역 삭제
$sql2 = "delete from cart where u_id = '$s_id' ";

// 현재 주문한 수량 구하기
$count_sql = "    ( ";
$count_sql .= "        select ";
$count_sql .= "            sum(x1.count) ";
$count_sql .= "        FROM ";
$count_sql .= "            orders_detail x1 ";
$count_sql .= "        where ";
$count_sql .= "            x1.o_id = '$o_id' ";
$count_sql .= "        group by ";
$count_sql .= "            x1.o_id  ";
$count_sql .= "    ) ";

// 이전에 주문이력이 있을 경우
$sql3 = "update stamp set ";
$sql3 .= "count = count + $count_sql ";
$sql3 .= "where u_id = '$s_id'; ";

// 최초 주문일 때 stamp 찍기
$sql4 = "insert into stamp ( ";
$sql4 .= "    u_id, ";
$sql4 .= "    count ";
$sql4 .= ") ";
$sql4 .= "select ";
$sql4 .= "    '$s_id', ";
$sql4 .= "     $count_sql ";
$sql4 .= "where ";
$sql4 .= "    not exists ( ";
$sql4 .= "        select  ";
$sql4 .= "            1 ";
$sql4 .= "        from ";
$sql4 .= "            stamp x1 ";
$sql4 .= "        where ";
$sql4 .= "            x1.u_id = '$s_id' ";
$sql4 .= "    ); ";

try {
    mysqli_query($dbcon, $sql);
    mysqli_query($dbcon, $sql1);
    mysqli_query($dbcon, $sql2);
    mysqli_query($dbcon, $sql3);
    mysqli_query($dbcon, $sql4);
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
