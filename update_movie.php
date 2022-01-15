<?php
    //連接資料庫
    include_once "db_conn.php";

    //設定想要新增入資料庫的資料內容如下
    $mTitle = $_GET["mTitle"];
    $mTime = $_POST["mTime"];
    $mRating = $_POST["mRating"];
    $mDirector = $_POST["mDirector"];
    $mLeading = $_POST["mLeading"];
    $mLength = $_POST["mLength"];
    $mPlot = $_POST["mPlot"];
    $mTrailer = $_POST["mTrailer"];

    $query = ("update movie set mTime=?,mRating=?,mDirector=?,mLeading=?,mLength=?,mPlot=?,mTrailer=? where mTitle =?");
    $stmt = $db->prepare($query);
    $stmt->execute(array($mTime,$mRating,$mDirector,$mLeading,$mLength,$mPlot,$mTrailer,$mTitle));
    echo '<script>alert("修改成功"); location.href="movie.php"</script>;';
?>