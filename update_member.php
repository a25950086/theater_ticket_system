<?php
    include_once "db_conn.php";

    $mId = $_POST["mId"];
    $password = $_POST["password"];
    $mName = $_POST["mName"];
    $mPhone = $_POST["mPhone"];
    $email = $_POST["email"];

    $query = ("update member set password=?,mName=?,mPhone=?,email=? where mId=?");
    $stmt = $db->prepare($query);
    $result = $stmt->execute(array($mId,$password,$mName,$mPhone,$email));
?>