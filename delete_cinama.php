<?php
    include "db_conn.php";
    //使用 prepare 的寫法
    $cName = $_GET['cName'];
    $stmt = $db->prepare("delete from cinemas where cName=?");
    $result = $stmt->execute(array($cName));
    echo '<script>alert("刪除成功"); location.href="cinema.php"</script>;';
?>
