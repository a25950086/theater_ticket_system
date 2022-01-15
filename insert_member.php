<?php
    //連接資料庫
    include_once "db_conn.php";

    //設定想要新增入資料庫的資料內容如下
    $mId = $_POST["mId"];
    $password = $_POST["password"];
    $mName = $_POST["mName"];
    $mPhone = $_POST["mPhone"];
    $email = $_POST["email"];

    $query = ("insert into member values(?,?,?,?,?)");
    $stmt = $db->prepare($query);
    $stmt->execute(array($mId,$password,$mName,$mPhone,$email));
    echo '<script>alert("註冊成功"); location.href="member.php"</script>;';
?>