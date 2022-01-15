<?php
    //連接資料庫
    include_once "db_conn.php";

    //設定想要新增入資料庫的資料內容如下
    $mName = $_POST["mName"];
    $mTime = $_POST["mTime"];
    $mRating = $_POST["mRating"];
    $mDirector = $_POST["mDirector"];
    $mLeading = $_POST["mLeading"];
    $mLength = $_POST["mLength"];
    $mPlot = $_POST["mPlot"];
    $mTrailer = $_POST["mTrailer"];

    $query = ("insert into movie values(?,?,?,?,?,?,?,?)");
    $stmt = $db->prepare($query);
    $stmt->execute(array($mName,$mTime,$mRating,$mDirector,$mLeading,$mLength,$mPlot,$mTrailer));
    echo '<script>alert("新增成功"); location.href="movie.php"</script>;';
?>