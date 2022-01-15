<?php
    include "db_conn.php";

    $mId = $_POST['mId'];
    $password = $_POST['password'];
    
    $query = ("select mId,password from member where mId = ? && password = ?");
    $stmt = $db->prepare($query);
    $error = $stmt->execute(array($mId,$password));
    $result = $stmt->fetchAll();
    //以上寫法是為了防止「sql injection」
    if(count($result)){
        $_SESSION['mId']=$result['mId'];
        $_SESSION['password']=$result['password'];
        $_SESSION['mName']=$result['mName'];
        $_SESSION['mPhone']=$result['mPhone'];
        $_SESSION['email']=$result['email'];
        header("Location:profile.php");
    }
    else{
        echo '<script>alert("帳號或密碼錯誤"); location.href="member.php"</script>;';
    }
?>