<?php
    include "db_conn.php";
    //使用 prepare 的寫法
    $mName = $_GET['mName'];
    $stmt = $db->prepare("delete from member where mName=?");
    $result = $stmt->execute(array($mName));
    echo '<script>alert("刪除成功"); location.href="logout.php"</script>;';
?>