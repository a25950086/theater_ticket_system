<?php
    //連接資料庫
    include_once "db_conn.php";

    //設定想要新增入資料庫的資料內容如下
    $mId = $_POST["mId"];
    $password = $_POST["password"];
    $mName = $_POST["mName"];
    $mPhone = $_POST["mPhone"];
    $email = $_POST["email"];

    $query = ("update member set password=?,mName=?,mPhone=?,email=? where mId =?");
    $stmt = $db->prepare($query);
    $stmt->execute(array($password,$mName,$mPhone,$email,$mId));
    echo '<script>alert("修改成功"); location.href="logout.php"</script>;';
?>