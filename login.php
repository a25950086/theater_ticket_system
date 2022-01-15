<?php 
    session_start();
    include "db_conn.php";
    $mId = $_POST['mId'];
    $password = $_POST['password'];
    
    $query = ("select * from member where mId = ? && password = ?");
    $stmt = $db->prepare($query);
    $error = $stmt->execute(array($mId,$password));
    $result = $stmt->fetchAll();
    //以上寫法是為了防止「sql injection」
    if(count($result)){
        $_SESSION['mId']=$result[0]['mId'];
        $_SESSION['password']=$result[0]['password'];
        $_SESSION['mName']=$result[0]['mName'];
        $_SESSION['mPhone']=$result[0]['mPhone'];
        $_SESSION['email']=$result[0]['email'];
        header("Location:profile.php");
    }
    else{
        echo '<script>alert("帳號或密碼錯誤"); location.href="member.php"</script>;';
    }
?>