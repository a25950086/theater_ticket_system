<?php
    include "db_conn.php";
    $mTitle  = "2gether電影版：只因我們天生一對";
    $query = ("select * from movie where mTitle = ?");
    $stmt = $db->prepare($query);
    $error = $stmt->execute(array($no));
    $result = $stmt->fetchAll();
    //以上寫法是為了防止「sql injection」

    for($i=0; $i<count($result); $i++){
        $mTitle = $result [$i]["mTitle"];
        $mRating = $result [$i]["mRating"];
        $mDirector = $result[$i]["mDirector"];
        $mPlot = $result[$i]["mPlot"];
    }
?>