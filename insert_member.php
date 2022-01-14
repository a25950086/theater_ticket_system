<?php
    //連接資料庫
    include_once "db_conn.php";

    //設定想要新增入資料庫的資料內容如下
    $mId = $_POST["mId"];
    $password = $_POST["password"];
    $mName = $_POST["mName"];
    $mPhone = $_POST["mPhone"];
    $email = $_POST["email"];
    //使用預處理寫法是為了防止「sql injection」

    //設定要使用的 SQL 指令
    $query = ("insert into member values(?,?,?,?,?)");
    $stmt = $db->prepare($query);
    
    //執行 SQL 語法
    $result = $stmt->execute(array($mId,$password,$mName,$mPhone,$email));
?>