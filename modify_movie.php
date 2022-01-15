<?php session_start(); ?>

<html>
    <head>
        <meta charset="utf8"/>
        <title>修改電影資料</title>
        <style>
            body {
                background-color: #E6E6F2;
                margin: 0;
            }
            .top {
                width: 100%;
                height: auto;
                background-color:	#7373B9;
            }
            .body{
                margin-left: 15%;
                margin-top: 3%;
                width: 70%;
                height: 80%;
                background-color:#f2f2ff;
            }
            .icon{
                padding-top: 5px;
                padding-left: 15%;
            }
            .icon_s{
                padding-left: 10%;
            }
            .icon_b{
                padding-top: 3%;
                padding-left: 25%;
            }
            h1{
                text-align:center;
            }
            .login{
                text-align:center;
            }
            .signout{
                border:none;
                background-color: #7373B9;
                color:white;
                font-size:30px; 
                width:100px;
                height:auto;
                margin-left: 2%;
            }
        </style>    
    </head>
    <body>
        <header class="header">
            <div class="top">
                <a href="index.php">
                    <img class="icon" src="icon.png" height="100px" width="auto">
                </a>
                <a href="cinema.php">
                    <img class="icon_s" src="cinema.png" height="50px" width="auto">
                </a>
                <a href="movie.php">
                    <img class="icon_s" src="movie.png" height="50px" width="auto">
                </a>
                <a href="member.php">
                    <img class="icon_s" src="member.png" height="50px" width="auto">
                </a>
                <form action='logout.php'>
                    <?php
                        if(isset($_SESSION['mId'])){
                            echo '<span class="signout"> 你好 '.$_SESSION['mName'].'</span>';
                            echo '<button  type="submit" class="signout" >登出</button>';
                        }
                    ?>
                </form>
            </div>
            <div class="body">
                <a  href="index.php"><img  class="icon_b" src="icon_b.png" alt="" width="50%" ></a>
                <h1>修改電影資料</h1>
                <div class="login">
                    <?php
                        echo "<form action='update_movie.php?mTitle=".$_GET['mTitle']."' method='post'>";
                            echo '<label for="inputmTime" class="sr-only">上映時間</label>';
                            echo '<input type="text" name="mTime"id="inputmTime" class="form-control" placeholder="請輸入上映時間" required>';
                            echo '<br><br><br>';
                            echo '<label for="inputmRating" class="sr-only">評分</label>';
                            echo '<input type="text" name="mRating"id="inputmRating" class="form-control" placeholder="請輸入評分" required>';
                            echo '<br><br><br>';
                            echo '<label for="inputmDirector" class="sr-only">導演</label>';
                            echo '<input type="text" name="mDirector"id="inputmDirector" class="form-control" placeholder="請輸入導演" required>';
                            echo '<br><br><br>';
                            echo '<label for="inputmLeading" class="sr-only">主演</label>';
                            echo '<input type="text" name="mLeading"id="inputmLeading" class="form-control" placeholder="請輸入主演" required>';
                            echo '<br><br><br>';
                            echo '<label for="inputmLength" class="sr-only">長度</label>';
                            echo '<input type="text" name="mLength"id="inputmLength" class="form-control" placeholder="請輸入長度" required>';
                            echo '<br><br><br>';
                            echo '<label for="inputmPlot" class="sr-only">簡介</label>';
                            echo '<input type="text" name="mPlot"id="inputmPlot" class="form-control" placeholder="請輸入簡介" required>';
                            echo '<br><br><br>';
                            echo '<label for="inputmTrailer" class="sr-only">預告片</label>';
                            echo '<input type="text" name="mTrailer"id="inputmTrailer" class="form-control" placeholder="請輸入預告片" required>';
                            echo '<br><br><br>';
                            
                            echo '<button  type="submit" name="signUp">確認修改</button>';
                        echo '</form>';
                    ?>
                </div>
            </div>
        </header>
    </body>
</html>
