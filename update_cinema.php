<?php
    //連接資料庫
    include_once "db_conn.php";

    //設定想要新增入資料庫的資料內容如下
    $cName = $_GET["cName"];
    $Address = $_POST["Address"];
    $cPhone = $_POST["cPhone"];

    $query = ("update cinemas set Address=?,cPhone=? where cName =?");
    $stmt = $db->prepare($query);
    $stmt->execute(array($Address,$cPhone,$cName));
    echo '<script>alert("修改成功"); location.href="cinema.php"</script>;';
?>