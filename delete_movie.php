<?php
    include "db_conn.php";
    //使用 prepare 的寫法
    $mTitle = $_GET['mTitle'];
    $stmt = $db->prepare("delete from movie where mTitle=?");
    $result = $stmt->execute(array($mTitle));
    echo '<script>alert("刪除成功"); location.href="movie.php"</script>;';
?>