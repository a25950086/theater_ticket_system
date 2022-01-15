<?php
    //連接資料庫
    include_once "db_conn.php";

    //設定想要新增入資料庫的資料內容如下
    $cName = $_POST["cName"];
    $Address = $_POST["Address"];
    $cPhone = $_POST["cPhone"];

    $query = ("insert into cinemas values(?,?,?)");
    $stmt = $db->prepare($query);
    $stmt->execute(array($cName,$Address,$cPhone));
    echo '<script>alert("新增成功"); location.href="cinema.php"</script>;';
?>